<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => 'こころ',
            'author' => '夏目漱石',
            'price' => 600,
        ];
        DB::table('books')->insert($param);
    }
}
