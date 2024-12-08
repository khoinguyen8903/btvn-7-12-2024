<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100; $i++) {
            DB::table('posts')->insert([
                'title' => 'Title ' . $i, // Tiêu đề số thứ tự
                'content' => 'This is the content for post ' . $i, // Nội dung mẫu
                'created_at' => now(), // Thời gian hiện tại
                'updated_at' => now(), // Thời gian hiện tại
            ]);
    }
}
}
