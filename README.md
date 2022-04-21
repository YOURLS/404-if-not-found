# YOURLS plugin : 404 if not found [![Listed in Awesome YOURLS!](https://img.shields.io/badge/Awesome-YOURLS-C5A3BE)](https://github.com/YOURLS/awesome-yourls/)

By default and by design, when a requested short URL is not found, YOURLS redirects to the site root with a "302 temporary redirect" header.

From the source:
```php
yourls_redirect( YOURLS_SITE, 302 ); // no 404 to tell browser this might change,
                                     // and also to not pollute logs
```

This plugin outputs a default "`404 not found`" error page instead.

## Installation

1. In `/user/plugins`, create a new folder named `404-if-not-found`.
2. Drop these files in that directory.
3. Go to the Plugins administration page (eg. `http://sho.rt/admin/plugins.php`) and activate the plugin.
4. Have fun!

## License

Do whatever the hell you want with this.
