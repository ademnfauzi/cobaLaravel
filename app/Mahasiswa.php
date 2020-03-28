<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//biasakan nama table berhubungan dengan model, table yg jamak dan model yg singularnya
class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';//digunakan bila nama tablenya bukan nama jamak, seperti mahasiswas
}
