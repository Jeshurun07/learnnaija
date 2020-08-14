<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

use App\QuestData;
use Illuminate\Support\Facades\Schema;
use App\ManageViews;
use Session;

class QuesRetriever extends Controller //to manage dbase queries
{
    public function __construct()
    {
        return view('/home');
    }


    public function selectView($dbase){
        #$query = "SELECT * FROM $dbase";
        $question=DB::table($dbase)->get();
        #dd($question);
        return $question;
}

    public function questView(){
        $dbase = session()->get('sessId', NULL);
        if($dbase == NULL){
            $subj = $_POST['subj'];
            $level = $_POST['level'];
            $questions = QuestData::createQuesView($level,$subj);#remember to introduce the condition for each one 
        }            
        $dbase = session()->get('sessId');   
        $question=QuesRetriever::selectView($dbase);
        return view('/landing',compact('question'));
            #dd($question);
    }
 

    public function show(Request $request, $id)
    {
 

        //
    }

    
}
