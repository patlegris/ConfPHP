<?php

use Illuminate\Database\Seeder;

class PostsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Post_Tag')->delete();
        DB::statement('ALTER TABLE PostsTags AUTO_INCREMENT=1');
        DB::table('Post_Tag')->insert([
            [
                'Post_id' => 1,
                'Tag_id' => 1,
            ],
            [
                'Post_id' => 1,
                'Tag_id' => 2,
            ],
            [
                'Post_id' => 2,
                'Tag_id' => 3,
            ],
            [
                'Post_id' => 2,
                'Tag_id' => 4,
            ],
            [
                'Post_id' => 3,
                'Tag_id' => 5,
            ],
            [
                'Post_id' => 3,
                'Tag_id' => 6,
            ],
            [
                'Post_id' => 4,
                'Tag_id' => 7,
            ],
            [
                'Post_id' => 4,
                'Tag_id' => 8,
            ],
        ]);
    }
}