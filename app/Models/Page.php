<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'uri',
        'status',
        'body',
        'meta_keywords',
        'meta_description',
    ];

    protected $attributes = [
        'meta_robots_no_index' => '',
        'meta_robots_no_follow' => '',
        'is_home' => '1',
        'css' => '',
        'js' => '',
        'template' => 'home',
        'status' => '1',
        'meta_description' => 'null',
        'meta_keywords' => 'null',
    ];
	
    public function uri()
    {
        $uri = $this->slug.'/';
        return $uri;
    }
    /**
     * A page has many sections.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections()
    {
        return $this->hasMany(PageSection::class);
    }

    /**
     * Get all published sections.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publishedSections()
    {
        return $this->sections()->published();
    }

    /**
     * A page can have menulinks.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menulinks()
    {
        return $this->hasMany(Menulink::class);
    }

    /**
     * A page can have subpages.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subpages()
    {
        return $this->hasMany(self::class, 'parent_id')->order();
    }

    /**
     * A page can have a parent.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
