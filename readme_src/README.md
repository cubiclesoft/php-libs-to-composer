CubicleSoft PHP Software Development Libraries for Composer
===========================================================

A single repository containing all CubicleSoft PHP libraries in a CubicleSoft namespace and then made Composer ready.  Fully automated nightly updates.  MIT or LGPL, your choice.

[![Donate](https://cubiclesoft.com/res/donate-shield.png)](https://cubiclesoft.com/donate/)

How To Use
----------

The usual Composer require method works:  https://packagist.org/packages/cubiclesoft/to-composer

````composer require cubiclesoft/to-composer````

License Correction
------------------

The license is actually your choice of MIT or LGPL.  The 'composer.json' file format is rather inflexible and therefore incapable of refined licensing options.

Classes
-------

Included and supported:

@INCLUDECLASSES@

Other:

@OTHERCLASSES@

Sources
-------

@SOURCES@

Frequently Asked Questions
--------------------------

Okay, let's skip the questions.  I don't like Composer.  The best libraries are always self-contained (i.e. no external dependencies), small, light, and fast.  Composer directly violates this core principle of software development.  Looking at the most popular items on Packagist, I see nothing you can't do already with CubicleSoft libraries, a couple of isolated third-party crypto libs (e.g. phpseclib), and some extremely minor bits of glue - all that with far less application code and far fewer files.  Less application code means less time spent writing and maintaining it.  Fewer files means faster uploads to a production environment, fewer open tabs to edit stuff, and fewer security vulnerabilities.

This repository exists only because Composer exists.  Its sole purpose is to provide Composer-lovers a way to use CubicleSoft libraries within that worldview.

BUT just because I don't like something doesn't mean it doesn't exist.  Okay?  Lots and lots of people use Composer.  That said, this repository and package are 100% automated.  Library updates flow in within 24 hours of the upstream push.  The 'update.php' script here performs all of the magic transformations required to convert the libraries to a Composer compatible world and then pushes them into this repository.  Packagist then picks up the newly tagged version and Composer update picks up the changes from there.  You are happy because you get what you want.  I'm happy because I can continue to develop software however I want.
