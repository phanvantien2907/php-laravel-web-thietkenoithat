<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 *
 * @property int $blog_id
 * @property int $user_id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $description
 * @property string|null $detail
 * @property string|null $image
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property string|null $modified_by
 * @property Carbon|null $modified_at
 * @property bool $is_active
 *
 * @property User $user
 * @property Collection|BlogComment[] $blog_comments
 *
 * @package App\Models
 */
class Blog extends Model
{
	protected $table = 'Blog';
	protected $primaryKey = 'blog_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'modified_at' => 'datetime',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'title',
		'slug',
		'description',
		'detail',
		'image',
		'seo_title',
		'seo_description',
		'seo_keywords',
		'created_by',
		'modified_by',
		'modified_at',
		'is_active'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function blog_comments()
	{
		return $this->hasMany(BlogComment::class);
	}
}
