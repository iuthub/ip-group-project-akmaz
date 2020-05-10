<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        Service::insert([
        		[
        			'image'		 => 'logo1/img_advant_01.png',
        			'description'=>'Мастерская по ремонту бытовой техники «Добрый Мастер» стабильно работает на рынке с 2002-го года; За прошедшие с момента открытия годы открылись сервисные центры по ремонту бытовой техники во многих районах Ташкента. Мы стали еще ближе.'
        		],
        		[
        			'image'		 => 'logo1/img_advant_02.png',
        			'description'=>'Квалифицированные Специалисты. Все наши мастера проходят тщательный отбор и сдают обязательный квалификационный экзамен прежде, чем приступают к работе с клиентами. Мы не работаем с кандидатами, опыт которых менее 3 лет.'
        		],
        		[
        			'image'		 => 'logo1/img_advant_03.png',
        			'description'=>'Качество - главный критерий нашей работы. Именно этот параметр заложен в систему мотивации наших сотрудников. Для нас повторный вызов – чрезвычайное событие.'
        		],
        		[
        			'image'		 => 'logo1/img_advant_04.png',
        			'description'=>'Гарантии, которые мы предоставляем – от 1 года до 2 лет. Когда мы берем на себя такие длительные обязательства, мы хорошо понимаем, что для их выполнения требуется безупречное исполнение всех нормативов. Но, наш опыт показывает, что это возможно.'
        		],
        		[
        			'image'		 => 'logo1/img_advant_05.png',
        			'description'=>'Скидки клиентам на всех этапах взаимодействия. При первом обращении, делаем скидку 10% для всех. Существуют скидки в зависимости от объема заказанных услуг и скидки при последующих обращениях. Мы постоянно думаем о своих клиентах.'
        		],
        		[
        			'image'		 => 'logo1/img_advant_06.png',
        			'description'=> 'Оригинальные запчасти. При проведении ремонта используются только сертифицированные материалы и детали. Мы строго контролируем качество всех комплектующих.'
        		]
        ]);
    }
}