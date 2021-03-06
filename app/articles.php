<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $primaryKey = 'id_articles';

    protected $table = "articles";

    protected $fillable = [
        'title', 'content','category_id'
    ];

    public function articles()
    {
        return $this->belongsTo('App\articles');
    }

    public function user()
    {
        return $this->belongsTo('App\user');
    }
    
    public function comments()
    {
        return $this->hasMany('App\comments');
    }

    public function reviews()
    {
        return $this->hasOne('App\reviews');
    }

    public function articlesMedia()
    {
        return $this->hasMany('App\articlesMedia');
    }

    public function categories()
    {
        return $this->belongsTo('App\categories','category_id');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\tags','article_tag','fk_article_id','fk_tag_id');
    }

}

