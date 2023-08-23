<?php

softDelete
how to call traits in laravel
what is ORM
lifecycle
eagar loading
lazy loading
relationships
service provider
service container
routes
named routes
reverse routing
facade



Named Route --------

A named route is a route definition with the name assigned to it. We can then use that name to call the route anywhere else in the application.

Route::get('/hello', 'HomeController@index')->name('index');
This can be accessed in a controller using the following:

return redirect()->route('index');





18. What are facades? --------

Facades are a way to register your class and its methods in Laravel Container so they are available in your whole application after getting resolved by Reflection.

The main benefit of using facades is we don’t have to remember long class names and also don’t need to require those classes in any other class for using them. It also gives more testability to the application.

Facades provide a "static" interface to classes that are available in the application's service container.

All of Laravel's facades are defined in the Illuminate\Support\Facades namespace.

Facades have many benefits. They provide a short and memorable syntax that allows you to use Laravel's features without remembering long class names that must be injected or configured manually.

Facades Vs Helper Functions: There is absolutely no practical difference between facades and helper functions. Many of these helper functions perform the same function as a corresponding facade. For example, this facade call and helper call are equivalent:

