<?php
    // MyVendor\contactform\src\ContactFormServiceProvider.php
    namespace Package\Contactform;
    use Illuminate\Support\ServiceProvider;
    class ContactFormServiceProvider extends ServiceProvider {
        public function boot()
        {
                // MyVendor\contactform\src\ContactFormServiceProvider.php
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');

        }
        public function register()
        {
              // register our controller
           // $this->app->make('Package\Contactform\Http\Controllers\ContactFormController');
        }
    }
    ?>
