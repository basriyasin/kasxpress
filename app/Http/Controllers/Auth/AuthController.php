<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mail;

class AuthController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers,
    ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $investorDashboard = '/investor';
    protected $borrowerDashboard = '/borrower';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'mobile_number' => $data['mobile_number'],
                    'status' => 0,
                    'role' => $data['role'],
                        /**
                         * Status Description
                         * 0 : Not confirmed
                         * 1 : Active
                         * 2 : Disable
                         * 3 : Deleted
                         */
        ]);
    }

    public function login(Request $request) {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);

        if (Auth::guard($this->getGuard())->attempt($credentials, $request->has('remember'))) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles && !$lockedOut) {
            $this->incrementLoginAttempts($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function handleUserWasAuthenticated(Request $request, $throttles) {
        if ($throttles) {
            $this->clearLoginAttempts($request);
        }

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::guard($this->getGuard())->user());
        }
        return redirect()->intended(Auth::user()->role == 'investor' ? $this->investorDashboard : $this->borrowerDashboard);
    }

    
    public function register(Request $request) {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                    $request, $validator
            );
        }

        // Auth::guard($this->getGuard())->login($this->create($request->all()));
        $this->create($request->all());
        $user = (object)$request->all();
        $this->sendRegisterConfirmationMail($user);
        return redirect()
                ->route('account.pleaseConfirm', $user->email);
    }

    
    
    
    private function sendRegisterConfirmationMail ($user) {
        Mail::send('emails.confirm_registration', ['user' => $user], function ($m) use ($user) {
            $m->from('kasxpress@basriyasin.com', 'KasXpress');
            $m->to($user->email, $user->name)->subject('Confirm your email.');
        });
    }
    
    
    
    protected function pleaseConfirm(Request $r, $email) {
        $user = User::where('email', $email)->firstOrFail();
        
        return $user
                ? view('auth.please_confirm')->with('user', (object)$user)
                : view('errors.404');
    }




    public function confirmEmail(Request $r, $email) {
        
        if($user = User::findOrFail('email', $email)->firstOrFail()) {
            $user->status = 1;
            $user->save();
            return view('auth.account_confirmed')
                    ->with('user', (object)['email' => 'lala.lala']);
        }
        
        return view('errors.404');
    }
    
    
}
