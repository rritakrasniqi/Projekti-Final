<?php
// Start the session
session_start();
?>

<html><body>
    <?php 

//echo $_SESSION['test'];
	// deklarimi i variablave
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// lidhja me databaze 
    require_once('../database/mysqli_connect.php');
    // $query = "SELECT * FROM Kontakti";
    // $response = @mysqli_query($dbc, $query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = mysqli_real_escape_string($dbc, $_POST['email']);
$password = mysqli_real_escape_string($dbc, $_POST['password']);

if (empty($email)) {
    array_push($errors, "Email nuk eshte shtypur!");
}

if (empty($password)) {
    array_push($errors, "Password nuk eshte shtypur!");
}

//Njeh erroret, nese nuk ka, krijoje userin
if (count($errors) == 0) {

    echo $email;
    echo '</br>';
    echo $password;
    echo 'test 1';
    $query = "SELECT * FROM Accounts WHERE Email='$email' AND Password='$password'";

    $results = mysqli_query($dbc, $query);
    echo '</br>';

    echo mysqli_num_rows($results);
    echo '</br>';

    echo 'test 2';
    if (mysqli_num_rows($results) > 0) {  //1 user 
        echo 'test 3';
        $user = mysqli_fetch_array($results);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['IsAdmin'] = false;
        if ($user['Roli'] === 1) {
            $_SESSION['IsAdmin'] = true;
        }

        header('location: /Projekti-Web/index.php');
        echo '<script>alert("Ju jeni kyqur me sukses!")</script>';
    }
    else {
        
        array_push($errors, "Email ose Fjalekalimi gabim!");
    }
}
}

?>

</body>
</html>