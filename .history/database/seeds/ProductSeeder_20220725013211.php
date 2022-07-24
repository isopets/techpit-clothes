<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->inert([
            [
                'name' => 'Black T-shirt',
                'description' => 'コットン素材を使用したクールネックのカットソー。',
                'image' =>'/images/1.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'Wh'
            ]
        ])
    }
}
