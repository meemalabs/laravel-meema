# Laravel Meema

Coming soon. This package is under current work in progress and it will be a wrapper around Meema's API.

## Installation

You can install the package via composer:

```bash
composer require meema/laravel-meema
```

## Usage

using the Meema class

``` php
use Meema\LaravelMeema\Facades\Meema

Meema::media()->get();
Meema::folders()->get();
Meema::tags()->get();
Meema::favorites()->get();
Meema::storage()->upload($path);

Meema::media()->get(1,2,3);
Meema::folders()->get(1,2,3);
Meema::tags()->get(1,2,3);
Meema::favorites()->get(1,2,3);

Meema::media()->delete(1,2,3);
Meema::folders()->delete(1,2,3);
Meema::tags()->delete(1,2,3);
Meema::favorites()->delete(1,2,3);

Meema::media()->update(1, $data);
Meema::folders()->update(1, $data);
Meema::tags()->update(1, $data);
Meema::favorites()->update(1, $data);

$media = Meema::media()->find(1);
$folder = Meema::folders()->find(1);
$tag = Meema::tags()->find(1);
$favorite = Meema::favorites()->find(1);

// You can then chain after the find method
$media->delete();
$media->update($data);
$media->folders()->get();
$media->tags()->get();

$folder->delete();
$folder->update($data);
$folder->media()->get();
$folder->tags()->get();

$tag->delete();
$tag->update($data);
$favorite->delete();
$favorite->update($data);

// If you just want to get the array response
$media->toArray();
$folder->toArray();
$tag->toArray();
$favorite->toArray();
```

You can also use the specific Models

```php
use Meema\LaravelMeema\Facades\Media;
use Meema\LaravelMeema\Facades\Folder;
use Meema\LaravelMeema\Facades\Favorite;
use Meema\LaravelMeema\Facades\Tags;

// You can then use the models as such, and you can use the functions used above.
Media::get();
Folder::get();
Favorite::get();
Tags::get();
```

You can optionally publish the config file with:

```bash
php artisan vendor:publish --provider="Meema\LaravelMeema\Providers\MeemaServiceProvider" --tag="config"
```

## Testing

``` bash
./vendor/bin/pest
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email chris@cion.agency instead of using the issue tracker.

## Credits

- [Chris Breuer](https://github.com/Chris1904)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
