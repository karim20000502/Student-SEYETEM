<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filere extends Model
{
    use HasFactory;
    protected $fillable = [
        'filere',
    ];
    public function student(){
        return $this->hasMany(Student::class,'filere_id','id');
    }
}
