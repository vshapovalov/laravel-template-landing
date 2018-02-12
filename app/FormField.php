<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    protected $fillable = [
    	'name', 'type', 'label','placeholder',
	    'value', 'required', 'hidden', 'form_id'
    ];

}
