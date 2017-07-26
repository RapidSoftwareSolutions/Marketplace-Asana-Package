<?php
$app->post('/api/Asana/webhookCommand', function ($request, $response) {
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, []);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $client = $this->httpClient;
    $resp = $client->post("https://c2284730.ngrok.io/", [
        'json'=>$post_data['args']
    ]);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200);
    $reply = [
        "http_resp" => "",
        "http_header_resp" => ["X-Hook-Secret" => $post_data['args']['headers']['X-Hook-Secret']],
        "client_msg" => $post_data['args']['body'],
        "params" => $post_data['args']['params']
    ];
    $result['callback'] = 'success';
    $result['contextWrites']['to'] = $reply;
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);
});