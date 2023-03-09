<?php

// config for Labdacaraka/LabdacarakaInstaller
return [
    'min_php_version' => '8.1',
    'required_extensions' => [
        'openssl',
        'pdo',
        'mbstring',
        'tokenizer',
        'xml',
        'ctype',
        'json',
        'curl',
        'gd',
        'fileinfo',
    ],
    'minimum_php_ini' => [
        'memory_limit' => '256M',
        'max_execution_time' => '300',
        'max_input_vars' => '3000',
        'post_max_size' => '32M',
        'upload_max_filesize' => '32M',
    ],
];
