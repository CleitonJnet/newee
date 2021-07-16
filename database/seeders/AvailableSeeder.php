<?php

namespace Database\Seeders;

use App\Models\Availables;
use Illuminate\Database\Seeder;

class AvailableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Availables::create([ 'tool_id'=>1,'title'=>'On-line']);
        Availables::create([ 'tool_id'=>1,'title'=>'Presencial']);
        Availables::create([ 'tool_id'=>1,'title'=>'On-line e Presencial']);
        Availables::create([ 'tool_id'=>2,'title'=>'On-line']);
        Availables::create([ 'tool_id'=>2,'title'=>'Presencial']);
        Availables::create([ 'tool_id'=>2,'title'=>'On-line e Presencial']);
        Availables::create([ 'tool_id'=>7,'title'=>'Presencial']);
    }
}
