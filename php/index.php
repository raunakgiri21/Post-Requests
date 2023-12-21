<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Post Request</h2>
  <?php
    $name = "RandomName";
    $code = "2833c15f7fcc3e02ab1b2cea8efda4bd";
    $url = "https://dev.29kreativ.com/recruitment/levels/";

    $data = "name=" . $name . "&code=" . $code;
    $authorization = "Authorization: Bearer " . $code;

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
      "Content-Type: application/x-www-form-urlencoded",
      $authorization
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $resp = curl_exec($curl);
    curl_close($curl);

    echo $resp;
  ?>
</body>
</html>