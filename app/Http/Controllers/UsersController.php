<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function queries(){
        //2nd part start


        // $response = User::all();
        // $response = User::get();
        // $response = User::first();
        // $response = [$response];
        //  $response = User::where('phone','1234567')->get();
        // $response = User::find(1);
        
        // $response = User::insert([
        //     'name'=>'kery Pretty',
        //     'email'=>'kery@gmail.com',
        //     'phone'=>'123456',
        // ]);
        // if ($response) {
        //     return "Data inserted";
        // }else{
        //     return "Data not inserted";
        // }

        // $response = User::where('name','kery Pretty')->update(['phone'=>'6969']);
        // if ($response) {
        //     return "Data updated";
        // }else{
        //     return "Data not updated";
        // }
        $response = User::where('name','kery Pretty')->delete(['phone'=>'6969']);
        if ($response) {
            return "Data deleted";
        }else{
            return "Data not deleted";
        }





        return view('users',['users'=>$response]);

//2nd part query end

        // $result = DB::table('users')->get();                             //all tabile result
        // $result = DB::table('users')->where('phone','1234')->get();      //condision result
        // $result = DB::table('users')->first();                               //first result call
        // $result = [$result];                                                  //areey only for 1st result

        //Insert
        // $result = DB::table('users')->insert([
        // 'name'=>'tony',
        // 'email'=>'tony@gmail.com',
        // 'phone'=>'123456',
        // ]);

        // if($result){
        //     return "Data inserted";
        // }else{
        //     return "Data not inserted";
        // }

        //       $result = DB::table('users')->where('name','Prince')
        //       ->update(['phone'=>'3333']);

        // if($result){
        //     return "Data Updated";
        // }else{
        //     return "Data not Updated";
        // }
        //       $result = DB::table('users')->where('name','Prince')
        //       ->delete();

        // if($result){
        //     return "Data Deleted";
        // }else{
        //     return "Data not Deleted";
        // }




        // return view('users',['users'=>$result]);
    }
}
