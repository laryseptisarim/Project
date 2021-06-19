<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table ='guru';
    protected $fillable =['name','jenis_kelamin','nik','jabatan','tmptlahir','tgllahir','alamat','telp'];
}
