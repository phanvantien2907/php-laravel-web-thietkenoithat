<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BlogComment
 * 
 * @property int $comment_id
 * @property Carbon|null $created_date
 * @property string|null $detail
 * @property int|null $blog_id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property int $is_active
 * 
 * @property Blog|null $blog
 *
 * @package App\Models
 */
class BlogComment extends Model
{
	protected $table = 'blog_comment';
	protected $primaryKey = 'comment_id';
	public $timestamps = false;

	protected $casts = [
		'created_date' => 'datetime',
		'blog_id' => 'int',
		'is_active' => 'int'
	];

	protected $fillable = [
		'created_date',
		'detail',
		'blog_id',
		'name',
		'phone',
		'email',
		'is_active'
	];

	public function blog()
	{
		return $this->belongsTo(Blog::class);
	}
}
