<?php

/***************************************************************************************************
====================================================================================================


    Sunrise - Coming Soon Page

    v1.0, 21 December 2012

    by Alex Shnayder


====================================================================================================

    Email configuration file

***************************************************************************************************/



$config = Array(

    /* Your email address and name, they go to "From" field */
    'email' => 'email@example.com',
    'name' => 'Almighty Notifier',

    /* Settings for your subscription letter.
       It is automatically sent when user enters his email into the form. */
    'subscription_email' => Array(

        /* Turns on/off subscription letters */
    	'enabled' => true,

    	'subject' => 'You have been subscribed to awesome news',
    	'message' => 'Thank you for your interest.'
    ),
);

return $config;

?>