<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Route;
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
        $question=DB::table($dbase)->paginate(5);
        #dd($question);
        return $question;
}

    public function questView(){
        $dbase = session()->get('sessId', NULL);
        if($dbase == NULL){
            $subj = $_POST['subj'];
            $level = $_POST['level'];
            Session::put('subj', $subj);
            $questions = QuestData::createQuesView($level,$subj); 
        }            
        $dbase = session()->get('sessId');   
        $question=QuesRetriever::selectView($dbase);
        return view('/landing',compact('question'));
            #dd($question);
    }
 
    public function resultView(){

        $score = "This is your score";
        return view('/score');
            #dd($question);
    }

    public function deleteSession(){
        if (session()->exists('sessId')){
            //Delete all created table
            $user = Auth::user();
            $tbl = session()->get('sessId');
            $subj = session()->get('subj'); 
            #$score = $_POST["result"];
            $updateUser = QuestData::updateScore($user,$subj,$score); 
            if($updateUser==TRUE){
            $request = QuestData::dropTempTbl($tbl);
            }else{
                dd($updateUser);//remember to remove
            } 
            if($request==TRUE){
            //Remove all session
           $data = session()->forget('sessId');
           return view('/select');
        }else{//remember to remove
            dd($request);
        }

        }
        //Route::redirect('/select');

    }
    public function show(Request $request, $id)
    {
 

        //
    }

    
}
