<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'fashion',
                'slug' => 'fashion',
                'description' => 'Kategori produk fashion seperti baju, celana, dan jaket.',
            ],
            [
                'name' => 'olahraga',
                'slug' => 'olahraga',
                'description' => 'Kategori produk olahraga seperti sepatu, matras, dan topi.',
            ],
            [
                'name' => 'dekorasi',
                'slug' => 'dekorasi',
                'description' => 'Kategori produk dekorasi seperti hiasan dinding, lampu, dan kursi.',
            ],
            [
                'name' => 'elektronik',
                'slug' => 'elektronik',
                'description' => 'Kategori produk elektronik seperti laptop, smartphone, dan kamera.',
            ]
        ]);
    }
}
