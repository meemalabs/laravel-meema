# Laravel Meema

Coming soon. This package is under current work in progress and it will be a wrapper around Meema's API.

## Installation

You can install the package via composer:

```bash
composer require meema/laravel-meema
```

## Usage

using the `Media` facade

``` php
use Meema\LaravelMeema\Facades\Media;

Media::create('New media name');
Media::get();

// Specific uuids
Media::get('11a283ed-a64e-424a-aefc-6aa98971d529', '1556fcb8-693e-4431-8b16-3b2b7bb8fcc7');
Media::search('media-name');

// This will return a `Response` instance
$media = Media::find('11a283ed-a64e-424a-aefc-6aa98971d529');

// So that you can chain other methods that require an id.
$media->update('updated-media-name')
$media->delete();
$media->archive();
$media->unarchive();
$media->makePrivate();
$media->makePublic();
$media->duplicate();

// Relationships with other models.
// Continuing with the chaining methods we used earlier.
$media->folders()->get();
$media->folders()->create('New folder name');
$media->folders()->delete('11a283ed-a64e-424a-aefc-6aa98971d529');
$media->tags()->get();
$media->tags()->associate(['name' => 'Tag Name']);
$media->tags()->disassociate(['name' => 'Tag Name']);
```
Using the `Folder` facade

```php
use Meema\LaravelMeema\Facades\Folder;

Folder::create('New folder name');
Folder::get();

// Specific uuids
Folder::get('11a283ed-a64e-424a-aefc-6aa98971d529', '1556fcb8-693e-4431-8b16-3b2b7bb8fcc7');
Folder::search('folder-name');

// This will return a Response instance
$folder = Folder::find('11a283ed-a64e-424a-aefc-6aa98971d529');

// So that you can chain other methods that require an id.
$folder->update('updated-folder-name')
$folder->delete();
$folder->archive();
$folder->unarchive();
$folder->duplicate();

// Relationships with other models.
// Continuing with the chaining methods we used earlier.
$folder->media()->get();
$folder->tags()->get();
$folder->tags()->associate(['tag_id' => 7]);
$folder->tags()->disassociate(['tag_id' => 7]);
```

Using the `Tag` facade

```php
Tag::get();

// Specific ids
Tag::get(1, 2, 3);

// This will return a Response instance
$tag = Tag::find(1);

// So that you can chain other methods that require an id.
$tag->update('red-500'); // You will have to use tailwind CSS color palletes.
$tag->delete();
$tag->media()->get();
```

Using the `Favorite` facade
```php
Favorite::create(['name' => 'New Favorite Name', 'icon' => 'favorite-icon']);
Favorite::get();

// Specific ids
Favorite::get(1,2,3);

// This will return a Response instance
$favorite = $client->favorites()->find(1);

// So that you can chain other methods that require an id.
$favorite->update(['name' => 'Updated Favorite Name', 'icon' => 'updated-favorite-icon']);
$favorite->delete();
```

Next, publish the config file with:

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
