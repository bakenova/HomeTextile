<?php
require 'config.php';

use Google\Cloud\Dialogflow\V2\TextInput;
use Google\Cloud\Dialogflow\V2\QueryInput;

// Example user input from your website
$userInput = 'Hello, chatbot!';

// Call the function to interact with Dialogflow
$responseText = detectIntent($userInput);

// Output the response from Dialogflow
echo 'Dialogflow Response: ' . $responseText;

// Function to interact with Dialogflow
function detectIntent($userInput) {
    global $sessionClient;  // Assuming $sessionClient is defined in config.php
    global $projectId;

    // Get session name using function from config.php
    $sessionId = '102365083692315554404';
    $session = getSessionName($sessionId);

    $textInput = new TextInput();
    $textInput->setText($userInput);

    $queryInput = new QueryInput();
    $queryInput->setText($textInput);

    $response = $sessionClient->detectIntent($session, $queryInput);
    $queryResult = $response->getQueryResult();

    return $queryResult->getFulfillmentText();
}
?>