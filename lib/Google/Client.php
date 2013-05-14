<?php

namespace Google;

require_once __DIR__ . '/../google-api-php-client/src/Google_Client.php';
require_once __DIR__ . '/../google-api-php-client/src/auth/Google_AssertionCredentials.php';

class Client extends \Google_Client {

    public function __construct($client_config = array(), $auth_config = array())
    {
        parent::__construct($client_config);

        if ($auth_config)
        {
            $assertion_credentials = new \Google_AssertionCredentials(
                $auth_config['service_account_name'],
                $auth_config['scopes'],
                file_get_contents($auth_config['private_key'])
            );

            $this->setAssertionCredentials($assertion_credentials);
        }
    }
}
