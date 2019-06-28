<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Role;
use App\User;
use App\logsystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminUsersController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
      
        return view('back.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('back.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $testedInput = $this->validator($input);



        if ($request->file('photo_id')) {
           return "photo exist";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
       
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        return view('back.profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

        $user = User::findOrFail($id);

        $roles = Role::all();

        return view('back.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if (trim($request->password) == '') {
            $input = $request->except('password');
            $validator = $this->validator1($input);
        }else{
            $input = $request->all();
            $validator = $this->validator1($input); 
            $input['password'] = bcrypt($request->password);
        }



  

        
        
        if ($validator->fails()) {
            return redirect('admin/users/'.$user->id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        
        

        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo =  Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;


        }
        
       
  
        $user->update($input);



        Session::flash('updated_user', 'Хэрэглэгчийн мэдээлэл амжилттай засагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "хэрэглэгчийн мэдээлэл засварласан байна"
            ]);

        return redirect('/admin/users');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $user = User::findOrFail($id);

        unlink(public_path() . $user->photo->file);

        $user->delete();

        Session::flash('deleted_user', 'Хэрэглэгчийн мэдээлэл амжилттай устгагдлаа');

        logsystem::create([
                'user_id' => Auth::user()->id,
                'log' => "хэрэглэгчийн мэдээлэл устгасан байна"
            ]);

        return redirect('/admin/users');
        
    }

    protected function validator1(array $data)
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
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['string', 'min:8', 'confirmed'],
            'role_id' => ['required', 'string'],
            'photo_id' => [],
            
        ], $messages);

        return $validator;
    }



}
