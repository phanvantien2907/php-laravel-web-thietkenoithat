<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class project
 *
 * @property int $project_id
 * @property int|null $category_id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $description
 * @property string|null $detail
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $image
 * @property int|null $square_footage
 * @property Carbon|null $completion_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property bool $is_active
 *
 * @property Category|null $category
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'projects';
	protected $primaryKey = 'project_id';

	protected $casts = [
		'category_id' => 'int',
		'square_footage' => 'int',
		'completion_at' => 'datetime',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'category_id',
		'title',
		'slug',
		'description',
        'detail',
		'meta_title',
		'meta_description',
		'image',
		'square_footage',
		'completion_at',
		'is_active'
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'category_id');
	}
}
