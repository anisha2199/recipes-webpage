<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table='admin';
    protected $fillable=['uname','upass'];
    protected $PrimaryKey='uid';
}
