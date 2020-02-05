<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tatami;

class AddController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function addtatmi(Request $request){//добавление татами
        if ($request->isMethod('post') ) {
            if($request->sub=="1"){
        //dd($request);
                        // проверка валидации
                $validaterequest = $request->validate([
                            'tatami' => 'string|max:155',
                        ]);                
                        //добавили татами            
                Tatami::create([ 'data'=>$request->data,
                        'name'=>$request->tatami]);
                $tatami = Tatami::where('data', $request->data)->get();
                return view('home')->with('tatami', $tatami);
            }      
        }
       // dd($tatami);//
       if ($request->isMethod('post') ) {
            if($request->sub=="2"){
                $tatami = Tatami::where('data', $request->data)->get();
                return view('home')->with('tatami', $tatami);  
            }
       }
       if ($request->isMethod('get') ) {
        //$tatami=NULL;
       
        return view('home');  

       }

    }
    public function addjudges(Request $request){//добавление судей
        if($request->save=="save"){//сохранение при редактирвании
            //dd($request);
            $nn="edit_".$request->ch;
            $dt="data_".$request->ch;
             Tatami::find($request->ch)
                    ->update(['name' => $request->$nn]);
           //высветить таюлицу
            $tatami = Tatami::where('data', $request->$dt)->get();
            return view('home')->with('tatami', $tatami);

        }
        if($request->judgest=="judgest"){
           
            dd($request);//addjudges
            
        
        }


        


    }
}
