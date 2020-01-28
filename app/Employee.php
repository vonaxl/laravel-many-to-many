<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nome',
        'cognome'
    ];

    public function tasks() {
        return $this -> belongsToMany(Task::class);
    }
}
