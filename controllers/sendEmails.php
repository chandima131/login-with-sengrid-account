<?php


require_once './vendor/autoload.php';

function sendVerificationEmail($userEmail, $token)
{
  
  $email = $userEmail;
  $name = "iamtripol";
  $body = " Thank you for signing up on our site. Please click on the link below to verify your account: <br><br><a href='http://localhost/verify-user/verify_email.php?token=" . $token . "'>Verify Email!</a>";
  $subject = "Email Confirmation";

  $headers = array(
      'Authorization: Bearer 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',
      'Content-Type: application/json'
  );

  $data = array(
      "personalizations" => array(
          array(
              "to" => array(
                  array(
                      "email" => $email,
                      "name" => $name,
                      
                  )
              )
          )
      ),
      "from" => array(
          "email" => "do-not-reply@flyzeefass.com"
      ),
      "subject" => $subject,
      "content" => array(
          array(
              "type" => "text/html",
              "value" => $body
          )
      )
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($ch);
  curl_close($ch);

   echo $response;


}


function sendThankyouEmail($userEmail)
{
  $email = $userEmail;
  $name = "iamtripol";
  $body =  " Thank you for verify your account";
  $subject = "Email Confirmation";

  $headers = array(
      'Authorization: Bearer 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',
      'Content-Type: application/json'
  );

  $data = array(
      "personalizations" => array(
          array(
              "to" => array(
                  array(
                      "email" => $email,
                      "name" => $name,
                      
                  )
              )
          )
      ),
      "from" => array(
          "email" => "do-not-reply@flyzeefass.com"
      ),
      "subject" => $subject,
      "content" => array(
          array(
              "type" => "text/html",
              "value" => $body
          )
      )
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($ch);
  curl_close($ch);

   echo $response;
}


?>
