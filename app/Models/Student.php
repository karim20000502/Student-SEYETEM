<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'email',
        'gender',
        'telephone',
        'filere_id',
    ];

    public function filere(){
        return $this->belongsTo(filere::class,'filere_id','id');
    }
}
