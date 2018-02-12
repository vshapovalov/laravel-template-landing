<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vshapovalov\Crud\DataableTrait;

class Achive extends Model
{
	protected static $dataKeyField = 'id';
	protected static $dataValueField = 'value';

	protected $fillable = ['title', 'text', 'image'];

    use DataableTrait;
}
