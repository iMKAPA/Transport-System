
<?php

   
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

   /* Exception class. */
   $rand_id = rand();

   $train_id = $_REQUEST['the_id'];

   $fname = $_REQUEST['fname'];
   $lname = $_REQUEST['lname'];
   $tdate = $_REQUEST['tdate'];
   $departure = $_REQUEST['departure'];
   $destination = $_REQUEST['destination'];
   $time = $_REQUEST['time'];
   $email = $_REQUEST['email'];
   //$final_price = $_REQUEST['total'];

  // echo $final_price;


   $con = mysqli_connect("localhost","root","","western-train");



if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$id = $_POST['train_id'];
$price=$_POST['train_price'];
$query = mysqli_query($con, "SELECT * FROM routes WHERE train_id = '$id' ");
while ($row = mysqli_fetch_array($query)) {
  // $departure = $row['departure'];
  // $destination = $row['destination'];
  // $date = $row['date'];
  // $time = $row['time'];
  $firstprice = $row['price'];
  $businessprice=$row['businessfare'];
  $economyprice=$row['economyfare']; 

  if($firstprice==$price){
    $classes='First Class';
  }elseif($businessprice==$price){
    $classes='Business Class';
  }else{
    $classes='Economy Class';
  }

  $email=$_POST['email'];

                //  $message='Congratulations'.$fname.' '.$lname.'! We have received your bus ticket bookings';
                //  $form_data = array("fname" => $fname, "message" => $message, "email"=>$email);              
                //  $message = "Dear " . $form_data['fname'] . "\r\n";               
                //  $message .= nl2br( $form_data['message']  );                
                //  $message .= nl2br("\n\nThank You. "); 
                 
                //  //PHPMailer Object
                //  $mail = new PHPMailer(); // create a new object
                //  $mail->IsSMTP(); // enable SMTP
                //  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
                //  $mail->SMTPAuth = true; // authentication enabled
                //  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                 
                //  $mail->Host = "smtp.gmail.com";
                //  $mail->Port = 465; // or  465/25/ 587 
                //  $mail->IsHTML(true);
                //  $mail->Username = "email"; // Enter your Email
                //  $mail->Password = 'pass'; // Enter your Email Password
                //  $mail->SetFrom("email");
                //  $mail->Subject = "Imara Daima Bus System";
                //  $mail->Body = $message;
                //  $mail->AddAddress($email);
              
                //  if (!$mail->Send()) {
                //      echo "Mailer Error: " . $mail->ErrorInfo;
                //  } else {

                $selected_seat = $_POST['selected_seat'];
                $phone_number=$_POST['phone'];

                $sql = "INSERT INTO bookings (fname, lname, email, age, phone, gender, departure, destination, tdate, com, selected_seat,classes, price, stat )
                VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['age']."','".$_POST['phone']."','".$_POST['gender']."','".$_POST['departure']."','".$_POST['destination']."','".$_POST['tdate']."','".$_POST['com']."', '".$_POST['selected_seat']."', '$classes', '$price', 1)";
                $sql2 = mysqli_query($con, "UPDATE trains SET booked_seats = (booked_seats + 1) WHERE id = $train_id");
                $sql3 = mysqli_query($con, "UPDATE trains SET viti = CONCAT_WS(',', viti , $selected_seat) WHERE id = $train_id");
                if (mysqli_query($con, $sql)) { 
                  echo "<script>
                  alert('Ticket booked Successfully.');
                    </script>";
                  header('location:feedback.php?phone='.$phone_number.'&amount='.$price);
                  
                } else {
                  echo '<script>alert("Your Ticket Booking Failed, Try again later") </script>' ;
                  }
               // }

mysqli_close($con);
  }

   ?>
  