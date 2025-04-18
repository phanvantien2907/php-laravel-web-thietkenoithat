<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @property int $category_id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $description
 * @property int|null $position
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $seo_keywords
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $modified_at
 * @property string|null $modified_by
 * @property bool $is_active
 *
 * @property Collection|Project[] $projects
 * @property Collection|Servy[] $servies
 *
 * @package App\Models
 */
class Category extends Model
{
    use HasFactory;
	protected $table = 'category';
	protected $primaryKey = 'category_id';
	public $timestamps = false;

	protected $casts = [
		'position' => 'int',
		'modified_at' => 'datetime',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'title',
		'slug',
		'description',
		'position',
		'seo_title',
		'seo_description',
		'seo_keywords',
		'created_by',
		'modified_at',
		'modified_by',
		'is_active'
	];

	public function projects()
	{
		return $this->hasMany(Project::class);
	}

	public function servies()
	{
		return $this->hasMany(Servy::class);
	}
}
