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
        $lunch->Information=$newData->information;
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

    public function Information()
    {
        $data=$this->lunchService->GetAllDataList($_GET["StoreName"]);
        return View("lunch.information",['data'=>$data]);
    }

    public function Edit()
    {
        $data=$this->lunchService->Edit($_GET["S_id"]);
        return View('lunch.edit',['editdata'=>$data]);
    }
    public function EditResult(Request $request)
    {
        Lunch::where('S_id',$request->S_id)->Update(['StoreName'=>$request->newMeal]);
        Lunch::where('S_id',$request->S_id)->Update(['Class'=>$request->lunchclass]);
        Lunch::where('S_id',$request->S_id)->Update(['Information'=>$request->information]);
        return redirect('ShowAllData');
    }

    public function Delete()
    {
        $this->lunchService->Delete($_GET["S_id"]);
        return redirect('ShowAllData');
    }
}