<?php
use App\product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker();
       factory(\App\product::class,20)->create();

       $products = product::select('id')->get();

       foreach ($products as $product){
           $product->addMediaFromUrl("https://picsum.photos/200/300/?random")->toMediaCollection('products');
    }
    }

}
