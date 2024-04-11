<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $createMultipleSupplier = [[
                'rif'=>'J401038190',
                'name'=>'CORPORACIÓN MULTIVEN C. A.',
                'phone'=>'',
                'address'=>'AV SANTOS MICHELENA EDIF UNIBELPISO PB LOCALC Y D SECTORCENTRO',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'rif'=>'J411891797',
                'name'=>'GRAN MARACAY 2028 C.A.',
                'phone'=>'584128850452',
                'address'=>'CALLE VARGAS LOCAL NRO7 SECTOR CENTRO MARACAY ESTADO ARAGUA',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'rif'=>'',
                'name'=>'MAXGLOW',
                'phone'=>'584243655441',
                'address'=>'AV BOLIVAR MARACAY ESTADO ARAGUA',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'rif'=>'',
                'name'=>'FENIX',
                'phone'=>'',
                'address'=>'AV BOLIVAR MARACAY ESTADO ARAGUA',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'rif'=>'',
                'name'=>'COMERCIAL NUEVA MODA 2010, C.A.',
                'phone'=>'',
                'address'=>'CALLE VARGAS',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'rif'=>'J297273620',
                'name'=>'INVERSIONES 2009,C.A.',
                'phone'=>'',
                'address'=>'AV SANTOS MICHELENA OESTE NRO 12 MARACAY EDO ARAGUA',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'rif'=>'J413228823',
                'name'=>'INVERSIONES SUPER OFERTAS 2019,C.A.',
                'phone'=>'',
                'address'=>'CALLE VARGAS C/SANTOS MICHELENA OESTE LOCAL NRO 27 CENTRO MARACAY EDO ARAGUA',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'rif'=>'J405548886',
                'name'=>'MAXITEL DIGITAL,C.A.',
                'phone'=>'',
                'address'=>'AV SANTOS MICHELENA CC ARC NIVEL PB LOCAL 18 CENTRO MARACAY EDO ARAGUA',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
        ];

        DB::table('suppliers')->insert($createMultipleSupplier);
    }
}
