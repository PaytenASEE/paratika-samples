### How to run properly? ###

The **paratikasamples** folder contains samples for various integration models.

In order to test the PHP pages properly, please copy the whole folder **_paratikasamples_** into your webserver root directory.
For example, if you are using **WAMP,** your default folder would be: *C:\wamp\www*,
if you are using **XAMPP** your default webserver root directory is *C:\xampp\htdocs*.

After running *Apache*, you will be able to browse the PHP pages via:

- http://localhost:/paratikasamples/php/session/sessiontoken.php
- http://localhost:/paratikasamples/php/directpost/directpost.php
- http://localhost:/paratikasamples/php/session/hpp-redirection.php
- http://localhost:/paratikasamples/php/api/sale-preauth.php

In order to test *directpost*, *directpost3d* or *hpp-redirection* you first need to create a *session token*.
For example, to do a *hpp-redirection* you will go through these steps:

1. Do a Session Token 
	* http://localhost/paratikasamples/php/session/sessiontoken.php
2. Get/Copy sessionToken
2. Go to HPP-redirection 
	* http://localhost/paratikasamples/php/session/hpp-redirection.php
	1. Paste sessionToken
	2. Submit
3. Fill the HPP fields
	1. Submit
4. Get to the Status page 
	* https://test.paratika.com.tr/payment/status
5. Get redirected to Return page 
	* http://localhost/paratikasamples/php/directpost/return.php