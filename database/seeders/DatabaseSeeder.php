<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ChurchSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MinisterySeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(AvailableSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(EventUserSeeder::class);
        $this->call(ScheduleDefaultSeeder::class);
        $this->call(ScheduleSeeder::class);
    }
}
