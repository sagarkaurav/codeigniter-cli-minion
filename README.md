# Codeigniter Cli Minion

Codeigniter cli minion si a cli tool to help you generate controller and model for your codeingiter 3 projects.

`NOTE: This package is not ready for use yet. still needs some works to be done like writing test and exception handling and refactoring.`
## Installation

1.) Download composer using
`curl -s https://getcomposer.org/installer | php`

2.) Install Codeigniter cli minion.
`php composer.phar require-dev sagarkaurav/codeingiter-cli-minion`

## Generate configration file

Run the following command from root of your project directory

`vendor/bin/ccm init`
The above command will `ccm.yml` file in ypur root directory with default configrations.

## commands

* list
`vendor/bin/ccm list` shows list all the available commands

* help

`vendor/bin/ccm help {command name}` Display help text about the command

* Generate controller
`vendor/bin/ccm generate:controller <name> [<actions>]`
where `name` is the name of controller you want to generate
and `actions` are the actions name in your controller.

* Generate model
`vendor/bin/ccm generate:model <name>`
where `name` is the name of model you want to generate.
This command also generate phinx create table migration for the model.

* Gnerate views
`vendor/bin/ccm  generate:views [options] [--] <names>`

Where `names` are the name of views files
and you can also pass `--dir={directory name}` option to specify sub directory for your views.
