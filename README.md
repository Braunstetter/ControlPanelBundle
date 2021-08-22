# ControlPanelBundle

Sometimes you don't want to commit to a complete admin system. But you would like to have a nice admin panel structure ready to be extended.

## Installation

`composer require braunstetter/control-panel-bundle`

## What's inside

- [base.html.twig](src/Resources/views/layouts/base.html.twig)
- [cp_base.html.twig](src/Resources/views/cp_base.html.twig)

You can extend these templates, but you can also use the [braunstetter/template-hooks-bundle](https://github.com/Braunstetter/TemplateHooksBundle) whose hooks are used inside of the cp_base.html.twig file.