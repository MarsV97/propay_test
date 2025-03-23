<?php

namespace Database\Seeders;

use App\Models\Languages;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ['name' => 'English'],
            ['name' => 'Spanish'],
            ['name' => 'French'],
            ['name' => 'Mandarin Chinese'],
            ['name' => 'Arabic'],
            ['name' => 'Hindi'],
            ['name' => 'Russian'],
            ['name' => 'Portuguese'],
            ['name' => 'German'],
            ['name' => 'Japanese'],
            ['name' => 'Italian'],
            ['name' => 'Dutch'],
            ['name' => 'Greek'],
            ['name' => 'Swedish'],
            ['name' => 'Polish'],
            ['name' => 'Danish'],
            ['name' => 'Finnish'],
            ['name' => 'Norwegian'],
            ['name' => 'Czech'],
            ['name' => 'Hungarian'],
            ['name' => 'Korean'],
            ['name' => 'Thai'],
            ['name' => 'Vietnamese'],
            ['name' => 'Bengali'],
            ['name' => 'Urdu'],
            ['name' => 'Tamil'],
            ['name' => 'Telugu'],
            ['name' => 'Marathi'],
            ['name' => 'Indonesian'],
            ['name' => 'Malay'],
            ['name' => 'Swahili'],
            ['name' => 'Yoruba'],
            ['name' => 'Hausa'],
            ['name' => 'Amharic'],
            ['name' => 'Zulu'],
            ['name' => 'Xhosa'],
            ['name' => 'Igbo'],
            ['name' => 'Somali'],
            ['name' => 'Persian (Farsi)'],
            ['name' => 'Turkish'],
            ['name' => 'Hebrew'],
            ['name' => 'Kurdish'],
            ['name' => 'Pashto'],
            ['name' => 'Maori (New Zealand)'],
            ['name' => 'Hawaiian'],
            ['name' => 'Basque'],
            ['name' => 'Catalan'],
            ['name' => 'Welsh'],
            ['name' => 'Gaelic'],
            ['name' => 'Quechua'],
            ['name' => 'Nahuatl'],
        ];

        foreach ($languages as $language) {
            Languages::create($language);
        }
    }
}
