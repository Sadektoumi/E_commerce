<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class intervention extends Model
{
    protected $fillable =['user_id','maintenance','type','name','prix','etat'];


    public function user() {

        return $this->belongsTo(User::class);
    }

}
