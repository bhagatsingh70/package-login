<?php
    use Package\Contactform\Http\Controllers\ContactFormController;
   // use Fhsinchy\Inspire\Controllers;
    // MyVendor\contactform\src\routes\web.php
    // Route::get('contact', function(){
    //     return view('contactform::contact');
    //    // return 'Hello from the contact form package';
    // });
 
    // MyVendor\contactform\src\routes\web.php
  //  Route::group(['namespace' => 'contactform\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('/login', [ContactFormController::class,'index'])->name('login');
        Route::post('/do-login', [ContactFormController::class,'doLogin'])->name('doLogin');
        Route::group(['middleware' =>['auth']], function(){
            Route::get('/home', [ContactFormController::class,'home'])->name('home');
        });
        
     // });
 
