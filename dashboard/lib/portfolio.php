<?php
function AddNewPor($image,$desc,$user_id)
{
    //first connect to database
    $conn=mysqli_connect("localhost","root","","proone");
    //second
    $q="INSERT INTO `portfolio`(`image`, `description`, `userID`) VALUES ('$image','$desc','$user_id')";
    mysqli_query($conn,$q);
    $res=mysqli_affected_rows($conn);
    if ($res==1)
        return true;
    else
        return false;
}

function GetPortfolios()
{
    //first connect to database
    $conn=mysqli_connect("localhost","root","","proone");
    $sql="SELECT * FROM `user_portfolio`";
    $q=mysqli_query($conn,$sql);
    $projects=[];
    while($res=mysqli_fetch_assoc($q))
    {
        $projects[]=$res;
    }
    return $projects;
}
function GetPortfoliosByid($id)
{
    //first connect to database
    $conn=mysqli_connect("localhost","root","","proone");
    $sql="SELECT * FROM `user_portfolio` WHERE `id`='$id'";
    $q=mysqli_query($conn,$sql);
    $res=mysqli_fetch_assoc($q);
    return $res;
}

function DeletePro($proid)
{
    //first connect to database
    $conn=mysqli_connect("localhost","root","","proone");
    //second
    $q="DELETE FROM `portfolio` WHERE `id`='$proid'";
    mysqli_query($conn,$q);
    $res=mysqli_affected_rows($conn);
    if ($res==1)
        return true;
    else
        return false;
}

function updatePor($id,$desc,$image)
{
    //first connect to database
    $conn=mysqli_connect("localhost","root","","proone");
    //second
    $sql="UPDATE `portfolio` SET `description` = '$desc' ";
    if (!empty($image))
    {
        $sql .= ", `image` = '$image'";
    }
        $sql .= "WHERE `id`=$id";
    
    mysqli_query($conn,$sql);
    $res=mysqli_affected_rows($conn);
    if ($res==1)
        return true;
    else
        return false;
}
