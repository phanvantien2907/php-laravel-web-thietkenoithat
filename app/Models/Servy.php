<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Servy
 * 
 * @property int $servies_id
 * @property int $category_id
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
 * @property Category $category
 *
 * @package App\Models
 */
class Servy extends Model
{
	protected $table = 'servies';
	protected $primaryKey = 'servies_id';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'modified_at' => 'datetime',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'category_id',
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

	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}
