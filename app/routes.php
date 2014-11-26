<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(["before"=>"guest"],function(){
        Route::any("/",[
       "as"=>"user/login",
       "uses"=>"UserController@loginAction"
   ]) ;
        Route::any("/request",[
        "as"=>"user/request",
        "uses"=>"UserController@requestAction"
    ]);
        Route::any("/reset",[
        "as"=>"user/reset",
        "uses"=>"UserController@resetAction"
    ]);


});



Route::group(["before"=>"auth"],function(){
    Route::any("/profile",[
        "as"=>"user/profile",
        "uses"=>"UserController@profileAction"
    ]) ;
    Route::any("/updateprofile",[
        "as"=>"user/updateprofile",
        "uses"=>"UserController@updateProfileAction"
    ]) ;
    Route::any("/myprofile",[
        "as"=>"user/myprofile",
        "uses"=>"UserController@myProfileAction"
    ]);
    Route::any("/logout",[
        "as"=>"user/logout",
        "uses"=>"UserController@logoutAction"
    ]);

    Route::resource('blog', 'BlogController');
    Route::any("/blog/search",[
        "as"=>"blog/search",
        "uses"=>"BlogController@search"
    ]);
    Route::model('comment','Comment');
    Route::get('/blog/new', ['as' => 'post.new', 'uses' => 'BlogController@create']);
    Route::get('/blog/{post}/edit', ['as' => 'post.edit', 'uses' => 'BlogController@edit']);
    Route::get('/blog/{post}/delete', ['as' => 'post.delete', 'uses' => 'BlogController@delete']);
    Route::post('/blog/{post}/comment', ['as' => 'comment.new', 'uses' => 'CommentController@newComment']);
    Route::post('/post/save', ['as' => 'post.save', 'uses' => 'BlogController@save']);
    Route::get('/petinfo', ['as' => 'pet.info', 'uses' => 'petController@showInfo']);

});

Route::any("/SignIn",[
    "as"=>"user/SignIn",
    "uses"=>"UserController@SignInAction"
]);

Route::any("/group/index",[
   "as"=>"group/index",
    "uses"=>"GroupController@indexAction"
]);

Route::any("/group/add",[
    "as"=>"group/add",
    "uses"=>"GroupController@addAction"
]);

Route::any("/blog/{id}",[
    "as"=>"blog/show",
    "uses"=>"BlogController@showBlog"
]);




/*
Route::group(["before"=>"auth"],function(){
    Route::any("/profile",[
        "as"=>"user/profile",
        "uses"=>"UserController@profileAction"
    ]);
    Route::any("/logout",[
        "as"=>"user/profile",
        "uses"=>"UserController@logoutAction"
    ]);



});


Route::any("/",[
    "as"=>"user/login",
    "uses"=>"UserController@loginAction"
]);
Route::any("/request",[
    "as"=>"user/request",
    "uses"=>"UserController@requestAction"
]);
Route::any("/reset",[
    "as"=>"user/reset",
    "uses"=>"UserController@resetAction"
]);

*/






