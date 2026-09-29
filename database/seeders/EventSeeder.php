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


class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Forum des métiers du numérique',
            'description' => 'Rencontre avec des professionnels du développement, de la cybersécurité et de la data.',
            'event_date' => '2026-10-08',
        ]);

        Event::create([
            'title' => 'Hackathon étudiant',
            'description' => 'Développement en équipe d’une application web autour d’un sujet imposé.',
            'event_date' => '2026-10-22',
        ]);

        Event::create([
            'title' => 'Conférence Laravel',
            'description' => 'Présentation de bonnes pratiques pour structurer une application Laravel.',
            'event_date' => '2026-11-05',
        ]);

        Event::create([
            'title' => 'Soirée jeux',
            'description' => 'Moment convivial ouvert aux étudiants de la licence informatique.',
            'event_date' => '2026-11-19',
        ]);
    }
}
