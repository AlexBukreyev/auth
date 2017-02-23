<?php

use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $property = new  \App\Property([
            'imagePath' => 'http://dom-plus.net/wp-content/uploads/2016/09/remont-fundamenta.jpg',
            'title' => 'Super Property',
            'description' => 'This is Super property. It is fairy.',
            'price' => '2000000'
        ]);
        $property->save();

        $property = new  \App\Property([
            'imagePath' => 'https://im0-tub-ua.yandex.net/i?id=10a31f286b5de22026d4533d3ae247f1-l&n=13',
            'title' => 'Super Property',
            'description' => 'This is Super property. It is fairy.',
            'price' => '8500000'
        ]);
        $property->save();

        $property = new  \App\Property([
            'imagePath' => 'https://im2-tub-ua.yandex.net/i?id=dff9a0069b2beb4e4f47e5699b9aa34c-l&n=13',
            'title' => 'Super Property',
            'description' => 'It is fairy.',
            'price' => '2500000'
        ]);
        $property->save();

        $property = new  \App\Property([
            'imagePath' => 'http://joannerozell.com/wp-content/uploads/2016/01/nice-house-pic.jpg',
            'title' => 'Super Property',
            'description' => 'This is nice property. ',
            'price' => '2000000'
        ]);
        $property->save();

        $property = new  \App\Property([
            'imagePath' => 'http://словарь-толковый.рф/uploads/images/slovar/tb/halupa-zh-razg.jpg',
            'title' => 'Super Property',
            'description' => 'This is ...',
            'price' => '100'
        ]);
        $property->save();

        $property = new  \App\Property([
            'imagePath' => 'http://www.city216gayrimenkul.com/wp-content/gallery-bank/gallery-uploads/o_19l971v80l381dl51c0t4p31urta.jpg',
            'title' => 'Super Property',
            'description' => 'This is sweet home.',
            'price' => '1500000'
        ]);
        $property->save();
    }
}
