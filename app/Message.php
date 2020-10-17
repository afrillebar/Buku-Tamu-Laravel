<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $table = 'messages'; //protected $table adalah variable untuk menentukan bahwa table yang digunakan pada model itu adalah messages

    protected $fillable = ['name','jabatan','alamat','nohp','message'];

    protected $dates = ['created_at', 'updated_at'];

}