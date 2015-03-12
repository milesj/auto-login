# Changelog #

*These logs may be outdated or incomplete.*

## 3.6.0 ##

* Merged initialize() and startup() to fix Controller:beforeFilter() inheritance problems
* Renamed save() to write()
* Replaced __construct() with initialize()

## 3.5.3 ##

* Minor type comparison changes to solve cookie mismatch errors

## 3.5.2 ##

* Added a cookieLocalDomain setting

## 3.5.1 ##

* Fixed base64 encode problem with usernames

## 3.5 ##

* Updated to use the Cake structure and setup for component settings
* Added base64 encoding and decoding to username's
* Minor bug fixes

## 3.4 ##

* A boolean setting "active" can be toggled to force an early exit of the script
* A boolean setting "redirect" can force a redirect after a successful login
* A boolean setting "requirePrompt" allows you to determine whether a form checkbox is needed
* Fixed a bug where AutoLogin shouldn't be triggered for POST or PUT requests
* Moved $cookieName and $expires properties to $settings (backwards compatible support)
* Updated debug() to log to file if no debug email was defined
* Settings can now be defined dynamically via Configure::write('AutoLogin')
* Test cases have been added

## 3.3 ##

* Fixed a problem where Auth would redirect before startup() has happened
* Fixed a bug with plugin name inflection ([Issue #14](https://github.com/milesj/cake-auto_login/issues/14))
* Updated code to support dynamic User and AutoLogin configuration

## 3.2 ##

* Added a model setting to the $settings property
* Fixed a bug where Auth::user() would not return the full row data
* Fixed a bug where the action would be empty (defaults to login)
* Merged the username and password values from $fields into $settings
* Removed the $fields property
* Removed model detection via Auth::$authenticate in favor of the $settings model value
* Updated the readme with information regarding Suhosin

## 3.1 ##

* Fixed a bug with the old Auth::$userModel, now looks in Auth::$authenticate
* Adding support for localhost cookies

## 3.0 ##

* Updated to CakePHP 2.0 (not backwards compatible with 1.3)
* Updated to new Controller/Component path
* Updated to use CakeRequest
* Updated to attempt to use the correct Controller name
* Added a $fields property to replace the Auth::$fields setup
* Added a plugin value check from Auth::$loginAction
* Removed unnecessary $_hasInitialized ans $_hasStartup

## 2.2 ##

* Added initialized and startup checking mechanisms
* Refactored the debug system to support certain scopes

## 2.1 ##

* Adding a $components property since Cake now uses the same instanced component
* Removed references to the Controllers components
* Fixed a bug where AutoLogin failed to work in plugins

## 2.0 ##

* Added a debug system to debug live problems
* Removing PHP 4 argument references
* Fixed a bug where the user wasn't recognized

## 1.9 ##

* Removed PHP 4 argument references

## 1.8 ##

* Converted to Cake 1.3
* Reworked how the Controller was passed around

## 1.6 ##

* Upgraded to PHP 5 only
* Added logic to use the Controllers cookie component in place of the components stand alone component

## 1.5 ##

* Added support for plugins, can be set within the settings
* Added a check for the "auto_login" index within the data array

## 1.4 ##

* Added a $settings property so that you may name what controller and actions your login takes place (for automatic saving)
* Remove Auth from the components, in turn used the $Controllers Auth
* Fixed some problems with dynamic controller name being incorrect

## 1.3 ##

* Rewrote the beforeRedirect() method so that the controller is dynamic (instead of static Users) depending on certain variables
* Renamed the $Controller variables

## 1.2 ##

* First initial release of AutoLogin
