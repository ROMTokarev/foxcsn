<?php

return array(
  "driver" => "smtp",
  "host" => "smtp.mail.ru",
  "port" => 465,
  "from" => array(
      "address" => "noreply@foxcsn.com",
      "name" => "FoxCasino (No Reply)"
  ),
  "encryption" => "ssl",
  "username" => "noreply@foxcsn.com",
  "password" => "***********",
  "sendmail" => "/usr/sbin/sendmail -bs",
  "pretend" => false
);
