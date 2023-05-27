
<?php 
    session_start();
    include "db_conn.php";
    if($conn ->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST["register"])){
        $email = $_POST ["email"];
        $password = $_POST["passwords"];
        $username = $_POST["user"];
        $firstname = $_POST ["fname"];
        $lastname = $_POST ["lname"];    
        $contact_num = $_POST ["contact"];
        $insert = "INSERT INTO user (Email_Add, `Password`, User_name, First_Name , Last_Name, Contact_Num) VALUES ('$email', '$password', '$username', '$firstname', '$lastname', $contact_num)";
        if($conn->query($insert)===TRUE)
        {
            header("Location: index.php");
        }else{
            header("Location: index.php? error= Wrong Input");
        }
    }   
?>