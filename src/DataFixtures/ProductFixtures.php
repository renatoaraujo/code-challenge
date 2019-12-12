<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $vendors = array(
            ['vendor' => 'Vendor 1', 'name' => 'Cover 1'],
            ['vendor' => 'Vendor 2', 'name' => 'Cover 2'],
            ['vendor' => 'Vendor 3', 'name' => 'Cover 3'],
            ['vendor' => 'Vendor 4', 'name' => 'Cover 4'],
        );

        $faker = Factory::create();

        for ($i = 1; $i <= 100; $i++) {
            $vendorKey = array_rand($vendors);

            $sku = strtoupper(uniqid('SKU', false));
            $name = $vendors[$vendorKey]['name'];
            $vendor = $vendors[$vendorKey]['vendor'];
            $color = $faker->hexColor;
            $imageUrl = sprintf('https://via.placeholder.com/150/%s', str_replace('#', '', $color));
            $description = $faker->text(2000);
            $isOutOfStock = random_int(0,1) === 1;

            $product = Product::fromTestingFixtures(
                $sku, $name, $color, $isOutOfStock, $vendor, $imageUrl, $description
            );
            $manager->persist($product);
        }

        $manager->flush();
    }
}
