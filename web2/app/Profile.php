<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = ['nama','npm','tempat_lahir','tanggal_lahir','jenis_kelamin','agama','alamat','ponsel',];
}
