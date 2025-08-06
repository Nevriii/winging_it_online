<?php
    require 'vendor/autoload.php';

    use Vonage\Client;
    use Vonage\Client\Credentials\Basic;
    use Vonage\SMS\Message\SMS;

    // Your Vonage API credentials
    $vonageApiKey = 'a1e10c4f'; // Replace with your API key
    $vonageApiSecret = 'MknpYpNndstgeF14'; // Replace with your API secret

    // Initialize Vonage client
    $client = new Client(new Basic($vonageApiKey, $vonageApiSecret));

    $target_phone_number = '+639283947268';
    $messageText = "hi baby";

    // Prepare the message data
    $message = new SMS($target_phone_number, 'Kuya Poks', $messageText);

    // Send the message
    $response = $client->sms()->send($message);

    // Handle the response
    if ($response->isSuccess()) {
        echo "The message was sent successfully to " . $response->getTo();
    } else {
        echo "The message failed with status: " . $response->getStatus();
    }
?>