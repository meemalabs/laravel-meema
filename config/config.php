<?php

return [
    /*
     * The publishable API key provided by the meema API
     */
    'api_key' => env('MEEMA_API_KEY', ''),

    /*
     * If you want to convert all response to a collection
     */
    'to_collection' => env('MEEMA_API_TO_COLLECTION', true),
];
