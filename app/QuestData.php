<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;

class QuestData extends Model
{
    public static function createQuesView($level,$subj){//worked like a charm- creates a view to extract the data from going forward
    $data = strval(hash("md5",rand(1,1000000)));
       $viewTbl = 'questView'.$data;
       //Check to confirm if dbase exists
       $dropTempTables = DB::unprepared(
        DB::raw("
            DROP  TABLE IF EXISTS $viewTbl;
        ")
    );
        //Create temporary table
       $createTempTbl=  DB::unprepared(
        DB::raw("CREATE TABLE $viewTbl AS
        (SELECT questionId,ques, opt1,opt2,opt3,opt4,opt5,corr, instruction  FROM question 
        WHERE difficultyLevel = '$level' AND subject ='$subj' ORDER BY questionId, RAND() LIMIT 30)
      "));
        Session::put('sessId', $viewTbl);
        return('done');
    }


    
    /*public static function selectQues($dbase)
    { 
        $query = "SELECT * FROM $dbase";
        DB::select($query);
    }*/
    

}