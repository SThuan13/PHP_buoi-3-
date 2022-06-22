<?php
interface Phone 
{
  public function makeCall($number);
  public function sendMessage($number, $message);
}

class ios implements Phone
{
  public function makeCall($number)
  {
    echo "Ios is calling {$number} !";
  }

  public function sendMessage($number, $message)
  {
    echo "Ios is sending {$number} a message with content \" {$message} \"!";
  }
}

$ios = new ios();

$ios->makeCall("0898531409");
echo "<br>";

$ios->sendMessage("0898531409","Hi!");

?>