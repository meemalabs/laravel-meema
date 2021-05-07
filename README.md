<p align="center">
  <a href="https://meema.io">
    <img alt="Meema for Laravel" src="https://raw.githubusercontent.com/meema/meemasearch-client-common/master/banners/php.png" >
  </a>

<h4 align="center">The most simple way to integrate <a href="https://meema.io" target="_blank">Meema</a> and your Laravel project</h4>

<p align="center">
    <a href="https://scrutinizer-ci.com/g/meemalabs/meema-client-php/badges/quality-score.png?b=main"><img src="https://scrutinizer-ci.com/g/meemalabs/meema-client-php/badges/quality-score.png?b=main" alt="Scrutinizer" /></a>
    <a href="https://packagist.org/packages/meema/laravel-meema"><img src="https://poser.pugx.org/meema/laravel-meema/d/total.svg" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/meema/laravel-meema"><img src="https://poser.pugx.org/meema/laravel-meema/v/stable.svg" alt="Latest Version"></a>
    <a href="https://packagist.org/packages/meema/laravel-meema"><img src="https://poser.pugx.org/meema/laravel-meema/license.svg" alt="License"></a>
</p>

<p align="center">
    <a href="https://docs.meema.io" target="_blank">Documentation</a>  •
    <a href="https://github.com/meemalabs/meema-client-php" target="_blank">PHP Client</a>  •
    <a href="http://stackoverflow.com/questions/tagged/meema" target="_blank">Stack Overflow</a>  •
    <a href="https://github.com/meemalabs/laravel-meema/issues" target="_blank">Report a bug</a>  •
    <a href="https://docs.meema.io" target="_blank">FAQ</a>  •
    <a href="https://discord.meema.io" target="_blank">Discord</a>
</p>

## 🐑 Features

- Most simple way to implement a fully-functional media management system & more
- Thin, minimal & fast package to interact with Meema's API
- Supports PHP `^7.*`

## 💡 Usage

First, install Meema Laravel Client via the [composer](https://getcomposer.org/) package manager:

```bash
composer require meema/laravel-meema
```

Next, you may want to publish the config file with:

```bash
php artisan vendor:publish --provider="Meema\LaravelMeema\Providers\MeemaServiceProvider" --tag="config"
```

Now, you can easily interact with your "media items" using the `Media` facade:

``` php
use Meema\LaravelMeema\Facades\Media;

Media::create('New media name');
Media::get();

// specific uuids
Media::get('11a283ed-a64e-424a-aefc-6aa98971d529', '1556fcb8-693e-4431-8b16-3b2b7bb8fcc7');
Media::search('media-name');

// this will return a Response instance
$media = Media::find('11a283ed-a64e-424a-aefc-6aa98971d529');

// you may chain other methods that require an id
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

Using the `Folder` facade:


```php
use Meema\LaravelMeema\Facades\Folder;

Folder::create('New folder name');
Folder::get();

// specific uuids
Folder::get('11a283ed-a64e-424a-aefc-6aa98971d529', '1556fcb8-693e-4431-8b16-3b2b7bb8fcc7');
Folder::search('folder-name');

// this will return a Response instance
$folder = Folder::find('11a283ed-a64e-424a-aefc-6aa98971d529');

// you may chain other methods that require an id
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

Using the `Tag` facade:


```php
Tag::get();

// specific uuids
Tag::get(1, 2, 3);

// this will return a Response instance
$tag = Tag::find(1);

// you may chain other methods that require an id
$tag->update('red-500'); // You will have to use tailwind CSS color palletes.
$tag->delete();
$tag->media()->get();
```

Using the `Favorite` facade:

```php
Favorite::create(['name' => 'New Favorite Name', 'icon' => 'favorite-icon']);
Favorite::get();

// specific uuids
Favorite::get('11a283ed-a64e-424a-aefc-6aa98971d529', '1556fcb8-693e-4431-8b16-3b2b7bb8fcc7');

// this will return a Response instance
$favorite = $client->favorites()->find(1);

// you may chain other methods that require an id
$favorite->update(['name' => 'Updated Favorite Name', 'icon' => 'updated-favorite-icon']);
$favorite->delete();
```

## 🧪 Testing

``` bash
./vendor/bin/pest
```

## 📈 Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## 💪🏼 Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## ❓ Troubleshooting

Encountering an issue? Before reaching out to support, we recommend heading to our [FAQ](https://docs.meema.io/) where you will find answers for the most commonly asked about questions/issues and gotchas with this Meema client. Feel free to join our Discord channel, we & the community can help this way as well.

## 🚨 Security

If you discover any security related issues, please email chris@cion.agency instead of using the issue tracker.

## 🙏🏼 Credits

- [Chris Breuer](https://github.com/Chris1904)
- [All Contributors](../../contributors)

## 📄 License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
