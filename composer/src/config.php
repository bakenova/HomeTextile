<?php
require_once 'vendor/autoload.php';

use Google\Cloud\Dialogflow\V2\SessionsClient;

putenv('GOOGLE_APPLICATION_CREDENTIALS=./composer/src/credentials.json');

$projectId = 'hometextile-415615';

// Initialize SessionsClient globally
$sessionClient = new SessionsClient();

// Function to get session name
function getSessionName($sessionId) {
    global $sessionClient, $projectId;
    return $sessionClient->sessionName($projectId, $sessionId);
}
?>
