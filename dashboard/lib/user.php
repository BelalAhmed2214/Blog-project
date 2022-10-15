<?php
//function to Register user into database table (User)
function AddNewUser($name,$email,$password)
{
    //first connect to database
    $conn=mysqli_connect("localhost","root","","proone");
    //second
    $q="INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
    mysqli_query($conn,$q);
    $res=mysqli_affected_rows($conn);
    if ($res==1)
        return true;
    else
        return false;
}
//function to check is the data in database or not
function login($email,$password)
{
    //first connect to database
    $conn=mysqli_connect("localhost","root","","proone");
    $sql="SELECT * FROM `user` WHERE `email`='$email' && `password`='$password'";
    $q=mysqli_query($conn,$sql);
    $res=mysqli_fetch_assoc($q);
    return $res;
}
?>