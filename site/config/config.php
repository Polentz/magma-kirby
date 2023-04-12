<?php

return [
    'debug' => false,
    'smartypants' => true,
    'panel' => [
        'language' => 'it'
    ],
    'routes' => [
        [
            'pattern' => '(:any)',
            'action'  => function($uid) {
                $page = page($uid);
                if(!$page) $page = page('home/' . $uid);
                if(!$page) $page = site()->errorPage();
                return site()->visit($page);
            }
        ],
        [
            'pattern' => 'home/(:any)',
            'action'  => function($uid) {
                go($uid);
            }
        ]
    ],
];