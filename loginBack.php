<?php
    session_start(); 
    $_SESSION['loggedin'] = false;
    include "db_conn.php";

    if(isset($_POST['email']) && isset($_POST['password'])){
        function validate($data){

            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST ['email']);
        $password = validate($_POST['password']);
    
        if(empty($email)){
            echo "<script>alert('Email is Empty');</script>";
            header("Location: index.php");
        }else if(empty($password)){
            echo "<script>alert('Password is Empty');</script>";
            header("Location: index.php");
        }else{
            $sql = "SELECT * FROM `user` WHERE `Email_Add` ='$email' AND `Password`='$password'";
            $result = mysqli_query($conn, $sql);
    
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['Email_Add'] === $email && $row['Password'] === $password){
                    $_SESSION["loggedin"] = true;
                    $_SESSION["User_name"] = $row["User_name"];
                    $_SESSION["User_ID"] = $row["User_ID"];
                    header("Location: index1.php");
                    exit();
                    echo "<script>alert('Login Confirmed');</script>";
                }
                else{
                    header("Location: index.php? error= Incorrect Email or Password");
                    exit();
                }
            }else{
                header("Location: index.php? error= Incorrect Email or Password");
                exit();
            }
        }
    }else{
        header("Location: index.php? error = Incorrect Email or Pass");
    }

?>