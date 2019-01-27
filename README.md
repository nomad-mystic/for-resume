
# Passion Impact Custom Theme 
[![Build Status](https://travis-ci.com/PassionImpact/website-redesign-2018.svg?token=YqV6JTL4xf2nj5tdZMex&branch=master)](https://travis-ci.com/PassionImpact/website-redesign-2018) 

### Local Dev Setup 
You are going to need to install a few things on your computer to get the local DEV ENV setup for theme development.

Note: There are going to be some permission issues depending on your system and where your development files.

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

#### Composer Globally 
Dependency for Mac and Linux is PHP

Unix systems Mac and Linux: 
This will install composer into the current directory and the last step. Read the docs for install below. 
1. php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
2. php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
3. php composer-setup.php
4. php -r "unlink('composer-setup.php');"
5. sudo mv composer.phar /usr/local/bin/composer
 
[Install docs](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

Windows: [Get Composer Org Install](https://getcomposer.org/doc/00-intro.md#installation-windows)

#### Node JS 
Windows, Mac, Linux: [Install Portal](https://nodejs.org/en/download/)

#### Yarn 
Dependency Node JS
Windows, Mac, Linux: [Install Portal](https://yarnpkg.com/lang/en/docs/install/)


### Setup theme 
1. cd into theme folder 
2. run composer install 
3. run yarn install 
4. log into Wordpress dashboard 
5. Activate Passion impact theme 

#### Notes
You might need to change the permissions for the theme folder to able to edit the files in it. 

Mac and Linux: 

1. cd to themes folder 
2. sudo chown -R \<user>:\<user> ./passion_impact

Windows: Not sure 

### Basic WordPress Setup
There are a couple basic steps you are going to want to do when you start working in the Wordpress dashboard.

1. Go to settings => permalinks change to "Post name" => Save Changes
2. After you make a Home page go to Appearance => Customize => Homepage Settings Change it in the dropdown to Homepage that new page.

### Uses [Sage](https://roots.io/sage/)
[![Packagist](https://img.shields.io/packagist/vpre/roots/sage.svg?style=flat-square)](https://packagist.org/packages/roots/sage)
[![devDependency Status](https://img.shields.io/david/dev/roots/sage.svg?style=flat-square)](https://david-dm.org/roots/sage#info=devDependencies)
[![Build Status](https://img.shields.io/travis/roots/sage.svg?style=flat-square)](https://travis-ci.org/roots/sage)

Sage is a WordPress starter theme with a modern development workflow.

[Install Docs](https://roots.io/sage/docs/theme-installation/)

[Community for Sage](https://discourse.roots.io/c/sage)
