<?php

namespace App\Http\Controllers;

use id;
use table;
use App\Models\User;
use App\Models\User_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Spatie\LaravelIgnition\Recorders\QueryRecorder\Query;

class MainController extends Controller
{
    public function hello()
    {
         $users = User_table::paginate(10);
         return view('view')->with('users',$users);
    }
    public function show()
    {
          $value = new User_table;
          $value = User_table::all();

          return view('view',compact('value'));
    }
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'process' => 'required'
         ]);
         $store = new User_table;
         $store->name = $request->name;
         $store->Email = $request->email;
         $store->process = $request->process;
         $store->save();
         return redirect('home');
    }
    public function khatam(Request $request,$id)
    {
          //   $post =  DB::table('users_status')->selectRaw("DELETE FROM `users_status` WHERE id = ");
          //   $User_table->delete();
          //  $post = DB::table('users_status')->delete();
            $post = User_table::findOrFail($id)->delete();
          //   echo $User_table;
            return redirect()->back();
    }
    public function clear()
    {
            $post= DB::table('users_status')->truncate();
             return redirect()->back();

    }
    public function edit(Request $request,$id)
    {

         $store = $request->validate([
          'name'=>'required',
          'email'=> 'required',
          'process'=>'required'
         ]);
         $store= User_table::findOrFail($id);
         $store->name = $request->name;
         $store->Email = $request->email;
         $store->process = $request->process;
         $store->update();
          return redirect()->back();
    }

}
