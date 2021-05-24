<?php

$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2', null => 3]
    ]
];

print_r(array_search('ubuntu', $data));