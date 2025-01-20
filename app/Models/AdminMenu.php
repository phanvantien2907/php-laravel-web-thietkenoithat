<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminMenu
 * 
 * @property int $admin_menu_id
 * @property string|null $item_name
 * @property string|null $slug
 * @property int|null $item_level
 * @property int|null $parent_level
 * @property int|null $item_order
 * @property string|null $Item_target
 * @property string|null $area_name
 * @property string|null $controller_name
 * @property string|null $action_name
 * @property string|null $icon
 * @property string|null $id_name
 * @property bool $is_active
 *
 * @package App\Models
 */
class AdminMenu extends Model
{
	protected $table = 'admin_menu';
	protected $primaryKey = 'admin_menu_id';
	public $timestamps = false;

	protected $casts = [
		'item_level' => 'int',
		'parent_level' => 'int',
		'item_order' => 'int',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'item_name',
		'slug',
		'item_level',
		'parent_level',
		'item_order',
		'Item_target',
		'area_name',
		'controller_name',
		'action_name',
		'icon',
		'id_name',
		'is_active'
	];
}
