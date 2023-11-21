<?php
header("Content-Type: application/json");

$yourApiKey = getenv('OPENAI_KEY');
$client = OpenAI::client($yourApiKey);

if(empty($_SESSION["messages"])) {
    $path = 'src/prompt/'.$_SESSION["setting"].'/'.$_SESSION["language"].'.json';
    $jsonString = file_get_contents($path);
    $messages = json_decode($jsonString);
    $_SESSION["messages"]=$messages;
} else {
    $messages = $_SESSION["messages"];
    $new = new stdClass;
    $new->role = 'user';
    $new->content = $choice;
    array_push($messages->messages,$new);
}

$response = $client->chat()->create([
    'model' => $messages->model,
    'messages' => $messages->messages,
]);

$new = new stdClass;
$new->role = 'assistant';
$new->content = $response->choices[0]->message->content;

array_push($messages->messages,$new);
$_SESSION["messages"] = $messages;

echo json_encode($_SESSION["messages"]);

exit();
?>