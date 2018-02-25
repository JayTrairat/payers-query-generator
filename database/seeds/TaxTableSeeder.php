<?php

use Illuminate\Database\Seeder;

class TaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tax_list = [
            [
                'name' => '',
                'code_name' => '',
                'flag_building' => '',
                'flag_billboard' => '',
                'flag_land' => '',
                'flag_two_houses' => '',
                'total_building' => '',
                'no_building_1' => '', // บ้านเช่า
                'no_building_2' => '', // ญาติอาศัย
                'no_building_3' => '', // ประกอบการค้า
                'total_billboard' => '',
                'no_billboard' => '',
                'total_land' => '',
                'no_land' => '',
                'address_no' => '',
                'address_moo' => '',
                'address_road' => '',
                'address_tambon' => '',
                'address_amphur' => '',
                'address_province' => '',
                'address_post_code' => '',
                'telephone_no' => '',
                'behind_payment' => '',
                'total' => '',
                'note' => ''
            ], [
                
            ]
        ];
        DB::table('taxs')->insert([

        ]);
    }
}
