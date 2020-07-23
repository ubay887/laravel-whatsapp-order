<?php

use Illuminate\Database\Seeder;

use App\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'category_id' => 1,
            'name' => 'French Fries',
            'img' => '',
            'old_price' => '30000',
            'new_price' => '30000'
        ]);
        
        Menu::create([
            'category_id' => 1,
            'name' => 'Tortizza Chicken Beef',
            'img' => 'images\foods\tortizza-chicken-beef.jpeg',
            'old_price' => '50000',
            'new_price' => '50000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Mozzcheestick',
            'img' => '',
            'old_price' => '50000',
            'new_price' => '50000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Green Salad',
            'img' => '',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Garlic Bread with Lamb Sausage',
            'img' => 'images\foods\garlic-bread-with-lamb-sausage.jpeg',
            'old_price' => '50000',
            'new_price' => '50000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Mozzaroni',
            'img' => 'images\foods\mozzaroni.jpeg',
            'old_price' => '45000',
            'new_price' => '45000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Spaghetti Bolognese',
            'img' => 'images\foods\spaghetti-bolognese.jpeg',
            'old_price' => '53000',
            'new_price' => '53000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Spaghetti Aglio Olio',
            'img' => 'images\foods\spaghetti-aglio-olio.jpeg',
            'old_price' => '53000',
            'new_price' => '53000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Lemon Butter Chicken',
            'img' => 'images\foods\lemon-butter-chicken.jpeg',
            'old_price' => '65000',
            'new_price' => '65000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Chicken Teriyaki Rice Bowl',
            'img' => 'images\foods\chicken-teriyaki-rice-bowl.jpeg',
            'old_price' => '65000',
            'new_price' => '65000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Chicken Sambal Matah',
            'img' => 'images\foods\chicken-sambal-matah.jpeg',
            'old_price' => '65000',
            'new_price' => '65000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Gado Gado',
            'img' => '',
            'old_price' => '48000',
            'new_price' => '48000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Grilled Chicken Sandwich',
            'img' => 'images\foods\grilled-chicken-sandwich.jpeg',
            'old_price' => '55000',
            'new_price' => '55000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Smokey Toasty',
            'img' => 'images\foods\smokey-toasty.jpeg',
            'old_price' => '60000',
            'new_price' => '60000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Pepperoni Cheese Bagel',
            'img' => 'images\foods\pepperoni-cheese-bagel.jpeg',
            'old_price' => '55000',
            'new_price' => '55000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'EBC Beef Burger',
            'img' => 'images\foods\ebc-beef-burger.jpeg',
            'old_price' => '65000',
            'new_price' => '65000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Bread Vanilla Puding',
            'img' => 'images\foods\bread-vanilla-puding.jpeg',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Grilled Cheese Banana',
            'img' => 'images\foods\grilled-cheese-banana.jpeg',
            'old_price' => '38000',
            'new_price' => '38000'
        ]);

        Menu::create([
            'category_id' => 1,
            'name' => 'Espresso Brownie with Ice Cream',
            'img' => 'images\foods\espresso-brownie-with-ice-cream.jpeg',
            'old_price' => '30000',
            'new_price' => '30000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Espresso Single',
            'img' => '',
            'old_price' => '25000',
            'new_price' => '25000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Espresso Double',
            'img' => '',
            'old_price' => '30000',
            'new_price' => '30000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Hot Cappuccino',
            'img' => 'images\espresso-base\ice-cappucino.jpeg',
            'old_price' => '42000',
            'new_price' => '42000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Ice Cappucino',
            'img' => 'images\espresso-base\ice-cappucino.jpeg',
            'old_price' => '45000',
            'new_price' => '45000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Hot Cafe Latte',
            'img' => 'images\espresso-base\cafe-latte.jpeg',
            'old_price' => '42000',
            'new_price' => '42000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Ice Cafe Latte',
            'img' => 'images\espresso-base\cafe-latte.jpeg',
            'old_price' => '47000',
            'new_price' => '47000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Hot Cafe Mocha',
            'img' => 'images\espresso-base\cafe-mocha.jpeg',
            'old_price' => '45000',
            'new_price' => '45000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Ice Cafe Mocha',
            'img' => 'images\espresso-base\cafe-mocha.jpeg',
            'old_price' => '45000',
            'new_price' => '45000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Flat White',
            'img' => '',
            'old_price' => '42000',
            'new_price' => '42000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Machiato',
            'img' => '',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Affogato',
            'img' => '',
            'old_price' => '42000',
            'new_price' => '42000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Picolo',
            'img' => '',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Hot Americano',
            'img' => '',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Ice Americano',
            'img' => '',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Tokyo Latte',
            'img' => '',
            'old_price' => '47000',
            'new_price' => '47000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Marochino',
            'img' => 'images\espresso-base\marochino.jpeg',
            'old_price' => '43000',
            'new_price' => '43000'
        ]);

        Menu::create([
            'category_id' => 2,
            'name' => 'Extra Shot Espresso',
            'img' => '',
            'old_price' => '5000',
            'new_price' => '5000'
        ]);

        Menu::create([
            'category_id' => 3,
            'name' => 'Hot V60',
            'img' => '',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 3,
            'name' => 'Ice V60',
            'img' => '',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 3,
            'name' => 'Aeropress',
            'img' => '',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 3,
            'name' => 'Frenchpress',
            'img' => '',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 4,
            'name' => 'Kopi Tubruk',
            'img' => '',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 4,
            'name' => 'Kopi Susu',
            'img' => '',
            'old_price' => '38000',
            'new_price' => '38000'
        ]);

        Menu::create([
            'category_id' => 4,
            'name' => 'Es Kopi Karamel',
            'img' => 'images\local-taste\es-kopi-karamel.jpeg',
            'old_price' => '38000',
            'new_price' => '38000'
        ]);

        Menu::create([
            'category_id' => 4,
            'name' => 'Es Kopi Batur',
            'img' => 'images\local-taste\es-kopi-batur.jpeg',
            'old_price' => '38000',
            'new_price' => '38000'
        ]);

        Menu::create([
            'category_id' => 5,
            'name' => 'Dalgona Sweetie Marie',
            'img' => 'images\millennial-signature\dalgona-sweetie-marie.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 5,
            'name' => 'Dalgona Oreo Topping',
            'img' => 'images\millennial-signature\dalgona-oreo-topping.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 5,
            'name' => 'Dalgona Coffee Jelly',
            'img' => 'images\millennial-signature\dalgona-coffee-jelly.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Ginger Black Tea',
            'img' => '',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Green Tea Jasmine',
            'img' => 'images\non-coffee\green-tea-jasmine.jpeg',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Broken Oolong',
            'img' => '',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Spicy Black Tea',
            'img' => '',
            'old_price' => '35000',
            'new_price' => '35000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Hot Matcha Latte',
            'img' => '',
            'old_price' => '45000',
            'new_price' => '45000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Ice Matcha Latte',
            'img' => '',
            'old_price' => '45000',
            'new_price' => '45000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Banana Milkshake',
            'img' => '',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Strawberry Milkshake',
            'img' => 'images\non-coffee\strawberry-milkshake.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Blueberry Milkshake',
            'img' => 'images\non-coffee\blueberry-milkshake.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Oreo Milkshake',
            'img' => 'images\non-coffee\oreo-milkshake.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Hot Babychino (Chocolate)',
            'img' => '',
            'old_price' => '42000',
            'new_price' => '42000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Ice Babychino (Chocolate)',
            'img' => '',
            'old_price' => '42000',
            'new_price' => '42000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Hot Marshmallow Vanila Latte',
            'img' => 'images\non-coffee\marshmallow-vanila-latte.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Ice Marshmallow Vanila Latte',
            'img' => 'images\non-coffee\marshmallow-vanila-latte.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Mango Smoothies',
            'img' => 'images\non-coffee\mango-smoothies.jpeg',
            'old_price' => '40000',
            'new_price' => '40000'
        ]);

        Menu::create([
            'category_id' => 6,
            'name' => 'Balian Water Still/Sparkling',
            'img' => '',
            'old_price' => '20000',
            'new_price' => '20000'
        ]);

        Menu::create([
            'category_id' => 7,
            'name' => 'Cream Cheese Soufle with Blueberry',
            'img' => '',
            'old_price' => '38000',
            'new_price' => '38000'
        ]);

    }
}
