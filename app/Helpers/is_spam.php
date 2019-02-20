<?php
function isSpam($text)
{
    $client = new GuzzleHttp\Client();
    $res = $client->request('POST', config('ml.api_url').'predict', [
        'json' => ['text' => $text],
        'headers' => [
            'Accept'     => 'application/json',
        ]
    ]);
    $arr = json_decode($res->getBody());
    if ($arr->predict == 'ham') {
        return false;
    } else {
        return true;
    }
}
