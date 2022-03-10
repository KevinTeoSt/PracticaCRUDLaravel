<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coursesandteacher
 *
 * @property $id
 * @property $Name
 * @property $LastName
 * @property $DateOfBirth
 * @property $Email
 * @property $Cel
 * @property $Course
 * @property $Schedule
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coursesandteacher extends Model
{

    static $rules = [
        'Name' => 'required',
        'LastName' => 'required',
        'DateOfBirth' => 'required',
        'Email' => 'required',
        'Cel' => 'required',
        'Course' => 'required',
        'Schedule' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name', 'LastName', 'DateOfBirth', 'Email', 'Cel', 'Course', 'Schedule'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'profesor_id', 'id');
    }


}
