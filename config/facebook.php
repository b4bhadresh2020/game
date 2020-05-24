<?php

// You can find the keys here : https://apps.twitter.com/

return [   

    'FACEBOOK_GRAPH_VERSION'            => function_exists('env') ? env('FACEBOOK_GRAPH_VERSION', 'v2.10') : '',
    'FACEBOOK_APP_ID'                   => function_exists('env') ? env('FACEBOOK_APP_ID', '864570597383503') : '',
    'FACEBOOK_APP_SECRET'               => function_exists('env') ? env('FACEBOOK_APP_SECRET', '1ea7a5fee01b2034e3d710e3edd35c1b') : '',
    'FACEBOOK_USER_ACCESS_TOKEN'        => function_exists('env') ? env('FACEBOOK_USER_ACCESS_TOKEN', '') : ''
];

