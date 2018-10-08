<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Model
    protected $table = 'posts'; // In case table name and model name differs

    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;


}
