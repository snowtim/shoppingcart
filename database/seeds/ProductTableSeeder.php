<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'https://upload.wikimedia.org/wikipedia/commons/3/39/Lapin_blanc.jpg',
        	'title' => 'Rabbit',
        	'description' => 'Cute',
        	'price' => 90
        ]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://img.purch.com/h/1000/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzEwNC8yODIvb3JpZ2luYWwvcGVuZ3Vpbi1jaGljay1mZWV0LmpwZw==',
        	'title' => 'Peguin',
        	'description' => 'Cute',
        	'price' => 90
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://cdn.hk01.com/di/media/images/1815180/org/f2f0378a6858adf97b1ed88cb155c42f.jpg/gQ84M4W-fAyUQOK7YrCnCqIGrGJvO7rBvIHCWLyBwlg?v=w1920',
            'title' => 'Shiba Inu',
            'description' => 'Cute',
            'price' => 90
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://mediakix.com/wp-content/uploads/2017/09/Screen-Shot-2017-09-29-at-11.52.49-AM.png',
            'title' => 'Fox',
            'description' => 'Cute',
            'price' => 90
        ]);
        $product->save();

    }
}
