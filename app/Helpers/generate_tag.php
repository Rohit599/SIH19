<?php
function generateTag($text)
{
    $client = new GuzzleHttp\Client();
    $res = $client->request('POST', config('ml.api_url').'tag', [
        'json' => ['text' => $text],
        'headers' => [
            'Accept'     => 'application/json',
        ]
    ]);
    $arr = json_decode($res->getBody());
    return $arr->tags;
}
