<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed|min:6 '
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
<<<<<<< HEAD
        if($request->image1) {
            $destinationPath = public_path()."/assets/coins/images/";
            $extension =  $request->file('image1')->getClientOriginalExtension();
            $fileName = time();
            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
            if(!$request->file('image1')->move($destinationPath,$fileName))
=======
        if($request->image) {
            $destinationPath = public_path()."/assets/images/";
            $extension =  $request->file('image')->getClientOriginalExtension();
            $fileName = time();
            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
            if(!$request->file('image')->move($destinationPath,$fileName))
>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103
            {
                throw new \Exception("Failed Upload");                    
            }
    
<<<<<<< HEAD
            $picture = asset("assets/coins/images")."/".$fileName;
=======
            $picture = asset("assets/images")."/".$fileName;
            $user->picture = $picture;
>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103
        }
        $user->save();

        $role = DB::table('roles')->where('slug', 'user')->first();
        $user->roles()->attach($role->id);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
<<<<<<< HEAD
        
=======
        if($request->image) {
            $destinationPath = public_path()."/assets/images/";
            $extension =  $request->file('image')->getClientOriginalExtension();
            $fileName = time();
            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
            if(!$request->file('image')->move($destinationPath,$fileName))
            {
                throw new \Exception("Failed Upload");                    
            }
    
            $picture = asset("assets/images")."/".$fileName;
            $user->picture = $picture;
        }
>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
