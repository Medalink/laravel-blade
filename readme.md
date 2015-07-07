## Laravel Blade Highlighter

This package adds syntax definitions for the [Laravel 4 & 5](http://www.laravel.com) Blade engine.

*Works with Sublime Text 3, for older versions use an older release.*

### How to install w/[Sublime Package Control](http://wbond.net/sublime_packages/package_control)

Search for Laravel Blade and install it, it's just that simple.

*Restart Sublime Text after you install this package.*

*For Laravel 3 please see the [laravel3](https://github.com/Medalink/laravel-blade/tree/laravel3) branch.*
*You can also check out our [tags](https://github.com/Medalink/laravel-blade/tags) section for different Laravel versions.*

### Sublime Text Manual Install

* Download or clone this repository into [install-dir]/Packages/laravel-blade
* Restart Sublime Text.

### Yeah but, show me what it is?

![blade-example](/screenshot.jpg?raw=true "blade-example")

*[Predawn](https://github.com/jamiewilson/predawn).*

![blade-example](/screenshot2.jpg?raw=true "blade-example-2")

*[Material Theme](https://github.com/equinusocio/material-theme).*

#### Supported Extensions

* [Blade Extensions Laravel Package](https://github.com/RobinRadic/blade-extensions)

#### How to Contribute

* To test a local version of the highlighter first uninstall the highlighter from package control.
* Follow the manual installation process by cloning the repo into your packages directory.
* Restart Sublime Text.
* Open up the '[install-dir]/Packages/laravel-blade' folder into a new Sublime Text project.
* Open up the laravel-blade.tmLanguage file and make changes.
* I have provided a test.blade file that holds most of the common uses for testing the regex, use this to verify your changes before and after you make them to ensure the changes you make do not break anything.
* Send a pull request with a single change per request.
