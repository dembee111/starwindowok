<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Phone;
use App\Photo;
use App\User;
use App\logsystem;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'required' => 'Энэ :attribute талбар заавал оруулах ёстой.',
            'string' => 'Энэ :attribute талбарт текст оруулах ёстой.',
            'max' => 'Энэ :attribute 255 тэмдэгтээс ихгүй байх ёстой.',
            'min' => 'Энэ :attribute 8 тэмдэгтээс багагүй байх ёстой.',
            'unique' => 'Энэ :attribute -ийг өмнө бүртгэсэн байна.',
            'confirmed' => 'Энэ :attribute -ний давталт таарахгүй байна.',
        ];
        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:8', 'max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required', 'string'],
            'photo_id' => ['required'],
        ], $messages);

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($file = $data['photo_id']) {
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo =  Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        $userCreated = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'photo_id' => $input['photo_id'],
        ]);
        
        $phone = new Phone;
        
        $phone->phone = $data['phone'];

        $userCreated->phone()->save($phone);

        Session::flash('created_user', 'Хэрэглэгч амжилттай үүслээ');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "хэрэглэгчийн мэдээлэл нэмсэн байна"
            ]);

        return $userCreated;
    }
}
