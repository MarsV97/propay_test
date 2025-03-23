<?php

namespace Database\Seeders;

use App\Models\Interests;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $interests = [
            ['name' => 'Artificial Intelligence'],
            ['name' => 'Web Development'],
            ['name' => 'Cybersecurity'],
            ['name' => 'Robotics'],
            ['name' => 'Space Exploration'],
            ['name' => 'Virtual Reality (VR)'],
            ['name' => 'Gaming (PC, Console, Mobile)'],
            ['name' => 'Coding'],
            ['name' => 'Programming'],
            ['name' => 'Blockchain'],
            ['name' => 'Cryptocurrency'],
            ['name' => 'Graphic Design'],
            ['name' => 'Photography'],
            ['name' => 'Video Editing'],
            ['name' => 'Music Production'],
            ['name' => 'Writing (Fiction, Non-fiction, Blogging)'],
            ['name' => 'Painting'],
            ['name' => 'Drawing'],
            ['name' => 'Interior Design'],
            ['name' => 'DIY'],
            ['name' => 'Crafts'],
            ['name' => 'Football (Soccer)'],
            ['name' => 'Basketball'],
            ['name' => 'Running'],
            ['name' => 'Marathons'],
            ['name' => 'Yoga'],
            ['name' => 'Meditation'],
            ['name' => 'Weightlifting'],
            ['name' => 'Swimming'],
            ['name' => 'Martial Arts'],
            ['name' => 'Rock Climbing'],
            ['name' => 'Anime'],
            ['name' => 'Manga'],
            ['name' => 'Sci-Fi Movies'],
            ['name' => 'Fantasy Movies'],
            ['name' => 'Comic Books'],
            ['name' => 'Stand-up Comedy'],
            ['name' => 'True Crime Podcasts'],
            ['name' => 'Cosplay'],
            ['name' => 'K-Pop'],
            ['name' => 'Hiking'],
            ['name' => 'Camping'],
            ['name' => 'Fishing'],
            ['name' => 'Traveling'],
            ['name' => 'Surfing'],
            ['name' => 'Scuba Diving'],
            ['name' => 'Cycling'],
            ['name' => 'Cooking'],
            ['name' => 'Baking'],
            ['name' => 'Coffee Culture'],
            ['name' => 'Wine Tasting'],
            ['name' => 'Vegan-Based Eating'],
            ['name' => 'Plant-Based Eating'],
            ['name' => 'BBQ'],
            ['name' => 'Grilling'],
            ['name' => 'Exotic Foods'],
            ['name' => 'Minimalism'],
            ['name' => 'Productivity Hacks'],
            ['name' => 'Language Learning'],
            ['name' => 'Public Speaking'],
            ['name' => 'Personal Finance'],
            ['name' => 'Mindfulness'],
        ];
        foreach ($interests as $interest) {
            Interests::create($interest);
        }
    }
}
