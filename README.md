# Laravel_Demo_App

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

---

## Artisan Commands for Laravel

- `php artisan list` gives a list of artisan commands
- `php artisan serve` Serves the website on localhost
- `php artisan help migrate` Provides migration help options
- `php artisan make:controller PostController` makes a custom controller for posts table
- `php artisan make:controller PostController --resources` makes a custom controller with all the routes already specified. Most of the time this is used.
- `php artisan make:model Posts` Creats code for post model. This model will contain info about database keys etc.
- `php artisan make:migration create_post_table -table=Post` migration for table change
- `php artisan migrate` migrates any changes in code to the database
- `php artisan tinker` A command line tool for adding / Updating / Changing database values

Some TInker Commands

```bash
App\TODO::count(); //counts no. of database entries
$todo = new Todo;
$todo->title = 'Custom Tile for Todo';
$todo->save(); //Saves the TODO object in the database.
```

---

### Eloquent ORM (Object Relational Mapper)

Used for querying the database

Laravel Database Queries [Docs](https://laravel.com/docs/5.7/queries)

---

### Blade Templating Engine

- Extend Layouts
- Extend Views
- Custom Components
- Dynamic Sections
- Writing Conditionals and loops

---

## Making a Dummy Data in Database

We start off by creating a table using migration

- `php artisan make:migration create_articles_table --create=articles`
- `php artisan make:seeder ArticlesTableSeeder`
- `php artisan make:factory ArticleFactory`
- `php artisan make:model Article`
- `php artisan migrate`
- `php artisan db:seed`
  
  We can add table fields to the up() function in migration.

  Inside **ArticlesTableSeeder.php** add `factory(App\Article::class, 30)->create();` to the `run()` function.

  The length of fake data is specified inside **ArticleFactory**

  In **DatabaseSeeder.php** add `$this->call(ArticlesTableSeeder::class);` to seed the data, and we are done.

  ---

## Using Resources

Add controller using `php artisan make:controller ArticleController --resource`

Make Resource Article `php artisan make:resource Article`

Return a collection object/ Resource from the controller. We can customize Resposes in the **Article.php** resource. Import resource `use App\Http\Resources\Article as ArticleResource;` since we already have an Article Model.

For Using withour *Data Wrapping* in **AppServiceProvider** ,  use `use Illuminate\Http\Resources\Json\Resource;` and in `boot()` add

```php
public function boot()
{
    Resource::withoutWrapping();
}
```

This will show only one object at the value [Address](http://127.0.0.1:8000/api/articles/3)

### We Can also add Other data with API

```php
public function with($request){

        return [
            'version' => '1.0.0',
            'author' => 'Awsaf'
        ];
}
```

- Follow the [Json API Spec](http://jsonapi.org/).
- Mediun Post [For Custom API](https://medium.com/@dinotedesco/using-laravel-5-5-resources-to-create-your-own-json-api-formatted-api-2c6af5e4d0e8).

---

## Using Auth

Just use the command `php artisan make:auth`

## For Setting Up React FrontEnd

use the command `php artisan preset react`

`php artisan preset react` removes all the specified front end presets

If everything goes well, this should show up in your terminal.

```bash
React scaffolding installed successfully.
Please run "npm install && npm run dev" to compile your fresh scaffolding.
```

In the background, Laravel uses Laravel Mix, which is a smooth wrapper for webpack. Webpack, as you might already know, is a module bundler. It resolves all the module dependencies and generates the necessary static assets for JavaScript and CSS. React requires a module bundler to work, and webpack perfectly fits into that role. So Laravel Mix is the layer that sits on top of webpack and makes it easier to use webpack in Laravel.  

For further Reference Follow:

- [Laravel App with React Front end - Part 1](https://code.tutsplus.com/tutorials/build-a-react-app-with-laravel-restful-backend-part-1-laravel-5-api--cms-29442)
- [Laravel App with React Front end - Part 2](https://code.tutsplus.com/tutorials/build-a-react-app-with-laravel-restful-backend-part-1-laravel-5-api--cms-29442)

---
