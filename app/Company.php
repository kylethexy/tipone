<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
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
