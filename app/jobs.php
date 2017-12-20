<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    //Table Name
    protected $table = 'jobs';
    
    //Primary Key
    public $primaryKey = 'job_id';

    //Timestamps
    public $timestamps = false;
}
