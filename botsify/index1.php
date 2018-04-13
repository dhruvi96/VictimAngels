<?php
//error_reporting(E_ERROR);

file_put_contents("fb.txt", file_get_contents("php://input"));

$fb = file_get_contents("fb.txt");

//echo "<pre>";
$fb = json_decode($fb);

//$rid = $fb->entry[0]->messaging[0]->sender->id;
//echo $rid;
$rid = $input['entry'][0]['messaging'][0]['sender']['id'];
echo $rid;
$token = "EAACbBOOR8tABAEFsasrTKqctAKEwZCEFtllWA0aRZBhQmSmj9PwIuZC4936AWjy4n5bahADFoxX6KLLiQ4pBxpuu2norRHnRmhMpRzBu0encj7LZBPbfMN3YF1OI5qPFJMdChQ7WOzLMxPZAswX4TZB9AEcuPI0ImyZCXNqIllwIO2ZBth8vANFZC";

$replies = array(
		"Hello sir!",
		"How r u sir???",
		"Nice to meet you...",
		"Have a good day.",
		"I am Gidian"
);

$data = array(
		'recipient' => array('id'=>"$rid"),
		'message' => array('text'=>$replies[rand(0,4)])
);

$options = array(
		'http' => array(
				'method'=> 'POST',
				'content' => json_encode($data),
				'header' => "Content-Type: application/json\n"
		)
);

$context = stream_context_create($options);
json_decode(file_get_contents("https://graph.facebook.com/v2.6/me/messages?access_token=".$token, false, $context));

?>
