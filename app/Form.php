<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vshapovalov\Crud\DataableTrait;

class Form extends Model
{
	protected static $dataKeyField = 'code';
	protected static $dataValueField = 'title';

	protected $fillable = [
		'code', 'title', 'description',
		'url', 'redirect', 'callback', 'view'];

    function fields(){
    	return $this->hasMany(FormField::class);
    }

    use DataableTrait;


}
