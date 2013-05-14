# Google API Client Wrapper

This wrapper makes injecting Google API Client (0.6.2) Libaries for Symfony easier.

Register the wrapper in the autoloader with **registerNamespaces()**:

	// app/autoload.php
	// ...
	
    $loader->registerNamespaces(array(
    	'Google' => $vendor_root . '/google-api-client/lib'
	));

Anywhere in the app, you can inject Google API helpers as needed:

    // config/services.yml
    // ...
    
    GoogleClient:
        class: Google\Client
        arguments:
          - { application_name: MyApp, oauth2_client_id: %google.client_id% }
    
Refer to Google API PHP Client [documentation](https://code.google.com/p/google-api-php-client/) for more details on usage and available helpers.