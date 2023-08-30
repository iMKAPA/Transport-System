<?php
require 'vendor/autoload.php'; // Include the Pushover PHP library

// User's full name, seat number, and vehicle details (replace with your own data)
$fullName = 'Benjamin Mkapa';
$seatNumber = 'A12';

// Vehicle details
$make = 'Mitsubishi';
$model = 'Lancer';
$license = 'ABC123';

// Pushover API configurations
$pushover = new Joli\Pushover\Client('<YOUR_PUSHOVER_API_KEY>');

// Pushover message content
$message = new Joli\Pushover\Message\Message('<YOUR_PUSHOVER_USER_KEY>', $pushover);
$message->setTitle('Booking Feedback');
$message->setMessage("Full Name: $fullName\nSeat Number: $seatNumber\nMake: $make\nModel: $model\nLicense: $license");

// Sending the message
$message->send();
