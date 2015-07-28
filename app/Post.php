<?php

namespace App;

use App\Http\Controllers\CommentController;
use Carbon\Carbon;
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

    public function getDateStartAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function getDateEndAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function scopePublished($query, $id = null)
    {
        if (is_null($id))
            return $query->where('status', '=', 'publish');
        return $query->whereRaw('status=? AND id=?', ['publish', (int)$id])->orderBy('date_start', 'DESC');
    }

    public function nbComment()
    {
        $nbComment = Comment::published($this->id)->get()->count();
        return $nbComment;
    }

    public function getComment()
    {
        $listComment = Comment::published($this->id)->get();
        return $listComment;
    }
}
