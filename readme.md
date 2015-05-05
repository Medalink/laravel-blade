## Laravel Blade Highlighter

This package adds syntax definitions for the [Laravel 4 & 5](http://www.laravel.com) Blade engine.

*Works with both Sublime Text 2 & Sublime Text 3.*

### How to install w/[Sublime Package Control](http://wbond.net/sublime_packages/package_control)

Search for Laravel Blade and install it, it's just that simple.

*Restart Sublime Text after you install this package.*

*For Laravel 3 please see the [laravel3](https://github.com/Medalink/laravel-blade/tree/laravel3) branch.*
*You can also check out our [tags](https://github.com/Medalink/laravel-blade/tags) section for different Laravel versions.*

### Sublime Text Manual Install

* Download or clone this repository into [install-dir]/Packages/laravel-blade
* Restart Sublime Text.

### Yeah but, show me what it is?

![blade-example](/screenshot.png?raw=true "blade-example")

*Note: color may vary depending on theme. I use [Predawn](https://github.com/jamiewilson/predawn).*

#### Compatible Laravel Extensions

* [Blade Extensions Laravel Package](https://github.com/RobinRadic/blade-extensions)

#### Incompatible Plugins

Below are third-party plugins for Sublime Text that may cause the Laravel Blade highlighter to malfunction.

* [HTML5 for Sublime Text 2](https://github.com/mrmartineau/HTML5)

*Please report issues with other plugins so I can either fix it or make note, thanks!*

#### How to Contribute

* To test a local version of the highlighter first uninstall the highlighter from package control. 
* Follow the manual installation process by cloning the repo into your packages directory.
* Restart Sublime Text.
* Open up the '[install-dir]/Packages/laravel-blade' folder into a new Sublime Text project.
* Open up the laravel-blade.tmLanguage file and make changes.
* I have provided a test.blade file that holds most of the common uses for testing the regex, use this to verify your changes before and after you make them to ensure the changes you make do not break anything.
* Send a pull request with a single change per request.

A few things to note, please do not change any of the named strings. These are what directly affect the color and capturing priorities and could potentially break a lot of things. Unless you know what you are doing I would prefer these be left as is.

Examples of named strings:

* punctuation.definition.comment.laravel-blade.php
* comment.block.laravel-blade.php
* support.constant.laravel-blade

Thanks for getting involved!
