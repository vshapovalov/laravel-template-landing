<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vshapovalov\Crud\DataableTrait;

class Content extends Model
{
	protected static $dataKeyField = 'code';
	protected static $dataValueField = 'text';

	protected $fillable = ['code', 'description', 'text', 'body'];

	use DataableTrait;

}
