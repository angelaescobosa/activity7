<?php

use App\Course;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        UsersSeeder::class,
        RoboticsKitsSeeder::class
    ]); 
        factory(Course::class, 100)->create();
 
    }
}
