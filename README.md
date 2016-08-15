# Carnegie International 2018 (Phase 1)

WordPress theme and plugin set for the Carnegie International 2018 site, based on the [Sage starter theme](http://roots.io/sage).

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) or [nvm](https://github.com/creationix/nvm) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

### Initial Setup

Install [VirtualBox](https://www.virtualbox.org/), [Vagrant](https://www.vagrantup.com/downloads.html) and [Ansible](http://docs.ansible.com/ansible/intro_installation.html) then run `vagrant up` from the project directory. This will build up the project dependencies in a virtual machine.

### Development flow

To install PHP packages, download [Composer](https://getcomposer.org/download/) and run `php composer.phar install` from the project root directory.

For front-end tooling, first install node (recommended version 4.2+ or 5.1+)

 > Check out [nvm](https://github.com/creationix/nvm) for a simple way to manage node versions on your development machine.

After node is installed, install `gulp` and `bower` and run `npm install` and `bower install` from within the theme directory to install any other dependencies.

Run `gulp` from within the theme directory to load a development server with Browsersync enabled. Static assets will be automatically recompiled and bundled when saved.

Run `gulp production` from within the theme directory to build assets for production and update the asset manifest.

### Running Tests

Composer should install the [Codeception](http://codeception.com/) testing framework.

Download (or install via package manager) [phantomjs](http://phantomjs.org/download.html) and run `phantomjs --webdriver=4444` to start the headless web driver on port 4444.

Run `php codecept.phar run` to start the test suite.
