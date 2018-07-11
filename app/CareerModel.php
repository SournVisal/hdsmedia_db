<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerModel extends Model
{
    protected $table = 'tbl_career';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
