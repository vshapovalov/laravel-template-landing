<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vshapovalov\Crud\DataableTrait;

class Client extends Model
{
	protected static $dataKeyField = 'id';
	protected static $dataValueField = 'value';

	protected $fillable = ['title', 'text', 'description', 'image'];

	use DataableTrait;
}
