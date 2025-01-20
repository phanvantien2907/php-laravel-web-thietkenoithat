<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * 
 * @property int $menu_id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $description
 * @property int|null $levels
 * @property int|null $position
 * @property Carbon|null $created_at
 * @property int|null $created_by
 * @property Carbon|null $modified_at
 * @property string|null $modified_by
 * @property bool $is_active
 *
 * @package App\Models
 */
class Menu extends Model
{
	protected $table = 'menu';
	protected $primaryKey = 'menu_id';
	public $timestamps = false;

	protected $casts = [
		'levels' => 'int',
		'position' => 'int',
		'created_by' => 'int',
		'modified_at' => 'datetime',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'title',
		'slug',
		'description',
		'levels',
		'position',
		'created_by',
		'modified_at',
		'modified_by',
		'is_active'
	];
}
