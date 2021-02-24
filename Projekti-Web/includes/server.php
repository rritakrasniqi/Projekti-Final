<?php 
	session_start();

	// deklarimi i variablave
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// lidhja me databaze 
	$db = mysqli_connect("localhost","enea","enea","prishtinaflowershop");

	// Regjistrimi i Userit
	if (isset($_POST['reg_user'])) {  

		// marrja e te dhenave nga "input fields" tek regjistrimi
		$name = mysqli_real_escape_string($db, $_POST['Name']);
        $surname = mysqli_real_escape_string($db, $_POST['Surname']);
        $email = mysqli_real_escape_string($db, $_POST['Email']);
        $country = mysqli_real_escape_string($db, $_POST['Country']);
		$street = mysqli_real_escape_string($db, $_POST['Street']);
		$phonenumber = mysqli_real_escape_string($db, $_POST['PhoneNumber']);
		$password_1 = mysqli_real_escape_string($db, $_POST['Password']);
		$password_2 = mysqli_real_escape_string($db, $_POST['ConfirmPassword']);
        

		// validimi i formes per tu siguruar qe eshte mbushur siq duhet
		if (empty($email)) { 
            array_push($errors, "Email nuk eshte shtypur."); 
        }
		if (empty($name)) { 
            array_push($errors, "Emri nuk eshte shtypur."); 
        }
        if (empty($surname)) { 
            array_push($errors, "Mbiemri nuk eshte shtypur."); 
        }
        if (empty($country)) { 
            array_push($errors, "Vendi nuk eshte shtypur."); 
        }
        if (empty($street)) { 
            array_push($errors, "Rruga nuk eshte shtypur."); 
		}
		if (empty($phonenumber)) { 
            array_push($errors, "Numri i telefonit nuk eshte shtypur."); 
        }
        if (empty($password_1)) { 
            array_push($errors, "Fjalekalimi nuk eshte shtypur."); 
        }
        
        
        //testimi nese dy passwordet e shtypur jane te njejte
		if ($password_1 != $password_2) {
			array_push($errors, "Fjalekalimet nuk perputhen.");
		}

        
		// regjistro userin nese nuk ka asni error deri me tani
		if (count($errors) == 0) { //asnje user
			// $password = md5($password_1); //enkripto passwordin para se te dergohet ne databaze
			$query = "INSERT INTO users ( Name, Surname, Email, Country, Street, PhoneNumber, RoleId, Password) 
					  VALUES( '$name', '$surname', '$email', '$street', '$country', '$phonenumber', 1,'$password_1')";

			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: /Web-Projekti/index.php');
            echo '<script>alert("Llogaria juaj eshte krijuar me sukses!")</script>';
		}

	}

	// Kyqja e userit dhe validim
	if (isset($_POST['login_user'])) {

		$email = mysqli_real_escape_string($db, $_POST['email']);

		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email nuk eshte shtypur!");
		}

		if (empty($password)) {
			array_push($errors, "Password nuk eshte shtypur!");
		}
        
        //Njeh erroret, nese nuk ka, krijoje userin
		if (count($errors) == 0) {

			$query = "SELECT * FROM users WHERE Email='$email' AND password='$password'";

			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {  //1 user 
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";

				$query = "SELECT * FROM users WHERE Email='$email' AND password='$password' AND RoleId = 2";
				$results = mysqli_query($db, $query);
				if (mysqli_num_rows($results) > 0) {
					$_SESSION['IsAdmin'] = true;
				}

				header('location: /Web-Projekti/index.php');
                echo '<script>alert("Ju jeni kyqur me sukses!")</script>';
			}
			else {
				
				array_push($errors, "Email ose Fjalekalimi gabim!");
			}
		}
	}

	// Krijimi i Contact Formes
	if(isset($_POST['contact_user'])){
		$name = mysqli_real_escape_string($db, $_POST['Name']);
		$surname = mysqli_real_escape_string($db, $_POST['Surname']);
		$email=mysqli_real_escape_string($db,$_POST['Email']);
		$phonenumber = mysqli_real_escape_string($db, $_POST['PhoneNumber']);
		$mesazhi = mysqli_real_escape_string($db, $_POST['Mesazhi']);
	

		if (empty($email)) { 
            array_push($errors, "Email nuk eshte shtypur."); 
        }
		if (empty($name)) { 
            array_push($errors, "Emri nuk eshte shtypur."); 
        }
        if (empty($surname)) { 
            array_push($errors, "Mbiemri nuk eshte shtypur."); 
        }
        if (empty($mesazhi)) { 
            array_push($errors, "Mesazhinuk eshte shtypur."); 
        }
       		if (empty($phonenumber)) { 
            array_push($errors, "Numri i telefonit nuk eshte shtypur."); 
		}
		


		if (count($errors) == 0) { 

			$query = "INSERT INTO contact_form ( Name, Surname, PhoneNumber, RoleId, Mesazhi) 
					  VALUES( '$name', '$surname', '$email', '$mesazhi', '$phonenumber',1)";

			mysqli_query($db, $query);

			header('location: /Web-Projekti/index.php');
            echo '<script>alert("Mesazhi juaj eshte me sukses!")</script>';
		}
	     
	}

	//Add product
	if (isset($_POST['addFlower'])) {  

		// marrja e te dhenave nga "input fields" tek regjistrimi
		$name = mysqli_real_escape_string($db, $_POST['ProductName']);
        $description = mysqli_real_escape_string($db, $_POST['ProductDescription']);
		$price = mysqli_real_escape_string($db, $_POST['ProductPrice']);

		$uploaddir = 'C:/xampp/htdocs/Web-Projekti/images/';
		$uploadfile = $uploaddir . basename($_FILES['ProductImage']['name']);
		
		if (move_uploaded_file($_FILES['ProductImage']['tmp_name'], $uploadfile)) {
		  echo "File is valid, and was successfully uploaded.";
		} else {
		   echo "Upload failed";
		}

		// validimi i formes per tu siguruar qe eshte mbushur siq duhet
		if (empty($name)) { 
            array_push($errors, "Emri i produktit nuk eshte shtypur."); 
        }
		if (empty($description)) { 
            array_push($errors, "Pershkrimi i produktit nuk eshte shtypur."); 
        }
        if (empty($price)) { 
            array_push($errors, "Cmimi i produktit nuk eshte shtypur."); 
        }

		if (count($errors) == 0) {

			$query = "INSERT INTO products ( name, description, price, image_path) 
					  VALUES( '$name', '$description', '$price', '$uploadfile')";

			mysqli_query($db, $query);
			header('location: /Web-Projekti/index.php');
            echo '<script>alert("Produkti eshte krijuar me sukses!");</script>';
		}

	}
?>