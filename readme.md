Laravel 4 Basic Comments
---

This package allows you to add comments to any of your models quickly and easily.

Installation
===

Add `rtablada/l4-comment-all-things` in your `composer.json` file.
Then add `Rtablada\CommentAllThings\CommentAllThingsServiceProvider` to your `providers` array, and add `'Comments' => 'Rtablada\CommentAllThings\Facades\Comments'` to your `aliases` array in `app/config/app.php`.

Adding Comments to Your Models
===

Any model can have comments by adding one simple line of code in the model body:

```php
use Rtablada\CommentAllThings\Commentable;
```

This trait defines the comments relation and sets everything up for your parent model.

Creating a Comment
===

Comments are just like any related model.
Each comment has 3 properties `display_name`, `email`, and `contents`.
To add them to your model requires a few lines of code:

```php
$comment = new Rtablada\CommentAllThings\Comment(array(
	'email' => 'joe@example.com',
	'display_name' => 'Joe',
	'contents' => 'This is my comment',
));
$post = Post::find(1);
$post->comments()->save($comment);
```

Displaying Comments
===

While you could use regular Laravel to display your comments, this package gives you a simple way of displaying your comment stream and a comment form for your model with just one line of code.

```php
Comments::render($post)
```
