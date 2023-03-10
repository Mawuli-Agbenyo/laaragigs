<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Filter;

class data extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'company', 'location', 'email', 'website', 'tags', 'description'];
    public function ScopeFilter($query, array $filters)
    {
        if($filters['tag'] ?? false)
        {
            $query->where('tags', 'like','%' . request('tag') .'%');
        };
        if($filters['search'] ?? false)
        {
            $query->where('title', 'like','%' . request('search') .'%') 
            ->orWhere('description', 'like','%' . request('search') .'%')
            ->orWhere('tags', 'like','%' . request('search') .'%');
        };
    }
}
