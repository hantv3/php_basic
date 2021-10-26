<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visitting W3school";
  public function byebye(){
    echo self::LEAVING_MESSAGE;
  }
}

// echo Goodbye::LEAVING_MESSAGE;
$goodbye = new Goodbye();
$goodbye->byebye();
?>