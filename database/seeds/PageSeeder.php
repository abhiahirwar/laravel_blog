<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $blog_pages = [
            [
                'id' => '1',
                'meta_robots_no_index' => '',
                'meta_robots_no_follow' => '',
                'is_home' => '1',
                'css' => '',
                'js' => '',
                'template' => 'home',
                'created_at' => '2014-03-28 21:57:44',
                'updated_at' => '2014-03-28 20:26:35',
                'slug' => 'home',
                'uri' => 'home',
                'title' => 'Home',
                'body' => '<h1>Home</h1>',
                'status' => '1',
                'meta_description' => 'null',
                'meta_keywords' => 'null',
            ],
            [
                'id' => '2',
                'meta_robots_no_index' => '',
                'meta_robots_no_follow' => '',
                'is_home' => '0',
                'css' => '',
                'js' => '',
                'template' => '',
                'created_at' => '2014-03-28 21:52:13',
                'updated_at' => '2014-03-28 21:08:14',
                'slug' => 'contact',
                'uri' => 'contact',
                'title' => 'Contact',
                'body' => '<h1>Contact</h1>',
                'status' => '1',
                'meta_description' => 'null',
                'meta_keywords' => 'null',
            ],
        ];

        DB::table('pages')->insert($blog_pages);
    }
}
