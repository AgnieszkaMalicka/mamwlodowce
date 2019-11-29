<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'url'];

    /**
     * The ingredients that belong to the receipe.
     */
    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient');
    }

     /**
     * The categories that belong to the recipe.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
