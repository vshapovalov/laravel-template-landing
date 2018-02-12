<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vshapovalov\Crud\DataableTrait;

class Partner extends Model
{
	protected static $dataKeyField = 'id';
	protected static $dataValueField = 'title';

	protected $fillable = ['title', 'text', 'image', 'description'];

	use DataableTrait;
}
