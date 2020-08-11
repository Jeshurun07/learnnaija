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
    public function selectView(){
        $dbase = session()->get('sessId');
        $question=DB::table($dbase)->paginate(5);
        #$question = QuestData::selectQuery($dbase)->paginate(5);#remember to introduce the condition for each one
        return view('landing',['question'=>$question]);
}

    public function questView(){
            $subj = $_POST['subj'];
            $level = $_POST['level'];
            #$question = ManageViews::up($level,$subj);
            $questions = QuestData::createQuesView($level,$subj);#remember to introduce the condition for each one
           if ($questions == 'done'){
               #echo 'Did this';
            QuesRetriever::selectView();
            }else{
                return("Error in database");
            }
            #return view('/landing',compact('question'));
    }
 

    public function show(Request $request, $id)
    {
 

        //
    }

    
}
