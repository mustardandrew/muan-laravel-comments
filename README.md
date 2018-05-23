# Maun Laravel Comments package

[![Maintainability](https://api.codeclimate.com/v1/badges/b5849cb2113964311c92/maintainability)](https://codeclimate.com/github/mustardandrew/muan-laravel-comments/maintainability)

Used for create comments.


## Requirements

- "php": ">=7.0"


## Install

1) Type next command in your terminal:

```bash
composer require muan/laravel-comments
```

2) Add the service provider to your config/app.php file in section providers:

> Laravel 5.5 uses Package Auto-Discovery, so does not require you to manually add the ServiceProvider.

```php
'providers' => [
    // ...
    Muan\Comments\Providers\CommentsServiceProvider::class,
    // ...
],
```

3) Use the following trait on your User model

```php
// Use trait
use Muan\Comments\Traits\CanComment;
 
class User extends Authenticatable
{
    use CanComment;
    
    // ...
}
```

Add Commentable trait to your commentable model(s).

```php
use Muan\Comments\Traits\Commentable;
```


## Usage

```php
$user = App\User::find(1);
$product = App\Product::find(1);

// Add comment
$comment = $user->addComment($product, 'Lorem ipsum...');

// or
$comment = $product->addComment($user, 'Lorem ipsum...');

// Approve comment
$comment->approve();

// get comments
$comments = $user->comments;

// get comments
$comments = $product->comments;
```


## License

Muan Laravel Admin package is licensed under the [MIT License](http://opensource.org/licenses/MIT).
