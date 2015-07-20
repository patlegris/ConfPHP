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
                'content' => 'Offendit esse ex officia domesticarum, occaecat ea quibusdam, legam domesticarum
mentitum anim deserunt, fabulas fugiat laboris appellat. Te se tamen voluptate,
varias mandaremus ut noster labore.',
            ],
            [
                'email' => 'Alain@gmail.com',
                'content' => 'Ubi duis occaecat ullamco, vidisse aute nam
tempor transferrem. Est iis quorum ingeniis. Quo aliqua eiusmod eruditionem,
eram sed deserunt non enim aut et varias firmissimum non cillum aut hic noster
consequat.',
            ],
            [
                'email' => 'robert@laposte.net',
                'content' => 'Sunt eiusmod non firmissimum. Aliquip esse amet et summis, nam malis
ullamco. Ad elit sed quid.',
            ],
            [
                'email' => 'patrick@gmail.com',
                'content' => 'Quamquam sunt vidisse ab occaecat anim quem est
dolore eu iis litteris a pariatur. Sunt vidisse ab occaecat anim quem est
dolore eu iis litteris a pariatur.',
            ],
        ]);
    }
}
