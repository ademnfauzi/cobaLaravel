<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //ini buat cara insert melalui metode model, ini dibutuhkan untuk mendapatkan izin dari laravel kolom mana yg akan di insert
    protected $fillable = ['nama','npm','email','jurusan'];
    //$guarded untuk memberitahu laravel kolom mana yg gaboleh diisi
}
