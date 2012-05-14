#CodeIgniter Test_Controller Library

Provides JUnit-style unit testing for Modular CodeIgniter (Modular Extensions).
It's not supposed to be working within vanilla CodeIgniter setups. The library is
included in the preconfigured [CodeIgniter Maestro](https://github.com/sepehr/ci-maestro) starter kit.

This is a complete rewrite of TOAST library by Jens Roland to make it:
* Compatible with CodeIgniter 2+ releases
* Compatible with Modular CodeIgniter (Modular Extensions)
* More simplistic on design and usage

##Sample screenshot:
![CodeIgniter Test_Controller Sample Screenshot](http://localhostr.com/file/930/mSRudLHiYHJZ/ci-test-controller.png)

##Requirements:
* PHP cURL Extension
* CodeIgniter Modular Extensions

##Installation:
* Place `Test_Controller.php` in `application/libraries` directory.
* Add library routing rule to `application/config/routes.php`:
`$route['([a-z0-9_])/tests'] = '$1/tests/Test_$1/index';`
* Create `application/modules/[MODULE_NAME]/controllers/tests` directory
* Create `application/modules/[MODULE_NAME]/controllers/tests/Test_[MODULE_NAME].php`
* All module test case results should be available at `http://example.com/[MODULE_NAME]/tests`
* See the section below for the usage instructions.

##Usage:
* Your test controller should extend `Test_Controller` abstract class.
* It's recommended to name your test classes follow this naming pattern: `Test_[MODULE_NAME][_SUFFIX]`
   example: `Test_welcome[_user] extends Test_Controler`
* You can write several test classes per module, `Test_[MODULE_NAME].php` is required
   if you want a test index page located at `http://example.com/[MODULE_NAME]/tests` page.
* Your test functions must have a `test_` prefix to be considered as a test case by the library.
* Do not override the `index()` function in your test class, unless you know what you're doing.
* **Consider that this library is in early development stage, please use issue tracker to report your huntings!**

##TODO
* Methods should be properly renamed, reordered, etc. it's already a mess!
* `_theme_results()` function should be rewritten to be more flexible and clean.
* Class configurables should be exposed in a CodeIgniter config file.
* Add type assertion helpers.