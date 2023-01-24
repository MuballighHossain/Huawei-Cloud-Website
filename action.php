<?php
    include 'database.php';

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $sql = "INSERT INTO users(First_Name, Last_Name, Email, Phone, Message) VALUES('$firstName', '$lastName', '$email', '$phone', '$message')";
        // echo "Form submitted";
        $result = mysqli_query($conn, $sql);

        if($result){  
            echo" <script> alert('Signed Up Successfully'); </script>";
            echo" <script> document location = 'index.php'; </script>";
            header('Location: ./index.php');
        } 
        else{
            echo" <script> alert('Something is wrong'); </script>";
        }
        

    // Database Connection
    // $conn = new mysqli('localhost', 'root', '', 'HuaweiCloud');
    // if ($conn->connect_error){
    //     die('Connection Failed :'.$conn->connect_error);
    // }else{
    //     $stmt = $conn->prepare("insert into registration(First Name, Last Name, Email, Phone Number, Organization Details)
    //     values(?, ?, ?, ?, ?)");
    //     $stmt->bind_param("sssis", $firstName, $lastName, $email, $phone, $message);
    //     $stmt->execute();
    //     echo "Registration Successful";
    //     $stmt->close();
    //     $conn->close();
    // }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>