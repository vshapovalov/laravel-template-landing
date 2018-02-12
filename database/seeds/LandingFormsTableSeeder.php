<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    $formContent = new \Vshapovalov\Crud\Models\CrudForm();
	    $formContent->name = 'Контент';
	    $formContent->code = 'contents';
	    $formContent->model = 'App\\Content';
	    $formContent->id = 'id';
	    $formContent->display = 'name';
	    $formContent->type = 'list';
	    $formContent->save();

	    $formContent->fields()->createMany(
		    [

			    [
				    'name' => 'code',
				    'caption' => 'Код',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'description',
				    'caption' => 'Описание',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'text',
				    'caption' => 'Значение',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 6
			    ],
			    [
				    'name' => 'body',
				    'caption' => 'HTML значение',
				    'type' => 'richedit',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'HTML значение',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 4,
				    'columns' => 12
			    ]
		    ]

	    );

	    $formFeature = new \Vshapovalov\Crud\Models\CrudForm();
	    $formFeature->name = 'Преимущества';
	    $formFeature->code = 'features';
	    $formFeature->model = 'App\\Feature';
	    $formFeature->id = 'id';
	    $formFeature->display = 'title';
	    $formFeature->type = 'list';
	    $formFeature->save();
	    $formFeature->fields()->createMany(
		    [

			    [
				    'name' => 'title',
				    'caption' => 'Заголовок',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'text',
				    'caption' => 'Описание',
				    'type' => 'textarea',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 12
			    ],
			    [
				    'name' => 'image',
				    'caption' => 'Изображение',
				    'type' => 'image',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => '{ "type": "image", "mode": "single", "resize": { "width": 500, "height": null, "quality": 90}}',
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ]
		    ]

	    );

	    $formFeedback = new \Vshapovalov\Crud\Models\CrudForm();
	    $formFeedback->name = 'Отзывы';
	    $formFeedback->code = 'feedbacks';
	    $formFeedback->model = 'App\\Feedback';
	    $formFeedback->id = 'id';
	    $formFeedback->display = 'title';
	    $formFeedback->type = 'list';
	    $formFeedback->save();
	    $formFeedback->fields()->createMany(
		    [

			    [
				    'name' => 'title',
				    'caption' => 'Заголовок',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'description',
				    'caption' => 'Описание',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'url',
				    'caption' => 'Ссылка',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 6
			    ],
			    [
				    'name' => 'image',
				    'caption' => 'Изображение',
				    'type' => 'image',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => '{ "type": "image", "mode": "single", "resize": { "width": 500, "height": null, "quality": 90}}',
				    'crud_relation_id' => null,
				    'order' => 4,
				    'columns' => 6
			    ],
			    [
				    'name' => 'text',
				    'caption' => 'Текст',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 5,
				    'columns' => 12
			    ]
		    ]

	    );

	    $formOrder = new \Vshapovalov\Crud\Models\CrudForm();
	    $formOrder->name = 'Заявки';
	    $formOrder->code = 'orders';
	    $formOrder->model = 'App\\Order';
	    $formOrder->id = 'id';
	    $formOrder->display = 'name';
	    $formOrder->type = 'list';
	    $formOrder->save();

	    $formOrder->fields()->createMany(
		    [

			    [
				    'name' => 'name',
				    'caption' => 'ФИО',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'email',
				    'caption' => 'email',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'phone',
				    'caption' => 'Телефон',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 6
			    ],
			    [
				    'name' => 'question',
				    'caption' => 'Вопрос',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 5,
				    'columns' => 12
			    ]
		    ]

	    );




	    $formPartner = new \Vshapovalov\Crud\Models\CrudForm();
	    $formPartner->name = 'Партнеры';
	    $formPartner->code = 'partners';
	    $formPartner->model = 'App\\Partner';
	    $formPartner->id = 'id';
	    $formPartner->display = 'name';
	    $formPartner->type = 'list';
	    $formPartner->save();

	    $formPartner->fields()->createMany(
		    [

			    [
				    'name' => 'title',
				    'caption' => 'Название',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'description',
				    'caption' => 'Описание',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'image',
				    'caption' => 'Изображение',
				    'type' => 'image',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => '{ "type": "image", "mode": "single", "resize": { "width": 500, "height": null, "quality": 90}}',
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 6
			    ],
			    [
				    'name' => 'text',
				    'caption' => 'Описание',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 5,
				    'columns' => 12
			    ]
		    ]

	    );


	    $formPortfolio = new \Vshapovalov\Crud\Models\CrudForm();
	    $formPortfolio->name = 'Портфолио';
	    $formPortfolio->code = 'portfolios';
	    $formPortfolio->model = 'App\\Portfolio';
	    $formPortfolio->id = 'id';
	    $formPortfolio->display = 'name';
	    $formPortfolio->type = 'list';
	    $formPortfolio->save();

	    $formPortfolio->fields()->createMany(
		    [

			    [
				    'name' => 'title',
				    'caption' => 'Название',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'description',
				    'caption' => 'Описание',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'image',
				    'caption' => 'Изображение',
				    'type' => 'image',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => '{ "type": "image", "mode": "single", "resize": { "width": 500, "height": null, "quality": 90}}',
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 6
			    ],
			    [
				    'name' => 'url',
				    'caption' => 'Ссылка',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 4,
				    'columns' => 6
			    ],
		    ]

	    );

	    $formPropose = new \Vshapovalov\Crud\Models\CrudForm();
	    $formPropose->name = 'Услуги';
	    $formPropose->code = 'proposes';
	    $formPropose->model = 'App\\Propose';
	    $formPropose->id = 'id';
	    $formPropose->display = 'name';
	    $formPropose->type = 'list';
	    $formPropose->save();

	    $formPropose->fields()->createMany(
		    [

			    [
				    'name' => 'title',
				    'caption' => 'Название',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'image',
				    'caption' => 'Изображение',
				    'type' => 'image',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => '{ "type": "image", "mode": "single", "resize": { "width": 500, "height": null, "quality": 90}}',
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'text',
				    'caption' => 'Описание',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 12
			    ],
			    [
				    'name' => 'price',
				    'caption' => 'Стоимость',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 4,
				    'columns' => 6
			    ]
		    ]

	    );

	    $formQuestion = new \Vshapovalov\Crud\Models\CrudForm();
	    $formQuestion->name = 'Вопросы';
	    $formQuestion->code = 'questions';
	    $formQuestion->model = 'App\\Question';
	    $formQuestion->id = 'id';
	    $formQuestion->display = 'name';
	    $formQuestion->type = 'list';
	    $formQuestion->save();

	    $formQuestion->fields()->createMany(
		    [

			    [
				    'name' => 'title',
				    'caption' => 'Вопрос',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 12
			    ],
			    [
				    'name' => 'answer',
				    'caption' => 'Ответ',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 12
			    ]
		    ]

	    );

	    $formPropose = new \Vshapovalov\Crud\Models\CrudForm();
	    $formPropose->name = 'Достижения';
	    $formPropose->code = 'achives';
	    $formPropose->model = 'App\\Achive';
	    $formPropose->id = 'id';
	    $formPropose->display = 'name';
	    $formPropose->type = 'list';
	    $formPropose->save();

	    $formPropose->fields()->createMany(
		    [

			    [
				    'name' => 'title',
				    'caption' => 'Заголовок',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'image',
				    'caption' => 'Изображение',
				    'type' => 'image',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => '{ "type": "image", "mode": "single", "resize": { "width": 500, "height": null, "quality": 90}}',
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'text',
				    'caption' => 'Описание',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 12
			    ]
		    ]

	    );

	    $formClient = new \Vshapovalov\Crud\Models\CrudForm();
	    $formClient->name = 'Клиенты';
	    $formClient->code = 'clients';
	    $formClient->model = 'App\\Client';
	    $formClient->id = 'id';
	    $formClient->display = 'name';
	    $formClient->type = 'list';
	    $formClient->save();

	    $formClient->fields()->createMany(
		    [

			    [
				    'name' => 'title',
				    'caption' => 'Название',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'description',
				    'caption' => 'Описание',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'image',
				    'caption' => 'Изображение',
				    'type' => 'image',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => '{ "type": "image", "mode": "single", "resize": { "width": 500, "height": null, "quality": 90}}',
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 6
			    ],
			    [
				    'name' => 'text',
				    'caption' => 'Текст',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 5,
				    'columns' => 12
			    ]
		    ]

	    );

	    $formPostForm = new \Vshapovalov\Crud\Models\CrudForm();
	    $formPostForm->name = 'Формы';
	    $formPostForm->code = 'postforms';
	    $formPostForm->model = 'App\\Form';
	    $formPostForm->id = 'id';
	    $formPostForm->display = 'title';
	    $formPostForm->type = 'list';
	    $formPostForm->save();

	    $formPostFormField = new \Vshapovalov\Crud\Models\CrudForm();
	    $formPostFormField->name = 'Формы - поля';
	    $formPostFormField->code = 'postformfields';
	    $formPostFormField->model = 'App\\FormField';
	    $formPostFormField->id = 'id';
	    $formPostFormField->display = 'name';
	    $formPostFormField->type = 'list';
	    $formPostFormField->save();

	    $relationPostField = new \Vshapovalov\Crud\Models\CrudRelation();
	    $relationPostField->type = 'hasMany';
	    $relationPostField->crud_form_id = $formPostFormField->sur_id;
	    $relationPostField->save();

	    $formPostForm->fields()->createMany(
		    [

			    [
				    'name' => 'code',
				    'caption' => 'code',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'title',
				    'caption' => 'title',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'description',
				    'caption' => 'description',
				    'type' => 'textarea',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 12
			    ],
			    [
				    'name' => 'url',
				    'caption' => 'url',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => 'api/forms',
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 4,
				    'columns' => 6
			    ],
			    [
				    'name' => 'callback',
				    'caption' => 'callback',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 5,
				    'columns' => 6
			    ],
			    [
				    'name' => 'view',
				    'caption' => 'view',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => 'base',
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 6,
				    'columns' => 6
			    ],
			    [
				    'name' => 'fields',
				    'caption' => 'fields',
				    'type' => 'relation',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'fields',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => $relationPostField->id,
				    'order' => 7,
				    'columns' => 12
			    ],

		    ]

	    );

	    $formPostFormField->fields()->createMany(
		    [

			    [
				    'name' => 'code',
				    'caption' => 'code',
				    'type' => 'textbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => 'required',
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 1,
				    'columns' => 6
			    ],
			    [
				    'name' => 'label',
				    'caption' => 'label',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 2,
				    'columns' => 6
			    ],
			    [
				    'name' => 'placeholder',
				    'caption' => 'placeholder',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 3,
				    'columns' => 6
			    ],
			    [
				    'name' => 'value',
				    'caption' => 'value',
				    'type' => 'textbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => null,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 4,
				    'columns' => 6
			    ],
			    [
				    'name' => 'required',
				    'caption' => 'required',
				    'type' => 'checkbox',
				    'visibility' => '["browse","add","edit"]',
				    'by_default' => 1,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 5,
				    'columns' => 6
			    ],
			    [
				    'name' => 'hidden',
				    'caption' => 'hidden',
				    'type' => 'checkbox',
				    'visibility' => '["add","edit"]',
				    'by_default' => 0,
				    'json' => 0,
				    'readonly' => 0,
				    'description' => null,
				    'tab' => 'Основные параметры',
				    'validation' => null,
				    'additional' => null,
				    'crud_relation_id' => null,
				    'order' => 6,
				    'columns' => 6
			    ],
			]
	    );

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'contents';
	    $menu->caption = 'Контент';
	    $menu->action = 'crud:contents:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'features';
	    $menu->caption = 'Преимущества';
	    $menu->action = 'crud:features:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'feedbacks';
	    $menu->caption = 'Отзывы';
	    $menu->action = 'crud:feedbacks:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'orders';
	    $menu->caption = 'Заявки';
	    $menu->action = 'crud:orders:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'partners';
	    $menu->caption = 'Партнеры';
	    $menu->action = 'crud:partners:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'portfolios';
	    $menu->caption = 'Портфолио';
	    $menu->action = 'crud:portfolios:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'proposes';
	    $menu->caption = 'Услуги';
	    $menu->action = 'crud:proposes:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'questions';
	    $menu->caption = 'Вопросы';
	    $menu->action = 'crud:questions:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'achives';
	    $menu->caption = 'Достижения';
	    $menu->action = 'crud:achives:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu = new \Vshapovalov\Crud\Models\CrudMenu();

	    $menu->name = 'clients';
	    $menu->caption = 'Клиенты';
	    $menu->action = 'crud:clients:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();

	    $menu->name = 'postforms';
	    $menu->caption = 'Формы заявок';
	    $menu->action = 'crud:postforms:mount';
	    $menu->order = 0;
	    $menu->status = 'enabled';
	    $menu->save();
    }
}
