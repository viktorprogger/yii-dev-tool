<?php

/**
 * See file packages.local.php.example for customization examples.
 *
 * DO NOT EDIT THIS FILE. To customize the configuration, create your local configuration
 * packages.local.php using file packages.local.php.example as example.
 */
$packages = [
    'docs' => true,

    // config plugin
    'composer-config-plugin' => true,

    // core packages
    'di' => true,
    'proxy' => true,
    'container-proxy' => true,
    'injector' => true,
    'factory' => true,
    'access' => true,
    'event-dispatcher' => true,
    'yii-event' => true,
    'security' => true,
    'data' => true,
    'profiler' => true,
    'aliases' => true,
    'serializer' => true,
    'network-utilities' => true,
    'http' => true,
    'data-response' => true,

    // auth
    'auth' => true,
    'auth-jwt' => true,

    // cache
    'cache' => true,
    'cache-apcu' => true,
    'cache-wincache' => true,
    'cache-file' => true,
    'cache-db' => true,
    'cache-memcached' => true,

    // RBAC
    'rbac' => true,
    'rbac-db' => true,
    'rbac-php' => true,
    'rbac-spiral-db' => true,

    // log
    'log' => true,
    'log-target-db' => true,
    'log-target-email' => true,
    'log-target-file' => true,
    'log-target-syslog' => true,

    // i18n
    'i18n' => true,
    'translator' => true,
    'translator-message-php' => true,
    'translator-message-gettext' => true,
    'translator-formatter-intl' => true,
    'translator-formatter-simple' => true,

    // queue
    'yii-queue' => true,
    'yii-queue-interop' => true,
    'yii-queue-amqp' => true,

    // mutex
    'mutex' => true,
    'mutex-file' => true,
    'mutex-db-pgsql' => true,
    'mutex-db-oracle' => true,
    'mutex-db-mysql' => true,
    // 'mutex-db-redis' => true,

    // mailer
    'mailer' => true,
    'mailer-swiftmailer' => true,

    // helpers
    'arrays' => true,
    'strings' => true,
    'files' => true,
    'var-dumper' => true,
    'html' => true,
    'json' => true,

    // console
    'yii-console' => true,

    // api
    'yii-api' => true,
    'yii-swagger' => true,

    // db
    'db' => true,
    'db-mysql' => true,
    'db-pgsql' => true,
    'db-sqlite' => true,
    'db-mssql' => true,
    'db-oracle' => true,
    'db-mongodb' => true,
    'db-mariadb' => true,
    'active-record' => true,
    'yii-db-migration' => true,
    'yii-cycle' => true,
    // 'db-sphinx' => true,
    // 'db-redis' => true,

    // router
    'router' => true,
    'router-fastroute' => true,

    // web
    'request-model' => true,
    'middleware-dispatcher' => true,
    'session' => true,
    'cookies' => true,
    'yii-web' => true,
    'view' => true,
    'yii-view' => true,
    'widget' => true,
    'yii-widgets' => true,
    'form' => true,
    'assets' => true,
    'yii-jquery' => true,
    'yii-masked-input' => true,
    'yii-dataview' => true,

    'yii-debug' => true,
    'yii-debug-api' => true,
    'yii-debug-frontend' => true,

    'yii-gii' => true,
    'yii-gii-frontend' => true,

    'yii-bootstrap4' => true,
    'yii-bootstrap5' => true,
    'yii-bulma' => true,
    'yii-twig' => true,

    'yii-captcha' => true,

    'yii-auth-client' => true,

    'yii-filesystem' => true,

    // middleware
    'rate-limiter' => true,
    'csrf' => true,
    'request-body-parser' => true,

    // demo and app
    'yii-demo' => true,
    'app' => true,

    // other
    'yii-docker' => true,
    'validator' => true,
    'friendly-exception' => true,
    //'fixture' => true,
    'test-support' => true,

    // repository template
    'template' => true,

    // requirements checker
    'requirements' => true,
];

if (file_exists($localFile = __DIR__ . '/packages.local.php')) {
    /** @noinspection PhpIncludeInspection */
    $packages = array_merge($packages, require $localFile);
}

return $packages;
