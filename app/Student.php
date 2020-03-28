<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    use SoftDeletes;
    //soft deletes untuk menghapus data di show user tapi di db gakeapus, cara pakainya bikin kolom dulu di students pake artisan migration, tambahin di schemanya, trs tambah use nya di model student.

    //ini buat cara insert melalui metode model, ini dibutuhkan untuk mendapatkan izin dari laravel kolom mana yg akan di insert
    protected $fillable = ['nama','npm','email','jurusan'];
    //$guarded untuk memberitahu laravel kolom mana yg gaboleh diisi
}
