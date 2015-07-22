<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        DB::statement('ALTER TABLE comments AUTO_INCREMENT=1');
        DB::table('comments')->insert([
            [
                'email' => 'jacques@gmail.com',
                'message' => 'Offendit esse ex officia domesticarum, occaecat ea quibusdam, legam domesticarum
mentitum anim deserunt, fabulas fugiat laboris appellat. Te se tamen voluptate,
varias mandaremus ut noster labore.',
                'post_id' => 1,
            ],
            [
                'email' => 'Alain@gmail.com',
                'message' => 'Ubi duis occaecat ullamco, vidisse aute nam
tempor transferrem. Est iis quorum ingeniis. Quo aliqua eiusmod eruditionem,
eram sed deserunt non enim aut et varias firmissimum non cillum aut hic noster
consequat.',
                'post_id' => 2,
            ],
            [
                'email' => 'robert@laposte.net',
                'message' => 'Sunt eiusmod non firmissimum. Aliquip esse amet et summis, nam malis
ullamco. Ad elit sed quid.',
                'post_id' => 3,
            ],
            [
                'email' => 'patrick@gmail.com',
                'message' => 'Quamquam sunt vidisse ab occaecat anim quem est
dolore eu iis litteris a pariatur. Sunt vidisse ab occaecat anim quem est
dolore eu iis litteris a pariatur.',
                'post_id' => 4,
            ],
        ]);
    }
}
