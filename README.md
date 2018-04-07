CubicleSoft PHP Software Development Libraries for Composer
===========================================================

A single repository containing all CubicleSoft PHP libraries in a CubicleSoft namespace and then made Composer ready.  Fully automated nightly updates.  MIT or LGPL, your choice.

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



Other:

* \\CubicleSoft\\StringBitStream - Internal or undocumented class.  (src/StringBitStream.php)
* \\CubicleSoft\\CalendarEvent - Internal or undocumented class.  (src/CalendarEvent.php)
* \\CubicleSoft\\CalendarEvent_TZSwitch - Internal or undocumented class.  (src/CalendarEvent_TZSwitch.php)
* \\CubicleSoft\\CLI - Internal or undocumented class.  (src/CLI.php)
* \\CubicleSoft\\CRC32Stream - Internal or undocumented class.  (src/CRC32Stream.php)
* \\CubicleSoft\\CSDB - Internal or undocumented class.  (src/CSDB.php)
* \\CubicleSoft\\CSDB_PDO_Statement - Internal or undocumented class.  (src/CSDB_PDO_Statement.php)
* \\CubicleSoft\\CSDB_mysql - Internal or undocumented class.  (src/CSDB_mysql.php)
* \\CubicleSoft\\CSDB_mysql_lite - Internal or undocumented class.  (src/CSDB_mysql_lite.php)
* \\CubicleSoft\\CSDB_oci - Internal or undocumented class.  (src/CSDB_oci.php)
* \\CubicleSoft\\CSDB_oci_lite - Internal or undocumented class.  (src/CSDB_oci_lite.php)
* \\CubicleSoft\\CSDB_pgsql - Internal or undocumented class.  (src/CSDB_pgsql.php)
* \\CubicleSoft\\CSDB_pgsql_lite - Internal or undocumented class.  (src/CSDB_pgsql_lite.php)
* \\CubicleSoft\\CSDB_sqlite - Internal or undocumented class.  (src/CSDB_sqlite.php)
* \\CubicleSoft\\CSDB_sqlite_lite - Internal or undocumented class.  (src/CSDB_sqlite_lite.php)
* \\CubicleSoft\\DeflateStream - Internal or undocumented class.  (src/DeflateStream.php)
* \\CubicleSoft\\EventManager - Internal or undocumented class.  (src/EventManager.php)
* \\CubicleSoft\\FlexForms - Internal or undocumented class.  (src/FlexForms.php)
* \\CubicleSoft\\HTTP - Internal or undocumented class.  (src/HTTP.php)
* \\CubicleSoft\\IPAddr - Internal or undocumented class.  (src/IPAddr.php)
* \\CubicleSoft\\MIMEParser - Internal or undocumented class.  (src/MIMEParser.php)
* \\CubicleSoft\\MultiAsyncHelper - Internal or undocumented class.  (src/MultiAsyncHelper.php)
* \\CubicleSoft\\POP3 - Internal or undocumented class.  (src/POP3.php)
* \\CubicleSoft\\CSPRNG - Internal or undocumented class.  (src/CSPRNG.php)
* \\CubicleSoft\\Request - Internal or undocumented class.  (src/Request.php)
* \\CubicleSoft\\DigitalOcean - Internal or undocumented class.  (src/DigitalOcean.php)
* \\CubicleSoft\\simple_html_dom_node - Internal or undocumented class.  (src/simple_html_dom_node.php)
* \\CubicleSoft\\simple_html_dom - Internal or undocumented class.  (src/simple_html_dom.php)
* \\CubicleSoft\\SMTP - Internal or undocumented class.  (src/SMTP.php)
* \\CubicleSoft\\Str - Internal or undocumented class.  (src/Str.php)
* \\CubicleSoft\\TagFilterStream - Internal or undocumented class.  (src/TagFilterStream.php)
* \\CubicleSoft\\TagFilterNode - Internal or undocumented class.  (src/TagFilterNode.php)
* \\CubicleSoft\\TagFilterNodeIterator - Internal or undocumented class.  (src/TagFilterNodeIterator.php)
* \\CubicleSoft\\TagFilterNodes - Internal or undocumented class.  (src/TagFilterNodes.php)
* \\CubicleSoft\\TagFilter - Internal or undocumented class.  (src/TagFilter.php)
* \\CubicleSoft\\UTF8 - Internal or undocumented class.  (src/UTF8.php)
* \\CubicleSoft\\WebSocket - Internal or undocumented class.  (src/WebSocket.php)
* \\CubicleSoft\\WebSocketServer - Internal or undocumented class.  (src/WebSocketServer.php)
* \\CubicleSoft\\WebBrowser - Internal or undocumented class.  (src/WebBrowser.php)
* \\CubicleSoft\\WebBrowserForm - Internal or undocumented class.  (src/WebBrowserForm.php)
* \\CubicleSoft\\WebServer - Internal or undocumented class.  (src/WebServer.php)
* \\CubicleSoft\\WebServer_TempFile - Internal or undocumented class.  (src/WebServer_TempFile.php)
* \\CubicleSoft\\WebServer_Client - Internal or undocumented class.  (src/WebServer_Client.php)

Sources
-------

* https://github.com/cubiclesoft/php-libs-namespaced

Frequently Asked Questions
--------------------------

Okay, let's skip the questions.  I don't like Composer.  The best libraries are always self-contained (i.e. no external dependencies), small, light, and fast.  Composer directly violates this core principle of software development.  Looking at the most popular items on Packagist, I see nothing you can't do already with CubicleSoft libraries, a couple of isolated third-party crypto libs (e.g. phpseclib), and some extremely minor bits of glue - all that with far less application code and far fewer files.  Less application code means less time spent writing and maintaining it.  Fewer files means faster uploads to a production environment, fewer open tabs to edit stuff, and fewer security vulnerabilities.

This repository exists only because Composer exists.  Its sole purpose is to provide Composer-lovers a way to use CubicleSoft libraries within that worldview.

BUT just because I don't like something doesn't mean it doesn't exist.  Okay?  Lots and lots of people use Composer.  That said, this repository and package are 100% automated.  Library updates flow in within 24 hours of the upstream push.  The 'update.php' script here performs all of the magic transformations required to convert the libraries to a Composer compatible world and then pushes them into this repository.  Packagist then picks up the newly tagged version and Composer update picks up the changes from there.  You are happy because you get what you want.  I'm happy because I can continue to develop software however I want.
