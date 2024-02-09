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
        'name' => 'Elegant Armchair - "Royal Comfort"',
        'price' => 150.00,
        'description' => 'Sink into luxury with our "Royal Comfort" armchair. Upholstered in plush velvet and featuring a tufted backrest, this chair exudes elegance. Its sturdy hardwood frame ensures durability, while the cushioned seat provides unparalleled comfort. Perfect for adding a touch of sophistication to any room.',
        'quantity' => 20,
        'sku' => 'SKU123456789001',
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
        'name' => 'Modern Lounge Chair - "Urban Relaxation"',
        'price' => 50.00,
        'description' => 'Embrace contemporary design with our "Urban Relaxation" lounge chair. Crafted with sleek lines and a minimalist silhouette, this chair embodies modern style. Its ergonomic design and cushioned seat offer optimal comfort for lounging. Ideal for urban dwellers seeking a chic statement piece.',
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
        'name' => 'Vintage Wingback Chair - "Timeless Elegance"',
        'price' => 75.00,
        'description' => 'Add a touch of nostalgia with our "Timeless Elegance" wingback chair. Inspired by classic design, this chair features a high backrest and curved wings for a regal look. Upholstered in rich leather and adorned with button tufting, it exudes vintage charm. Perfect for creating a cozy reading nook or a refined sitting area.',
        'quantity' => 20,
        'sku' => 'SKUABCDEF123003',
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
        'name' => 'Contemporary Sectional Sofa - "Modern Harmony"',
        'price' => 450.00,
        'description' => 'Elevate your living room with our "Modern Harmony" sectional sofa. Featuring clean lines and a minimalist design, this contemporary piece effortlessly blends style and comfort. Upholstered in premium fabric and equipped with deep, plush cushions, it provides ample seating for gatherings or relaxation.',
        'quantity' => 20,
        'sku' => 'SKU456DEF789004',
        'status' => 'default',
        'category_id' => 2, // Assuming '1' represents the furniture category
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
        'name' => 'Mid-Century Sofa - "Retro Chic"',
        'price' => 750.00,
        'description' => 'Embrace timeless style with our "Retro Chic" mid-century sofa. Inspired by iconic designs of the 1950s, this sofa boasts tapered wooden legs and a sleek silhouette. Upholstered in retro-inspired fabric with button-tufted details, it adds a touch of vintage flair to any space.',
        'quantity' => 20,
        'sku' => 'SKUZYXWVU321005',
        'status' => 'default',
        'category_id' => 2, // Assuming '1' represents the furniture category
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
        'name' => 'Luxurious Chesterfield Sofa - "Classic Comfort"',
        'price' => 50.00,
        'description' => 'Indulge in luxury with our "Classic Comfort" Chesterfield sofa. Crafted with deep button tufting and rolled arms, this sofa exudes elegance and sophistication. Upholstered in supple leather, it offers a plush seating experience that evokes timeless charm and refinement.',
        'quantity' => 20,
        'sku' => 'SKUZYXWVU321005',
        'status' => 'default',
        'category_id' => 2, // Assuming '1' represents the furniture category
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
        'name' => 'Convertible Sleeper Sofa - "Versatile Haven"',
        'price' => 50.00,
        'description' => 'Maximize space with our "Versatile Haven" convertible sleeper sofa. Ideal for small apartments or guest rooms, this sofa effortlessly transforms into a comfortable bed. Featuring a modern design and durable upholstery, it offers both style and functionality for modern living.',
        'quantity' => 20,
        'sku' => 'SKU098765432106',
        'status' => 'default',
        'category_id' => 2, // Assuming '1' represents the furniture category
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
        'name' => 'Leather Reclining Sofa - "Relaxation Retreat"',
        'price' => 50.00,
        'description' => 'Unwind in style with our "Relaxation Retreat" leather reclining sofa. Designed for ultimate comfort, this sofa features plush cushioning and reclining capabilities for customizable relaxation. Upholstered in luxurious leather, it adds a touch of sophistication to any living space.',
        'quantity' => 20,
        'sku' => 'SKU098765432106',
        'status' => 'default',
        'category_id' => 2, // Assuming '1' represents the furniture category
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
        'name' => 'Modern Writing Desk - "Sleek Workspace"',
        'price' => 50.00,
        'description' => 'Create a stylish and functional workspace with our "Sleek Workspace" modern writing desk. Featuring clean lines and a minimalist design, this desk offers ample surface area for your laptop, notebooks, and work essentials. Its sleek silhouette and sturdy construction make it perfect for contemporary home offices.',
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
        'name' => 'Rustic Wooden Desk - "Natural Charm"',
        'price' => 50.00,
        'description' => 'Bring rustic charm to your home office with our "Natural Charm" wooden desk. Crafted from reclaimed wood, this desk showcases the beauty of natural grains and textures. With its spacious tabletop and storage drawers, it provides a practical yet stylish solution for your workspace needs.',
        'quantity' => 20,
        'sku' => 'SKU098765432106',
        'status' => 'promotion',
        'category_id' => 3, // Assuming '1' represents the furniture category
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
        'image' => 'images/10.png',
        'tags' => 'chair, furniture, brown, modern',
        'additional_information' => 'Available colors: black, white, brown.',
        'modified_by' => 1,
        'average_review' => 4.50,
      ],
      [
        'name' => 'Compact Corner Desk - "Space-Saving Solution"',
        'price' => 50.00,
        'description' => 'Maximize your office space with our "Space-Saving Solution" compact corner desk. Designed to fit snugly into corners, this desk offers a practical solution for small home offices or study nooks. Its sleek design and integrated shelving provide ample storage without sacrificing style.',
        'quantity' => 20,
        'sku' => 'SKU098765432106',
        'status' => 'default',
        'category_id' => 3, // Assuming '1' represents the furniture category
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
        'image' => 'images/11.png',
        'tags' => 'chair, furniture, brown, modern',
        'additional_information' => 'Available colors: black, white, brown.',
        'modified_by' => 1,
        'average_review' => 4.50,
      ],
      [
        'name' => 'Adjustable Standing Desk - "Ergonomic Excellence"',
        'price' => 50.00,
        'description' => 'Prioritize comfort and productivity with our "Ergonomic Excellence" adjustable standing desk. Featuring a height-adjustable design, this desk allows you to switch between sitting and standing positions effortlessly. Its ergonomic features promote better posture and reduce fatigue during long work hours.',
        'quantity' => 20,
        'sku' => 'SKU098765432106',
        'status' => 'defualt',
        'category_id' => 3, // Assuming '1' represents the furniture category
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
        'image' => 'images/12.png',
        'tags' => 'chair, furniture, brown, modern',
        'additional_information' => 'Available colors: black, white, brown.',
        'modified_by' => 1,
        'average_review' => 4.50,
      ],
      [
        'name' => 'Contemporary Platform Bed - "Urban Serenity"',
        'price' => 50.00,
        'description' => 'Transform your bedroom into a haven of modern tranquility with our "Urban Serenity" contemporary platform bed. Crafted with clean lines and a low-profile design, this bed exudes urban sophistication. Its sturdy platform frame provides reliable support for your mattress, while its minimalist aesthetic adds a touch of elegance to any bedroom décor.',
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
        'image' => 'images/13.png',
        'tags' => 'chair, furniture, brown, modern',
        'additional_information' => 'Available colors: black, white, brown.',
        'modified_by' => 1,
        'average_review' => 4.50,
      ],
      [
        'name' => 'Rustic Canopy Bed - "Country Charm"',
        'price' => 50.00,
        'description' => 'Add a touch of rustic elegance to your bedroom with our "Country Charm" canopy bed. Crafted from solid wood with a distressed finish, this bed features a timeless canopy frame that evokes a sense of country-inspired charm. Its classic design and sturdy construction create a cozy retreat for rest and relaxation.',
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
        'image' => 'images/14.png',
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
        'image' => 'images/3.png',
      ],
      [
        'product_id' => 2,
        'image' => 'images/1.png',
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
        'image' => 'images/11.png',
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
