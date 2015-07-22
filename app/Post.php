<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['category_id', 'user_id', 'title', 'content', 'status', 'link_thumbnail', 'slug'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function scopePublished($query, $id = null)
    {
        if (is_null($id)) {

            return $query->where('status', '=', 'publish');
        }
        return $query->whereRaw('status=? AND id=?', ['publish', (int)$id]);
    }
}
