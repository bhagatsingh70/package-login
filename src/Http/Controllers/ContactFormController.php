<?php
    // Package\Contactform\src\Http\Controllers\ContactFormController.php
    namespace Package\Contactform\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;
    use App\Models\User;
    
    class ContactFormController extends Controller {
    
        // public function __invoke() {
        //    // $quote = $inspire->justDoIt();
    
        //     return view('contactform::contact');
        // }

        public function index()
        {
          
           return view('contactform::login');
        }
    
        public function doLogin(Request $request)
        {
            
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {  
                return view('contactform::home');
                //return redirect(route('home'))->with('message', 'Login successfully');
            }     
            return redirect(route('login'));
        }

        public function home()
        {
          
           return view('contactform::home');
        }
    
    
    }
