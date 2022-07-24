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
                
            ]
        ])
    }
}