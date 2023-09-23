<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('takken')->insert([
            [
                'tak' => 'Kapoenen',
                'title' => 'De eerste stapjes',
                'age' => '6 tot 8 jaar',
                'text' => 'De jongste tak van onze scouts, dat zijn de kapoenen!

            Deze kleine rakkers houden van avontuur en zitten boordevol energie! Creativiteit is key bij de kapoenen. Knutselen, schilderen en boetseren kunnen ze als geen ander.

            Spelenderwijs ontdekken onze jongste kadetten wat scouting is.',
                'email' => 'kapoenen@scoutsnieuwkerken.be',
                'image_path' => 'kapoenen.jpg',
            ],
            [
                'tak' => 'Wouters',
                'title' => 'Ravotten tot je erbij neervalt!',
                'age' => '8 tot 11 jaar',
                'text' => 'Na de kapoenen komen de wouters.

            Deze nieuwsgierige jongens en meisjes trekken er graag op uit. Kampen maken in de bossen is een van hun favoriete bezigheden! We leren ook sjorren, handig om een cool kamp te bouwen!

            Bij de wouters zitten vindingrijke maar soms ondeugende sjarels.',
                'email' => 'wouters@scoutsnieuwkerken.be',
                'image_path' => 'wouters.jpg',
            ],
            [
                'tak' => 'Jonggivers',
                'title' => 'Samen de natuur in',
                'age' => '11 tot 14 jaar',
                'text' => 'Tijd voor het echte werk! In patrouilles leren de jonggivers als een team samenwerken. Ze worden steeds zelfstandiger en geen uitdaging is hen te zwaar.

            Een eerste tentenkamp, spannend! Hier zal je leren hoe je als een echte survivor de natuurelementen te baas kan.
            
            Als kers op de taart ontvangen de derdejaars hun totem!',
                'email' => 'jonggivers@scoutsnieuwkerken.be',
                'image_path' => 'jonggivers.jpg',
            ],
            [
                'tak' => 'Givers',
                'title' => 'De ontknoping',
                'age' => '14 tot 17 jaar',
                'text' => 'De givers kennen elkaar door en door. Deze hechte vriendengroep is voor het leven! Samen beleven ze onvergetelijke avonturen. Buitenlands kamp is hét hoogtepunt van de givertak.
                
                Derdejaars krijgen hun voortotem op kamp. Tijdens dit bezinningsmoment voel je echte verbondenheid!
                
                Deze bruisende groep zit vol leven! Ze zijn klaar voor de volgende stap...',
                'email' => 'givers@scoutsnieuwkerken.be',
                'image_path' => 'givers.jpg',
            ],
        ]);
    }
}
