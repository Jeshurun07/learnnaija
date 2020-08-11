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
       DB::select("CREATE VIEW $viewTbl AS
        SELECT * FROM question WHERE difficultyLevel = '$level' AND subject ='$subj'
        ORDER BY instruction, RAND()
        LIMIT 30");
        Session::put('sessId', $viewTbl);
        #return('done');#look for appropriate return
    }
    
    public static function paginate($items , $perpage, $pageName = 'page' ){
        $total = 30;
        $perpage=5;
       $currentpage = \Request::get('page', 1);
       $offset = ($currentpage * $perpage) - $perpage ;
       $itemstoshow = array_slice($items , $offset , $perpage);
       $p = new LengthAwarePaginator($itemstoshow ,$total ,$perpage, $currentpage,  [
        'path' => Paginator::resolveCurrentPath(),
        'pageName' => $pageName,
    ]);
       return $p;
 }

    public static function selectQuery(){//pulls data from question view
            $dbase = session()->get('sessId');//
            $ques = DB::select("SELECT * FROM $dbase");
            $res= QuestData::paginate($ques,5);
            return $res;
            #return $ques;//Learn how to use transactions for the query
    }

}