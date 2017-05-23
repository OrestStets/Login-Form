<?php

$users = [
    'admin@gmail.com' => [
        'pass' => 'qwe1234',
        'access' => true
    ],
    'user@gmail.com' => [
        'pass' => 'qwe1234',
        'access' => false
    ]
];

$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];

if(isset($users[$email]) && $users[$email]['pass'] == $pass) {
    if($users[$email]['access']) {
        die(json_encode([
            'status' => 200,
            'error' => 'Successfully authorized'
        ]));
    }

    die(json_encode([
        'status' => 401,
        'error' => 'Access denied'
    ]));
} else {
    die(json_encode([
        'status' => 404,
        'error' => 'User not found'
    ]));
}


