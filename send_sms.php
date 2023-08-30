<?php

require 'vendor/autoload.php'; // Import Guzzle

// Replace with your actual API key and phone number
$apiKey = 'YOUR_API_KEY';
$phoneNumber = 'RECIPIENT_PHONE_NUMBER';

// Set up the Guzzle client
$client = new \GuzzleHttp\Client();

// Send an SMS
$response = $client->request('POST', 'https://api.message.com/sms', [
    'headers' => [
        'Authorization' => 'Bearer ' . $apiKey,
        'Content-Type' => 'application/json',
    ],
    'json' => [
        'to' => $phoneNumber,
        'message' => 'Hello from Message!',
    ],
]);

// Check the response status
if ($response->getStatusCode() === 200) {
    echo 'SMS sent successfully.';
} else {
    echo 'Failed to send SMS.';
}
