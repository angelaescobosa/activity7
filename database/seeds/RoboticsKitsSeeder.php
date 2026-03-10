<?php

use Illuminate\Database\Seeder;
use App\RoboticsKit;

class RoboticsKitsSeeder extends Seeder
{
    public function run()
    {
    RoboticsKit::create([
        'name' => 'StarterKit'
    ]);

    RoboticsKit::create([
        'name' => 'Educational Robotics Kit'
    ]);

    RoboticsKit::create([
        'name' => 'Kit5'
    ]);
    }
}
