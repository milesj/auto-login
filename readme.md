# Auto Login v3.6.0 #

A CakePHP Component that will automatically login the Auth session for a duration if the user requested to (saves data to cookies).

This version is only compatible with CakePHP 2.x.

## Compatibility ##

* v2.x - CakePHP 1.3
* v3.x - CakePHP 2.x

## Requirements ##

* PHP 5.2, 5.3

## Features ##

* Requires no installation except for adding the checkbox into your user login forms
* Using `requirePrompt` as `false` does not even require that (but use with caution!)
* Automatically saves the cookie and info when a user logs in
* Automatically kills the cookie and session when a user logs out
* Inserts a hash within the cookie so that it cannot be hijacked
* Encrypts the cookie so the information cannot be harvested
* Configuration options for cookie name and length
* Functionality for additional user updating or error logging
* Minor support for localhost cookies
* Can be enabled/disabled dynamically using Configure

## Documentation ##

Thorough documentation can be found here: http://milesj.me/code/cakephp/auto-login
