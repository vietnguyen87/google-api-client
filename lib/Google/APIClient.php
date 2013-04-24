<?php

/**
 * Class Google_APIClient
 *
 * This wrapper aims to provides a simple interface for Symfony
 * to utilize helper classes included in the Google APIs Client Library
 */
class Google_APIClient {

    private static $src_dir = '/../google-api-php-client/src';

    /**
     * Instantiates a Google_Client
     * @return Google_Client
     */
    public static function newClientInstance()
    {
        return static::newInstance();
    }

    /**
     * Instantiates a helper class from "/contrib"
     * @param $name
     * @param array $args
     * @return object
     */
    public static function newContribInstance($name, array $args = array())
    {
        return static::newInstance($name, $args, '/contrib');
    }

    /**
     * Requires a php file, creates and returns new instance
     * @param string $name
     * @param array $args
     * @param string $path
     * @return object
     */
    public static function newInstance($name = 'Client', array $args = array(), $path = '')
    {
        $class_name = "Google_$name";

        require_once __DIR__ . static::$src_dir . "{$path}/{$class_name}.php";

        // Creates a new class instance from given arguments.
        $class = new ReflectionClass($class_name);
        $instance = $class->newInstanceArgs($args);

        return $instance;
    }
}
