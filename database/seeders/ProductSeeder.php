<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    // public function run()
    // {
    //     $products = [
    //         ['Grilled Chicken', 'Juicy grilled chicken with herbs and lemon.', 850, 'Main Course'],
    //         ['Chocolate Lava Cake', 'Molten chocolate cake with vanilla ice cream.', 450, 'Dessert'],
    //         ['Veggie Pizza', 'Loaded with fresh vegetables and mozzarella.', 600, 'Main Course'],
    //         ['Chicken Momo', 'Steamed dumplings filled with chicken and spices.', 250, 'Snack'],
    //         ['Buff Chowmein', 'Spicy noodles with buffalo meat.', 200, 'Snack'],
    //         ['Paneer Butter Masala', 'Creamy paneer curry with Indian spices.', 500, 'Main Course'],
    //         ['Thukpa', 'Himalayan noodle soup with vegetables.', 220, 'Soup'],
    //         ['Fish Curry', 'Spicy river fish in traditional Nepali curry.', 700, 'Main Course'],
    //         ['Chicken Biryani', 'Fragrant rice with spiced chicken.', 750, 'Main Course'],
    //         ['Sel Roti', 'Traditional Nepali rice doughnut.', 150, 'Snack'],
    //         ['Lassi', 'Sweet yogurt drink with cardamom.', 120, 'Beverage'],
    //         ['Samosa', 'Crispy triangle stuffed with spicy potatoes.', 60, 'Snack'],
    //         ['Tandoori Chicken', 'Spicy roasted chicken cooked in tandoor.', 800, 'Main Course'],
    //         ['Dal Bhat', 'Lentils and rice with pickles and vegetables.', 300, 'Main Course'],
    //         ['Mocha Frappe', 'Iced coffee with chocolate and cream.', 350, 'Beverage'],
    //         ['Fruit Salad', 'Mixed seasonal fruits with mint.', 250, 'Dessert'],
    //         ['Egg Roll', 'Stuffed paratha roll with egg and spices.', 180, 'Snack'],
    //         ['Chili Paneer', 'Spicy paneer stir-fry with bell peppers.', 400, 'Snack'],
    //         ['Hot Chocolate', 'Creamy rich hot cocoa.', 200, 'Beverage'],
    //         ['Chicken Sandwich', 'Grilled chicken sandwich with lettuce and mayo.', 300, 'Snack'],
    //     ];

    //     foreach ($products as [$name, $description, $price, $category]) {
    //         Product::create([
    //             'name' => $name,
    //             'description' => $description,
    //             'price' => $price,
    //             'category' => $category,
    //             'times_sold' => rand(0, 100), // Random initial value
    //         ]);
    //     }
    // }
    public function run()
{
    $products = json_decode(file_get_contents(database_path('seed_data/products_seed.json')), true);

    DB::table('products')->insert($products);
}

}
