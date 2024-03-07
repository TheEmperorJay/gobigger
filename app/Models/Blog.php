<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','comment_id','description','photo','auther_name','read_count','meta_keywords','meta_description','read_count'];

    public static function boot()
    {
        parent::boot();
        
        static::creating(function($model) {

            $model->slug = Str::slug($model->title);// change the ToBeSluggiefied

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

    public function category(){
    	return $this->belongsTo("App\Models\Category","category_id","id");
    } 

    public function tags(){
      return $this->hasMany("App\Models\Tag","blog_id","id");
    }

    public function comments()
    {   
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
