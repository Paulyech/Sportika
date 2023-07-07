<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable= ['title','body','tags'];

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags','like', '%'.request('tag').'%');
        }
        if($filters['search'] ?? false){
            $query->where('title','like', '%'.request('search').'%')
            ->orWhere('body','like', '%'.request('search').'%')
            ->orWhere('tags','like', '%'.request('search').'%')
            ;
        }
    }
    
}
