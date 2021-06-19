<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tkj10 extends Model
{
    protected $table ='tkj10';
    protected $fillable =['name','jenis_kelamin','nis','agama','tmptlahir','tgllahir','alamat','telp'];
}