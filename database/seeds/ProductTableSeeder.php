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
'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
'title'=>'Harry Potter1',
'description'=>'lorem ipsum dolor sit amet, vel ei harum epicurei laboramus, cum enim solum constituto in. Primis dolorem disputando at his. Quo et laudem quodsi perpetua, ut affert aliquando sed, pri suavitate pertinacia elaboraret an. An est case feugiat, nam ea quis facilis. Natum blandit recusabo pro te, vix vivendo nominati definitiones at, sit at audire accommodare. Ea eros semper invenire eam, no ceteros adversarium mel. Has epicuri assueverit ei, sed consul detraxit id.',
'price'=>11
        ]);
        $product->save();

$product = new \App\Product([
'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
'title'=>'Harry Potter2',
'description'=>'lorem ipsum dolor sit amet, vel ei harum epicurei laboramus, cum enim solum constituto in. Primis dolorem disputando at his. Quo et laudem quodsi perpetua, ut affert aliquando sed, pri suavitate pertinacia elaboraret an. An est case feugiat, nam ea quis facilis. Natum blandit recusabo pro te, vix vivendo nominati definitiones at, sit at audire accommodare. Ea eros semper invenire eam, no ceteros adversarium mel. Has epicuri assueverit ei, sed consul detraxit id.',
'price'=>12
        ]);
        $product->save();

        $product = new \App\Product([
'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
'title'=>'Harry Potter3',
'description'=>'lorem ipsum dolor sit amet, vel ei harum epicurei laboramus, cum enim solum constituto in. Primis dolorem disputando at his. Quo et laudem quodsi perpetua, ut affert aliquando sed, pri suavitate pertinacia elaboraret an. An est case feugiat, nam ea quis facilis. Natum blandit recusabo pro te, vix vivendo nominati definitiones at, sit at audire accommodare. Ea eros semper invenire eam, no ceteros adversarium mel. Has epicuri assueverit ei, sed consul detraxit id.',
'price'=>13
        ]);
        $product->save();

        $product = new \App\Product([
'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
'title'=>'Harry Potter4',
'description'=>'lorem ipsum dolor sit amet, vel ei harum epicurei laboramus, cum enim solum constituto in. Primis dolorem disputando at his. Quo et laudem quodsi perpetua, ut affert aliquando sed, pri suavitate pertinacia elaboraret an. An est case feugiat, nam ea quis facilis. Natum blandit recusabo pro te, vix vivendo nominati definitiones at, sit at audire accommodare. Ea eros semper invenire eam, no ceteros adversarium mel. Has epicuri assueverit ei, sed consul detraxit id.',
'price'=>14
        ]);
        $product->save();

        $product = new \App\Product([
'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
'title'=>'Harry Potter5',
'description'=>'lorem ipsum dolor sit amet, vel ei harum epicurei laboramus, cum enim solum constituto in. Primis dolorem disputando at his. Quo et laudem quodsi perpetua, ut affert aliquando sed, pri suavitate pertinacia elaboraret an. An est case feugiat, nam ea quis facilis. Natum blandit recusabo pro te, vix vivendo nominati definitiones at, sit at audire accommodare. Ea eros semper invenire eam, no ceteros adversarium mel. Has epicuri assueverit ei, sed consul detraxit id.',
'price'=>15
        ]);
        $product->save();

        $product = new \App\Product([
'imagePath'=>'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
'title'=>'Harry Potter6',
'description'=>'lorem ipsum dolor sit amet, vel ei harum epicurei laboramus, cum enim solum constituto in. Primis dolorem disputando at his. Quo et laudem quodsi perpetua, ut affert aliquando sed, pri suavitate pertinacia elaboraret an. An est case feugiat, nam ea quis facilis. Natum blandit recusabo pro te, vix vivendo nominati definitiones at, sit at audire accommodare. Ea eros semper invenire eam, no ceteros adversarium mel. Has epicuri assueverit ei, sed consul detraxit id.',
'price'=>16
        ]);
        $product->save();

    }
}
