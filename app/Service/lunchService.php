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


}