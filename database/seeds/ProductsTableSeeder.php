<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        Product::insert([
        		[
        			'name'		 => 'Диагностика проблемы',
        			'price'		 => 'от 0 Sum'
        		],
        		[
        			'name'		 => 'Вода в холодильнике',
        			'price'		 => 'от 20000 Sum'
        		],

        		[
        			'name'		 => 'Вода под холодильником',
        			'price'		 => 'от 40000 Sum'
        		],
        		[
        			'name'		 => 'Сильно шумит',
        			'price'		 => 'от 40000 Sum'
        		],
        		[
        			'name'		 => 'Не отключается',
        			'price'		 => 'от 40000 Sum'
        		],
        		[
        			'name'		 => 'Не включается',
        			'price'		 => 'от 100000 Sum'
        		],
        		[
        			'name'		 => 'Не морозит морозильная камера',
        			'price'		 => 'от 150000 Sum'
        		],
        		[
        			'name'		 => 'Не холодит холодильная камера',
        			'price'		 => 'от 150000 Sum'
        		],
        		[
        			'name'		 => 'Сильно морозит',
        			'price'		 => 'от 70000 Sum'
        		],
        		[
        			'name'		 => 'Необходима заправка фреоном',
        			'price'		 => 'от 120000 Sum'
        		],
        		[
        			'name'		 => '<strong>10% скидка на любую услугу при вызове мастера здесь </strong>',
        			'price'		 => '+998935032730'
        		],

        ]);
    }
}
