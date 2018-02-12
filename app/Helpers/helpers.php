<?php
/**
 * Created by PhpStorm.
 * User: dr_sharp
 * Date: 20.01.2018
 * Time: 14:04
 */

if (!function_exists('data_content')){
	function data_content($code = null, $valueField = null){

		return \App\Content::getData($code, $valueField);
	}
}

if (!function_exists('data_achive')){
	function data_achive($code = null, $valueField = null, $clause = []){

		return \App\Achive::getData($code, $valueField);
	}
}

if (!function_exists('data_feedback')){

	function data_feedback($code = null, $valueField = null, $clause = []){

		return \App\Feedback::getData($code, $valueField);
	}
}

if (!function_exists('data_propose')){

	function data_propose($code = null, $valueField = null, $clause = []){

		return \App\Propose::getData($code, $valueField);
	}
}

if (!function_exists('data_portfolio')){

	function data_portfolio($code = null, $valueField = null, $clause = []){

		return \App\Portfolio::getData($code, $valueField);
	}
}

if (!function_exists('data_question')){

	function data_question($code = null, $valueField = null, $clause = []){

		return \App\Question::getData($code, $valueField);
	}
}

if (!function_exists('data_feature')){

	function data_feature($code = null, $valueField = null, $clause = []){

		return \App\Feature::getData($code, $valueField);
	}
}

if (!function_exists('data_client')){

	function data_client($code = null, $valueField = null, $clause = []){

		return \App\Client::getData($code, $valueField);
	}
}

if (!function_exists('data_partner')){

	function data_partner($code = null, $valueField = null, $clause = []){

		return \App\Partner::getData($code, $valueField);
	}
}

if (!function_exists('form_render')){

	function form_render($code, $isModal = true){

		if ($form = \App\Form::with('fields')->where('code', $code)->first()){

			$form->isModal = $isModal;

			return view('forms.' . ($form->view ? $form->view : 'base'), ['form' => $form])->render();
		} else {
			return '';
		}

	}
}

if (!function_exists('form_call')){

	function form_call($form, $request){

		debug('hello, form - ' . $form->code );

		return true;
	}
}

