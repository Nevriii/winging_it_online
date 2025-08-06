<?php
require 'vendor/autoload.php';

// Infobip's REST API endpoint
$infobipEndpoint = 'https://api.infobip.com/sms/1/text/single';

// Your Infobip account credentials
$infobipApiKey = '8bb431be0c6ad699b7e50d5e5abcab8b-015f98cd-59cc-48ce-801b-2cc609b31093'; // You get this from the Infobip portal

// Hardcoded phone number to send SMS to, in E.164 format
$target_phone_number = $_POST['phone']; // Make sure the 'name' attribute of your phone input in HTML is 'phone'
$reservation_date = $_POST['date'];
$reservation_time = $_POST['time'];

// Function to convert phone number to E.164 format
function formatPhoneNumberToE164($phoneNumber) {
    $formattedNumber = $phoneNumber;
    // Check if the number starts with '0'
    if (strpos($phoneNumber, '0') === 0) {
        // Replace the leading '0' with '+63'
        $formattedNumber = '+63' . substr($phoneNumber, 1);
    }
    return $formattedNumber;
}

$target_phone_number = formatPhoneNumberToE164($target_phone_number);
$datetime = DateTime::createFromFormat('m/d/Y h:i A', $reservation_date . ' ' . $reservation_time);
$formattedDatetime = $datetime ? $datetime->format('F j, Y, g:i A') : '[date and time not provided]';

// The message you want to send
// $messageText = "Thank you! Your reservation is successful.";
$messageText = "You have successfully reserved a table for dine-in at Kuya Poks' Unlimited Wings on {$formattedDatetime}. Please, come in time. Thank you!";

// Prepare the payload
$postData = array(
    'from' => 'Kuya Poks', // Your registered alphanumeric sender ID or phone number
    'to' => $target_phone_number,
    'text' => $messageText
);

// Prepare the authorization header
$headers = array(
    'Authorization: App ' . $infobipApiKey,
    'Content-Type: application/json',
    'Accept: application/json'
);

// Initialize cURL session
$ch = curl_init($infobipEndpoint);

// Set cURL options
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));

// Execute the cURL session
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

if ($response) {
    // If the API call was successful, you'll need to parse the JSON response to display the message ID
    $responseJson = json_decode($response, true);
    if (isset($responseJson['messages'][0]['messageId'])) {
        echo "Message sent! Message ID: " . $responseJson['messages'][0]['messageId'];
    } else {
        // Handle the case where the API response does not contain a messageId
        echo "Message sent, but did not receive a confirmation ID.";
    }
} else {
    // If the API call failed, handle the error
    echo "Failed to send SMS.";
}
?>
