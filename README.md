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
* \\CubicleSoft\\CRC32Stream - Calculates CRC32 checksums in a streaming format.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/crc32_stream.md)  (src/CRC32Stream.php)
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
* \\CubicleSoft\\DeflateStream - Compresses/Uncompresses deflate data (including gzip) in a streaming format without intermediate files.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/deflate_stream.md)  (src/DeflateStream.php)
* \\CubicleSoft\\DigitalOcean - A complete SDK for interacting with all DigitalOcean APIs.  (src/DigitalOcean.php)
* \\CubicleSoft\\EventManager - Register to listen for events whenever the application fires them.  Can be the basis of a plugin/module system.  (src/EventManager.php)
* \\CubicleSoft\\FlexForms - Powerful class for building/generating HTML forms.  Highly extensible with XSRF and anti-bot defenses.  [Documentation](https://github.com/cubiclesoft/php-flexforms/blob/master/docs/flex_forms.md)  (src/FlexForms.php)
* \\CubicleSoft\\HTTP - Baseline static functions in a class for performing all things HTTP.  Has powerful URL parsing tools (e.g. relative to absolute URL conversion).  Used primarily by WebBrowser.  Asynchronous capable.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/http.md)  (src/HTTP.php)
* \\CubicleSoft\\IPAddr - Static functions in a class for processing IPv4 and IPv6 addresses into a uniform format.  (src/IPAddr.php)
* \\CubicleSoft\\MIMEParser - Parses MIME content of all forms.  Intended primarily for use with POP3.  (src/MIMEParser.php)
* \\CubicleSoft\\MultiAsyncHelper - Not for the feint of heart.  This class simplifies management of mixing multiple non-blocking objects.  See the Ultimate Web Scraper toolkit test suite for example usage.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/multi_async_helper.md)  (src/MultiAsyncHelper.php)
* \\CubicleSoft\\POP3 - Powerful class for accessing a POP3 server.  Pair it with MIMEParser and TagFilter for advanced e-mail handling.  (src/POP3.php)
* \\CubicleSoft\\SMTP - Powerful set of static functions in a class for sending e-mail.  Full RFC support.  (src/SMTP.php)
* \\CubicleSoft\\Str - Static functions in a class for doing basic, common, but missing string manipulation.  Common initialization routines for CubicleSoft applications.  Some minor carryover from extremely old C++ libraries.  (src/Str.php)
* \\CubicleSoft\\TagFilter - The world's most powerful tag filtering PHP class.  It can clean up the worst HTML (e.g. Word HTML) in a single pass or extract data (or both).  As a direct result, it is blistering fast.  Many, many times faster and smaller than everything else I've used.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md)  (src/TagFilter.php)
* \\CubicleSoft\\TagFilterNodes - Output from TagFilter::Explode(), which explodes a HTML document into a flattened DOM-like structure.  From there, use CSS3 media queries to locate nodes of interest.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md#tagfilternodes-class)  (src/TagFilterNodes.php)
* \\CubicleSoft\\TagFilterNode - TagFilterNodes::Get() returns a TagFilterNode object which provides easy but slower object-oriented access to TagFilterNodes.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md#tagfilternode-class)  (src/TagFilterNode.php)
* \\CubicleSoft\\TagFilterNodeIterator - Allows iteration over CSS3 query results from TagFilterNode::Find() using foreach.  Also has a Filter() function to further reduce results using additional CSS3 selectors.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md#tagfilternodeiterator-class)  (src/TagFilterNodeIterator.php)
* \\CubicleSoft\\TagFilterStream - Used by TagFilter but can be used separately for processing large HTML files in smaller chunks (aka a stream).  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/tag_filter.md#tagfilterstream-class)  (src/TagFilterStream.php)
* \\CubicleSoft\\UTF8 - Flexible UTF-8 string manipulation static functions in a class.  CubicleSoft was doing Unicode and UTF-8 long before Unicode and UTF-8 were cool.  (src/UTF8.php)
* \\CubicleSoft\\WebBrowser - Probably the most powerful state tracking system in pure PHP for web scraping.  Virtually indistiguishable from a real web browser and therefore extremely difficult to detect.  Has HTML form extraction and command-line shell interface capabilities.  I occasionally dream of adding a Javascript parsing engine to it.  Superior in every way to Guzzle when it comes to web scraping (Guzzle is an API consumer, not a web scraper - different domains).  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/web_browser.md)  (src/WebBrowser.php)
* \\CubicleSoft\\WebBrowserForm - Represents and manipulates a single extracted HTML form from a page.  Generates WebBrowser-compliant output for feeding back into WebBrowser for another request.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/web_browser.md#webbrowserform-class)  (src/WebBrowserForm.php)
* \\CubicleSoft\\WebServer - It is what it says on the tin.  It's a web server.  In pure PHP.  Abuses the HTTP class to implement a rather scary and complete feature set that probably rivals Apache.  Isn't going to win any performance awards.  Is probably susceptible to DoS attacks due to bugs in PHP.  Used by Cloud Storage Server to implement a really nice API.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/web_server.md)  (src/WebServer.php)
* \\CubicleSoft\\WebSocket - Implements a WebSocket client.  Probably not as robust as it could be on the async front but, unlike most WebSocket classes, this one allows the application to ignore those pesky control packets.  [Docuemtation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/websocket.md)  (src/WebSocket.php)
* \\CubicleSoft\\WebSocketServer - Move over Node.js and whatever else is out there.  A new WebSocket server is in town.  With limits on packet size because, well, WebSocket vulnerabilities.  Actually, you probably shouldn't use this in production environments either.  WebSocket is kind of a broken protocol.  The server exists to test the client because there aren't that many open servers out there.  [Documentation](https://github.com/cubiclesoft/ultimate-web-scraper/blob/master/docs/websocket_server.md)  (src/WebSocketServer.php)
* \\CubicleSoft\\simple_html_dom - Not actually a CubicleSoft class.  Accidental inclusion from Ultimate Web Scraper Toolkit.  \[Shrugs\]  Obsoleted by TagFilter.  (src/simple_html_dom.php)

Other:

* \\CubicleSoft\\CalendarEvent_TZSwitch - Internal or undocumented class.  (src/CalendarEvent_TZSwitch.php)
* \\CubicleSoft\\CSDB_PDO_Statement - Internal or undocumented class.  (src/CSDB_PDO_Statement.php)
* \\CubicleSoft\\Request - Internal or undocumented class.  (src/Request.php)
* \\CubicleSoft\\simple_html_dom_node - Internal or undocumented class.  (src/simple_html_dom_node.php)
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
