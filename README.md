Add the Sunshine Theme-Block to AlphaLemon CMS
==============================================

This is the theme used on AlphaLemon CMS website since late 2012.

Installation
------------

You can add the **Sunshine Theme-Block** to the application managed by AlphaLemon 
CMS, adding it to the **composer.json** of your Symfony2 application:

.. code-block:: text

    {
        "name": "alphalemon/alphalemon-cms-sandbox",
        [...]
        "require": {
            [...]        
            "alphalemon/app-sunshine-theme-bundle": "dev-master",        
        }
    }

Be sure that there is declared the reference to **http://apps.alphalemon.com** repository,
under the **repositories** option:

.. code-block:: text

    "repositories": [

        [...]

        {
            "type": "composer",
            "url": "http://apps.alphalemon.com/"
        }
    ],

then run the composer's update command:

.. code-block:: text

    php composer.phar update alphalemon/app-sunshine-theme-bundle

To have the new theme available in the AlphaLemon CMS' add blocks menu, you have to 
clear the cache as follows:

.. code-block:: text

    app/console cache:clear --env=alcms

Theme preview
-------------

To preview the theme, click the **Themes** button on the toolbar, then the **Preview and activate**
button.