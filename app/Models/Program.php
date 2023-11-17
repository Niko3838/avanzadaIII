<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Program extends Model
{
    protected $table = 'programa';
    protected $primaryKey = 'codprograma';
    protected $fillable = [
        'nom_program','fk_facultad'
    ];
    public $timestamps = 'true';

    public function Faculty(){
        return $this->hasMany(Program::class,'codfacultad');
    }
}
