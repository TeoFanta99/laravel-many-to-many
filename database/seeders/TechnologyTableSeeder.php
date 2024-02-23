<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Technology;


class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technology :: factory()
            -> count(10)
            -> create()
            -> each(function($technology) {

            $project = Project :: inRandomOrder() -> limit(10) -> get();
            $technology -> projects() -> attach($project);
            $technology -> save();

        });
    }
}
