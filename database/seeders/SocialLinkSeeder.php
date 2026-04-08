<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            ['platform' => 'Telegram', 'url' => 'https://t.me/truestaff'],
            ['platform' => 'Twitter', 'url' => 'https://twitter.com/truestaff'],
            ['platform' => 'Instagram', 'url' => 'https://instagram.com/truestaff_recruit'],
        ];

        foreach ($links as $link) {
            SocialLink::firstOrCreate(['platform' => $link['platform']], $link);
        }
    }
}
