<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function scopePublished($query, $post_id)
    {
        if (is_null($post_id))
            return $query->where('status', '=', 'publish');
        return $query->whereRaw('status=? AND post_id=?', ['publish', (int)$post_id])->orderBy('created_at', 'DESC');
    }
}
