<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if($password !== $confirmPassword){
        echo "<script>alert('Passwords do not match!'); window.location.href='login.php';</script>";
        exit();
    }

    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows > 0){
    echo "<script>alert('Email Address Already Exists!'); window.location.href='login.php';</script>";
}
else {
    $insertQuery = "INSERT INTO users(firstName,lastName,email,password)
                    VALUES ('$firstName','$lastName','$email','$password')";
    if($conn->query($insertQuery) === TRUE){
        header("location: login.php");
    }
    else {
        echo "<script>alert('Error: ".$conn->error."'); window.location.href='login.php';</script>";
    }
}
}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: homepage.php");
    exit();
   }
   else {
    echo "<script>alert('Not Found, Incorrect Email or Password'); window.location.href='login.php';</script>";
}

}
?>