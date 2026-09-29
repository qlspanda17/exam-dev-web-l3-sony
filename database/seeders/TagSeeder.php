<?php

namespace Database\Seeders;



use App\Models\Event;
use App\Models\Tag;
use App\Models\Event_Tag;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Tag::create([
            'name' => 'Développement',
            
        ]);
        Tag::create([
            'name' => 'Cybersécurité',
            
        ]);
        Tag::create([
            'name' => 'Data',
            
        ]);
        Tag::create([
            'name' => 'Vie étudiante',
            
        ]);
        Tag::create([
            'name' => 'conférence',
            
        ]);
        



    }
}
