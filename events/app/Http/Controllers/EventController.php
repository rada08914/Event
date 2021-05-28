<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Redirect;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $request;
    public function __construct(Request $request){
        $this->request=$request;
    }
    public function index(){

        $data= Event::all();

        if($this->request->has('search')){
            $data = Event::where(
                $this->request->by,
                '=',
                $this->request->search
            )->get();
        }
        if($this->request->has('date1')){
            $data = Event::whereBetween('date',[
                $this->request->date1,
                $this->request->date2,
            ])->get();

        }
        if($this->request->has('number1')){
            $data = Event::whereBetween('entrance_fee',[
                $this->request->number1,
                $this->request->number2,
            ])->get();

        }
        if($this->request->has('number1')){
            $data = Event::where('entrance_fee','>=',$this->request->number1)
                         ->where('entrance_fee','<=',$this->request->number2)
                         ->get();

        }

        return view('index')->with([
            'data' => $data
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
