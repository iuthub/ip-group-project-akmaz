<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Information;

class InformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        Information::insert([
        		[
        			'title'		 => 'Ремонт бытовой техники в Ташкенте',
        			'slug'		 => 'remont1',
        			'description'=> 'Основное направление нашей деятельности - Ремонт бытовой техники. Мы предлагаем своим клиентам качественный и недорогой ремонт всех видов современного оборудования для дома с гарантией на выполняемые работы. Сегодня ► Добрый Мастер - это недорогой ремонт бытовой техники в Ташкентте • от 40000 сум. • Сервисная служба работает ежедневно ☎ в Ташкенте (+99893) 503-27-30, Тошкентском области Келесе (+99893) 503-27-30. Вы можете сделать заказ с сайта или заполнить форму обратной связи, после чего с вами свяжется наш менеджер, чтобы уточнить детали возникшей проблемы и предложит пути их решения. Мы приложим максимум усилий, чтобы устранить поломку вашей техники в кратчайшие сроки.'
        		],
        		[
        			'title'		 => 'Оказываемые нами услуги',
        			'slug'		 => 'service',
        			'description'=> '<h4>Ремонт холодильного оборудования и Кондиционеров </h4>
<ul>
<li>Независимо от бренда и конструкции;</li>
<li>Широкого спектра применения (морозильники, лари, витрины и т.д.);</li>
</ul>
<p>Помимо перечисленных услуг, наши специалисты всегда готовы помочь вам советом при выборе домашнего оборудования. Порой довольно сложно разобраться в широком спектре предложений, представленном в сети интернет или крупных сетевых магазинах. Мастер по ремонту бытовой техники может значительно облегчить ваш выбор.   </p>'
        		],

        		[
        			'title'		 => 'Ремонт бытовой техники на дому – более 16 лет успешной работы!',
        			'slug'		 => 'remont2',
        			'description'=> 'Наша компания гордится своими достижениями и прилагает максимум усилий для того чтобы оставаться одним из лидеров рынка. За годы работы мы накопили богатый опыт и можем с уверенностью заявлять, что справимся с задачами любой сложности.</p>

<p>Мы постоянно обучаем своих сотрудников, направляем их на заводы-производители техники и следим за тем, чтобы их знания не отставали от реалий сегодняшнего дня. </p>

<p>Мы берёмся за исправление любых неисправностей, от самых мелких, до проведения капитального ремонта, с заменой основных агрегатов и узлов. Опыт наших сотрудников позволяет решать любые задачи в максимально короткий срок. Мы стремимся избавить клиента от проблем с бытовой техникой, применяя новые инженерные решения, технологии и методики. '
        		],

        		[
        			'title'		 => 'Этапы проведения ремонта техники',
        			'slug'		 => 'remont3',
        			'description'=> '<ul>
<li>Предварительная диагностика. Проводится при первом обращении клиента в сервисный центр. По телефону или по фото, которое можно прикрепить в специальной форме сайта, устанавливается общий характер неисправности со слов клиента;</li>
<li>Диагностика при помощи специального оборудования. Дефектный узел (конкретное место поломки), устанавливается всего за несколько минут;</li>
<li>Непосредственно ремонт. Проводится замена деталей, наладка режимов работы и так далее;</li>
<li> Тестовый запуск. Оценка работы оборудования после ремонта, «сдача» работы клиенту.</li>
</ul>
<hr>
<h2 >Цены на услуги </h2>
<p> Стоимость ремонта техники напрямую зависит от сложности поломки, количества деталей «под замену» и срочности заказа.</p>

<p>Минимальная цена, которая включает выезд мастера и первичную диагностику составляет 40000 сум. В случае вашего согласия на проведение ремонта – эти услуги бесплатны.</p>

<p>Сравнивая наши расценки с ценами других компаний работающих в Ташкенте и Ташкентском области можно видеть, что они отличаются в меньшую сторону. А учитывая разнообразные скидки, которые мы предоставляем на всех этапах сотрудничества, они вообще становятся вне конкуренции. </p>
'
        		],

                [
                    'title'      => 'Ремонт холодильников на дому в Ташкенте',
                    'slug'       => 'product',
                    'description'=> 'Понадобился неотложный ремонт холодильников на дому в Ташкенте? Специалисты нашей компании готовы оперативно выехать к вам на вызов и установить неисправный компонент, что позволит вам избежать напрасных трат и быстро «реанимировать» такой незаменим в быту прибор. Другими преимуществами сотрудничества с нами станут:</p>

<ul> <li>Оперативное выполнение возложенных обязательств не в ущерб их качеству. Мы готовы взяться с устранение любых неисправностей, независимо от сложности, на дому недорого, при этом гарантируем исправную работу холодильного оборудования.</li>
<li>Ремонт холодильников на дому по приемлемым ценам. Наша политика по отношению к клиентам заключается в фиксировании тарифов на оказываемые услуги и озвучивании стоимости наших работ после окончания диагностики. При этом мы всегда готовы к диалогу с клиентом, чтобы минимизировать его расходы посредством предоставления скидки в индивидуальном порядке.</li>
<li>Значительный опыт в сфере восстановления сломанной техники. Каждый мастер по ремонту холодильников на дому имеет необходимое образование и стаж работы практически со всеми брендами бытовой техники, представленной на рынке.</li></ul>
<p>Остались вопросы? Свяжитесь с нами прямо сейчас. Мы произведем на дому дешево ремонт любых холодильных аппаратов, дадим гарантии и оставим исключительно позитивные воспоминания!'
                ],


        ]);
    }
}
