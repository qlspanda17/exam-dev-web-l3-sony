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

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            EventSeeder::class,
            TagSeeder::class
        ]);


        


            
    }
}
