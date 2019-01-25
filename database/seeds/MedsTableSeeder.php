<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meds')->insert([
            [
                'id' => '1',
                'name' => 'Multivitamin tab 1 PO ' ,
                'type' => 'Scheduled Medication',
                'dateTimeRNVerified' => 'Yesterday KP',
                'timeYesterday' => '',
                'timeToday' => '0900',
                'timeTomorrow' => '0900',
                'description' => 'Daily',
                'barcode' => '101'
            ]
            ,
            [
                'id' => '2',
                'name' => 'Enoxaparin 40 mg SubCut',
                'type' => 'Scheduled Medication',
                'dateTimeRNVerified' => 'Yesterday KP',
                'timeYesterday' => '',
                'timeToday' => '0900',
                'timeTomorrow' => '0900',
                'description' => 'daily',
                'barcode' => '102'
            ],
            [
                'id' => '3',
                'name' => '0.9% Sodium Chloride IV',
                'type' => 'Scheduled Medication',
                'dateTimeRNVerified' => 'Yesterday KP',
                'timeYesterday' => '',
                'timeToday' => '0400 KB',
                'timeTomorrow' => '',
                'description' => 'at 75mL/hr',
                'barcode' => '103'
            ],
            [
                'id' => '4',
                'name' => 'Benazepril 10 mg PO BIO',
                'type' => 'Scheduled Medication',
                'dateTimeRNVerified' => 'Yesterday KP',
                'timeYesterday' => '',
                'timeToday' => '0900 || 2100',
                'timeTomorrow' => '0900 || 2100',
                'description' => '',
                'barcode' => '104'
            ],
            [
                'id' => '5',
                'name' => 'Acetaminophen 500 mg ',
                'type' => 'PRN Medication',
                'dateTimeRNVerified' => 'Yesterday KP',
                'timeYesterday' => '',
                'timeToday' => '0400 KB',
                'timeTomorrow' => '',
                'description' => 'PO every 4 hour PRN Pain less than or equal to 4 on 0-10 pain scale',
                'barcode' => '103'
            ],
            [
                'id' => '6',
                'name' => 'Acetaminophen 500 mg / Hydrocodone 5mg 1 tablet',
                'type' => 'PRN Medication',
                'dateTimeRNVerified' => 'Yesterday KP',
                'timeYesterday' => '',
                'timeToday' => '0400 KB',
                'timeTomorrow' => '',
                'description' => 'PO every 4 hour PRN pain 5 to 7 on a 0-10 pain scale',
                'barcode' => '103'
            ],
            [
                'id' => '7',
                'name' => 'IV saline lock; Flush with 0.9% NS every 8 hours per protocol',
                'type' => 'Scheduled Medication',
                'dateTimeRNVerified' => 'Yesterday JW',
                'timeYesterday' => '',
                'timeToday' => '0100 JW || 0900 || 1700',
                'timeTomorrow' => '',
                'description' => '',
                'barcode' => '104'
            ],
            [
                'id' => '8',
                'name' => 'Acetaminophen 650 mg PO every 4 hours PRN pain 4 or less on 0-10 pain scale',
                'type' => 'PRN Medication',
                'dateTimeRNVerified' => 'Yesterday JW',
                'timeYesterday' => '',
                'timeToday' => '',
                'timeTomorrow' => '',
                'description' => '',
                'barcode' => '105'
            ],
            [
                'id' => '9',
                'name' => 'Imitrex 100 mg PO BID PRN for migraine- May use own Imitrex for migraine if needed',
                'type' => 'PRN Medication',
                'dateTimeRNVerified' => 'Yesterday JW',
                'timeYesterday' => '',
                'timeToday' => '',
                'timeTomorrow' => '',
                'description' => '',
                'barcode' => '106'
            ],
            [
                'id' => '10',
                'name' => 'Lorazepam 4 mg IVP, given at 2 mg per minute- Give 1 dose for
                           seizure activity PRN and notify HCP immediately for any change in condition',
                'type' => 'PRN Medication',
                'dateTimeRNVerified' => 'Yesterday JW',
                'timeYesterday' => '',
                'timeToday' => '',
                'timeTomorrow' => '',
                'description' => '',
                'barcode' => '107'
            ],
        ]);
    }
}
