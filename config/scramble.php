<?php

declare(strict_types=1);

return [
    /*
     * Your API path. Full API base URL will be created using `url` helper: `url(config('scramble.api_path'))`.
     * By default, all routes starting with this path will be added to the docs. If you need to change
     * this behavior, you can add your custom routes resolver using `Scramble::routes()`.
     */
    "api_path" => "api",

    "api_domain" => null,

    "info" => [
        /*
         * API version.
         */
        "version" => env("API_VERSION", "1.0.0"),

        /*
         * Description rendered on the home page of the API documentation (`/docs/api`).
         */
        "description" => "Backend api documentation",
    ],

    "servers" => [
        "Prod" => env("ASSET_URL", "http://localhost" . "/api"),
    ],

    "middleware" => [
        "web",
    ],

    "extensions" => [],
];
