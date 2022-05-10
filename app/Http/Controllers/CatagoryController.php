<?php
namespace App\Http\Controllers;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function register()
  {
  return view('Catagory.register');
  }
    function store(Request $request)
    
    {
      $Catagory =new Catagory();
      $Catagory->id = $request->id;
      $Catagory->name = $request->name;
     $is_saved = $Catagory->save();
    if($is_saved){
    echo " YOUR DATA Record saved successfully.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }
    }
    public function get_all()
    {
     $Catagory = Catagory::all();
     return view('Catagory.list', compact('Catagory'));
    } 
}