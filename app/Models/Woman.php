<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woman extends Model
{
    use HasFactory;
    protected $fillable=['name','surname','father','passport','pnfl','birth_day','status','dstrict_id'];

    public function dstrict(){
        return $this->belongsTo(Dstrict::class);
    }

}
