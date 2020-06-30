<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function hello(){
        echo 'Tôi trong model';
    }
}
