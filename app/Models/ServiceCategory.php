<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Spatie\Translatable\HasTranslations;

class ServiceCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    // use HasTranslations;

    // protected $table = 'grades';
    // public $timestamps = true;
    // protected $dates = ['deleted_at'];
    // public $translatable = ['name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = array('name', 'slug', 'image');
    protected $fillable = [
        'name',
        'slug',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [];
}
