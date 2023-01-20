<?php
session_start();
// if get request is set
if (isset($_GET['tasks'])) {
    echo "tasks test is set";
}

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$server = "localhost";
$username = "root";
$password = "";
$connname = "tdlist";

// Create connection
$conn = mysqli_connect($server, $username, $password, $connname);

// REGISTER USER
if (isset($_POST['register_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    // form validation
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    if (count($errors) == 0) {

        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
                array_push($errors, "email already exists");
            }
        }

        // register user 

        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in!";

        // get the id of the user
        $id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE username='$username' AND email = '$email'"))['id'];
        $_SESSION['id'] = $id;
        // Taking current system Time
        $_SESSION['start'] = time();

        // Destroying session after 1 minute
        $_SESSION['expire'] = $_SESSION['start'] + (120 * 10);
        header('location: index.php');
    } else {
        // redirect to the registration page with errors
        $_SESSION['errors'] = $errors;
        header('location: ./auth/register.php');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        // get the id of the user
        $id = mysqli_fetch_assoc($results)['id'];
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            // Taking current system Time
            $_SESSION['start'] = time();

            // Destroying session after 1 minute
            $_SESSION['expire'] = $_SESSION['start'] + (120 * 10);
            $_SESSION['success'] = "You are now logged in!";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    } else {
        // redirect to the registration page with errors
        $_SESSION['errors'] = $errors;
        header('location: ./auth/login.php');
    }
}
// update user details
if (isset($_POST['update_profile'])) {
    $id = $_SESSION['id'];
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $query = "UPDATE users SET username='$username', email='$email', phone_no='$phone_no', address='$address' WHERE id='$id'";
    $results = mysqli_query($conn, $query);
    if ($results) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Profile updated successfully!";
        header('location: ./settings.php');
    } else {
        $_SESSION['errors'] = "Error updating profile!";
        header('location: ./settings.php');
    }
}
