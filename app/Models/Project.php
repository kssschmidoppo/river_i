<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'category_id', 'photo', 'link'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function info()
    {
        return $this->hasMany(Info::class);
    }

    public function user_infos()
    {
        return $this->hasMany(Info::class)->where('user_id', auth()->id());
    }

    public function user_completed_info()
    {
        return $this->hasMany(Info::class)
            ->where('user_id', auth()->id());
            
    }
}
