<?php
$access_token = '1q6Hx3nhfedgtNAM7B5gxuvR5U5qyYOn6B647V29Usz4SxwhZAWENMVk4ggm3DBxKlmRvB0LDueJJ+SyDOWZaJeWnvOkwlRKjbRz2sH18P7WkOp/MBhkaMYsAZg/yjl9aMDCGOZsgsOqThl04KfNUwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
