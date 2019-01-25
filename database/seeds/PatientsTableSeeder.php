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
            ],
            [
                'id'=>'2',
                'name'=>'Randy Adams',
                'level'=> '2',
                'diagnosis'=>'Head Trauma | Rule Out Concussion',
                'provider'=>'Reynolds, MD',
                'age'=>'28',
                'dob'=>'7-26-199XX',
                'gender'=>'Male',
                'height'=>'175.3 cm (5ft 9in)',
                'weight'=>'71.6 kg (158 lbs)',
                'allergies'=> 'None',
                'sensitivity'=> 'None',
                'description'=> '',
                'barcode'=> '316574',
            ],

        ]);

    }
}
