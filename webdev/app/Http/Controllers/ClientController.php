<?php

namespace App\Http\Controllers;
use App\Client;
use App\User;
use Illuminate\Http\File;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:clients',['except'=>['logoutclient']]);
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function login()
    {
        return view('/auth/clientlogin');

    }


    public function register(){
        return view('/auth/clientregister');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){

        $this->validate($request,[

            'name'=>'required|min:3',
            'email'=>'required|unique:clients', /*unique email */
            'password'=>'required',
//            'gender'=>'required',

        ]);

//        $client=Client::create(request(['name','email','password','gender']));



        $clients = new Client;
        $clients->name = $request->input('name');
        $clients->email = $request->input('email');
        $clients->password = Hash::make($request->password);
//        $clients->gender=$request->gender =='male'||
        if($request->gender =='0'){
            $clients->gender= 'male';
        }elseif($request->gender=='1'){
            $clients->gender= 'female';
        }else{
            $clients->gender= 'not-specified';
        }

        //save message
        $clients->save();


        Auth::guard('clients')->login($clients);

        return redirect()->route('index');

    }

    public function loginclient(Request $request){

        $this->validate($request,[
            'email'=>'required|min:6',
            'password'=>'required|min:3'
        ]);

        if(Auth::guard('clients')->attempt(['email'=>$request->email,'password'=>$request->password ],$request->remember))
        {
            return redirect()->intended(route('index'));

        }

        return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->fields([
        'first_name', 'last_name', 'email', 'gender'
    ])->scopes([
        'email', 'user_birthday'
    ])->redirect();



    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $clientsocial = Socialite::driver('facebook')->user();

        $finduser=Client::where('email',$clientsocial->email)->first();

        if($finduser ){
            Auth::guard('clients')->login($finduser);
            return redirect()->route('index');
        }
        else
        {
            $client = new Client;

            $client->email=$clientsocial->email;
            $client->name=$clientsocial->name;

            $client->password=bcrypt(12345);
//            $client->gender=$clientsocial->user->gender;

            $client->save();

            Auth::guard('clients')->login($client);
            return redirect()->route('index');
        }


    }

    public function logoutclient()
    {
        Auth::guard('clients')->logout();

        return redirect('/index');
    }


}
