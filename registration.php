<?php 

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['email'];
$t_number = $_POST['t_number'];
$address = $_POST['address'];
$genre = $_POST['genre'];
$z_cde = $_POST['z_cde'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
  echo" Usename Already Taken";
}else{
    $reg= " insert into usertable(name , password , email , t_number , address , genre , z_cde ) values ('$name' , '$pass' , '$email' , '$t_number' , '$address' , '$genre' , '$z_cde')";
    mysqli_query($con, $reg);
    echo" Registration Successful";

}
?>