<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imara Daima Bus | Thank You</title>
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/subsc.css">
</head>

<body>
<?php
// echo "<script>
//             alert('Confirmation Message sent to your email successfully !');
                       
//             </script>";
            ?>
 <!-- <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"> -->
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
                        
							<div class="modal-body text-center font-18">
								<h3 class="mb-20">Ticket Booked Successfully!</h3>
								<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
								Proceed to payment 
							</div>
							<div class="modal-footer justify-content-center">
								<a href="mpesalipa/mpesa.php?phone=<?php echo $_GET['phone']; ?>&amount=<?php echo $_GET['amount']; ?> " class="btn btn-primary" data-dismiss="modal"> Proceed</a>
							</div>
						</div>
					</div>
				</div>
   
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>