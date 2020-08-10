<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posts")->insert(array(
            array(
                "user_id" => 1,
                "content" => "ahoj to som ja",
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "user_id" => 2,
                "content" => "ahoj to som ja druhy",
                "created_at" => now(),
                "updated_at" => now(),
            ),
            ));
    }
}
