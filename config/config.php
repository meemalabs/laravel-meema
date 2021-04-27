<?php

return [
    /*
     * The publishable API key provided by the meema API
     */
    'api_key' => env('MEEMA_API_KEY', ''),

    /*
     * If you prefer to not work with a collections, you may set this
     * value to false and there will be an array response.
     */
    'to_collection' => env('MEEMA_API_TO_COLLECTION', true),
];
