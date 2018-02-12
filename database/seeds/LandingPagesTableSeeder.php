<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    /** relations */

	    $page = new \Vshapovalov\Pages\Page();

	    $page->title = 'root';
	    $page->url = '/';
	    $page->code = 'root';
	    $page->body = null;
	    $page->title_image = null;
	    $page->template = 'root';

	    $page->save();
    }
}
