<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	\App\Content::create([
		    'code' => 'header_title',
		    'description' => 'Первый блок - заголовок',
		    'text' => 'Здесь заголовок',
		    'body' => ''
	    ]);

	    \App\Content::create([
		    'code' => 'header_subtitle',
		    'description' => 'Первый блок - подзаголовок',
		    'text' => 'Здесь подзаголовок',
		    'body' => ''
	    ]);

	    \App\Content::create([
		    'code' => 'header_button_title',
		    'description' => 'Первый блок - заголовок кнопки',
		    'text' => 'кнопка',
		    'body' => ''
	    ]);

	    \App\Content::create([
		    'code' => 'header_button_url',
		    'description' => 'Первый блок - ссылка кнопки',
		    'text' => '#about',
		    'body' => ''
	    ]);

	    \App\Content::create([
		    'code' => 'features_title',
		    'description' => 'Преимущества - заголовок',
		    'text' => 'Наши преимущества',
		    'body' => ''
	    ]);

	    \App\Content::create([
		    'code' => 'features_description',
		    'description' => 'Преимущества - описание',
		    'text' => 'Здесь описываем почему мы лучше такие хорошие или лучше других',
		    'body' => ''
	    ]);

	    \App\Content::create([
		    'code' => 'phone',
		    'description' => 'Телефон',
		    'text' => '+7(777)0148180',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'need_call_button',
		    'description' => 'Меню - кнопка заказа звонка',
		    'text' => 'Заказать звонок',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'logo_caption',
		    'description' => 'Описание бренда',
		    'text' => 'здесь описание бренда',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'page_description',
		    'description' => 'Meta description',
		    'text' => 'landing, simple template',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'page_keywords',
		    'description' => 'Meta keywords',
		    'text' => 'landing, template, fast',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'page_title',
		    'description' => 'Meta title',
		    'text' => 'Быстрый лендинг | fast-landing.kz',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'portfolio_title',
		    'description' => 'Портфолио - заголовок',
		    'text' => 'Наши работы',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'portfolio_description',
		    'description' => 'Портфолио - описание',
		    'text' => 'У нас много качественных работ - нам есть чем похвастать.',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'hot_title',
		    'description' => 'Гор.предложение - заголовок',
		    'text' => 'Получите со скидкой 30%',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'hot_description',
		    'description' => 'Гор.предложение - описание',
		    'text' => 'Кол-во ограничено!!!',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'propose_title',
		    'description' => 'Услуги - заголовок',
		    'text' => 'Наши услуги',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'propose_description',
		    'description' => 'Услуги - описание',
		    'text' => 'Наши услуги - самые услужистые услуги в стране, конкуренты нервно курят в сторонке',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'about_title',
		    'description' => 'О нас - заголовок',
		    'text' => 'О нас',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'about_description',
		    'description' => 'О нас - описание',
		    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus aliquam architecto assumenda consequatur doloribus earum eveniet, harum, illum ipsam pariatur perferendis provident sapiente sequi soluta, tenetur ut vero voluptate.',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'about_col_1',
		    'description' => 'О нас - первый столбик',
		    'text' => 'пф',
		    'body' => '<p>Мы самые лучшие потому что:</p> <ul> <li>раз</li> <li>два</li> <li>три</li> </ul> <p>&nbsp;</p>'
	    ]);
	    \App\Content::create([
		    'code' => 'about_col_2',
		    'description' => 'О нас - второй столбик',
		    'text' => 'пф',
		    'body' => '<p>Мы самые лучшие потому что:</p> <ul> <li>раз</li> <li>два</li> <li>три</li> </ul>'
	    ]);
	    \App\Content::create([
		    'code' => 'client_title',
		    'description' => 'Наши клиенты - заголовок',
		    'text' => 'Наши клиенты',
		    'body' => ''
	    ]);

	    \App\Content::create([
		    'code' => 'client_description',
		    'description' => 'Наши клиенты - описание',
		    'text' => 'Более 1000 постоянных клиентов, которые доверяют нам свои задачи, и не зря это делают. Мы еще никого не подводили!',
		    'body' => ''
	    ]);

	    \App\Content::create([
		    'code' => 'feedback_title',
		    'description' => 'Отзывы - заголовок',
		    'text' => 'Отзывы клиентов',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'feedback_description',
		    'description' => 'Отзывы - описание',
		    'text' => 'Все что о нас говорят наши клиенты - говорит о нашей работе!',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'partner_title',
		    'description' => 'Партнеры - заголовок',
		    'text' => 'Наши партнеры',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'partner_description',
		    'description' => 'Партнеры - описание',
		    'text' => 'Наши партнеры - самые лучшие, среди них и маленькие, и большие, но все хороши.',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'question_title',
		    'description' => 'Вопросы - заголовок',
		    'text' => 'Частые вопросы',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'question_description',
		    'description' => 'Вопросы - описание',
		    'text' => 'Все что нужно знать - здесь!',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'contact_address',
		    'description' => 'Контакты - Адрес',
		    'text' => 'г. Алматы, ул Радостовца, д152е',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'contact_phone',
		    'description' => 'Контакты - телефон',
		    'text' => '+77770148180',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'contact_email',
		    'description' => 'Контакты - email',
		    'text' => 'shapovalov.v@gmail.com',
		    'body' => ''
	    ]);
	    \App\Content::create([
		    'code' => 'contact_hours',
		    'description' => 'Контакты - часы работы',
		    'text' => 'c 9:00 до 18:00',
		    'body' => ''
	    ]);

	    $form = App\Form::create([
		    'code' => 'call',
		    'title' => 'Заказать звонок',
		    'description' => 'lorem ipsum dolor sit amet',
		    'url' => '/api/forms',
		    'callback' => 'form_call',
		    'view' => 'base'
	    ]);


	    $form->fields()->createMany([
		    [
			    'name' => 'name',
			    'type' => 'input',
			    'label' => 'имя',
			    'placeholder' => 'ваше имя',
			    'value' => 'test name',
			    'required' => 1,
			    'hidden' => 0
		    ],
		    [
			    'name' => 'phone',
			    'type' => 'phone',
			    'label' => 'Номер телефона',
			    'placeholder' => 'Номер телефона',
			    'value' => '+77777777777',
			    'required' => 1,
			    'hidden' => 0
		    ],
		    [
			    'name' => 'email',
			    'type' => 'email',
			    'label' => 'E-mail',
			    'placeholder' => 'ваша почта',
			    'value' => null,
			    'required' => 1,
			    'hidden' => 0
		    ],
		    [
			    'name' => 'comment',
			    'type' => 'text',
			    'label' => 'Комментарий',
			    'placeholder' => 'оставьте комментарий',
			    'value' => null,
			    'required' => 0,
			    'hidden' => 0
		    ]

	    ]);
    }
}
