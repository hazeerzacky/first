<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\contacts;

class MyController extends Controller
{
    //

    public function index(){
        $a = DB::table('contacts')->get();

        //return view('contacts')->with('hzr',$a);
        return view('contacts',compact('a'))->with('msg', 'okk');
    }
    public function Add(){
        return view('AddContact');
    }

    public function AddCont(Request $req)
    {
        $cont = new contacts;
        
        $cont->name  = $req->get('name');
        $cont->number  = $req->get('number');
        $cont->age  = $req->get('age');
        $cont->email  = $req->get('email');

        $cont->save();

        /*DB::table('contacts')->insert([
                'name'=>$req->get('name'),
                'number'=>$req->get('number'),
                'age'=>$req->get('age'),
                'email'=>$req->get('email'),
        ]);*/

        

        //return view('contacts')->with('hzr',$a);
        return redirect('/')->with('msg',"Contact Added");
    }
    public function delete($id){
        DB::table('contacts')->where('id',$id)->delete();
        return redirect('/')->with('msg',"Contact Deleted");
    }
    public function edit($id)
    {
        $d = DB::table('contacts')->where('id',$id)->first();
        return view('edit',compact('d'));
    }
    public function update(Request $re){
        DB::table('contacts')->where('id',$re->id)->update([
                'name'=> $re->get('name'),
                'number'=> $re->get('number'),
                'age'=> $re->get('age'),
                'email'=> $re->get('email'),
        ]);
        return redirect('/')->with('msg',"Contact Updated");
    }
}
