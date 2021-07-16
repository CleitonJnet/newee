<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 1 */ Role::create(['name'=>'Diretor Nacional'          ,'initial'=>'DN'    ]);
        /* 2 */ Role::create(['name'=>'Serviço às Igrejas'        ,'initial'=>'Admin' ]);
        /* 3 */ Role::create(['name'=>'FieldWorker'               ,'initial'=>'FW'    ]);
        /* 4 */ Role::create(['name'=>'Facilitador EE'            ,'initial'=>'F.EE'  ]);
        /* 5 */ Role::create(['name'=>'Facilitador EPC'           ,'initial'=>'F.EPC' ]);
        /* 6 */ Role::create(['name'=>'Professor Workshop ESM'    ,'initial'=>'P.WESM']);
        /* 7 */ Role::create(['name'=>'Professor Clínica EE'      ,'initial'=>'P.CEE' ]);
        /* 8 */ Role::create(['name'=>'Professor Workshop EPC'    ,'initial'=>'P.WEPC']);
    }
}
