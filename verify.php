<?php
$access_token = 'XXXXXXXXXXXXXXXXXXXXXXX';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . ssSrOykgfMcmaYm5M/Q2N9meK8+eyQlGODJbDK+tOkMjD3vSZRXL1XOIJvMo8IKrwmnVGsBwkCkm/Y/moWYc8mpRzlgozz9RbDwHyg5/iJsolFd8HDxxKD72UgDlFPnaNOHLk/MMV+eShIVnxB8JMAdB04t89/1O/w1cDnyilFU=);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
