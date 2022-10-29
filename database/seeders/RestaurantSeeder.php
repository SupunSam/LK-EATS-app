<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurant::create([
            'user_id' => '1',
            'rest_name' => 'KFC',
            'rest_category' => 'Chinese',
            'rest_address' => 'KFC, Kadawatha',
            'rest_city' => 'Kadawatha',
            'rest_desc' => 'KFC landed in Sri Lanka in 1995, when the first restaurant opened its doors at Majestic City. Since then, this most loved and fastest growing retail restaurant chain in the world has expanded to over 40 restaurants around the country and serves up nearly 11.5 million meals annually.',
            'rest_web' => 'https://www.kfc.lk/',
            'rest_logo' => 'storage/rest/images/Rest_1_kfc_logo.jpg',
            'rest_cover' => 'storage/rest/images/Rest_1_kfc_cover.jpg',
        ]);
        Restaurant::create([
            'user_id' => '2',
            'rest_name' => 'Kottu Labs',
            'rest_category' => 'Kottu',
            'rest_address' => 'Kottu Labs,Nugegoda',
            'rest_city' => 'Nugegoda',
            'rest_desc' => 'Wanna hear our story? Well, it all starts with four friends and their love for Kottu. Yatta, Don, Wait-for-it (HIMYM reference) and Poobala, as they are affectionately known, all ventured into the food industry back in Feb 2018. Their vision was to let customers mix and match the carb, veggies, and protein, to create the perfect kottu for their tastebuds.',
            'rest_web' => 'https://www.kottulabs.com/',
            'rest_logo' => 'storage/rest/images/Rest_2_kottu_labs_logo.jpg',
            'rest_cover' => 'storage/rest/images/Rest_2_kottu_labs_cover.jpg',
        ]);
        Restaurant::create([
            'user_id' => '3',
            'rest_name' => 'FAB',
            'rest_category' => 'Bakery',
            'rest_address' => 'FAB, Kiribathgoda',
            'rest_city' => 'Kiribathgoda',
            'rest_desc' => 'From adding more balanced options to our Happy Meal®, to serving up fresh beef Quarter Pounder® burgers that are cooked when you order, we’re always finding ways to show our commitment to our customers and our food.',
            'rest_web' => 'https://www.FAB.com/us/en-us.html',
            'rest_logo' => 'storage/rest/images/Rest_3_FAB_logo.jpg',
            'rest_cover' => 'storage/rest/images/Rest_3_FAB_cover.jpg',
        ]);
        Restaurant::create([
            'user_id' => '4',
            'rest_name' => 'Pizza Hut',
            'rest_category' => 'Pizza ',
            'rest_address' => 'Pizza hut, Kadawatha',
            'rest_city' => 'Kadawatha',
            'rest_desc' => 'Pizza Hut, subsidiary of Yum! Brands, is the worlds largest pizza company and home of Pan Pizza. ',
            'rest_web' => 'https://www.pizzahut.lk/home/',
            'rest_logo' => 'storage/rest/images/Rest_4_pizza_hut_logo.jpg',
            'rest_cover' => 'storage/rest/images/Rest_4_pizza_hut_cover.jpg',
        ]);
        Restaurant::create([
            'user_id' => '5',
            'rest_name' => 'Taco Bell',
            'rest_category' => 'Mexican-inspired food ',
            'rest_address' => 'Taco Bell, Colombo',
            'rest_city' => 'Colombo',
            'rest_desc' => 'At Taco Bell, we’ve had innovation on our mind since Glen Bell started serving tacos at the first location in 1962 in Downey, California. Since then, we’ve grown to be a culture-centric, lifestyle brand that provides craveable, affordable Mexican-inspired food with bold flavors.',
            'rest_web' => 'https://www.yum.com/wps/portal/yumbrands/Yumbrands/company/our-brands/taco-bell',
            'rest_logo' => 'storage/rest/images/Rest_5_taco_bell_logo.jpg',
            'rest_cover' => 'storage/rest/images/Rest_5_taco_bell_cover.jpg',
        ]);
    }
}
