<?php
header("Content-Type: application/json");

$yourApiKey = getenv('OPENAI_KEY');
$client = OpenAI::client('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');

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$system = (object)[];

$system->role = 'system';
$system->content = 'You are a game master. Give me a setting and ask me what I want to do next. I will give you then instructions and you develop the game further and ask me always, what to do next.';

array_unshift($input,$system);

$response = $client->chat()->create([
    'model' => "gpt-3.5-turbo",
    'messages' => $input,
]);

$new = new stdClass;
$new->role = 'assistant';
$new->content = $response->choices[0]->message->content;

echo json_encode($new);


?>