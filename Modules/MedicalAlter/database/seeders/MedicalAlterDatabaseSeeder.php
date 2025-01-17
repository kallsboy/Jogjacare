<?php

namespace Modules\MedicalAlter\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\MedicalAlter\Models\MedicalAlter;

class MedicalAlterDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * MedicalAlters Seed
         * ------------------
         */

        // DB::table('medicalalters')->truncate();
        // echo "Truncate: medicalalters \n";

        MedicalAlter::factory()->count(20)->create();
        $rows = MedicalAlter::all();
        echo " Insert: medicalalters \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
