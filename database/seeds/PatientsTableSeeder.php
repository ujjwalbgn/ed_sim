<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
        [
            'id'=>'1',
            'name'=>'Emma Hill',
            'level'=> '2',
            'diagnosis'=>'Left Total Hip Arthroplasty',
            'provider'=>'Wakefield',
            'age'=>'88',
            'dob'=>'8-8-199XX',
            'gender'=>'Female',
            'height'=>'170.2 cm (5ft 7in)',
            'weight'=>'64.9 kg (143 lbs)',
            'allergies'=> 'Sulfa',
            'sensitivity'=> 'None',
            'description'=> '',
            'barcode'=> '547266',
        ]
    ]);

    }
}
