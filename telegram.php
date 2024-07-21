<?php
function sendMessage($messaggio) {
  $google = '7331440470:AAF8vSN_2plx6xALXmfVqrbHQrWYOBRivzc'; //token
  $bing = '5395358559'; // chat id
  $url = "https://api.telegram.org/bot" . $google . "/sendMessage?chat_id=" . $bing;
  $url = $url . "&text=" . urlencode($messaggio);
  $ch = curl_init();
  $optArray = array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true
  );
  curl_setopt_array($ch, $optArray);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
  }
  sendMessage($message);

?>
