<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name','client_name','cover_image','summary','slug','original_image_name'];


    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $c = 1;
        $item_exists = Project::where('slug',$slug)->first();
        while($item_exists){
            $slug = $original_slug . '-' . $c;
            $item_exists = Project::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }

}
