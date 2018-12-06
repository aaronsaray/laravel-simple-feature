<?php
/**
 * Configuration for the Laravel Simple Feature Flag Package
 */
declare(strict_types=1);

return [
    /**
     * Feature flags can be named anything. In this case, my feature is read as "Feature can yodel" which the result
     * of that is true or on.
     */
    'yodel' => env('FEATURE_CAN_YODEL', true),

    /**
     * You also don't have to get settings from the env, if you want to control your features solely in code
     */
    'cheering-for-yodel' => false,
];