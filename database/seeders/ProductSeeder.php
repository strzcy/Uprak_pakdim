<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product::insert([
            [
                'category_id'=>1,
                'name'=>'Cardigan',
                'slug'=>'cardigan',
                'description'=>'Cardigan rajut korean style',
                'price'=>185000,
                'stock'=>15,
                'is_active'=>1
            ],
            [
                'category_id'=>1,
                'name'=>'Tas Shoulder',
                'slug'=>'tas-shoulder',
                'description'=>'Tas wanita shoulder bag',
                'price'=>240000,
                'stock'=>10,
                'is_active'=>1
            ],
            [
                'category_id'=>2,
                'name'=>'Yoga Mat Pastel',
                'slug'=>'yoga-mat-pastel',
                'description'=>'Matras yoga anti slip',
                'price'=>120000,
                'stock'=>20,
                'is_active'=>1
            ],
            [
                'category_id'=>2,
                'name'=>'Tumbler Gym',
                'slug'=>'tumbler-gym',
                'description'=>'Botol minum olahraga',
                'price'=>75000,
                'stock'=>25,
                'is_active'=>1
            ],
            [
                'category_id'=>3,
                'name'=>'Lampu Tidur',
                'slug'=>'lampu-tidur',
                'description'=>'Lampu tidur warm white',
                'price'=>95000,
                'stock'=>12,
                'is_active'=>1 
            ],
            [
                'category_id'=>3,
                'name'=>'Cermin',
                'slug'=>'cermin',
                'description'=>'Cermin dekorasi kamar',
                'price'=>210000,
                'stock'=>8,
                'is_active'=>1
            ],
            [
                'category_id'=>4,
                'name'=>'Televisi',
                'slug'=>'televisi',
                'description'=>'Televisi LED 32 inch',
                'price'=>350000,
                'stock'=>18,
                'is_active'=>1
            ],
            [
                'category_id'=>4,
                'name'=>'Laptop Asus',
                'slug'=>'laptop-asus',
                'description'=>'Laptop gaming dengan spesifikasi tinggi',
                'price'=>15000000,
                'stock'=>5,
                'is_active'=>1
            ],
            [
                'category_id'=>4,
                'name'=>'Power Bank',
                'slug'=>'power-bank',
                'description'=>'Power bank kapasitas besar untuk pengisian cepat',
                'price'=>150000,
                'stock'=>30,
                'is_active'=>1
            ]
        ]);
    }
}
