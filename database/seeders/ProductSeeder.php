<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Lenovo K6',
                'price'=>'16999',
                'catagory'=>'Mobile',
                'description'=>'A smartphone with 3gb ram and 64gb storage',
                'gallery'=>'https://www.whatmobile.com.pk/admin/images/Lenovo/K6b.jpg'
            ],
            [
                'name'=>'Panasonic Tv',
                'price'=>'29999',
                'catagory'=>'TV',
                'description'=>'A smart TV with best Features',
                'gallery'=>'https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_350,w_350/v1605324320/Croma%20Assets/Entertainment/Television/Images/8941203914782.png'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'23499',
                'catagory'=>'TV',
                'description'=>'A smart OLED TV',
                'gallery'=>'https://www.sony.com/image/ded064d5e0d54aa1db7666326421fec1?fmt=pjpeg&wid=165&bgcolor=FFFFFF&bgc=FFFFFF'
            ],
            [
                'name'=>'Dawlence Fridge',
                'price'=>'43499',
                'catagory'=>'Fridge',
                'description'=>'A smart Fridge with best compressor',
                'gallery'=>'https://www.dawlance.com.pk/wp-content/uploads/2019/11/LVS-600x381.jpg'
            ]
        ]);
    }
}
