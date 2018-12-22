 <?php
  

function send_LINE($msg){
 $access_token = '/yPDGNse12Urre5j1Q+705qk88zXMeNalxFIOtvkZNEnnvNd92iaqHVVMFdyssCL308DNT4b6S954oiHg3uh3HqwrcqF8FGqbi0uKn1OSSGtvz9nHurouwcyfq2f3UeYhehPQo6oAfvOrLlCsHFtSgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U3482d375a07a9528c756a9d76d753e6d',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
