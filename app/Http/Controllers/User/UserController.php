<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    //profile picture
    public function updatePicture(Request $request)
    {
        $path = 'frontend/images/profile/';
        $file = $request->file('image');
        $new_name = '/'.'UIMG_'.date('Ymd').uniqid().'.jpg';

        //Upload new image
        $upload = $file->move(public_path($path), $new_name);
        
        if( !$upload ){
            return response()->json(['status'=>0,'msg'=>'Something went wrong, upload new picture failed.']);
        }else{
            //Get Old picture
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['image'];

            if( $oldPicture != '' ){
                if( \File::exists(public_path($path.$oldPicture))){
                    \File::delete(public_path($path.$oldPicture));
                }
            }

            //Update DB
            $update = User::find(Auth::user()->id)->update(['image'=>$new_name]);

            if( !$upload ){
                return response()->json(['status'=>0,'msg'=>'Something went wrong, updating picture in db failed.']);
            }else{
                return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully']);
            }
        }
    }
}
