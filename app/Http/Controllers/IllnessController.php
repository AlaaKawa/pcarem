<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Illness;
use Redirect;
class IllnessController extends Controller{


	public function __construct(){
        $this->middleware('auth');
    }


    //
    public function create(){
    	return view('illness.create');

    }

    public function store(Request $request){

    	$validatedData = $request->validate([
        	'name_illness' => 'required',
        	'illness_abriviation',
    	]);

    	$illness = Illness::updateOrCreate(
		    ['name_illness' => $request->name_illness, 'illness_abriviation' => $request->illness_abriviation],
		);

    	return Redirect::back()->with('success', __('sentence.Diseas added Successfully'));
    }

    public function all(){
    	$illnesses = illness::all();

    	return view('illness.all',['illnesses' => $illnesses]);
    }


    public function edit($id){
        $illness = Illness::find($id);
        return view('illness.edit',['illness' => $illness]);
    }

    public function store_edit(Request $request){
            
        $validatedData = $request->validate([
            'name_illness' => 'required',
            'illness_abriviation' ,
        ]);
        
        $illness= Illness::find($request->illness_id);

        $illness->name_illness = $request->name_illness;
        $illness->illness_abriviation = $request->illness_abriviation;

        $illness->save();

        return Redirect::route('illness.all')->with('success', __('sentence.Diseas Edited Successfully'));

    }

        public function destroy($id){

            Illness::destroy($id);
        return Redirect::route('illness.all')->with('success', __('sentence.Diseas Deleted Successfully'));

    }
}
