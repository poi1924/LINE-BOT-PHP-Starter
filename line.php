 <?php
  

function send_LINE($msg){
 $access_token = 'yukzKvnnDmoeubcLosq/XWiM8zji4ihTxkXScErOyneonPzzK0pYe5x4F6XZYYC+/hDlCaq1Vn8l9y7s9kWyosFJPFAauBpd4sh18bnaHD8Gk87Hq6nHSSJQDoL0NPsn6XqrshzmPgn8kKdhyPZ1ewdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uf0f8b9f6f21df75fced2960527da07ff',
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
