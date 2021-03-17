<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([ 
            [
            'title' => 'Affogato', 
            'content' => 'Affogato merupakan minuman kopi dengan satu sendok es krim vanila yang ‘ditenggelamkan’ 
                        dengan segelas kecil espresso panas.', 
            'featured_image' => '/img/affogato.jpg'
        ],
        [
            'title' => 'Piccolo', 
            'content' => 'Picollo menggunakan ristretto, yang merupakan bagian terbaik dari proses ekstraksi espresso 
                            karena teksturnya lembut dan kadar asamnya sedikit akibat lamanya proses ekstraksi.', 
            'featured_image' => '/img/piccolo.jpg'
        ],
        [
            'title' => 'Latte', 
            'content' => 'Latte adalah minuman kopi yang dibuat dengan mencampurkan espresso dengan susu. 
                            Latte biasanya mengandung lebih banyak susu, sehingga kopinya terasa lebih smooth.', 
            'featured_image' => '/img/latte.jpg'
        ],
        [
            'title' => 'Espresso', 
            'content' => 'Espresso merupakan saripati dari biji kopi karena merupakan ekstrak biji kopi murni tanpa campuran. 
                            Rasanya yang sangat pahit, membuat espresso biasanya disajikan dalam cangkir kecil yang biasa disebut espresso shot.', 
            'featured_image' => '/img/espresso.jpg'
        ],
        [
            'title' => 'Cold brew', 
            'content' => 'cold brew merupakan metode penyeduhan kopi dengan perendaman selama minimal 8 jam dengan menggunakan air bersuhu ruang ataupun air dingin.', 
            'featured_image' => '/img/cold brew.jpg'
        ]
    ]);
    }
}
