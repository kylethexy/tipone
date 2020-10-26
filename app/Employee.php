<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // Table Name
    protected $table = 'employees';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    //Create Relationship
    public function company(){
        // Employee has relationship with company and belongs to company
        return $this->belongsTo('App\Company');
    }
}
