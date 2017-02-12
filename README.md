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

* \\CubicleSoft\\CalendarEvent - Powerful scheduling class.  Feed in a cron line, get back the next timestamp of when something should trigger.  (src/CalendarEvent.php)
* \\CubicleSoft\\CLI - Static functions in a class to extract command-line options, parse user input on the command-line, and log messages to the console.  Do you really need a separate logging library?  I don't.  (src/CLI.php)
* \\CubicleSoft\\CRC32Stream - Calculates CRC32 checksums in a streaming format.  (src/CRC32Stream.php)
* \\CubicleSoft\\CSDB - Cross-database, cross-platform, lightweight base class for interfacing with databases.  Designed specifically for developing open source applications where the target database is unknown.  Write each SQL query one time and have all queries automagically work for all supported databases.  Complete with all the standard features you expect in a SQL injection free database class.  Uses PDO by default.  (src/CSDB.php)
* \\CubicleSoft\\CSDB_mysql - Full MySQL/Maria DB interface.  (src/CSDB_mysql.php)
* \\CubicleSoft\\CSDB_mysql_lite - Lightweight MySQL/Maria DB interface.  (src/CSDB_mysql_lite.php)
* \\CubicleSoft\\CSDB_oci - Full Oracle DB interface (needs work).  (src/CSDB_oci.php)
* \\CubicleSoft\\CSDB_oci_lite - Lightweight Oracle DB interface (needs work).  (src/CSDB_oci_lite.php)
* \\CubicleSoft\\CSDB_pgsql - Full PostgreSQL interface.  (src/CSDB_pgsql.php)
* \\CubicleSoft\\CSDB_pgsql_lite - Lightweight PostgreSQL interface.  (src/CSDB_pgsql_lite.php)
* \\CubicleSoft\\CSDB_sqlite - Full SQLite interface.  (src/CSDB_sqlite.php)
* \\CubicleSoft\\CSDB_sqlite_lite - Lightweight SQLite interface.  (src/CSDB_sqlite_lite.php)
* \\CubicleSoft\\CSPRNG - Cross-platform Cryptographically Secure Random Number Generator (CSPRNG).  Unlike nearly all of the classes out there that claim to implement a CSPRNG, this one actually does things correctly because I scoured the actual PHP C source code and spent the necessary time figuring out which calls called the system-level CSPRNG for each major platform.  This class also doesn't wimp out and fallback to some hocus-pocus, non-random, weak sauce solution - it throws an Exception which you intentionally and correctly do not ever catch.  (src/CSPRNG.php)
* \\CubicleSoft\\DeflateStream - Compresses/Uncompresses deflate data (including gzip) in a streaming format without intermediate files.  (src/DeflateStream.php)
* \\CubicleSoft\\DigitalOcean - A complete SDK for interacting with all DigitalOcean APIs.  (src/DigitalOcean.php)
* \\CubicleSoft\\EventManager - Register to listen for events whenever the application fires them.  Can be the basis of a plugin/module system.  (src/EventManager.php)
* \\CubicleSoft\\HTTP - Baseline static functions in a class for performing all things HTTP.  Has powerful URL parsing tools (e.g. relative to absolute URL conversion).  Used primarily by WebBrowser.  Asynchronous capable.  (src/HTTP.php)
* \\CubicleSoft\\IPAddr - Static functions in a class for processing IPv4 and IPv6 addresses into a uniform format.  (src/IPAddr.php)
* \\CubicleSoft\\MIMEParser - Parses MIME content of all forms.  Intended primarily for use with POP3.  (src/MIMEParser.php)
* \\CubicleSoft\\MultiAsyncHelper - Not for the feint of heart.  This class simplifies management of mixing multiple non-blocking objects.  See the Ultimate Web Scraper toolkit test suite for example usage.  (src/MultiAsyncHelper.php)
* \\CubicleSoft\\POP3 - Powerful class for accessing a POP3 server.  Pair it with MIMEParser and TagFilter for advanced e-mail handling.  (src/POP3.php)
* \\CubicleSoft\\simple_html_dom - Not actually a CubicleSoft class.  Accidental inclusion from Ultimate Web Scraper Toolkit.  \[Shrugs\]  (src/simple_html_dom.php)
* \\CubicleSoft\\SMTP - Powerful set of static functions in a class for sending e-mail.  Full RFC support.  (src/SMTP.php)
* \\CubicleSoft\\Str - Static functions in a class for doing basic, common, but missing string manipulation.  Common initialization routines for CubicleSoft applications.  Some minor carryover from extremely old C++ libraries.  (src/Str.php)
* \\CubicleSoft\\TagFilter - The world's most powerful tag filtering PHP class.  It is hard to use BUT it can clean up the worst HTML (e.g. Word HTML) in a single pass or extract data (or both).  As a direct result, it is blistering fast.  Many, many times faster and smaller than HTML Purifier, which was my previous go-to for HTML cleanup, but it is just as capable.  (src/TagFilter.php)
* \\CubicleSoft\\TagFilterStream - Used by TagFilter but can be used separately for processing large HTML files in smaller chunks.  (src/TagFilterStream.php)
* \\CubicleSoft\\UTF8 - Flexible UTF-8 string manipulation static functions in a class.  CubicleSoft was doing Unicode and UTF-8 long before Unicode and UTF-8 were cool.  (src/UTF8.php)
* \\CubicleSoft\\WebBrowser - Probably the most powerful state tracking system in pure PHP for web scraping.  Virtually indistiguishable from a real web browser and therefore extremely difficult to detect.  Has HTML form extraction and command-line shell interface capabilities.  I occasionally dream of adding a Javascript parsing engine to it.  Superior in every way to Guzzle when it comes to web scraping (Guzzle is an API consumer, not a web scraper - different domains).  (src/WebBrowser.php)
* \\CubicleSoft\\WebBrowserForm - Represents and manipulates a single extracted HTML form from a page.  Generates WebBrowser-compliant output for feeding back into WebBrowser for another request.  (src/WebBrowserForm.php)
* \\CubicleSoft\\WebServer - It is what it says on the tin.  It's a web server.  In pure PHP.  Abuses the HTTP class to implement a rather scary and complete feature set that probably rivals Apache.  Isn't going to win any performance awards.  Is probably susceptible to DoS attacks due to bugs in PHP.  Used by Cloud Storage Server to implement a really nice API.  (src/WebServer.php)
* \\CubicleSoft\\WebSocket - Implements a WebSocket client.  Probably not as robust as it could be on the async front but, unlike most WebSocket classes, this one allows the application to ignore those pesky control packets.  (src/WebSocket.php)
* \\CubicleSoft\\WebSocketServer - Move over Node.js and whatever else is out there.  A new WebSocket server is in town.  With limits on packet size because, well, WebSocket vulnerabilities.  Actually, you probably shouldn't use this in production environments either.  WebSocket is kind of a broken protocol.  The server exists to test the client because there aren't that many open servers out there.  (src/WebSocketServer.php)

Other:

* \\CubicleSoft\\CalendarEvent_TZSwitch - Internal or undocumented class.  (src/CalendarEvent_TZSwitch.php)
* \\CubicleSoft\\CSDB_PDO_Statement - Internal or undocumented class.  (src/CSDB_PDO_Statement.php)
* \\CubicleSoft\\simple_html_dom_node - Internal or undocumented class.  (src/simple_html_dom_node.php)
* \\CubicleSoft\\TagFilterNode - Internal or undocumented class.  (src/TagFilterNode.php)
* \\CubicleSoft\\TagFilterNodeIterator - Internal or undocumented class.  (src/TagFilterNodeIterator.php)
* \\CubicleSoft\\TagFilterNodes - Internal or undocumented class.  (src/TagFilterNodes.php)
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
