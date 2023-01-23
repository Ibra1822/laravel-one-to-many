<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Front-end','Back-end','Full-stack','App'];
        foreach($data as $item){
            $newType = new Type();
            $newType->name = $item;
            $newType->slug = Str::slug($item);
            $newType->save();
        }
    }
}
