<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Hash;
use App\User;
use Input;
//use App\Order;
//use Carbon\Carbon;
use App\Http\Requests\EditUserRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload()
    {
        return view('backend.upload.upload');
    }
    public function postupload()
    {
        $target_dir = base_path(). "/public/uploads/";
        //$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $target_file = $target_dir . basename(Input::file('fileToUpload')->getClientOriginalName());
        $uploadOk = 1;
        //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $imageFileType = Input::file('fileToUpload')->getClientOriginalExtension();
        // Check if image file is a actual image or fake image
        if(Input::get('submit') != null) {
            //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            $check  = Input::file('fileToUpload')->getSize();
            if($check !== false) {
                echo "File is an image" . Input::file('fileToUpload')->getMimeType() . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if (Input::file('fileToUpload')->getSize() > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            //if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            if(Input::file('fileToUpload')->move($target_dir, $target_file)) {
                echo "The file ". $target_file . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    public function index()
    {
        $data = User::select('nguoidung_id', 'tendaydu', 'email', 'diachi', 'sodienthoai', 'tencongty', 'masothue', 'gioitinh', 'terms')->get()->toArray();
       // $orderCount = Order::count();
        return view('backend.user.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;
        $user->fullname = $request->txtUser;
        $user->email= $request->txtEmail;
        $user->password = Hash::make($request->txtPass);
        $user->save();      
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('nguoidung_id', $id)->get()->first();
        //dd($data); die();
        return view('backend.user.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->tendaydu = $request->txtUser;
        $user->password = $request->txtPass;
        $user->save();
        return redirect()->route('user.index');
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
        $user->delete();
        return redirect()->route('user.index');
    }
}
