<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $table="emploi";
    protected $fillable=["jour","debut","fin","matiere","id_User"];
    public function user()
    {
        return $this->belongsTo(User::class,'id_User');
    }
}
