<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','designation','slug'];
    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {

            $model->slug = Str::slug($model->name);// change the ToBeSluggiefied

            $latestSlug =
                static::whereRaw("slug = '$model->slug' or slug LIKE '$model->slug-%'")
                    ->latest('id')
                    ->value('slug');
            if($latestSlug) {
                $pieces = explode('-', $latestSlug);

                $number = intval(end($pieces));

                $model->slug .= '-' . ($number + 1);
            }else{

            }
        });
    }
}
