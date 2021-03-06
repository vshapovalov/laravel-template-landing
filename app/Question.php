<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vshapovalov\Crud\DataableTrait;

class Question extends Model
{
	protected static $dataKeyField = 'id';
	protected static $dataValueField = 'title';

	protected $fillable = ['title', 'answer'];

	use DataableTrait;
}
