<?php
session_start();
    //require('inc/esssentials.php');
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hotel_managment';

    $con = mysqli_connect($hname, $uname, $pass , $db);

    if (mysqli_connect_error()) {
        exit('Error connecting to database' . mysqli_connect_error());
    }

    if (!isset($_POST['email'], $_POST['password'])) {
        exit('Please fill in both the username and password fields');
    }

    $useremail = $_POST['email'];
    $password = $_POST['password'];

    if (empty($useremail) || empty($password)) {
        exit('Please fill in both the username and password fields');
    }

    $stmt = $con->prepare('SELECT id, password FROM registration_info WHERE email = ?');
    $stmt->bind_param('s', $useremail);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        
        if ($password == $hashed_password) {
            
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $useremail;
            $_SESSION['logged_in'] = true;
            require('inc/header_logged.php');

            header('Location: index.php');
            exit();
           
        } else {
            echo "<script>
          alert('Wrong password.');
          window.location.href = 'index.php';
        </script>";
        }
    } else {
        echo "<script>
      alert('Email not found.');
      window.location.href = 'index.php';
    </script>";
    }

    $stmt->close();
    $con->close();
?>
