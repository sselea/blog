<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function() {

	Route::get('/', [
		'uses' => 'PostController@getIntro',
		'as' => 'intro'
	]);

	Route::get('/blog', [
		'uses' => 'PostController@getBlogIndex',
		'as' => 'blog.index'
	]);

	Route::get('/blog/{post_id}&{end}', [
		'uses' => 'PostController@getSinglePost',
		'as' => 'blog.single'
	]);

	Route::post('/blog/{post_id}&{end}', [
		'uses' => 'PostController@postSinglePost',
		'as' => 'blog.single'
	]);

	Route::get('/about', ['as' => 'about', function() {
		return view('frontend.other.about');
	}]);

	Route::get('/contact',[
		'uses' => 'ContactMessageController@getContactIndex',
		'as' => 'contact'
	]);

	Route::post('/contact/sendmail', [
		'uses' => 'ContactMessageController@postSendMessage',
		'as' => 'contact.send'
	]);

	Route::get('/admin/login', [
		'uses' => 'AdminController@getLogin',
		'as' => 'admin.login'
	]);

	Route::post('/admin/login', [
		'uses' => 'AdminController@postLogin',
		'as' => 'admin.login'
	]);

	Route::get('/signup', [
		'uses' => 'UserController@getSignUp',
		'as' => 'signup'
	]);

	Route::post('/signup', [
		'uses' => 'UserController@postSignUp',
		'as' => 'signup'
	]);

	Route::get('/user/login', [
		'uses' => 'UserController@getUserLogin',
		'as' => 'user.login'
	]);

	Route::post('/user/login', [
		'uses' => 'UserController@postUserLogin',
		'as' => 'user.login'
	]);

	Route::get('/user/logout', [
		'uses' => 'UserController@getUserLogout',
		'as' => 'user.logout'
	]);

	Route::group([
		'prefix' => '/admin',
		'middleware' => 'auth'

	], function() {

		Route::get('/', [
			'uses' => 'AdminController@getIndex',
			'as' => 'admin.index'
		]);

		Route::get('/blog/posts/create', [
			'uses' => 'PostController@getCreatePost',
			'as' => 'admin.blog.create_post'
		]);

		Route::post('blog/post/create', [
			'uses' => "PostController@PostCreatePost",
			'as' => 'admin.blog.post.create'
		]);

		Route::get('/blog/posts', [
			'uses' => "PostController@getPostIndex",
			'as' => 'admin.blog.index'
		]);

		Route::get('/blog/post/{post_id}&{end}',[
			'uses' => 'PostController@getSinglePost',
			'as' => 'admin.blog.post'
		]);

		Route::get('/blog/post/{post_id}/edit', [
			'uses' => 'PostController@getUpdatePost',
			'as' => 'admin.blog.post.edit'
		]);

		Route::post('/blog/post/update', [
			'uses' => 'PostController@postUpdatePost',
			'as' => 'admin.blog.post.update'
		]);

		Route::get('/blog/post/{post_id}/delete', [
			'uses' => 'PostController@getDeletePost',
			'as' => 'admin.blog.post.delete'
		]);

		Route::get('/blog/categories', [
			'uses' => 'CategoryController@getCategoryIndex',
			'as' => 'admin.blog.categories'
		]);

		Route::post('/blog/category/create', [
			'uses' => 'CategoryController@postCreateCategory',
			'as' => 'admin.blog.category.create'
		]);

		Route::post('/blog/categories/update', [
			'uses' => 'CategoryController@postUpdateCategory',
			'as' => 'admin.blog.category.update'
		]);

		Route::get('blog/category/{category_id}/delete', [
			'uses' => 'CategoryController@getDeleteCategory',
			'as' => 'admin.blog.category.delete'
		]);

		Route::get('/contact/messages', [
			'uses' => 'ContactMessageController@getContactMessagesIndex',
			'as' => 'admin.contact.index'
		]);

		Route::get('contact/message/{message_id}/delete', [
			'uses' => 'ContactMessageController@getDeleteMessage',
			'as' => 'admin.contact.delete'
		]);

		Route::get('/logout', [
 			'uses' => 'AdminController@getLogout',
 			'as' => 'admin.logout'
		]);


	});

});

$router->get( '/_debugbar/assets/stylesheets', '\Barryvdh\Debugbar\Controllers\AssetController@css' );
$router->get( '/_debugbar/assets/javascript', '\Barryvdh\Debugbar\Controllers\AssetController@js' );
