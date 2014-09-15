<?php
/**
 * Created by PhpStorm.
 * User: mw
 */

return [
    'router' => [
        'routes' => [
            'indexRoot' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => 'Tweet\Controller\Index',
                        'action' => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'hashTag' => [
                        'type' => 'literal',
                        'options' => [
                            'route' => 'tweet/hash-tag',
                            'defaults' => [
                                'action' => 'hashTag',
                            ],
                        ],
                    ],
                ],
            ],
            'backendRoot' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/backend',
                    'defaults' => [
                        'controller' => 'Tweet\Controller\Backend',
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
];