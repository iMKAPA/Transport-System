<?php
//require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;
if(isset($_GET['phone'])){
stkPush($_GET['amount']);
$phone = '254'.(int)($_GET['phone']);
//$account = $_POST['account'];
$amount=$_GET['amount'];

}
function lipaNaMpesaPassword()
{
    //timestamp strtotime("now");
    //$timestamp = strtotime("now")->format('YmdHms');
    $timestamp=date("YmdHms");
    //passkey
   // $passKey ="146d7f37e3d970bb86c2a688ff88188cf18f8899fd6eec00d58edc933d99285f";
   // $businessShortCOde=7360076;
    $passKey ="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
    $businessShortCOde =174379;
    //generate password
    $mpesaPassword = base64_encode($businessShortCOde.$passKey.$timestamp);

    return $mpesaPassword;
}
    

   function newAccessToken()
   {
        $consumer_key="grH3SeV66mw0JF3TZDe3UTz3yFjm41iq";
        $consumer_secret="OlO0ONeq46Xex6Sx";   
      
        $headers = ['Content-Type:application/json; charset=utf8'];
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_USERPWD, $consumer_key.':'.$consumer_secret);
      	$result = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($result);

        $access_token = $result->access_token;

        return $access_token;
        
        curl_close($curl);
   }



   function stkPush($amount)
   {

       $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
       $curl_post_data = [
            'BusinessShortCode' =>174379,
            //'BusinessShortCode' =>7360076,
            'Password' => lipaNaMpesaPassword(),
            'Timestamp' => date("YmdHms"),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' =>'254'.(int)($_GET['phone']),
            'PartyB' => 174379,
            //'PartyB' => 7360076,
            'PhoneNumber' => '254'.(int)($_GET['phone']),
            //'CallBackURL' => '',
           'CallBackURL' => 'http://nexpay.co.ke/mpesa/single.php',
           'ConfirmationURL'=>'https://nexpay.co.ke/mpesalipa/confirmation_url.php',           
            'AccountReference' => 'Transys',            
            'TransactionDesc' => 'Transys',
        ];

      $phonenumber='254'.(int)($_GET['phone']);
      $account='Transys';
      $data_string = json_encode($curl_post_data);


       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.newAccessToken()));
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_POST, true);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
       $curl_response = curl_exec($curl);

      sleep(3); 
       
      
       //header("Location: loading.php?phone=$phonenumber&amount=$amount&account=$account");

       //exit();
    print_r($curl_response);
      


//echo $phonenumber;

 echo "<script>
window.location.href='success.php';
 </script>";
    
   }
