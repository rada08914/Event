<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Redirect;

use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $request;
    public function __construct(Request $request){
        $this->request=$request;
    }
    public function index(){

        return view('index')->with([
            'data' => Event::all()
        ]);
    }
    public function create(){
          return view('create');
    }
    public function createsave(){
       
            Event::create(
                $this->request->except('_token')
            );
    
            return Redirect::route('home');
        
    }
 
    public function update($id){

        return view('update')->with([
            'data' => Event::find($id)
        ]);
    }
    public function updatesave($id){
        Event::find($id)->update(

            $this->request->except('_token')
           );
           return Redirect::route('home');
        
    }
    public function delete($id){

        Event::find($id)->delete();
        return Redirect::route('home');
     }
}
