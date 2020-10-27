<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * A model named 'Company' that contains the table name,
     * primary key, timestamp, and the relationship function
     * @return $Employee->relationship_type('Company')
     */

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
