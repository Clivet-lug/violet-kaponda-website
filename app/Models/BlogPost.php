<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'seo_title',
        'meta_description',
        'is_published',
        'published_at',
        'tags'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'tags' => 'array'
    ];

    // Auto-generate slug from title
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);

                // Ensure unique slug
                $count = static::where('slug', 'like', $post->slug . '%')->count();
                if ($count > 0) {
                    $post->slug = $post->slug . '-' . ($count + 1);
                }
            }
        });
    }

    // Relationships
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_post_categories');
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                    ->where('published_at', '<=', now());
    }

    public function scopeLatest($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    // Accessors
    public function getReadingTimeAttribute()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        return ceil($wordCount / 200); // Average reading speed: 200 words/minute
    }

    public function getExcerptAttribute($value)
    {
        if ($value) {
            return $value;
        }

        // Auto-generate excerpt from content if not provided
        return Str::limit(strip_tags($this->content), 150);
    }

    public function incrementViews()
    {
        $this->increment('views');
    }
}
