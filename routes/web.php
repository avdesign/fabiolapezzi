<?php

Auth::routes();

Route::get('/modelo', 'HomeController@modelo')->name('modelo');
Route::get('/erros', 'HomeController@erros')->name('modelo');

/*
|--------------------------------------------------------------------------
| Route Home
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index')->name('home');
/*
|--------------------------------------------------------------------------
| Routes Register
|--------------------------------------------------------------------------
*/
Route::get('cadastro', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('cadastro', 'Auth\RegisterController@register')->name('register');
Route::get('cadastro/{email}/{token}', 'Auth\RegisterController@verifyToken')->name('token.register');
Route::post('profile/{id}', 'Auth\RegisterController@profile')->name('option.profile');
/*
|--------------------------------------------------------------------------
| Routes Contact
|--------------------------------------------------------------------------
*/
Route::get('contato', 'ContactController@index')->name('contact');
Route::post('contato', 'ContactController@store')->name('contact');
/*
|--------------------------------------------------------------------------
| Routes Newsletter
|--------------------------------------------------------------------------
*/
Route::post('newsletter', 'NewsletterController@store')->name('newsletter.store');
Route::get('newsletter/{email}/{token}', 'NewsletterController@token')->name('newsletter.token');
/*
|--------------------------------------------------------------------------
| Routes Reset Password
|--------------------------------------------------------------------------
*/
Route::get('recuperar/senha/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

/*
|--------------------------------------------------------------------------
| Routes Footer
|--------------------------------------------------------------------------
*/

Route::get('localizacao', 'HomeController@location')->name('location');
Route::get('preguntas-frequentes', 'HomeController@faqs')->name('faqs');
Route::get('privacidade-e-seguranca', 'HomeController@privacy')->name('privacy');



/*
|--------------------------------------------------------------------------
| Routes Users
|--------------------------------------------------------------------------
*/
Route::prefix('atacado')->group(function () {

    Route::get('/', 'SiteController@index')->name('home.site');
    Route::get('rastreamento-de-pedido', 'TrackController@index')->name('track');
    Route::post('rastreamento-de-pedido', 'TrackController@info')->name('track.info');
    Route::get('troca-e-devolucao', 'ReturnsController@index')->name('returns');

    /*
    |--------------------------------------------------------------------------
    | Routes Account
    |--------------------------------------------------------------------------
    */
    Route::get('minha-conta', 'AccountController@index')->name('dashboard');
    Route::get('meus-pedidos', 'AccountController@orders')->name('orders');
    Route::get('minhas-mensagens', 'AccountController@messages')->name('messages');
    Route::post('minhas-mensagens-post', 'AccountController@messagesPost')->name('messages.post');
    Route::get('meu-endereco', 'AccountController@address')->name('address');
    Route::get('atualizar-endereco', 'AccountController@editAddress')->name('address.update');
    Route::put('atualizar-endereco', 'AccountController@updateAddress')->name('address.update');
    Route::get('meu-perfil', 'AccountController@edit')->name('edit');
    Route::put('meu-perfil', 'AccountController@updateProfile')->name('edit');
    Route::post('profile/{id}', 'AccountController@changeProfile')->name('change.profile');



    /*
    |--------------------------------------------------------------------------
    | Routes Categories
    |--------------------------------------------------------------------------
    */
    Route::get('calcados/{name}', 'CategoryController@index')->name('category');
    Route::get('calcados/filter/', 'CategoryController@filter')->name('filter');




    /*
    |--------------------------------------------------------------------------
    | Routes Cart
    |--------------------------------------------------------------------------
    */
    Route::get('carrinho', 'CartController@index')->name('cart');
    Route::post('cart/add', 'CartController@add')->name('cart.add');
    Route::post('cart/fragments', 'CartController@fragments')->name('cart.fragments');
    Route::post('cart/add/product', 'CartController@addProduct')->name('cart.add.product');
    Route::post('cart/update', 'CartController@update')->name('cart.update');
    Route::post('cart/remove', 'CartController@remove')->name('cart.remove');
    Route::get('carrinho/desfazer/{id}', 'CartController@undo')->name('cart.undo');

    /*
    |--------------------------------------------------------------------------
    | Routes Shipping
    |--------------------------------------------------------------------------
    */
    Route::post('shipping', 'ShippingController@calculator')->name('shipping.calculator');


    /*
    |--------------------------------------------------------------------------
    | Routes Wishlist
    |--------------------------------------------------------------------------
    */
    Route::get('lista-de-desejos', 'WishlistController@index')->name('wishlist');
    Route::post('wishlist/add/product', 'WishlistController@addProduct')->name('wishlist.add.product');
    Route::post('wishlist/add', 'WishlistController@add')->name('wishlist.add');
    Route::post('wishlist/update', 'WishlistController@update')->name('wishlist.update');

    /*
    |--------------------------------------------------------------------------
    | Routes Shipping
    |--------------------------------------------------------------------------
    */
    Route::get('finalizar-ordem', 'CheckoutController@index')->name('checkout');
    Route::post('checkout.update', 'CheckoutController@index')->name('checkout.update');

    /*
    |--------------------------------------------------------------------------
    | Routes Grids
    |--------------------------------------------------------------------------
    */
    Route::post('grids/sizes', 'ImageColorController@grids')->name('grids');

});

Route::prefix('distribuidora')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Routes Product
    |--------------------------------------------------------------------------
    */
    Route::get('calcados/{stug}', 'ProductController@index')->name('product');
    Route::post('product/package', 'ProductController@package')->name('product.package');


});


