<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Tag');
    }

    public function scopePublished($query, $id = null)
    {
        if (is_null($id)) {
            return $query->where('status', '=', 'publish');
        }
        return $query->whereRaw('status=? AND id=?', ['publish', (int)$id]);
    }
}
