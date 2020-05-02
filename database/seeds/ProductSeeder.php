<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $pizzaCategory = factory(Category::class)->create(
            [
                'name' => 'Pizza',
                'alias' => 'pizza',
            ]
        );


        $pastaCategory = factory(Category::class)->create(
            [
                'name' => 'Pasta',
                'alias' => 'pasta',
            ]
        );

        $drinksCategory = factory(Category::class)->create(
            [
                'name' => 'Drinks',
                'alias' => 'drink',
            ]
        );

        factory(Product::class)->create(
            [
                'name' => 'Neapolitan Pizza',
                'description' => 'Neapolitan is the original pizza. This delicious pie dates all the way back to 18th century in Naples, Italy',
                'image' => 'pizza-1.jpg',
                'category_id' => $pizzaCategory->id,
                'price' => '6.95'
            ]
        );
        factory(Product::class)->create(
            [
                'name' => 'Chicago Pizza',
                'description' => 'Chicago pizza, also commonly referred to as deep-dish pizza, gets its name from the city it was invented in.',
                'image' => 'pizza-2.jpg',
                'category_id' => $pizzaCategory->id,
                'price' => '5.95'
            ]
        );
        factory(Product::class)->create(
            [
                'name' => 'New York Pizza',
                'description' => 'With its characteristic large, foldable slices, New York-style pizza is one of America’s most famous pizza types.',
                'image' => 'pizza-3.jpg',
                'category_id' => $pizzaCategory->id,
                'price' => '7.95'
            ]
        );
        factory(Product::class)->create(
            [
                'name' => 'Sicilian Pizza',
                'description' => 'Sicilian pizza, provides a thick cut of pizza with pillowy dough and robust tomato sauce.',
                'image' => 'pizza-4.jpg',
                'category_id' => $pizzaCategory->id,
                'price' => '10.95'
            ]
        );

        factory(Product::class)->create(
            [
                'name' => 'Greek Pizza',
                'description' => 'Greek pizza was created by Greek immigrants who came to America and were introduced to Italian pizza',
                'image' => 'pizza-5.jpg',
                'category_id' => $pizzaCategory->id,
                'price' => '9.95'
            ]
        );


        factory(Product::class)->create(
            [
                'name' => 'California Pizza',
                'description' => 'California pizza, or gourmet pizza. This pizza made with mustard, ricotta, pate, and red pepper.',
                'image' => 'pizza-6.jpg',
                'category_id' => $pizzaCategory->id,
                'price' => '12.95'
            ]
        );
        factory(Product::class)->create(
            [
                'name' => 'Detroit Pizza',
                'description' => 'Reflecting the city’s deep ties to the auto industry, Detroit pizza was baked in a square automotive parts pan.',
                'image' => 'pizza-7.jpg',
                'category_id' => $pizzaCategory->id,
                'price' => '8.95'
            ]
        );

        factory(Product::class)->create(
            [
                'name' => 'St. Louis Pizza',
                'description' => 'St. Louis pizza features a thin crust with a cracker-like consistency that is made without yeast. ',
                'image' => 'pizza-8.jpg',
                'category_id' => $pizzaCategory->id,
                'price' => '8.95'
            ]
        );


        factory(Product::class)->create(
            [
                'name' => 'Orange Juice',
                'description' => 'Orange juice is one of the best known and preferred beverages around the world..',
                'image' => 'drink-1.jpg',
                'category_id' => $drinksCategory->id,
                'price' => '3.95'
            ]
        );

        factory(Product::class)->create(
            [
                'name' => 'Homemade Wine',
                'description' => 'Orange juice is one of the best known and preferred beverages around the world.',
                'image' => 'drink-2.jpg',
                'category_id' => $drinksCategory->id,
                'price' => '8.95'
            ]
        );

        factory(Product::class)->create(
            [
                'name' => 'Soda Drinks',
                'description' => 'Orange juice is one of the best known and preferred beverages around the world.',
                'image' => 'drink-3.jpg',
                'category_id' => $drinksCategory->id,
                'price' => '1.95'
            ]
        );


        factory(Product::class)->create(
            [
                'name' => 'Neapolitan Pasta',
                'description' => 'Each traditional pasta dish is defined by a specific kind of pasta, a specific cooking style, and a specific sauce.',
                'image' => 'pasta-1.jpg',
                'category_id' => $pastaCategory->id,
                'price' => '9.95'
            ]
        );


        factory(Product::class)->create(
            [
                'name' => 'Pasta Bolognese',
                'description' => 'Each traditional pasta dish is defined by a specific kind of pasta, a specific cooking style, and a specific sauce.',
                'image' => 'pasta-2.jpg',
                'category_id' => $pastaCategory->id,
                'price' => '12.95'
            ]
        );
        factory(Product::class)->create(
            [
                'name' => 'Italian classic pasta',
                'description' => 'Each traditional pasta dish is defined by a specific kind of pasta, a specific cooking style, and a specific sauce.',
                'image' => 'pasta-3.jpg',
                'category_id' => $pastaCategory->id,
                'price' => '11.95'
            ]
        );


    }
}
