<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name','last_name', 'email', 'phone', 'subject', 'comments', 'slug'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {

            $model->slug = Str::slug($model->first_name."-".$model->last_name);// change the ToBeSluggiefied

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
