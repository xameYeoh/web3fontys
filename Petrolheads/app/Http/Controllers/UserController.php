<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use DB;
use App\User;

class UserController extends Controller
{
    public function submit(Request $request)
    {
        $path = $request->file->getRealPath();
        $data = Excel::load($path)->get();

        foreach ($data as $value)
        {
            $arr[]= [
                'name'=> $value->name,
                'email'=> $value-> email
            ];
        }
        if (!empty($arr)){
            DB::table('users')->insert($arr);
            echo "data inserted";
        }
    }
    public function export()
    {
        $user = user::all();

        return Excel::create("userstable", function($excel) use ($user){
            $excel->sheet('sheet name', function($sheet) use ($user){
                $sheet->fromArray($user);
            });
        })->download('xlsx');
    }
}
