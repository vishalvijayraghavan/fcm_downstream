<?php

// your notification message
$message = " message ";    

// your nofitication title
$title = " title ";      

// fcm server url to which post call is to be made
$path_to_fcm = 'http://fcm.googleapis.com/fcm/send';    

// server api key
$server_key = "key ";  // you can get this from firebase console 

//fcm device token
$device_token = " token ";    // this is generated within app by using getToken(); 
    

//header        
$headers = array(
                'to' => $device_token, 
                'Authorization:key=' .$server_key,
                'Content-Type:application/json'
                );

//payload section json encoding on two objects to and notification with 2 properties like title and body
$fields = array(
                'notification'=>array('title'=>$title,
                'body'=>$message,
                'click_action'=>'com.example.projet.freshfcm_TARGET_NOTIFY'),  // after clicking notification where should it redirect.
                'data'=>array('message'=>'hello this is my notification')      // Data Payload to be send via push notification.
                );     

    
//json encoding payload data
$payload = json_encode($fields);

// making http downstream request to fcm server
$curl_session = curl_init();
curl_setopt($curl_session, CURLOPT_URL,$path_to_fcm);
curl_setopt($curl_session, CURLOPT_POST, true);
curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);

$result = curl_exec($curl_session);

// if error in http curl
if ($result===FALSE)
{
   die('curl failed:' . curl_error($curl_session)); 
}

// http curl session close
curl_close($curl_session);

// you http call response 
// eg {"multicast_id":6677234612783209051,"success":1,"failure":0,"canonical_ids":0,"results":[{"message_id":"0:1486548570181043%43257cb643257cb6"}]}
// which can we used to validate the http call
echo $result;

?>