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
                'name' => 'Table',
                'price' => 50.00,
                'description' => 'Luxurious modern leather sofa with adjustable headrests.',
                'quantity' => 20,
                'sku' => 'SKU123456789001',
                'status' => 'default',
                'category_id' => 3, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Brown</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">1.6m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">1.6</div>
                </div>
              </div>',
                'image' => 'images/1.png',
                'tags' => 'table, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Chair',
                'price' => 50.00,
                'description' => 'Stylish and comfortable chair featuring luxurious modern leather upholstery.',
                'quantity' => 20,
                'sku' => 'SKU987654321002',
                'status' => 'default',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Brown</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">1.6m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">0.35m</div>
                </div>
              </div>',
                'image' => 'images/2.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Table circle',
                'price' => 50.00,
                'description' => 'Stylish and comfortable chair featuring luxurious modern leather upholstery.',
                'quantity' => 20,
                'sku' => 'SKUABCDEF123003',
                'status' => 'default',
                'category_id' => 3, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Brown</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">1.6m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">1m</div>
                </div>
              </div>',
                'image' => 'images/3.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Sofa',
                'price' => 50.00,
                'description' => 'Elegant circular table crafted with premium materials and a luxurious modern design, ideal for dining or as a centerpiece in any room.',
                'quantity' => 20,
                'sku' => 'SKU456DEF789004',
                'status' => 'default',
                'category_id' => 5, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Red</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">0.7m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">1.8m</div>
                </div>
              </div>',
                'image' => 'images/4.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Table',
                'price' => 50.00,
                'description' => 'Plush and inviting sofa with rich red upholstery, adjustable headrests, and a modern design that adds sophistication to any room.',
                'quantity' => 20,
                'sku' => 'SKUZYXWVU321005',
                'status' => 'default',
                'category_id' => 3, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Brown</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">0.7m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">0.8m</div>
                </div>
              </div>',
                'image' => 'images/5.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Table',
                'price' => 50.00,
                'description' => 'Versatile and stylish table featuring a contemporary design and high-quality construction, perfect for both casual and formal settings.',
                'quantity' => 20,
                'sku' => 'SKUZYXWVU321005',
                'status' => 'default',
                'category_id' => 3, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Brown</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">0.7m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">0.8m</div>
                </div>
              </div>',
                'image' => 'images/6.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Drawer',
                'price' => 50.00,
                'description' => 'Sleek and modern table with a minimalist design, crafted from high-quality materials for durability and style.',
                'quantity' => 20,
                'sku' => 'SKU098765432106',
                'status' => 'default',
                'category_id' => 4, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Brown</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">0.7m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">2.5m</div>
                </div>
              </div>',
                'image' => 'images/7.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Chair',
                'price' => 50.00,
                'description' => 'Spacious and practical drawer unit designed to complement any modern decor, offering ample storage space and a sleek aesthetic.',
                'quantity' => 20,
                'sku' => 'SKU098765432106',
                'status' => 'default',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Brown</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">0.7m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">0.6m</div>
                </div>
              </div>',
                'image' => 'images/8.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Drawer',
                'price' => 50.00,
                'description' => 'Classic and comfortable chair with a timeless design, upholstered in premium leather and featuring adjustable headrests for maximum comfort.',
                'quantity' => 20,
                'sku' => 'SKU098765432106',
                'status' => 'default',
                'category_id' => 4, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Brown</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">2.3m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">0.8m</div>
                </div>
              </div>',
                'image' => 'images/9.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            
            [
                'name' => 'Chair',
                'price' => 50.00,
                'description' => 'Chic and functional drawer unit featuring a clean white finish and ample storage space, perfect for organizing any room in style.',
                'quantity' => 20,
                'sku' => 'SKU098765432106',
                'status' => 'promotion',
                'category_id' => 1, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">White</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">0.8m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">0.6m</div>
                </div>
              </div>',
                'image' => 'images/11.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Sofa',
                'price' => 50.00,
                'description' => 'Contemporary chair with a sleek white finish, adjustable headrests, and a modern design that adds elegance to any space.',
                'quantity' => 20,
                'sku' => 'SKU098765432106',
                'status' => 'promotion',
                'category_id' => 5, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">Purple</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">0.8m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">3.5m</div>
                </div>
              </div>',
                'image' => 'images/12.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Drawer',
                'price' => 50.00,
                'description' => 'Luxurious sofa with a bold purple upholstery, adjustable headrests, and spacious seating, providing both style and comfort.',
                'quantity' => 20,
                'sku' => 'SKU098765432106',
                'status' => 'promotion',
                'category_id' => 4, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">White</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">1.7m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">0.4m</div>
                </div>
              </div>',
                'image' => 'images/10.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
            [
                'name' => 'Drawer',
                'price' => 50.00,
                'description' => 'Modern drawer unit with a minimalist design and a crisp white finish, offering practical storage solutions for any room in the house.',
                'quantity' => 20,
                'sku' => 'SKU098765432106',
                'status' => 'default',
                'category_id' => 2, // Assuming '1' represents the furniture category
                'discount' => 50.00, // Assuming there's a discount of $50
                'product_detail' => '<div class="mt-2 fs-6 detail">
                <div class="row mt-2">
                  <div class="col fw-bold">Color</div>
                  <div class="col-9">White</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">High</div>
                  <div class="col-9">1.7m</div>
                </div>
                <div class="row mt-2">
                  <div class="col fw-bold">width</div>
                  <div class="col-9">0.4m</div>
                </div>
              </div>',
                'image' => 'images/10.png',
                'tags' => 'chair, furniture, brown, modern',
                'additional_information' => 'Available colors: black, white, brown.',
                'modified_by' => 1,
                'average_review' => 4.50,
            ],
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'image' => 'images/1.png',
            ],
            [
                'product_id' => 1,
                'image' => 'images/2.png',
            ],
            [
                'product_id' => 1,
                'image' => 'images/3.png',
            ],
            [
                'product_id' => 2,
                'image' => 'images/2.png',
            ],
            [
                'product_id' => 2,
                'image' => 'images/4.png',
            ],
            [
                'product_id' => 2,
                'image' => 'images/6.png',
            ],
            [
                'product_id' => 3,
                'image' => 'images/3.png',
            ],
            [
                'product_id' => 3,
                'image' => 'images/12.png',
            ],
            [
                'product_id' => 3,
                'image' => 'images/11.png',
            ],
            [
                'product_id' => 4,
                'image' => 'images/4.png',
            ],
            [
                'product_id' => 4,
                'image' => 'images/1.png',
            ],
            [
                'product_id' => 4,
                'image' => 'images/8.png',
            ],
            [
                'product_id' => 5,
                'image' => 'images/5.png',
            ],
            [
                'product_id' => 5,
                'image' => 'images/9.png',
            ],
            [
                'product_id' => 5,
                'image' => 'images/10.png',
            ],
            [
                'product_id' => 6,
                'image' => 'images/6.png',
            ],
            [
                'product_id' => 6,
                'image' => 'images/2.png',
            ],
            [
                'product_id' => 6,
                'image' => 'images/3.png',
            ],
            [
                'product_id' => 7,
                'image' => 'images/7.png',
            ],
            [
                'product_id' => 7,
                'image' => 'images/5.png',
            ],
            [
                'product_id' => 7,
                'image' => 'images/8.png',
            ],
            [
                'product_id' => 8,
                'image' => 'images/8.png',
            ],
            [
                'product_id' => 8,
                'image' => 'images/12.png',
            ],
            [
                'product_id' => 8,
                'image' => 'images/2.png',
            ],
            [
                'product_id' => 9,
                'image' => 'images/9.png',
            ],
            [
                'product_id' => 9,
                'image' => 'images/4.png',
            ],
            [
                'product_id' => 9,
                'image' => 'images/8.png',
            ],
            [
                'product_id' => 10,
                'image' => 'images/10.png',
            ],
            [
                'product_id' => 10,
                'image' => 'images/6.png',
            ],
            [
                'product_id' => 10,
                'image' => 'images/5.png',
            ],
            [
                'product_id' => 11,
                'image' => 'images/11.png',
            ],
            [
                'product_id' => 11,
                'image' => 'images/3.png',
            ],
            [
                'product_id' => 11,
                'image' => 'images/4.png',
            ],
            [
                'product_id' => 12,
                'image' => 'images/12.png',
            ],
            [
                'product_id' => 12,
                'image' => 'images/5.png',
            ],
            [
                'product_id' => 12,
                'image' => 'images/6.png',
            ],

        ]);
    }
}
