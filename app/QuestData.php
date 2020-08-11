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
    public static function selectQuery(){//pulls data from question view
        $dbase = session()->get('sessId');//
        $ques = DB::table($dbase);
        return $ques;
        #return $ques;//Learn how to use transactions for the query
}
    public static function createQuesView($level,$subj){//worked like a charm- creates a view to extract the data from going forward
    $data = strval(hash("md5",rand(1,1000000)));
       $viewTbl = 'questView'.$data;
       DB::select("CREATE VIEW $viewTbl AS
        SELECT * FROM question WHERE difficultyLevel = '$level' AND subject ='$subj'
        ORDER BY instruction, RAND()
        LIMIT 30");
        Session::put('sessId', $viewTbl);
        return('done');
    }
    

}