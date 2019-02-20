<?php
function sentimentScore($text)
{
    $client = new GuzzleHttp\Client();
    $res = $client->request('POST', config('ml.api_url').'sentiment', [
        'json' => ['text' => $text],
        'headers' => [
            'Accept'     => 'application/json',
        ]
    ]);
    $arr = json_decode($res->getBody());
    return $arr->sentiment;
}
