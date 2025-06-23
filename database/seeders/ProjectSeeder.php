<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Project::create([
        'title' => 'Proyek Contoh 1',
        'description' => 'Deskripsi proyek contoh pertama',
        'image' => 'project1.jpg'
    ]);
    
    Project::create([
        'title' => 'Proyek Contoh 2', 
        'description' => 'Deskripsi proyek contoh kedua',
        'image' => 'project2.jpg',
        'link' => 'https://contoh.com'
    ]);
}
}
