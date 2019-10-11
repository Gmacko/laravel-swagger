<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Basic Info
    |--------------------------------------------------------------------------
    |
    | The basic info for the application such as the title description,
    | description, version, etc...
    |
    */

    'title' => env('APP_NAME'),

    'description' => '',

    'appVersion' => '1.0.0',

    'host' => env('APP_URL'),

    'basePath' => '/',

    'schemes' => [
        // 'http',
        // 'https',
    ],

    'consumes' => [
        // 'application/json',
    ],

    'produces' => [
        // 'application/json',
    ],

    /*
    |--------------------------------------------------------------------------
    | Ignore methods
    |--------------------------------------------------------------------------
    |
    | Methods in the following array will be ignored in the paths array
    |
    */

    'ignoredMethods' => [
        'head',
    ],

    /*
    |--------------------------------------------------------------------------
    | Parse summary and descriptions
    |--------------------------------------------------------------------------
    |
    | If true will parse the action method docBlock and make it's best guess
    | for what is the summary and description. Usually the first line will be
    | used as the route's summary and any paragraphs below (other than
    | annotations) will be used as the description. It will also parse any
    | appropriate annotations, such as @deprecated.
    |
    */

    'parseDocBlock' => true,

    /*
    |--------------------------------------------------------------------------
    | TAGS
    |--------------------------------------------------------------------------
    |
    | Configure your swagger tags here, you must pass in the key the complete uri
    | of your route. And in values the tags parameters
    |
    */

    'tags' => [
        // '/api/users/{user}/' => [
            // 'name' => "users",
            // 'description' => "All endpoints to control users",
            // 'externalDocs' => [
                // 'description' => "",
                // 'url' => ""
            // ]
        // ]   
    ],


    /*
    |--------------------------------------------------------------------------
    | Exclude basePath
    |--------------------------------------------------------------------------
    |
    | If you want to show only the endpoint of your uri unless the basePath
    | Set this option to true.
    | Example : basePath = 'example.com/api'
    | Your uri : '/api/users/{user}'
    | In generate file : '/users/{user}'
    |
    */

    'excludeBasePath' => true



];