
<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'city' => 'Roma',
                'country' => 'Italia',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, animi. Aperiam, alias. Enim optio quo laborum. Fugit perferendis illum natus, ipsum animi sed dolorem totam ut ad delectus consequatur fuga.', 
                'price' => '2000',
                'img_url' => 'random url',
            ],
            [
                'city' => 'Cassis',
                'country' => 'Francia',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae, animi. Aperiam, alias. Enim optio quo laborum. Fugit perferendis illum natus, ipsum animi sed dolorem totam ut ad delectus consequatur fuga.', 
                'price' => '2500',
                'img_url' => 'random url 2',
            ],
        ];

        foreach ($packages as $package){
            $newPackage = new Package();

            $newPackage->city = $package['city'];
            $newPackage->country = $package['country'];
            $newPackage->description = $package['description'];
            $newPackage->price = $package['price'];
            $newPackage->img_url = $package['img_url'];
            
            // $newPackage->fill($package);
            $newPackage->save();
        }
    }
}
