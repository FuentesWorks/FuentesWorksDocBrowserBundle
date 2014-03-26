FuentesWorksDocBrowserBundle
============================

A very simple browser for flat markdown files, meant to be used internally as a wiki.


On force-refresh, checks the current status and pulls and updates as necessary.

OLD VERSION
===========

project-documentation-bundle
============================

blah blah blah

A simple flat-file documentation browser, using Markdown and GitHub.

Markdown formatting
Twig Templates
No database (flat-file)

Also, you get all the benefits from github
Collaboration
Version control


Installation with composer
--------------------------

Declare ___ as a dependency in your project's ```composer.json``` file:

```json
{
  "require": {
    "efuentes/project-documentation-bundle": "dev-master"
  }
}
```

Configuration
-------------

In order to use this bundle, load it in your ```AppKernel.php```:

```php
<?php
```


And include it in your ```routing.yml```:

```yaml
EFuentesProjectDocumentationBundle:
    resource: "@ChillDevFileManagerBundle/Controller/"
    type: "annotation"
    prefix: "/filemanager"
	
```

Where ```$PREFIX``` can be any route that doesn't asdfklñjasdf

Finally, create the repo configuration in your ```config.yml```:

```yaml
efuentes_project_documentation:
	repo: "https://github.com/username/myrepo"
	local
```

Security Configuration
----------------------

If you want to protect your documentation, you'll just have to add the route to your existing ```security.yml```:

```yaml
ldsjfñlkjasdf
```

The bundle will automatically detect the user and add appropiate User status and logout buttons.

GitHub Hooks Configuration
--------------------------
asdfkjasdñlfkjadsfñkjdsflkjsdf

It'll create a listener on $DOMAIN/$PREFIX/_github

NOTE: If you are using security, make sure to **exclude** this route from the firewall

Usage
-----

It's pretty simple, create a 

External Libraries
------------------
[phpMarkdown](http://michelf.ca/projects/php-markdown/) for parsing the markdown and generating valid HTML
Twitter Bootstrap for the default theme

References
----------
Deploying code automatically with github webhooks, by Jonathan Stark
http://jonathanstark.com/blog/deploying-code-automatically-with-github-webhooks