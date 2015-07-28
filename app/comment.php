<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function scopePublished($query, $post_id)
    {
        if (is_null($post_id))
            return $query->where('status', '=', 'publish');
        return $query->whereRaw('status=? AND post_id=?', ['publish', (int)$post_id])->orderBy('date', 'DESC');
    }

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

}
