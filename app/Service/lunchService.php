<?php
namespace App\Service;
use App\Lunch;
use Illuminate\Support\Facades\DB;

class lunchService
{

    public function GetData()
    {

        $lunch=Lunch::inRandomOrder()->first();
        return $lunch;
    }

    public function GetAllDataList($search)
    {
        if(empty($search))
        {
            $lunch=Lunch::all();
        }
        else
        {
            $lunch=Lunch::where('StoreName','like','%'.$search.'%')->get();
        }
        return $lunch;
    }

    public function Edit($id)
    {
        $lunch=Lunch::where('S_id','=',$id)->get();
        return $lunch;
    }

    public function Delete($id)
    {
        Lunch::where('S_id','=',$id)->delete();
    }
}