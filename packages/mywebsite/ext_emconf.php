<?php

/**
 * Extension Manager/Repository config file for ext "mywebsite".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'myWebsite',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Fhooe\\Mywebsite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lukas Grünberger',
    'author_email' => 's2310456003@fhooe.at',
    'author_company' => 'fhooe',
    'version' => '1.0.0',
];
