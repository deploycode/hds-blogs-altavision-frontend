<?php
Route::resource('/',         'FrontController');
Route::get('contacto',       'FrontController@contact');
Route::get('boletin',        'FrontController@bulletin');
Route::get('charlas',        'FrontController@lecture');
Route::get('terminos',        'FrontController@terms');
Route::get('whatsapp',        'FrontController@whatsapp');
Route::get('menus/upgrade/{id}',    'MenuController@upgrade');
Route::get('menus/downgrade/{id}',  'MenuController@downgrade');
Route::get('posts/upgrade/{id}',    'PostController@upgrade');
Route::get('posts/downgrade/{id}',  'PostController@downgrade');
Route::resource('mail',      'MailController');
Route::get('allmenus/{id}', 'AppController@getAllMenus');
Route::get('allposts/{id}', 'MenuController@getAllPosts');
Route::get('{menu}/{slug}', 'PostController@show');
Route::get('{slug}', 'NewController@show');