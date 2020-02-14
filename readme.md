## Laravel Blade Highlighter

This package adds syntax definitions for the [Laravel](http://www.laravel.com) Blade engine.

*Works with various Sublime Text verions, for older/specific versions use older/specific release.*

### How to install w/[Sublime Package Control](http://wbond.net/sublime_packages/package_control)

1. Search for Laravel Blade and install it.
2. Restart Sublime Text.
3. Reopen any ```.blade``` files.
4. Enjoy :)

### Sublime Text Manual Install

1. Download or clone this repository into ```[install-dir]/Packages/laravel-blade```
2. Restart Sublime Text.
3. Reopen any ```.blade``` files.
4. Enjoy :)

### Yeah but, show me what it is?

![blade-example](https://cloud.githubusercontent.com/assets/499192/8564960/52a7e57c-2551-11e5-8182-1f24a6d8d17a.jpg "blade-example")

*[Predawn](https://github.com/jamiewilson/predawn).*

![blade-example](https://cloud.githubusercontent.com/assets/499192/8564966/68f19076-2551-11e5-9bc2-13d8b0915ffa.jpg "blade-example-2")

*[Material Theme](https://github.com/equinusocio/material-theme).*

#### Supported Extensions

* [Blade Extensions Laravel Package](https://github.com/RobinRadic/blade-extensions)

#### How to Contribute

* To test a local version of the highlighter first uninstall the highlighter from package control.
* Follow the manual installation process by cloning the repo into your packages directory.
* Restart Sublime Text.
* Open up the '[install-dir]/Packages/laravel-blade' folder into a new Sublime Text project.
* Open up the blade.tmLanguage file and make changes.
* I have provided a test.blade file that holds most of the common uses for testing the regex, use this to verify your changes before and after you make them to ensure the changes you make do not break anything.
* Send a pull request with a single change per request.
