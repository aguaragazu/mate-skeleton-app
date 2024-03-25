<?php

/**
 * Register any service providers here, they will be executed in order, so if
 * there are dependencies between them make sure to order them correctly
 */
return [
    /**
     * Service providers that should run before the app has been initialized.
     */
    'boot' => [
        /**
         * Mate service providers
         */
        Mate\Providers\DatabaseDriverServiceProvider::class,
        Mate\Providers\FileStorageDriverServiceProvider::class,
        Mate\Providers\SessionStorageServiceProvider::class,
        Mate\Providers\ViewServiceProvider::class,
        Mate\Providers\AuthenticatorServiceProvider::class,
        Mate\Providers\ServerDataServiceProvider::class,
        Mate\Providers\HasherServiceProvider::class,

        /**
         * Package service providers
         */
    ],

    /**
     * Service providers that should be executed once the app is running.
     */
    'runtime' => [
        App\Providers\RouteServiceProvider::class,
        App\Providers\RuleServiceProvider::class,

        /**
         * Custom service providers
         */
        App\Providers\AppServiceProvider::class,

    ],
];
