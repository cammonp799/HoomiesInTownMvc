Voici votre code avec les commentaires en anglais :

<?php
// config/routes.php

$routes = [

    // Route for the home page
    '' => [
        'controller' => 'HomePageController',
        'action' => 'index'
    ],

    // Route for the colocation page
    'colocation' => [
        'controller' => 'ColocationController',
        'action' => 'index'
    ],

    // Route for the registration page
    'register' => [
        'controller' => 'RegisterController',
        'action' => 'index'
    ],

    // Route for the login page
    'connection' => [
        'controller' => 'ConnectionController',
        'action' => 'index'
    ],

    // Route for the profile page
    'profile' => [
        'controller' => 'ProfileController',
        'action' => 'index'
    ],

    // Route for the logout page
    'signout' => [
        'controller' => 'SignOutController',
        'action' => 'index'
    ],
    
    // Route for updating the profile page
    'updateProfile' => [
        'controller'  => 'updateProfileController',
        'action' => 'update'
    ],

    // Route for deleting the profile
    '/delete' => [
        'controller' => 'DeleteController',
        'action' => 'delete'
    ],

    // Default route for not found pages (404)
    '404' => [
        'controller' => 'ErrorController',
        'action' => 'notFound'
    ]
];