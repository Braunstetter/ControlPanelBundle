# ControlPanelBundle

[![Build Status](https://app.travis-ci.com/Braunstetter/ControlPanelBundle.svg?branch=main)](https://app.travis-ci.com/Braunstetter/ControlPanelBundle)
[![Total Downloads](http://poser.pugx.org/braunstetter/control-panel-bundle/downloads)](https://packagist.org/packages/braunstetter/control-panel-bundle)
[![License](http://poser.pugx.org/braunstetter/control-panel-bundle/license)](https://packagist.org/packages/braunstetter/control-panel-bundle)

Sometimes you don't want to commit to a complete admin system. But you would like to have a nice admin panel structure ready to be extended.

## Installation

```shell
composer require braunstetter/control-panel-bundle
yarn install --force
```

## What's inside

- [layouts/base.html.twig](Resources/views/layouts/base.html.twig) (Mobile structure - but empty)
- [base.html.twig](Resources/views/base.html.twig) (contains structure with template hooks)

You can extend these templates, but you can also use the [braunstetter/template-hooks-bundle](https://github.com/Braunstetter/TemplateHooksBundle) whose hooks are used inside of the cp_base.html.twig file.

## Example

### Create a new symfony project.

```shell
symfony new --full my_project
composer install
```

### Setup the database

For this simple test just use a sqlite database by changing the `.env` file to: 

```dotenv
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
# DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
#DATABASE_URL="postgresql://db_user:db_password@127.0.0.1:5432/db_name?serverVersion=13&charset=utf8"
###< doctrine/doctrine-bundle ###
```

````shell
symfony console doctrine:database:create
````

### Create a Controller with a route

```shell
symfony console make:controller

 Choose a name for your controller class (e.g. DeliciousElephantController):
 > SiteController

 created: src/Controller/SiteController.php
 created: templates/site/index.html.twig

           
  Success! 
           

```
### Edit the twig template

Change `templates/site/index.html.twig`:

```html
{% extends '@ControlPanel/cp_base.html.twig' %}

{% block title %}Hello SiteController!{% endblock %}

{% block content %}
```

> Note: don't forget to change the block name from `body` to `content`

### Start the webserver and visit your control panel

```shell
symfony serve -d
```

Now you can see the result by visiting the `/site` url.

![Empty control panel](docs/images/empty_control_panel.png)