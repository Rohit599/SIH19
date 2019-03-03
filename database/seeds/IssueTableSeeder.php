<?php

use Illuminate\Database\Seeder;

class IssueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Issue::class, 750)->create();
    }
}
