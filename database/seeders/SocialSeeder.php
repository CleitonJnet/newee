<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create(['name' => 'Facebook',  'url' => 'https://www.facebook.com/EvangelismoExplosivoInternacionalnoBrasil','status' => 1]);
        Social::create(['name' => 'Messenger', 'url' => '...','status' => 0]);
        Social::create(['name' => 'Instagram', 'url' => 'https://www.instagram.com/eebrasil_oficial/','status' => 1]);
        Social::create(['name' => 'LinkedIn',  'url' => '...','status' => 0]);
        Social::create(['name' => 'Pinterest', 'url' => '...','status' => 0]);
        Social::create(['name' => 'Snapchat',  'url' => '...','status' => 0]);
        Social::create(['name' => 'TikTok',    'url' => '...','status' => 0]);
        Social::create(['name' => 'Twitter',   'url' => '...','status' => 0]);
        Social::create(['name' => 'YouTube',   'url' => 'https://www.youtube.com/channel/UCxudQy8K01FasjyhKgtD2NQ','status' => 1]);
        Social::create(['name' => 'WhatsApp',  'url' => 'https://api.whatsapp.com/send/?phone=5511976423666','status' => 1]);
    }
}
