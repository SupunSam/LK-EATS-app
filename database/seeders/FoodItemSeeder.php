<?php

namespace Database\Seeders;

use App\Models\FoodItem;
use Illuminate\Database\Seeder;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodItem::create([
            'rest_id' => '2',
            'user_id' => '4',
            'food_name' => 'Cheesy Chicken Kottu',
            'food_category' => 'NV',
            'food_desc' => '2 person can served',
            'food_price' => '450',
            'food_image' => 'storage/food/images/Rest_2_Kottu/1.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '2',
            'user_id' => '4',
            'food_name' => 'Cheesy Beef Kottu',
            'food_category' => 'NV',
            'food_desc' => '2 person can served',
            'food_price' => '350',
            'food_image' => 'storage/food/images/Rest_2_Kottu/2.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '2',
            'user_id' => '4',
            'food_name' => 'Cheesy Seafood Kottu',
            'food_category' => 'NV',
            'food_desc' => '2 person can served',
            'food_price' => '450',
            'food_image' => 'storage/food/images/Rest_2_Kottu/3.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '2',
            'user_id' => '4',
            'food_name' => 'Cheesy Mushroom Kottu ',
            'food_category' => 'V',
            'food_desc' => '2 person can served',
            'food_price' => '650',
            'food_image' => 'storage/food/images/Rest_2_Kottu/4.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '2',
            'user_id' => '4',
            'food_name' => 'Chicken Kottu',
            'food_category' => 'NV',
            'food_desc' => '2 person can served',
            'food_price' => '450',
            'food_image' => 'storage/food/images/Rest_2_Kottu/5.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '2',
            'user_id' => '4',
            'food_name' => 'Beef Kottu',
            'food_category' => 'NV',
            'food_desc' => '2 person can served',
            'food_price' => '150',
            'food_image' => 'storage/food/images/Rest_2_Kottu/6.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '2',
            'user_id' => '4',
            'food_name' => 'Mushroom Kottu ',
            'food_category' => 'V',
            'food_desc' => '2 person can served',
            'food_price' => '250',
            'food_image' => 'storage/food/images/Rest_2_Kottu/7.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '2',
            'user_id' => '4',
            'food_name' => 'Seafood Kottu',
            'food_category' => 'V',
            'food_desc' => '2 person can served',
            'food_price' => '350',
            'food_image' => 'storage/food/images/Rest_2_Kottu/8.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '4',
            'user_id' => '2',
            'food_name' => 'Popcorn Chicken',
            'food_category' => 'NV',
            'food_desc' => '1 person can served Small,2 person can served Medium,4 person can served large',
            'food_price' => '750',
            'food_image' => 'storage/food/images/Rest_4_Pizza/1.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '4',
            'user_id' => '2',
            'food_name' => 'Tandoori',
            'food_category' => 'NV',
            'food_desc' => '1 person can served Small,2 person can served Medium,4 person can served large',
            'food_price' => '850',
            'food_image' => 'storage/food/images/Rest_4_Pizza/2.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '4',
            'user_id' => '2',
            'food_name' => 'Chicken Bacon',
            'food_category' => 'NV',
            'food_desc' => '1 person can served Small,2 person can served Medium,4 person can served large',
            'food_price' => '950',
            'food_image' => 'storage/food/images/Rest_4_Pizza/3.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '4',
            'user_id' => '2',
            'food_name' => 'Cheese Lovers',
            'food_category' => 'V',
            'food_desc' => '1 person can served Small,2 person can served Medium,4 person can served large',
            'food_price' => '100',
            'food_image' => 'storage/food/images/Rest_4_Pizza/4.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '4',
            'user_id' => '2',
            'food_name' => 'Spicy Veggie',
            'food_category' => 'V',
            'food_desc' => '1 person can served Small,2 person can served Medium,4 person can served large',
            'food_price' => '200',
            'food_image' => 'storage/food/images/Rest_4_Pizza/5.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '4',
            'user_id' => '2',
            'food_name' => 'Butter Chicken',
            'food_category' => 'NV',
            'food_desc' => '1 person can served Small,2 person can served Medium,4 person can served large',
            'food_price' => '300',
            'food_image' => 'storage/food/images/Rest_4_Pizza/6.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '4',
            'user_id' => '2',
            'food_name' => 'Veggie Suprem',
            'food_category' => 'V',
            'food_desc' => '1 person can served Small,2 person can served Medium,4 person can served large',
            'food_price' => '400',
            'food_image' => 'storage/food/images/Rest_4_Pizza/7.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '4',
            'user_id' => '2',
            'food_name' => 'Hot Garlic',
            'food_category' => 'V',
            'food_desc' => '1 person can served Small,2 person can served Medium,4 person can served large',
            'food_price' => '500',
            'food_image' => 'storage/food/images/Rest_4_Pizza/8.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '3',
            'user_id' => '2',
            'food_name' => 'Ribbon Cake',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '600',
            'food_image' => 'storage/food/images/Rest_3_FAB/1.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '3',
            'user_id' => '2',
            'food_name' => 'Ribbon Cake',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '700',
            'food_image' => 'storage/food/images/Rest_3_FAB/2.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '3',
            'user_id' => '2',
            'food_name' => 'Coffee & Chocolate Fudge Cake',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '800',
            'food_image' => 'storage/food/images/Rest_3_FAB/3.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '3',
            'user_id' => '2',
            'food_name' => 'Pineapple Gateau',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '900',
            'food_image' => 'storage/food/images/Rest_3_FAB/4.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '3',
            'user_id' => '2',
            'food_name' => 'Nut & Fudge Gateau',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '195',
            'food_image' => 'storage/food/images/Rest_3_FAB/5.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '3',
            'user_id' => '2',
            'food_name' => 'Black Forest Gateau',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '480',
            'food_image' => 'storage/food/images/Rest_3_FAB/6.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '3',
            'user_id' => '2',
            'food_name' => 'Chocolate Fudge Loaf',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '670',
            'food_image' => 'storage/food/images/Rest_3_FAB/7.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '3',
            'user_id' => '2',
            'food_name' => 'Chocolate Fudge',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '490',
            'food_image' => 'storage/food/images/Rest_3_FAB/8.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '5',
            'user_id' => '4',
            'food_name' => 'Soft Taco',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '760',
            'food_image' => 'storage/food/images/Rest_5_Taco/1.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '5',
            'user_id' => '4',
            'food_name' => 'Crunchy Taco',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '340',
            'food_image' => 'storage/food/images/Rest_5_Taco/2.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '5',
            'user_id' => '4',
            'food_name' => 'Naked Chicken Taco',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '180',
            'food_image' => 'storage/food/images/Rest_5_Taco/3.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '5',
            'user_id' => '4',
            'food_name' => 'Mexican & Crispy Chicken Griller',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '940',
            'food_image' => 'storage/food/images/Rest_5_Taco/4.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '5',
            'user_id' => '4',
            'food_name' => 'Mexican & Beef Griller',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '480',
            'food_image' => 'storage/food/images/Rest_5_Taco/5.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '5',
            'user_id' => '4',
            'food_name' => 'Double Beef Griller',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '490',
            'food_image' => 'storage/food/images/Rest_5_Taco/6.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '5',
            'user_id' => '4',
            'food_name' => 'Classic Burrito',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '370',
            'food_image' => 'storage/food/images/Rest_5_Taco/7.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '5',
            'user_id' => '4',
            'food_name' => 'Mexican & Fajita Chicken Griller',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '910',
            'food_image' => 'storage/food/images/Rest_5_Taco/8.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '1',
            'user_id' => '3',
            'food_name' => 'Single burger',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '500',
            'food_image' => 'storage/food/images/Rest_1_KFC/1.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '1',
            'user_id' => '3',
            'food_name' => 'Vegie burger',
            'food_category' => 'V',
            'food_desc' => '1 person can served',
            'food_price' => '750',
            'food_image' => 'storage/food/images/Rest_1_KFC/2.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '1',
            'user_id' => '3',
            'food_name' => 'Grill burger',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '480',
            'food_image' => 'storage/food/images/Rest_1_KFC/3.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '1',
            'user_id' => '3',
            'food_name' => 'Double burger',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '670',
            'food_image' => 'storage/food/images/Rest_1_KFC/4.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '1',
            'user_id' => '3',
            'food_name' => 'Crispy chicken 6pcs',
            'food_category' => 'NV',
            'food_desc' => '2 person can served',
            'food_price' => '490',
            'food_image' => 'storage/food/images/Rest_1_KFC/5.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '1',
            'user_id' => '3',
            'food_name' => 'Grill chicken 6pcs',
            'food_category' => 'NV',
            'food_desc' => '2 person can served',
            'food_price' => '760',
            'food_image' => 'storage/food/images/Rest_1_KFC/6.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '1',
            'user_id' => '3',
            'food_name' => 'Chicken charger',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '340',
            'food_image' => 'storage/food/images/Rest_1_KFC/7.jpg',
        ]);
        FoodItem::create([
            'rest_id' => '1',
            'user_id' => '3',
            'food_name' => 'Chicken Snacker',
            'food_category' => 'NV',
            'food_desc' => '1 person can served',
            'food_price' => '180',
            'food_image' => 'storage/food/images/Rest_1_KFC/8.jpg',
        ]);
    }
}
