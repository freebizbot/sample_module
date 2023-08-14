<?php

namespace Freebizbot\SimpleArticles\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getRouteKeyName() : string
    {
        return 'slug';
    }

    protected $keyType = 'string';

    protected $table = 'freebizbot_simple_articles';
    protected $guarded = [];
}
