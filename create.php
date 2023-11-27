 <?php


require('connection.php');
if($con){
if ($_SERVER['REQUEST_METHOD']=='POST'){

  
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$password = $_POST['password'];




$sql ="INSERT INTO student(name, email, date , password)VALUES ('$name', '$email','$date', '$password')";




echo json_encode(['success'=> "connection successful"]);
}else{ 
    echo json_encode(['error'=> "connection successful"]);
}
}

