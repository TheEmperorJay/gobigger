<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Tag extends Model
{
    use HasFactory;
    protected $fillable=['blog_id','tag','status','slug'];

    public static function boot()
    {
       parent::boot();

       static::saving(function($model) {

           $model->slug = Str::slug($model->tag);// change the ToBeSluggiefied

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
