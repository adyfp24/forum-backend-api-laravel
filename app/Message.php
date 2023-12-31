<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['pesan', 'user_id', 'group_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function group(){
        return $this->belongsTo(Group::class);
    }
}
