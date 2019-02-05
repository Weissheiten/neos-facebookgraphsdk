# Facebook Graph SDS wrapper for Neos CMS

This package is a wrapper for the Facebook SDK for PHP for easy usage in your own Neos CMS plugins.


## Adjust your settings

The Weissheiten.Neos.Bootstrap is listed on packagist now (https://packagist.org/packages/weissheiten/neos-bootstrap) - therefore you don't have to include the package in your "repositories" entry any more.

Just add the following line to your require section:

```
"weissheiten/neos-bootstrap": "2.*"
```

And the run this command to fetch the plugin:

```
composer update
```

## Including Bootstrap

The Weissheiten Bootstrap package does NOT use the TYPO3.Twitter.Bootstrap package at the moment.
So you have to include either that package or Bootstrap yourself in your main templates.

## Author

* email: florian.weiss@weissheiten.at 
* url: http://www.weissheiten.at 
* twitter: @WeissheitenWien

## Contributors

Thank you for contributing
* Egobude (zeroboh@gmail.com)
