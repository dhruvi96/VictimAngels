<html>
    <head>
        <script id="gs-sdk" src='//www.buildquickbots.com/botwidget/v2/demo/static/js/sdk.js?v=3' key="708c565b-c945-48e0-acf3-2b331bbc70ab" ></script>
</head>
        <body>
            </body>
    <html>
<?php
require('php_graph/src/Facebook/facebook.php');
require_once 'php_graph/src/Facebook/autoload.php';


file_put_contents("fb.txt", file_get_contents("php://input"));
$fb = file_get_contents("fb.txt");
$fb = json_decode($fb);

$access_token = "EAACbBOOR8tABAJNOJvcj2PN38AWy5SZBZCJJhBuCJZBvmq5tqWgz4GlaMxpEc8mYQYG0jGYDJ4k8qnZAZCZCo9A3AkRI9tCtp5kRDmAaf618UQ9ZBIxQ8MaEya8mksnhMCnvCbodbuFEmuOU1tIpyEqk7Vr26ZAvN7EMToB78edbH6IRIwUtRRDt";

$verify_token = "kurama";
$hub_verify_token = null;

$facebook = new \Facebook\Facebook([
  'app_id' => '170445300167376',
  'app_secret' => '1c62d631c1ee8edea6e898134092c363',
  'default_graph_version' => 'v2.10',
  	//'default_access_token' => '{access-token}', // optional
]);
	//var_dump($fb->getApp()->getId(), $fb->getApp()->getSecret());
	// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
	//   $helper = $fb->getRedirectLoginHelper();
	//   $helper = $fb->getJavaScriptHelper();
	//   $helper = $fb->getCanvasHelper();
	//   $helper = $fb->getPageTabHelper();

try {
	// Get the \Facebook\GraphNodes\GraphUser object for the current user.
  	// If you provided a 'default_access_token', the '{access-token}' is optional.
		$response = $facebook->get('/me', $access_token);
} catch(\Facebook\Exceptions\FacebookResponseException $e) {
  	// When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
  	// When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
}

$me = $response->getGraphUser();
echo $me->getName();

if(isset($_REQUEST['hub_mode']) && $_REQUEST['hub_mode']=='subscribe')
{
	$challenge = $_REQUEST['hub_challenge'];
	$hub_verify_token = $_REQUEST['hub_verify_token'];	
	if($hub_verify_token===$verify_token)
	{
		header('HTTP/1.1 200 OK');
		echo $challenge;
		die;
	}
}

$input = json_decode(file_get_contents('php://input'),true);
$sender = $input['entry'][0]['messaging'][0]['sender']['id'];
$message = isset($input['entry'][0]['messaging'][0]['message']['text']) ? $input['entry'][0]['messaging'][0]['sender']['id']
: '' ; 

if($message)
{
	/*$replies = array(
		"Hello sir!",
		"How r u sir???",
		"Nice to meet you...",
		"Have a good day.",
		"I am Gidian"
	);*/

	/*if($message=="hello")
	{
		$reply = "Hello!!!";
	}
	else
	{
		$reply = "Good morning";
	}*/
	$url = "https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;

	/*$json_Data = '{
						"recipient" : {
								"id":"'.$sender.'"
						},
						"message" : {
								"text":"'.$reply.'"
						}
					}';*/
	/*$json_Data = '{
						"recipient" : {
								"id":"'.$sender.'"
						},
						"message" : {
								"text":"'.$replies[rand(0,4)].'"
						}
					}';*/
			
	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$json_Data);
	curl_Setopt($ch,CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	$result = curl_exec($ch);
	curl_close($ch);
}
file_put_contents("fb.txt", file_get_contents("php://input"));
$fb = file_get_contents("fb.txt");
$fb = json_decode($fb);
//echo 'Logged in as ' . $me->getName();
?>

