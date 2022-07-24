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
                'name' => 'White T-shirt',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/2.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'White T-shirt 2',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => '/images/3.jpg',
                'price' => '6800'
            ],
            [
                'name' => 'Black T-shirt Plain',
                'description' => 'コットン素材を使用したクルーネックのカットソー。シンプルなデザインで、様々なスタイリングに合わせやすいアイテム。',
                'image' => '/images/4.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'Black T-shirt 2',
                'description' => 'コットン素材を使用したクルーネックのカットソー。シンプルなデザインで、様々なスタイリングに合わせやすいアイテム。',
                'image' => '/images/5.jpg',
                'price' => '4500'
            ],
            [
                'name' => 'Black T-shirt ',
                'description' => 'コットン素材を使用したクルーネックのカットソー。シンプルなデザインで、様々なスタイリングに合わせやすいアイテム。',
                'image' => '/images/5.jpg',
                'price' => '4500'
            ],
        ])
    }
}
