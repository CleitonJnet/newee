<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* ID: 01 */ Tool::create(['title'=>'Clínica Evangelismo Explosivo',   'initials'=>'C.EE'  ,'ministery_id'=>1,'from'=>1,'color'=>'#5BC3CD','logo'=>'site/img/attachment/tool/1/logo.png','background'=>'site/img/attachment/tool/1/background.jpg','bkgd_poster'=>'site/img/attachment/tool/1/poster.jpg','bkgd_slide'=>'site/img/attachment/tool/1/slide.jpg','bkgd_certificate'=>'site/img/attachment/tool/1/certificate.jpg']);
        /* ID: 02 */ Tool::create(['title'=>'Workshop O Evangelho Em Sua Mão', 'initials'=>'W.ESM' ,'ministery_id'=>1,'from'=>1,'color'=>'#2220AA','logo'=>'site/img/attachment/tool/2/logo.png','background'=>'site/img/attachment/tool/2/background.jpg','bkgd_poster'=>'site/img/attachment/tool/2/poster.jpg','bkgd_slide'=>'site/img/attachment/tool/2/slide.jpg','bkgd_certificate'=>'site/img/attachment/tool/2/certificate.jpg']);
        /* ID: 03 */ Tool::create(['title'=>'Explicar o Evangelho',            'initials'=>'e²'    ,'ministery_id'=>1,'from'=>2,'color'=>'#5BC3CD','logo'=>'site/img/attachment/tool/logo.png','background'=>'site/img/attachment/tool/background.jpg','bkgd_poster'=>null,                                   'bkgd_slide'=>null,                                  'bkgd_certificate'=>null                                        ]);
        /* ID: 04 */ Tool::create(['title'=>'Mentorear para Multiplicar',      'initials'=>'m²'    ,'ministery_id'=>1,'from'=>2,'color'=>'#ED7600','logo'=>'site/img/attachment/tool/logo.png','background'=>'site/img/attachment/tool/background.jpg','bkgd_poster'=>null,                                   'bkgd_slide'=>null,                                  'bkgd_certificate'=>null                                        ]);
        /* ID: 05 */ Tool::create(['title'=>'Crescer em Cristo',               'initials'=>'c²'    ,'ministery_id'=>1,'from'=>2,'color'=>'#7DAAA9','logo'=>'site/img/attachment/tool/logo.png','background'=>'site/img/attachment/tool/background.jpg','bkgd_poster'=>null,                                   'bkgd_slide'=>null,                                  'bkgd_certificate'=>null                                        ]);
        /* ID: 06 */ Tool::create(['title'=>'Responder com a Razão',           'initials'=>'r²'    ,'ministery_id'=>1,'from'=>2,'color'=>'#000000','logo'=>'site/img/attachment/tool/logo.png','background'=>'site/img/attachment/tool/background.jpg','bkgd_poster'=>null,                                   'bkgd_slide'=>null,                                  'bkgd_certificate'=>null                                        ]);
        /* ID: 07 */ Tool::create(['title'=>'Workshop Esperança Para Crianças','initials'=>'W.EPC' ,'ministery_id'=>2,'from'=>1,'color'=>'#ED7600','logo'=>'site/img/attachment/tool/7/logo.png','background'=>'site/img/attachment/tool/7/background.jpg','bkgd_poster'=>'site/img/attachment/tool/7/poster.jpg','bkgd_slide'=>'site/img/attachment/tool/7/slide.jpg','bkgd_certificate'=>'site/img/attachment/tool/7/certificate.jpg']);
        /* ID: 08 */ Tool::create(['title'=>'Esperança Para Crianças',         'initials'=>'EPC'   ,'ministery_id'=>2,'from'=>2,'color'=>'#ED7600','logo'=>'site/img/attachment/tool/logo.png','background'=>'site/img/attachment/tool/background.jpg','bkgd_poster'=>null,                                   'bkgd_slide'=>null,                                  'bkgd_certificate'=>null                                        ]);
    }
}
