<?php

return [
    'doctrine' => [
        'driver' => [
            'Identimo' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => __DIR__."/../src",
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Identimo' => 'Identimo',
                ],
            ],
        ],
    ],
    'router' => [
        'routes' => [
            \Identimo\Api\V1\Rest\User\Controller::class => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/users[/:users_id]',
                    'defaults' => [
                        'controller' => \Identimo\Api\V1\Rest\User\Controller::class,
                    ],
                ],
            ],
            \Identimo\Api\V1\Rest\Permission\Controller::class => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/permissions[/:permissions_id]',
                    'defaults' => [
                        'controller' => \Identimo\Api\V1\Rest\Permission\Controller::class,
                    ],
                ],
            ],
            \Identimo\Api\V1\Rest\PermissionCode\Controller::class => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/permission_codes[/:permission_codes_id]',
                    'defaults' => [
                        'controller' => \Identimo\Api\V1\Rest\PermissionCode\Controller::class,
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            \Identimo\Api\V1\Rest\User\Controller::class,
            \Identimo\Api\V1\Rest\Permission\Controller::class,
            \Identimo\Api\V1\Rest\PermissionCode\Controller::class,
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Identimo\Api\V1\Rest\User\Entity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => \Identimo\Api\V1\Rest\User\Controller::class,
                'route_identifier_name' => 'users_id',
                'hydrator' => \Doctrine\Laminas\Hydrator\XDoctrineObject::class,
            ],
            \Identimo\Api\V1\Rest\User\Collection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => \Identimo\Api\V1\Rest\User\Controller::class,
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ],
            \Identimo\Api\V1\Rest\Permission\Entity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => \Identimo\Api\V1\Rest\Permission\Controller::class,
                'route_identifier_name' => 'permissions_id',
                'hydrator' => \Doctrine\Laminas\Hydrator\XDoctrineObject::class,
            ],
            \Identimo\Api\V1\Rest\Permission\Collection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => \Identimo\Api\V1\Rest\Permission\Controller::class,
                'route_identifier_name' => 'permissions_id',
                'is_collection' => true,
            ],
            \Identimo\Api\V1\Rest\PermissionCode\Entity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => \Identimo\Api\V1\Rest\PermissionCode\Controller::class,
                'route_identifier_name' => 'permission_codes_id',
                'hydrator' => \Doctrine\Laminas\Hydrator\XDoctrineObject::class,
            ],
            \Identimo\Api\V1\Rest\PermissionCode\Collection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => \Identimo\Api\V1\Rest\PermissionCode\Controller::class,
                'route_identifier_name' => 'permission_codes_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-rest' => [
        \Identimo\Api\V1\Rest\User\Controller::class => [
            'listener' => \Identimo\Api\V1\Rest\User\Resource::class,
            'route_name' => \Identimo\Api\V1\Rest\User\Controller::class,
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'DELETE',
                3 => 'PUT',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => '50',
            'entity_class' => \Identimo\Api\V1\Rest\User\Entity::class,
            'collection_class' => \Identimo\Api\V1\Rest\User\Collection::class,
            'service_name' => 'users',
        ],
        \Identimo\Api\V1\Rest\Permission\Controller::class => [
            'listener' => \Identimo\Api\V1\Rest\Permission\Resource::class,
            'route_name' => \Identimo\Api\V1\Rest\Permission\Controller::class,
            'route_identifier_name' => 'permissions_id',
            'collection_name' => 'permissions',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'DELETE',
                3 => 'PUT',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => '50',
            'entity_class' => \Identimo\Api\V1\Rest\Permission\Entity::class,
            'collection_class' => \Identimo\Api\V1\Rest\Permission\Collection::class,
            'service_name' => 'permissions',
        ],
        \Identimo\Api\V1\Rest\PermissionCode\Controller::class => [
            'listener' => \Identimo\Api\V1\Rest\PermissionCode\Resource::class,
            'route_name' => \Identimo\Api\V1\Rest\PermissionCode\Controller::class,
            'route_identifier_name' => 'permission_codes_id',
            'collection_name' => 'permission_codes',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'DELETE',
                3 => 'PUT',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => '50',
            'entity_class' => \Identimo\Api\V1\Rest\PermissionCode\Entity::class,
            'collection_class' => \Identimo\Api\V1\Rest\PermissionCode\Collection::class,
            'service_name' => 'permission_codes',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            \Identimo\Api\V1\Rest\User\Controller::class => 'HalJson',
            \Identimo\Api\V1\Rest\Permission\Controller::class => 'HalJson',
            \Identimo\Api\V1\Rest\PermissionCode\Controller::class => 'HalJson',
        ],
        'accept_whitelist' => [
            \Identimo\Api\V1\Rest\User\Controller::class => [
                0 => 'application/vnd.user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            \Identimo\Api\V1\Rest\Permission\Controller::class => [
                0 => 'application/vnd.user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            \Identimo\Api\V1\Rest\PermissionCode\Controller::class => [
                0 => 'application/vnd.user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            \Identimo\Api\V1\Rest\User\Controller::class => [
                0 => 'application/vnd.user.v1+json',
                1 => 'application/json',
            ],
            \Identimo\Api\V1\Rest\Permission\Controller::class => [
                0 => 'application/vnd.user.v1+json',
                1 => 'application/json',
            ],
            \Identimo\Api\V1\Rest\PermissionCode\Controller::class => [
                0 => 'application/vnd.user.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        \Identimo\Api\V1\Rest\User\Controller::class => [
            'input_filter' => \Identimo\Api\V1\Rest\User\Validator::class,
        ],
        \Identimo\Api\V1\Rest\Permission\Controller::class => [
            'input_filter' => \Identimo\Api\V1\Rest\Permission\Validator::class,
        ],
        \Identimo\Api\V1\Rest\PermissionCode\Controller::class => [
            'input_filter' => \Identimo\Api\V1\Rest\PermissionCode\Validator::class,
        ],
    ],
    'input_filter_specs' => [
        \Identimo\Api\V1\Rest\User\Validator::class => [
            0 => [
                'name' => 'id',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'class',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'dtype',
            ],
        ],
        \Identimo\Api\V1\Rest\Permission\Validator::class => [
            0 => [
                'name' => 'id',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'class',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'dtype',
            ],
        ],
        \Identimo\Api\V1\Rest\PermissionCode\Validator::class => [
            0 => [
                'name' => 'id',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'class',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'dtype',
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            \Identimo\Api\V1\Rest\User\Controller::class => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
            \Identimo\Api\V1\Rest\Permission\Controller::class => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
            \Identimo\Api\V1\Rest\PermissionCode\Controller::class => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            \Identimo\Api\V1\Rest\User\Resource::class => [
                'adapter_name' => 'sqlite',
                'table_name' => 'users',
                'hydrator_name' => \Doctrine\Laminas\Hydrator\XDoctrineObject::class,
                'controller_service_name' => \Identimo\Api\V1\Rest\User\Controller::class,
                'entity_identifier_name' => 'id',
                'table_service' => 'Identimo\\Api\\V1\\Rest\\User\\Resource\\Table',
            ],
            \Identimo\Api\V1\Rest\Permission\Resource::class => [
                'adapter_name' => 'sqlite',
                'table_name' => 'permissions',
                'hydrator_name' => \Doctrine\Laminas\Hydrator\XDoctrineObject::class,
                'controller_service_name' => \Identimo\Api\V1\Rest\Permission\Controller::class,
                'entity_identifier_name' => 'id',
                'table_service' => 'Identimo\\Api\\V1\\Rest\\Permission\\Resource\\Table',
            ],
            \Identimo\Api\V1\Rest\PermissionCode\Resource::class => [
                'adapter_name' => 'sqlite',
                'table_name' => 'permission_codes',
                'hydrator_name' => \Doctrine\Laminas\Hydrator\XDoctrineObject::class,
                'controller_service_name' => \Identimo\Api\V1\Rest\PermissionCode\Controller::class,
                'entity_identifier_name' => 'id',
                'table_service' => 'Identimo\\Api\\V1\\Rest\\PermissionCode\\Resource\\Table',
            ],
        ],
    ],
];
