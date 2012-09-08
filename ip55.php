<?php
	$message = strip_tags($_REQUEST['Msg']);
	if (!$message){exit();}
	$message = split(",",$message);
	echo $event = $message[0];
	echo $time = date("Y-m-d H:i:s",strtotime(substr($message[1],5)));
	echo $body = "$event $time";
	curl_setopt_array($ch = curl_init(), array(CURLOPT_URL => "https://api.pushover.net/1/messages.json",CURLOPT_POSTFIELDS => array("token" => "YOUR TOKEN","user" => "YOUR USER KEY","message" => $body)));
	curl_exec($ch);
	curl_close($ch);
?>