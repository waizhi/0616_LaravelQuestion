<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class SampleController extends Controller
{
    public function index() 
    {
    
    }
    public function select()
    {
        $pochi =Pet::find(1);

        return view('select',[
            "pochi" => $pochi
        ]);
    }

    public function selectMany()
    {
        $pets = Pet::orderBy('id','asc')->get();

        return view('select_many',[
            "pets"=>$pets
        ]);
    }
    public function insert()
    {
        $pet = new Pet();
        $pet->name = "dai";
        $pet->birthday = "2000/06/05";
        $pet->gender = 2;

        $pet->save();

        return "データを挿入しました";
    }

    public function delete()
    {
        Pet::orderBy('id','asc')->first()->delete();
        return "データを削除しました";
    }
    public function update()
    {
        Pet::orderBy('id','asc')->first()->update(['name'=>"jonny"]);
        
        return "データを更新しました";
    }
}
