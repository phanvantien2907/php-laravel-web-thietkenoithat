<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TeamMember
 * 
 * @property int $member_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $slug
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $title
 * @property string|null $bio
 * @property string|null $short_bio
 * @property string|null $image
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property Carbon|null $hire_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property bool $is_active
 * 
 * @property Collection|AboutU[] $about_us
 *
 * @package App\Models
 */
class TeamMember extends Model
{
	protected $table = 'team_members';
	protected $primaryKey = 'member_id';

	protected $casts = [
		'hire_date' => 'datetime',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'slug',
		'email',
		'phone',
		'title',
		'bio',
		'short_bio',
		'image',
		'meta_title',
		'meta_description',
		'hire_date',
		'is_active'
	];

	public function about_us()
	{
		return $this->hasMany(AboutU::class, 'member_id');
	}
}
