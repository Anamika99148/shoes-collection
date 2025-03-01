 <?php
$servername="localhost";
$username="root";
$password="";
$database="register";
$conn= mysqli_connect($servername, $username,$password ,$database);
if(!$conn){
    die("sorry we faild to connect".mysqli_connect_error());
}
else{
    echo"connected successfully";
}  
 @$name =$_POST['Name and Surname'];
 @$phone_Number =$_POST['PhoneNumber'];
 @$address =$_POST['Address'];
 @$card_Number =$_POST['CardNumber'];
 @$mm =$_POST['mm'];
 @$yyyy =$_POST['yyyy'];
 @$cvv =$_POST['cvv'];

$sql = "INSERT INTO form(name, phone_Number,address, card_Number, mm, yyyy, cvv)VALUES($name,$phone_Number,$address, $card_Number,$mm, $yyyy, $cvv )";
   if($sql){
    echo"THANK YOU";
   }
   else{
     echo" NOT SUCCESS ";
   }
 ?> 
