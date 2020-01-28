<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'titolo',
        'descrizione'
    ];

    public function employees() {
        return $this -> belongsToMany(Employee::class);
    }
}
