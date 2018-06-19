<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lunch;
use App\Service\lunchService;

class LunchController extends Controller
{

    public function __construct(){
        $this->lunchService = new lunchService();
    }

    public function Index()
    {
        return View('lunch.index');
    }
    
    public function RandomLunch()
    {
        $data=$this->lunchService->GetData();
        return View('lunch.randomlunch',['data'=>$data]);
    }

    public function Create()
    {
        return View('lunch.create');
    }

    public function Update(Request $newData)
    {
        $lunch = new Lunch();
        $lunch->StoreName=$newData->newMeal;
        $lunch->Class=$newData->lunchclass;
        $lunch->save();
        
        return View('lunch.update');
    }

    public function ShowAllData(Request $search)
    {
        $data=$this->lunchService->GetAllDataList($search->search);
        return View('lunch.showdata',[
            'alldata'=>$data
            ]);
    }

    public function PartRandom(Request $checkdata)
    {
        $data = new Lunch();
        if(!isset($checkdata->checkdata))
        {
            $data=$this->lunchService->GetData();
            return View('lunch.partrandom',['data'=>$data]);
        }
        else
        {
            $data->StoreName=$checkdata->checkdata[rand(0,count($checkdata->checkdata)-1)];
            return View('lunch.partrandom',['data'=>$data,'checkdata'=>$checkdata->checkdata]);
        }
    }
}