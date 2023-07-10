<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;

class Ad extends Model
{
    protected $fillable = ['title', 'price', 'description', 'image', 'category_id', 'user_id'];

    use HasFactory, Searchable;

    public function toSearchableArray()
    {
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category
        ];
        return $array;
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function setAccepted($value) {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount() {
        return Ad::where('is_accepted', null)->whereNot('user_id', Auth::user()->id)->count();
    }
}
