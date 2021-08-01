<?php

function create_csrf_token($page, $key_hash): string
{
    $algorithm = 'sha256';
    $str_data = 'This is an example: ' . $page;
    $csrf_token = hash_hmac($algorithm, $str_data, $key_hash);
    return $csrf_token != false ? $csrf_token : 'no-token';
}