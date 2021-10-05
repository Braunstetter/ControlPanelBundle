# ControlPanelBundle

[![Build Status](https://app.travis-ci.com/Braunstetter/ControlPanelBundle.svg?branch=main)](https://app.travis-ci.com/Braunstetter/ControlPanelBundle)
[![Total Downloads](http://poser.pugx.org/braunstetter/control-panel-bundle/downloads)](https://packagist.org/packages/braunstetter/control-panel-bundle)
[![License](http://poser.pugx.org/braunstetter/control-panel-bundle/license)](https://packagist.org/packages/braunstetter/control-panel-bundle)

Sometimes you don't want to commit to a complete admin system. But you would like to have a nice admin panel structure
ready to be extended.

## Installation

```shell
composer require braunstetter/control-panel-bundle
yarn install --force
```

## What's inside

### Templates

- [layouts/base.html.twig](Resources/views/layouts/base.html.twig) (Mobile structure - but empty)
- [base.html.twig](Resources/views/base.html.twig) (contains structure with template hooks)

You can extend these templates, but you can also use
the [braunstetter/template-hooks-bundle](https://github.com/Braunstetter/TemplateHooksBundle) whose hooks are used
inside of the `base.html.twig` file.

### FormTypes

This bundle comes with several [custom form types](https://symfony.com/doc/current/form/create_custom_field_type.html).
To show you how you can use it, I want to show you an [example](#pagetype-example).

<sub>_To make this work you need an `OrangePuppy` [Entity](https://symfony.com/doc/current/doctrine.html#creating-an-entity-class) with a title and a description property on it._</sub>


## Example - Up and running a fully working controlpanel

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
{% extends '@ControlPanel/base.html.twig' %}

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


## PageType Example

```php
<?php

namespace App\Form;

use App\Entity\OrangePuppy;
use Braunstetter\ControlPanel\Form\PageType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrangePuppyType extends PageType
{
    public function buildBodyForm(FormInterface $builder, array $options)
    {
        $builder
            ->add('title');
    }

    public function buildSidebarForm(FormInterface $builder, array $options)
    {
        $builder->add('sideBox', TestBoxType::class);
    }

    public function buildToplineRightForm(FormInterface $builder, array $options)
    {
        $builder->add('submit', SubmitType::class, ['attr' => ['class' => 'cp-button-default']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'title' => 'Create a new OrangePuppy',
            'data_class' => OrangePuppy::class,
        ]);
    }

    public function getParent()
    {
        return PageType::class;
    }
}
```

And here comes the explanation.

1. Extend `Braunstetter\ControlPanel\Form\PageType;` (for additional build-methods)
2. Set the title as an option (Either by submitting the option when creating the form, or by setting it inside
   the [`configureOptions` method](https://symfony.com/doc/current/forms.html#passing-options-to-forms))
3. Overwrite `public function getParent()` to get view variables and the theme block_prefix inheritance (basically make
   the styling working ;)
4. Use the public `buildBodyForm`, `buildSidebarForm`, `buildToplineRightForm`, `buildToplineLeftForm` methods to fill
   the form.

The result:
![page form result](./docs/images/page_form_result.png)

> The `cp-button-default` is a [custom button class](src/Resources/assets/css/elements/buttons.css) this bundle provides.

> The nice menu on the left side is provided by the [braunstetter/menu-bundle](https://github.com/Braunstetter/menu-bundle).
 

### BoxType

Maybe you ask yourself where the nice sidebar box is coming from. And probably you recognized the `TestBoxType` inside the `buildSidebarForm` method.
This is the second custom FormType this bundle provides. Here is an example:

```php
<?php

namespace App\Form;

use Braunstetter\ControlPanel\Form\BoxType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TestBoxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description', TextType::class);
    }

    public function getParent(): string
    {
       return BoxType::class;
    }
}
```

This time you just have to overwrite the `getParent()` and return the `Braunstetter\ControlPanel\Form\BoxType`. (Because this FormType has no special methods.)

> The BoxType has the symfony [inherit_data](https://symfony.com/doc/current/form/inherit_data_option.html) option active by default. This way you can just use it just like you put the forms inside the parent class themselves.
