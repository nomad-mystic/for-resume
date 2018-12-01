
# Passion Impact Custom Theme 
[![Build Status](https://travis-ci.com/PassionImpact/website-redesign-2018.svg?token=YqV6JTL4xf2nj5tdZMex&branch=master)](https://travis-ci.com/PassionImpact/website-redesign-2018) 

Readme to come 
### Local Dev Setup 
You are going to need to install a few things on your computer to get the local DEV ENV setup for theme development

#### PHP 7.2
Mac: Taken from [Medium (Homebrew)](https://medium.com/@romaninsh/install-php-7-2-on-macos-high-sierra-with-homebrew-bdc4d1b04ea6)
Note "httpd" is apache2 service

Windows: Taken from [Sitepoint](https://www.sitepoint.com/how-to-install-php-on-windows/)

Linux (Ubuntu 18.04):
1. sudo apt update
2. sudo apt install php
3. php -v

Install Common Modules 

1. sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc php-gd php-mysql php-mbstring php-xml libapache2-mod-php

To check all the PHP modules available in Ubuntu, run:
2. apt-cache search --names-only ^php

Taken form [This Hosting](https://thishosting.rocks/install-php-on-ubuntu/)

Note: All Systems will need to make sure "php-mbstring" is enabled in their php.ini settings 

### Uses [Sage](https://roots.io/sage/)
[![Packagist](https://img.shields.io/packagist/vpre/roots/sage.svg?style=flat-square)](https://packagist.org/packages/roots/sage)
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/roots/sage#info=devDependencies)
[![Build Status](https://img.shields.io/travis/roots/sage.svg?style=flat-square)](https://travis-ci.org/roots/sage)

Sage is a WordPress starter theme with a modern development workflow.

[Install Docs](https://roots.io/sage/docs/theme-installation/)

[Community for Sage](https://discourse.roots.io/c/sage)