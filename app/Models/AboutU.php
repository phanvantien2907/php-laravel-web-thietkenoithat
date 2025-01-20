<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AboutU
 * 
 * @property int $about_id
 * @property int $member_id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $description
 * @property string|null $detail
 * @property string|null $image
 * @property string|null $seo_title
 * @property string|null $seo_sescription
 * @property string|null $seo_keywords
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $modified_at
 * @property string|null $modified_by
 * @property bool $is_active
 * 
 * @property TeamMember $team_member
 *
 * @package App\Models
 */
class AboutU extends Model
{
	protected $table = 'about_us';
	protected $primaryKey = 'about_id';
	public $timestamps = false;

	protected $casts = [
		'member_id' => 'int',
		'modified_at' => 'datetime',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'member_id',
		'title',
		'slug',
		'description',
		'detail',
		'image',
		'seo_title',
		'seo_sescription',
		'seo_keywords',
		'created_by',
		'modified_at',
		'modified_by',
		'is_active'
	];

	public function team_member()
	{
		return $this->belongsTo(TeamMember::class, 'member_id');
	}
}
