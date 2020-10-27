<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * A model named 'Company' that contains the table name,
     * primary key, timestamp, and the relationship function
     * @return $Company->relationship_type('Employee')
     */

    // Table Name
    protected $table = 'companies';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    // Create Relationship
    public function employee(){
        // Company has multiple employees
        return $this->hasMany('App\Employee');
    }
}
