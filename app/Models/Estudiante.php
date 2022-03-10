<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $foreign = 'profesor_id';
    protected $table = 'alumnos';
    protected $fillable = [
        'FirstName',
        'SecondName',
        'LastName',
        'DateOfBirth',
        'Address',
        'Email',
        'Dpi',
        'Cel',
        'profesor_id'
    ];
    public function alumno(){
        return $this->bolongsTo('App\Model\Profesor', 'profesor_id', 'profesor_id');
    }

}
