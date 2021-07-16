<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create(['church_id'=>12,'date'=>date('Y-m-d',strtotime('29-08-2020')),'time'=>date('H:i:s',strtotime('08:30:00')),'tool_id'=>2,'teacher_id'=>3,'teacher_aux_id'=>2,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>67,'date'=>date('Y-m-d',strtotime('13-10-2020')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>1,'teacher_id'=>2,'teacher_aux_id'=>3,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>67,'date'=>date('Y-m-d',strtotime('13-10-2020')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>2,'teacher_id'=>2,'teacher_aux_id'=>3,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>73,'date'=>date('Y-m-d',strtotime('17-11-2020')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>1,'teacher_id'=>3,'teacher_aux_id'=>2,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>73,'date'=>date('Y-m-d',strtotime('17-11-2020')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>2,'teacher_id'=>3,'teacher_aux_id'=>2,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>73,'date'=>date('Y-m-d',strtotime('08-12-2020')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>1,'teacher_id'=>2,'teacher_aux_id'=>3,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>73,'date'=>date('Y-m-d',strtotime('08-12-2020')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>2,'teacher_id'=>2,'teacher_aux_id'=>3,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>73,'date'=>date('Y-m-d',strtotime('15-12-2020')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>1,'teacher_id'=>3,'teacher_aux_id'=>2,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>73,'date'=>date('Y-m-d',strtotime('15-12-2020')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>2,'teacher_id'=>3,'teacher_aux_id'=>2,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>87,'date'=>date('Y-m-d',strtotime('19-01-2021')),'time'=>date('H:i:s',strtotime('08:30:00')),'tool_id'=>2,'teacher_id'=>2,'teacher_aux_id'=>3,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>12,'date'=>date('Y-m-d',strtotime('16-03-2021')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>1,'teacher_id'=>3,'teacher_aux_id'=>2,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=>12,'date'=>date('Y-m-d',strtotime('16-03-2021')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>2,'teacher_id'=>3,'teacher_aux_id'=>2,'price'=>null,'available_id'=>1,'executableBy'=>1]);
        Event::create(['church_id'=> 2,'date'=>date('Y-m-d',strtotime('03-05-2021')),'time'=>date('H:i:s',strtotime('19:00:00')),'tool_id'=>2,'teacher_id'=>2,'teacher_aux_id'=>3,'price'=>null,'available_id'=>6,'executableBy'=>1]);
    }
}
