<?php

namespace Database\Seeders;

use App\Models\Ministery;
use Illuminate\Database\Seeder;

class MinisterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 1 */ Ministery::create(['title'=>'Escola de Evangelismo e Discipulado']);
        /* 2 */ Ministery::create(['title'=>'EE-Kids']);
    }
}
