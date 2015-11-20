# Build an App with Orchestra Platform 3

## Table of Content

* [Install Orchestra Platform & Create New Project](#install-orchestra-platform--create-new-project)
    - Install Lumen
*

## Install Orchestra Platform & Create New Project

First Install Composer By Following [this guide](https://getcomposer.org/doc/00-intro.md).

Then, download the Lumenate installer using Composer.

    composer global require "orchestra/lumenate=^0.1"

Once successfully installed, you can type composer create project command to create new Orchestra Platform project (we'll be using `ovue` as the project name).

    composer create-project orchestra/platform ovue 3.1.x --prefer-dist

After successfully creating the project, make sure your webserver is running (we will be using the serve command for now), now go into the project directory and type.

    php artisan serve

Now you can open the following url <http://localhost:8000>, and you will see the Laravel front page.

### Install Lumen

Now, you can also setup Lumen for Orchestra Platform by running the following command.

    lumenate install

Once `orchestra/lumen` is installed, you can run the following command to insert the app skeleton code (which will be added under `lumen` directory).

    lumenate make

