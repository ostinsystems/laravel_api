<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use App\Exceptions\CustomException;
use Illuminate\Support\Facades\DB;
class History extends Model
{
    use HasFactory;


    public function history(){

        try {          
            return DB::table('history')->get();
        } catch (QueryException $qe) {
            throw new CustomException($qe);
        }

    }
}
