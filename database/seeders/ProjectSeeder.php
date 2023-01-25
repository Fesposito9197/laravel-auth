<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_project = new Project();
        $new_project->title = $faker->sentence();
        $new_project->description = $faker->text();
        $new_project->client_name = $faker->firstName();
        $new_project->slug = Str::slug($new_project->title, '-');
        $new_project->save();
    }
}
