<?php

namespace App\Http\Controllers;

use App\Form;
use App\Mail\OrderAdded;
use App\Mail\OrderThanks;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    function postOrderAdd(Request $request){

	    $fields = $request->only(['name', 'email', 'phone']);

	    $order = Order::create($fields);

    	Mail::to(data_content('order_email'))->send( new OrderAdded( $order));

    	return ['status' => 'success'];
    }

    function postForm(Request $request){

    	$result = ['status' => 'success'];

    	if ($form = Form::with(['fields'])->where('code', $request->input('form_code', 'unknown'))->first()){

		    if ($form->callback && function_exists($form->callback)){

			    if (!call_user_func($form->callback, $form, $request)){

				    $result['status'] = 'error';
			    }
		    } else {

			    $result['status'] = 'callback_not_found';
		    }
	    } else {

		    $result['status'] = 'form_not_found';
	    }

	    return $result;
    }
}
