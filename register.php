<?php

    include 'Connect.php';

    if(isset($_POST["register"]) && $_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // $password = md5($password);

        $checkEmail = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn -> query($checkEmail);

        if($result -> num_rows > 0)
        {
            echo "Email already exist!";
        }
        else{
            $insertQuery = "INSERT INTO users (firstName, lastName, email, password ) VALUES ('$firstName', '$lastName', '$email','$password')";
            if($conn -> query($insertQuery) === TRUE)
            {
                header('location: index.php');
                exit; // Fix: Ensure script stops after redirection
            }
            else{
                echo "Error".$conn-> error;
            }
        }
    }

    if (isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == "POST") {
        $email = trim($_POST["email"]);
        $password = $_POST['ppw'];  // Password from login form
    
        if (empty($email) || empty($password)) {
            echo "Please enter both email and password.";
            exit;
        }
    
        $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $result = $sql->get_result();
    
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
    
            // Direct password comparison (no hashing)
            if ($password === $user['password']) {
                echo "Login successful!";
                session_start();
                $_SESSION['user'] = $user;
                header('location: dashboard.php');
                exit;
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "Invalid email or password.";
        }
    }
    
    
    
?>