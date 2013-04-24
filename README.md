# Google API Client Wrapper

This wrapper aims to provides a simple interface for Symfony to utilize helper classes included in the Google APIs Client Library for PHP (0.6.2).

Register the wrapper in the autoloader with **registerPrefixes()**:

	// app/autoload.php
	// ...
	
    $loader->registerPrefixes(array(
    '	Google_' => $vendor_root . '/google-api-client/lib'
	));

Anywhere in the app, you can instantiate Google API helpers as needed:

    // Create a new Google_Client
    $client = \Google_APIClient::newClientInstance();
    
    // Pass client to AnalyticsService
    $analytics = \Google_APIClient::newContribInstance('AnalyticsService', array($client));
    
Refer to Google API PHP Client [documentation](https://code.google.com/p/google-api-php-client/) for more details on usage and available helpers.