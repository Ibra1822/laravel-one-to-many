<?php

namespace Database\Seeders;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for($i = 0; $i < 30; $i++){
        $newProject = new Project();
        $newProject->name = $faker->sentence(5);
        $newProject->slug = Project::generateSlug($newProject->name);
        $newProject->client_name = $faker->name();
        $newProject->summary = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, atque iusto eos architecto odit accusamus fuga nemo consequatur culpa cupiditate eum laboriosam dolores. Quia inventore provident quae expedita dolor porro!';
        $newProject->save();
    }
    }
}
