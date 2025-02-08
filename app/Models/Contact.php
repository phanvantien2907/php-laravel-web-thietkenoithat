<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

/**
 * Class contact
 *
 * @property int $contact_id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $message
 * @property int|null $is_read
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $modified_at
 * @property string|null $modified_by
 * @property bool $is_active
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'contact';
	protected $primaryKey = 'contact_id';
	public $timestamps = false;
    use HasFactory;

	protected $casts = [
		'is_read' => 'int',
		'modified_at' => 'datetime',
		'is_active' => 'bool'
	];

	protected $fillable = [
		'name',
		'phone',
		'email',
		'message',
		'is_read',
		'created_by',
		'modified_at',
		'modified_by',
		'is_active'
	];
}
