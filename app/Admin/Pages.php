<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admin\Pages
 *
 * @mixin \Eloquent
 */
class Pages extends Model
{
    protected $fillable = ['name','code','text','image','active','sort'];
}
