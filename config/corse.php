<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'], // Define paths that should support CORS

    'allowed_methods' => ['*'], // Allow all HTTP methods (GET, POST, etc.)

    'allowed_origins' => ['*'], // Allow all origins; restrict this for production

    'allowed_origins_patterns' => [], // Patterns for allowed origins (optional)

    'allowed_headers' => ['*'], // Allow all headers

    'exposed_headers' => [], // Headers that can be exposed to the browser

    'max_age' => 0, // Cache duration for preflight requests

    'supports_credentials' => true, // Allow credentials (cookies, authorization headers)

];