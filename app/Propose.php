<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vshapovalov\Crud\DataableTrait;

class Propose extends Model
{
	protected static $dataKeyField = 'id';
	protected static $dataValueField = 'title';

	protected $fillable = ['title', 'text', 'image', 'price'];

	use DataableTrait;

}
