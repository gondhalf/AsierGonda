<?php
/**
 * Created by PhpStorm.
 * User: asier
 * Date: 21/11/17
 * Time: 12:31
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class usuPermitidos extends Model
{
    protected $fillable = [
        'nombreUsu', 'permiso',
    ];
}