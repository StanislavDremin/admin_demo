<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @mixin \Eloquent
 */
class Article extends Model
{
    protected $table = 'articles';
	protected $fillable = ['TITLE','CODE','TEXT','ACTIVE'];
}
