<?php

use Illuminate\Database\Seeder;

class PageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog_page_sections = [
            [
                'id' => '1',
                'page_id' => '1',
                'position' => '1',
                'status' => '1',
                'title' => 'section 1',
                'slug' => 'section',
                'body' => 'section',
                'created_at' => '2014-03-28 21:57:44',
                'updated_at' => '2014-03-28 20:26:35',
            ],
        ];
        
        DB::table('page_sections')->insert($blog_page_sections);
    }
}
