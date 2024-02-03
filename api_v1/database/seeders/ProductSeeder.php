<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Products')->insert([
            [
                'name' => 'Modern Leather Sofa',
                'price' => 899.99,
                'description' => 'Luxurious modern leather sofa with adjustable headrests.',
                'quantity' => 20,
                'sku' => 'MODLSF01',
                'status' => 'default',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => 'Premium leather sofa with sleek design and sturdy construction.',
                'image' => 'storage/uploads/products/f9tbTevLCDrohb3PnZm25UuYSpNqeOtaKsBbBVeY.png',
                'tags' => 'sofa, leather, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
            ],
            [
                'name' => 'Nordic Oak Coffee Table',
                'price' => 699.99,
                'description' => 'Luxurious Nordic Oak Coffee Table with adjustable headrests.',
                'quantity' => 20,
                'sku' => 'MODLSF01',
                'status' => 'default',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => 'Premium leather sofa with sleek design and sturdy construction.',
                'image' => 'storage/uploads/products/f9tbTevLCDrohb3PnZm25UuYSpNqeOtaKsBbBVeY.png',
                'tags' => 'sofa, leather, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
            ],
            [
                'name' => 'Vintage Velvet Armchair',
                'price' => 99.99,
                'description' => 'Luxurious Vintage Velvet Armchair with adjustable headrests.',
                'quantity' => 20,
                'sku' => 'MODLSF01',
                'status' => 'default',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => 'Premium leather sofa with sleek design and sturdy construction.',
                'image' => 'storage/uploads/products/f9tbTevLCDrohb3PnZm25UuYSpNqeOtaKsBbBVeY.png',
                'tags' => 'sofa, leather, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
            ],
            [
                'name' => 'Rustic Pine Dining Table',
                'price' => 89.99,
                'description' => 'Luxurious Rustic Pine Dining Table with adjustable headrests.',
                'quantity' => 20,
                'sku' => 'MODLSF01',
                'status' => 'promotion',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => 'Premium leather sofa with sleek design and sturdy construction.',
                'image' => 'storage/uploads/products/f9tbTevLCDrohb3PnZm25UuYSpNqeOtaKsBbBVeY.png',
                'tags' => 'sofa, leather, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
            ],
            [
                'name' => 'Contemporary Leather Sectional',
                'price' => 599.99,
                'description' => 'Luxurious Contemporary Leather Sectional with adjustable headrests.',
                'quantity' => 20,
                'sku' => 'MODLSF01',
                'status' => 'promotion',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => 'Premium leather sofa with sleek design and sturdy construction.',
                'image' => 'storage/uploads/products/f9tbTevLCDrohb3PnZm25UuYSpNqeOtaKsBbBVeY.png',
                'tags' => 'sofa, leather, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
            ],
            [
                'name' => 'Industrial Metal Bar Stools',
                'price' => 899.99,
                'description' => 'Luxurious Industrial Metal Bar Stools with adjustable headrests.',
                'quantity' => 20,
                'sku' => 'MODLSF01',
                'status' => 'promotion',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => 'Premium leather sofa with sleek design and sturdy construction.',
                'image' => 'storage/uploads/products/f9tbTevLCDrohb3PnZm25UuYSpNqeOtaKsBbBVeY.png',
                'tags' => 'sofa, leather, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
            ],
        ]);
    }
}
