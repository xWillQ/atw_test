<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 103,
            'login' => 'Jennyfer_1472',
            'name' => 'Майя Владимировна Григорьева',
            'email' => 'mcclure.clara@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/c5461b3086ea88068342d38dbf0a4467.jpg',
            'about' => 'Ну, я был твоим начальником, я бы мог выйти очень, очень лакомый кусочек. Это бы скорей походило на диво, если бы — могла уполномочить на совершение крепости и всего, что следует. — Как мухи мрут.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2018-08-04 04:48:50',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 104,
            'login' => 'Coty_1147',
            'name' => 'Александров Валерий Иванович',
            'email' => 'reuben.ohara@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/cfceb4e16d1502bf0d6fa66ef7a25b70.jpg',
            'about' => 'А! теперь хорошо! прощайте, матушка! Кони тронулись. Селифан был во всю насосную завертку, как выражаются в иных местах обширного русского государства. Весь следующий день посвящен был визитам.',
            'is_finished' => 0,
            'position_id' => 4,
            'adopted_at' => '2019-01-18 04:48:50',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 105,
            'login' => 'Giles_601',
            'name' => 'Георгий Львович Гуляев',
            'email' => 'xspinka@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/a383c0a9a813e8fdc05cc63159572256.jpg',
            'about' => 'Прошедши порядочное расстояние, увидели, точно, кузницу, осмотрели и кузницу. — Вот тебе на, будто не помнишь! — Нет, барин, нигде не видно! — После таких похвальных, хотя несколько кратких.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2016-04-20 04:48:51',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 106,
            'login' => 'Rosalind_1742',
            'name' => 'Альбина Владимировна Шилова',
            'email' => 'romaine.kohler@raynor.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/ae61d17ca611c91b8858d803acc8bf9b.jpg',
            'about' => 'Два с полтиною. — Право у вас умерло крестьян? — А нос, чувствуешь, какой холодный? возьми-на рукою. Не желая обидеть его, Чичиков взял и за серого коня, которого ты у меня уже одну завезли купцы.',
            'is_finished' => 0,
            'position_id' => 2,
            'adopted_at' => '2015-12-19 04:48:51',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 107,
            'login' => 'Arjun_953',
            'name' => 'Большаков Аким Львович',
            'email' => 'tomasa81@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/4d7eac8b7eeca70c94c4ad861c9fc51a.jpg',
            'about' => 'Проехавши пятнадцатую версту, он вспомнил, что Собакевич не любил ни о чем, что, кроме постели, он ничего не отвечал и старался тут же чубук с трубкою на пол и как тот ни упирался ногами в пол и ни.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2016-09-06 04:48:51',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 108,
            'login' => 'Ashly_1183',
            'name' => 'Лидия Сергеевна Дьячкова',
            'email' => 'larue.fadel@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/87217ad06afb9ec80860335b17f2a8f4.jpg',
            'about' => 'Наконец громовый удар раздался в другой раз и вся четверня со всем: с коляской и кучером, так что из-под кожи выглядывала пакля, был искусно зашит. Во всю дорогу суров и с миллионщиком, и с ними.',
            'is_finished' => 0,
            'position_id' => 4,
            'adopted_at' => '2015-01-21 04:48:52',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 109,
            'login' => 'Jolie_563',
            'name' => 'Изольда Дмитриевна Сергеева',
            'email' => 'hilpert.arch@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/178474123ef33fd7f3c89a0f49a12479.jpg',
            'about' => 'Если ему на то что сам человек русский, хочет быть аккуратен, как немец. Это займет, впрочем, не в убытке, потому что в них за прок, проку никакого нет. — А нос, чувствуешь, какой холодный?.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2014-05-01 04:48:52',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 110,
            'login' => 'Thea_311',
            'name' => 'Елисеева Светлана Алексеевна',
            'email' => 'kaleb.breitenberg@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/baf3d85d41cdad5fda5cb25fe3440b3d.jpg',
            'about' => 'Право, я боюсь на первых-то порах, чтобы как-нибудь не понести — убытку. Может быть, назовут его характером избитым, станут говорить, что теперь нет никакого, — ведь вы — разоряетесь, платите за.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2018-07-26 04:48:52',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 111,
            'login' => 'Evelyn_1741',
            'name' => 'Полина Романовна Анисимова',
            'email' => 'quinn.mitchell@schmitt.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/2d4bdfe33610a94f8007784c7b23a84f.jpg',
            'about' => 'Ноздрев, — я тебе сказал последний раз, когда ты напился? а? забыл? — — продолжал Манилов, — как он уже довольно поздним утром. Солнце сквозь окно блистало ему прямо в глаза, в которых видны были.',
            'is_finished' => 0,
            'position_id' => 1,
            'adopted_at' => '2016-10-23 04:48:52',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 112,
            'login' => 'Marc_1352',
            'name' => 'Никодим Фёдорович Анисимов',
            'email' => 'randy.smith@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/5eed9cf416dae6a3f46545c276445980.jpg',
            'about' => 'Собакевич вошел, как говорится, очень приятно время. Наконец он решился перенести свои визиты за город и навестить помещиков Манилова и Собакевича, которым дал слово. Может быть, вы имеете.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2018-08-02 04:48:53',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 113,
            'login' => 'Chaz_535',
            'name' => 'Евгений Романович Устинов',
            'email' => 'karl.emard@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/ddb7c62ef5f1f8b5bf40ccb6aba46083.jpg',
            'about' => 'Закусивши балыком, они сели за зеленый стол и не увеличить сложность и без толку готовится на кухне? зачем довольно пусто в кладовой? зачем воровка ключница? зачем нечистоплотны и пьяницы слуги?.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2018-04-28 04:48:53',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 114,
            'login' => 'Euna_548',
            'name' => 'Панфилова Елизавета Андреевна',
            'email' => 'terry.cummings@zieme.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/561ebc26a5d2075d33aaf5ba75bbf913.jpg',
            'about' => 'Да на что тебе? — сказал Ноздрев. — Это — нехорошо опрокинуть, я уж покажу, — отвечала Манилова. — Лизанька, — сказал он, — или не хотите с них и съехать. Вы — возьмите всякую негодную, последнюю.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2019-02-06 04:48:53',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 115,
            'login' => 'Lonzo_1518',
            'name' => 'Лев Сергеевич Дьячков',
            'email' => 'trinity.rutherford@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/b71d444073d6ad23fc28fc668f5544d0.jpg',
            'about' => 'Чичиков поблагодарил за расположение и напрямик отказался и от почесывания пяток. Хозяйка вышла, с тем чтобы, пришедши домой, прочитать ее хорошенько, посмотрел пристально на проходившую по.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2016-04-22 04:48:54',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 116,
            'login' => 'Lyda_979',
            'name' => 'Маргарита Максимовна Харитонова',
            'email' => 'greta.moore@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/ce73d9fcbe36e4d0a645fb437a08b0d1.jpg',
            'about' => 'Агашке-ключнице, барыниной фаворитке, сделался сам ключником, а там уже стоял на крыльце, провожая глазами удалявшуюся бричку, и когда решительно уже некуда было ехать. Чичиков только заметил он.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2019-01-09 04:48:54',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 117,
            'login' => 'Mariam_1495',
            'name' => 'Зайцева Ксения Владимировна',
            'email' => 'felicia96@rosenbaum.net',
            'image' => 'http://test.atwinta.ru/storage/avatars/64cd11c464993c296262752f075a47c4.jpg',
            'about' => 'В один год так ее наполнят всяким бабьем, что сам человек русский, хочет быть аккуратен, как немец. Это займет, впрочем, не много слышала подробностей о ярмарке. Нужно, брат, — говорил он, а между.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2015-10-12 04:48:54',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 118,
            'login' => 'Myron_1752',
            'name' => 'Фомин Антон Владимирович',
            'email' => 'wilfredo44@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/9566381fd44b993e08c2f8ab3b284db0.jpg',
            'about' => 'Да, признаюсь, а сам так думал, — подхватил Манилов. — впрочем, приезжаем в город — для того только, чтобы заснуть. Приезжий во всем и с таким старанием, как будто призывает его в комнату. Чичиков.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2013-10-08 04:48:55',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 119,
            'login' => 'Orpha_1517',
            'name' => 'Комарова Лариса Фёдоровна',
            'email' => 'johnston.jessyca@vonrueden.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/1e314bc172b0691859392e943fd36f59.jpg',
            'about' => 'Манилов с такою же любезностью рассказал дело кучеру и сказал ему тихо на ухо, как — покутили! Теперь даже, как вспомнишь… черт возьми! то есть всякими соленостями и иными возбуждающими благодатями.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2017-10-17 04:48:55',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 120,
            'login' => 'Amber_1603',
            'name' => 'Оксана Ивановна Носова',
            'email' => 'rodriguez.brooklyn@mcdermott.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/9ef2f62897c1e6288a3a3ac53a92c16f.jpg',
            'about' => 'Впрочем, — чтобы нельзя было видеть экипажа со стороны трактирного слуги, так что Чичиков сказал просто, что подобное предприятие, или негоция, никак не пришелся посреди дома, как ни прискорбно то и.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2017-12-31 04:48:55',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 121,
            'login' => 'Clair_12',
            'name' => 'Логинов Павел Андреевич',
            'email' => 'zulauf.amari@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/848d18d6e3ac852f2be557f07dbf2bfa.jpg',
            'about' => 'Погасив свечу, он накрылся ситцевым одеялом и, свернувшись под ним до земли. «Теперь дело пойдет! — кричали мужики. — Накаливай, накаливай его! пришпандорь кнутом вон того, того, солового, что он.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2018-04-12 04:48:55',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 122,
            'login' => 'Adriana_1717',
            'name' => 'Клара Дмитриевна Морозова',
            'email' => 'mazie34@hermiston.biz',
            'image' => 'http://test.atwinta.ru/storage/avatars/ffd132cca2235f77b650bfb1c470ea61.jpg',
            'about' => 'Чичиков взглянул искоса на бывшие в руках словоохотного возницы и кнут только для знакомства! «Что он в гвардии, ему бы — купить крестьян… — сказал Манилов, когда уже все — будет: туррр… ру….',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2016-12-19 04:48:56',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 123,
            'login' => 'Jaunita_1756',
            'name' => 'Попова Ульяна Максимовна',
            'email' => 'heidenreich.xander@block.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/88d48dd636adc57d234a1c8430fff6f7.jpg',
            'about' => 'Чичиковым приехали в какое-то общество в хороших каретах, где обворожают всех приятностию обращения, и что теперь, желая успокоиться, ищет избрать наконец место для жительства, и что, прибывши в.',
            'is_finished' => 0,
            'position_id' => 3,
            'adopted_at' => '2015-01-26 04:48:56',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 124,
            'login' => 'Jocelyn_822',
            'name' => 'Большаков Аркадий Владимирович',
            'email' => 'gcrist@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/a26dbd74fa2218d10392256541e73ce2.jpg',
            'about' => 'Ноздрев, порываясь вперед с черешневым чубуком, — весь длинный и в то же время изъявили удовольствие, что пыль по дороге была совершенно прибита вчерашним дождем и теперь мне выехать не на самом.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2018-05-08 04:48:56',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 125,
            'login' => 'Wanda_1055',
            'name' => 'Жанна Александровна Третьякова',
            'email' => 'hmetz@cummerata.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/09eee8ce6506c5e8e83d7f23d9305bd1.jpg',
            'about' => 'В немного времени он совершенно успел очаровать их. Помещик Манилов, еще вовсе человек не без удовольствия взглянул на него пристально; но глаза гостя были совершенно довольны друг другом. Несмотря.',
            'is_finished' => 0,
            'position_id' => 4,
            'adopted_at' => '2018-03-22 04:48:57',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 126,
            'login' => 'Danial_319',
            'name' => 'Филиппов Фёдор Евгеньевич',
            'email' => 'mabernathy@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/e85d521d3183ddb416896af18ee96c4f.jpg',
            'about' => 'Селифан на это Чичиков. За бараньим боком последовали ватрушки, из которых последние целыми косвенными тучами переносились с одного места на другое. Для этой же конюшне видели козла, которого, по.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2015-11-02 04:48:57',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 127,
            'login' => 'Emelia_1457',
            'name' => 'Артемьева Софья Ивановна',
            'email' => 'coralie.maggio@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/d9e1a915ddb96354b2f81dcfdb52dbff.jpg',
            'about' => 'Фемистоклюс. — Умница, душенька! — сказал Манилов, обратясь к Чичикову, — вы наконец и удостоили нас своим посещением. Уж такое, право, — комиссия: не рад, что связался, хотят непременно, чтоб у.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2014-10-05 04:48:57',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 128,
            'login' => 'Tiana_185',
            'name' => 'Вероника Евгеньевна Ермакова',
            'email' => 'zking@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/4be948f21bfd969c5b34c5db01ea2174.jpg',
            'about' => 'Хозяйка вышла с тем только, чтобы заснуть. Приезжий во всем как-то умел найтиться и показал в себе тяжести на целый пуд больше. Пошли в гостиную, Собакевич показал на кресла, сказавши опять.',
            'is_finished' => 0,
            'position_id' => 1,
            'adopted_at' => '2018-03-28 04:48:57',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 129,
            'login' => 'Erin_1408',
            'name' => 'Лыткин Донат Фёдорович',
            'email' => 'monte.wuckert@dicki.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/14bdefef9b54d4edce0cb2dcc8d36c27.jpg',
            'about' => 'У всякого есть свое, но у Манилова ничего не отвечал и старался тут же с небольшим показал решительно все, так что слушающие наконец все отходят, произнесши: «Ну, брат, ты, кажется, уже начал пули.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2013-11-21 04:48:58',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 130,
            'login' => 'Henderson_1754',
            'name' => 'Рогов Игорь Максимович',
            'email' => 'benny14@schumm.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/716c0500289213e8e6431ca46afff6b1.jpg',
            'about' => 'Известно, что есть много других занятий, кроме продолжительных поцелуев и сюрпризов, и много бы можно сделать разных запросов. Зачем, например, глупо и без того не могут покушать в трактире, чтоб не.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2014-03-18 04:48:58',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 131,
            'login' => 'Elmo_143',
            'name' => 'Корнилов Трофим Дмитриевич',
            'email' => 'anderson.angelica@mckenzie.biz',
            'image' => 'http://test.atwinta.ru/storage/avatars/f9a5cda7c29d561cb0201e7f39f24efa.jpg',
            'about' => 'Прощайте, почтеннейший друг! Не позабудьте просьбы! — О, это справедливо, это совершенно справедливо! — прервал Чичиков. — Вот я тебя как высеку, так ты у меня в казну муку и скотину. Нужно его.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2014-03-26 04:48:58',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 132,
            'login' => 'Carmine_1034',
            'name' => 'Аполлон Романович Блинов',
            'email' => 'garnett55@kris.biz',
            'image' => 'http://test.atwinta.ru/storage/avatars/80db3549e7a9b9fe415cab74c8787968.jpg',
            'about' => 'Мертвые в хозяйстве! Эк куда хватили! Воробьев разве пугать по ночам — в лице видно что-то открытое, прямое, удалое. Они скоро знакомятся, и не вставали уже до ужина. Все разговоры совершенно.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2014-03-25 04:48:59',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 133,
            'login' => 'Arely_455',
            'name' => 'Дементьев Тарас Андреевич',
            'email' => 'oconnell.golda@rice.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/7f6ed21372e25dd064b9aaf5598836c8.jpg',
            'about' => 'Чичиков отправился на конюшню возиться около лошадей, а лакей Петрушка стал устроиваться в маленькой передней, очень темной конурке, куда уже успел притащить свою шинель и вместе с Кувшинниковым.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2017-09-09 04:48:59',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 134,
            'login' => 'Gianni_670',
            'name' => 'Павлов Геннадий Максимович',
            'email' => 'rosie47@boyle.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/5197459f223c72ef3485b2786b750503.jpg',
            'about' => 'Штук десять из них душ крестьян и половину имений, заложенных и только, чтобы увидеться с образованными людьми. Одичаешь, — знаете, будешь все время игры. Выходя с фигуры, он ударял по столу крепко.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2018-11-06 04:48:59',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 135,
            'login' => 'Brennan_1237',
            'name' => 'Рыбаков Олег Максимович',
            'email' => 'hane.brody@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/eb2362359c5005e7e77c27bc0942656c.jpg',
            'about' => 'Когда установившиеся пары танцующих притиснули всех к стене, он, заложивши руки назад, глядел на того, с которым говорил, но всегда почти так случается, что подружившийся подерется с ними в ладу.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2014-07-01 04:48:59',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 136,
            'login' => 'Fiona_724',
            'name' => 'Дарья Ивановна Беспалова',
            'email' => 'feest.sherwood@hettinger.biz',
            'image' => 'http://test.atwinta.ru/storage/avatars/f298a973d9cb176c7ad544bee5468aaf.jpg',
            'about' => 'Кавказ. Нет, эти господа никогда не смеется, а этот — сейчас, если что-нибудь встретит, букашку, козявку, так уж водится, — возразил Собакевич. — Ну, когда не нуждаетесь, так нечего и говорить. На.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2014-09-13 04:49:00',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 137,
            'login' => 'Christine_147',
            'name' => 'Ника Фёдоровна Ильина',
            'email' => 'imetz@halvorson.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/a2a8637a076254bf5dfeacad6924f43f.jpg',
            'about' => 'А сделавшись приказчиком, поступал, разумеется, как все приказчики: водился и кумился с теми, которые на деревне были побогаче, подбавлял на тягла победнее, проснувшись в девятом часу утра, поджидал.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2015-12-11 04:49:00',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 138,
            'login' => 'Christine_1965',
            'name' => 'Ермакова Вероника Максимовна',
            'email' => 'halie.olson@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/4d06ccab17e014f1bcfc1b9e1a72bd43.jpg',
            'about' => 'На что Петрушка ничего не отвечал. — Прощайте, миленькие малютки! — сказал Ноздрев. — Стану я разве — плутоватать? — Я полагаю даже, — что делаются на барских кухнях из баранины, какая суток по.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2016-04-23 04:49:00',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 139,
            'login' => 'Daisha_824',
            'name' => 'Лада Ивановна Кулагина',
            'email' => 'rosalind.daugherty@legros.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/a887305c3def71a7c58b80eff0637877.jpg',
            'about' => 'Собакевича, люди — умирали, как мухи, но не хотелось, чтобы Собакевич знал про это. — Здесь он нагнул сам голову Чичикова, — так что даже самая древняя римская монархия не была похожа на.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2015-01-25 04:49:01',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 140,
            'login' => 'Jackie_294',
            'name' => 'Фомичёва Нонна Борисовна',
            'email' => 'peggie.hirthe@klein.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/5c4e7b06381f0ddaa5ada1f4856f1432.jpg',
            'about' => 'Не могу знать. Статься может, как-нибудь из брички поналезли. — Врешь, врешь! — Я имею право отказаться, потому что он всякий раз подносил им всем свою серебряную с финифтью табакерку, на дне ее, не.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2014-12-25 04:49:01',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 141,
            'login' => 'Kariane_1313',
            'name' => 'Наталья Львовна Романова',
            'email' => 'vcollins@abernathy.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/cf5d727365293a2817f7152b6fe84315.jpg',
            'about' => 'Ты, однако ж, хорош, не надоело тебе сорок раз повторять одно и то в минуту самого головоломного дела. Но Чичиков отказался решительно как играть, так и лезет произвести где-нибудь порядок.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2016-10-15 04:49:01',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 142,
            'login' => 'Andreane_333',
            'name' => 'Марина Владимировна Попова',
            'email' => 'marvin.carolyn@borer.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/0905e3c64f063d7d3c311905c709b08c.jpg',
            'about' => 'Н. В. — Гоголя.)]] — Нет, брат! она такая почтенная и верная! Услуги оказывает такие… — поверишь, у меня знает дорогу, только ты — знал, как я вижу, нельзя, как водится — между хорошими друзьями и.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2013-09-06 04:49:02',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 143,
            'login' => 'Delphine_1600',
            'name' => 'Клавдия Дмитриевна Аксёнова',
            'email' => 'lstreich@wintheiser.net',
            'image' => 'http://test.atwinta.ru/storage/avatars/3b2c3049f8ac785bacba43153f6e538d.jpg',
            'about' => 'Право, словно какая-нибудь, не говоря — дурного слова, дворняжка, что лежит на сене и сам Чичиков занес ногу на ступеньку и, понагнувши бричку на правую сторону, потому что запросила вчетверо против.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2016-08-22 04:49:02',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 144,
            'login' => 'Aniya_226',
            'name' => 'Яковлева Алла Дмитриевна',
            'email' => 'kwalker@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/1496998b235a42204d5eea2b7f66367b.jpg',
            'about' => 'Трактир был что-то вроде русской избы, несколько в большем размере. Резные узорочные карнизы из свежего дерева вокруг окон и под ним находилось пространство, занятое «кипами бумаг в лист, потом.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2016-04-22 04:49:02',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 145,
            'login' => 'Orrin_284',
            'name' => 'Валентин Иванович Русаков',
            'email' => 'theo22@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/5031e80936157f3544fe732cf66d42bb.jpg',
            'about' => 'Н. В. Гоголя.)]] Но, увидевши, что дело не шло и не поймет всех его особенностей и различий; он почти тем же голосом и тем же языком станет говорить и с видом сожаления. — Отчего? — сказал.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2017-04-21 04:49:02',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 146,
            'login' => 'Abagail_227',
            'name' => 'Валерия Фёдоровна Наумова',
            'email' => 'kyler95@torp.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/37916d185d9d64c4ce3867365f6b2d96.jpg',
            'about' => 'Написавши записку, он пересмотрел еще раз Чичиков. — Да зачем, я и в городской сад, который состоял из тоненьких дерев, дурно принявшихся, с подпорками внизу, в виде треугольников, очень красиво.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2013-07-25 04:49:03',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 147,
            'login' => 'Mercedes_1874',
            'name' => 'Ярослава Максимовна Силина',
            'email' => 'faye27@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/12f2c9ed9110fafa56cb25e15535044f.jpg',
            'about' => 'Когда бричка была уже на конце деревни, он подозвал к себе в избу. — Эй, Пелагея! — сказала старуха, глядя на него — особенной, какую-нибудь бутылочку — ну просто, брат, находишься в — ихнюю бричку.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2015-05-05 04:49:03',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 148,
            'login' => 'Ryleigh_509',
            'name' => 'Алексей Владимирович Потапов',
            'email' => 'lori.mosciski@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/dfccc875626f98b5aeec0c7afcedbc98.jpg',
            'about' => 'То есть плюнуть бы ему подвернули химию, он и тут же, подошед к бюро, собственноручно принялся выписывать всех не только гнедой и Заседатель были недовольны, не услышавши ни разу ни «любезные», ни.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2014-12-23 04:49:03',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 149,
            'login' => 'Myrtis_17',
            'name' => 'Регина Романовна Ширяева',
            'email' => 'leanna.kshlerin@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/c4bfe9f5c59242f7a003e6366d4fc651.jpg',
            'about' => 'Как вам показался полицеймейстер? Не правда ли, тебе барабан? — продолжал Собакевич, — Павел Иванович — Чичиков! У губернатора и почтмейстера имел честь покрыть вашу двойку» и тому подобного, и все.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2013-09-21 04:49:04',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 150,
            'login' => 'Vince_1150',
            'name' => 'Тарасов Адам Борисович',
            'email' => 'morris57@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/454dde4d973d729e7e6bcc718617fa4a.jpg',
            'about' => 'Павел Иванович Чичиков отправился на обед и кончился; но когда встали из-за стола, Чичиков почувствовал в себе тяжести на целый пуд больше. Пошли в гостиную, как вдруг гость объявил с весьма.',
            'is_finished' => 0,
            'position_id' => 4,
            'adopted_at' => '2014-08-02 04:49:04',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 151,
            'login' => 'Ettie_528',
            'name' => 'Яна Борисовна Орлова',
            'email' => 'sleannon@roberts.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/e0a5afa13f06ce155650050058ea3e89.jpg',
            'about' => 'На такую сумятицу успели, однако ж, это все-таки был овес, а не мне! Здесь Чичиков, не дожидаясь, что будет отвечать на это Ноздрев, скорее за шапку да по-за спиною капитана-исправника выскользнул.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2017-12-09 04:49:04',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 152,
            'login' => 'Maxie_1707',
            'name' => 'Инга Максимовна Суханова',
            'email' => 'osinski.crawford@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/e818b5760e8d1fb7fc2e974110b1bb42.jpg',
            'about' => 'Уже стул, которым он вздумал было защищаться, был вырван — крепостными людьми из рук бумажки Собакевичу, который, лежа в креслах, что лопнула шерстяная материя, обтягивавшая подушку; сам Манилов.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2015-08-05 04:49:05',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 153,
            'login' => 'Brandt_1895',
            'name' => 'Панфилов Алексей Львович',
            'email' => 'sid53@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/782323d9ec7945e3ac74f02810ce030d.jpg',
            'about' => 'Он наливал очень усердно в оба стакана, и направо и налево. Чичиков поблагодарил хозяйку, сказавши, что ему нужно что-то сделать, предложить вопрос, а какой вопрос — черт его побери, — подумал про.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2013-07-28 04:49:05',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 154,
            'login' => 'Shawna_754',
            'name' => 'Александрова Алёна Львовна',
            'email' => 'altenwerth.monserrat@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/2ae1c791eadc67c4c1372297b816f04f.jpg',
            'about' => 'Да как сказать числом? Ведь неизвестно, сколько умирало, их никто не — хочешь пощеголять подобными речами, так ступай в казармы, — и прибавил еще: — — и сделав движение головою, подобно актрисам.',
            'is_finished' => 0,
            'position_id' => 4,
            'adopted_at' => '2018-04-02 04:49:05',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 155,
            'login' => 'Jazmin_781',
            'name' => 'Альбина Андреевна Князева',
            'email' => 'timmy.gleichner@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/dc12f18cc8df46b14ff6ffc8577a6183.jpg',
            'about' => 'Поручик Кувшинников… Ах, братец, какой премилый человек! вот уж, — пожалуйста, не позабудьте насчет подрядов. — Не хочу! — сказал он наконец, когда Чичиков не без удовольствия взглянул на него.',
            'is_finished' => 0,
            'position_id' => 2,
            'adopted_at' => '2017-08-29 04:49:06',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 156,
            'login' => 'Clair_769',
            'name' => 'Макар Александрович Кузьмин',
            'email' => 'urban46@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/2a2877a1a142ca889fa9de589761a7de.jpg',
            'about' => 'Чичиков. — Да ведь я знаю тебя, ведь ты жизни не будешь рад, когда приедешь к нему, готов бы даже воспитали тебя по моде, пустили бы в рот пилюлю; глотающие устерс, морских пауков и прочих затей, но.',
            'is_finished' => 0,
            'position_id' => 2,
            'adopted_at' => '2017-06-21 04:49:06',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 157,
            'login' => 'Mckayla_1224',
            'name' => 'Маркова Любовь Романовна',
            'email' => 'wyman.bethel@homenick.org',
            'image' => 'http://test.atwinta.ru/storage/avatars/7eb5fd369b668230f4f675ee6bba2cc2.jpg',
            'about' => 'Закусивши балыком, они сели за стол близ пяти часов. Обед, как видно, пронесло: полились такие потоки речей, что только нужно было слушать: — Милушкин, кирпичник! мог поставить печь в каком случае.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2017-12-12 04:49:06',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 158,
            'login' => 'Candice_683',
            'name' => 'Ксения Максимовна Лаврентьева',
            'email' => 'kuphal.ryley@jacobson.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/1124790cefab5bbb23f476a55536dad4.jpg',
            'about' => 'Манилов. Наконец оба приятеля вошли в дверь боком и несколько подмигивавшим левым глазом так, как с тем, чтобы хорошо припомнить положение места, отправился домой прямо в верх его кузова; брызги.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2017-12-03 04:49:06',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 159,
            'login' => 'Bradley_981',
            'name' => 'Крюков Клим Сергеевич',
            'email' => 'lswift@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/f29357c688a945a8cadc04507235f08f.jpg',
            'about' => 'Собакевич подтвердил это делом: он опрокинул половину — бараньего бока к себе в голову, то уж «ничем его не произвел даже скачок по образцу козла, что, как известно, получается в пансионах. А в.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2016-04-04 04:49:07',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 160,
            'login' => 'Otto_526',
            'name' => 'Денисов Святослав Дмитриевич',
            'email' => 'ruth89@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/01131b90d9dafb803df4b9f4907118ac.jpg',
            'about' => 'Ружье, собака, лошадь — все это en gros[[1 - В большом — количестве (франц.)]]. В фортунку крутнул: выиграл две банки помады, — фарфоровую чашку и гитару; потом опять поставил один раз и вся.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2017-08-04 04:49:07',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 161,
            'login' => 'Nyah_389',
            'name' => 'Никонова Владлена Александровна',
            'email' => 'lennie.raynor@pfeffer.net',
            'image' => 'http://test.atwinta.ru/storage/avatars/9411905c464b796c27f63a0cf27c8964.jpg',
            'about' => 'Как же бы это сделать? — сказала супруга Собакевича. — А что я и продаю вам, и — впредь не забывать: коли выберется свободный часик, приезжайте — пообедать, время провести. Может быть, вы изволили.',
            'is_finished' => 0,
            'position_id' => 3,
            'adopted_at' => '2014-09-23 04:49:07',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 162,
            'login' => 'Yoshiko_1962',
            'name' => 'Олеся Дмитриевна Кондратьева',
            'email' => 'marisa58@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/0df938c8e5e75f269757182dfaeb3585.jpg',
            'about' => 'Следствием этого было то, что случалось ему видеть дотоле, которое хоть раз встретится на пути человеку явленье, не похожее на выражение показалось на лице его. Казалось, в этом ребенке будут.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2015-06-22 04:49:08',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 163,
            'login' => 'Elinor_1786',
            'name' => 'Ксения Владимировна Шашкова',
            'email' => 'maybell.damore@luettgen.biz',
            'image' => 'http://test.atwinta.ru/storage/avatars/1f1df6a114adca444b8f1767f03dbfd0.jpg',
            'about' => 'Индейкам и курам не было видно, и если бы он упустил сказать, что приезжий беспрестанно встряхивал ушами. На такую сумятицу успели, однако ж, не знаешь? — Нет, ты уж, пожалуйста, меня-то отпусти.',
            'is_finished' => 0,
            'position_id' => 4,
            'adopted_at' => '2017-11-17 04:49:08',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 164,
            'login' => 'Otilia_981',
            'name' => 'Борисова Алина Владимировна',
            'email' => 'purdy.elda@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/7f94a7eb668a646611a12078f360f03c.jpg',
            'about' => 'В таком случае позвольте мне быть откровенным: я бы желал знать, можете ли вы дорогу к Собакевичу? — Об этом хочу спросить вас. — Позвольте, я сяду на стуле. — Позвольте узнать, кто здесь господин.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2015-04-20 04:49:08',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 165,
            'login' => 'Thomas_331',
            'name' => 'Ростислав Иванович Герасимов',
            'email' => 'syble.bernier@feil.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/5face1d6490153584a6c14b8b21283ee.jpg',
            'about' => 'Ролла играл г. Попльвин, Кору — девица Зяблова, прочие лица были и того менее замечательны; однако же он прочел их всех, добрался даже до цены партера и узнал, что всякие есть помещики: Плотин.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2014-12-22 04:49:09',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 166,
            'login' => 'America_1983',
            'name' => 'Селиверстова Майя Борисовна',
            'email' => 'srau@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/768bdd8d9bdc98d046c65d9d39bb00f0.jpg',
            'about' => 'Очень обходительный и приятный человек, — отвечал Чичиков. — Да как же мне шарманка? Ведь я знаю тебя: ведь ты был в разных видах: в картузах и в то время как барин — барахтался в грязи, силясь.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2018-06-29 04:49:09',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 167,
            'login' => 'Kennedi_847',
            'name' => 'Бронислав Иванович Васильев',
            'email' => 'violet12@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/a7aa4be749c297b22a0014fc2f5368a8.jpg',
            'about' => 'С тобой — никак нельзя говорить, как с тем, у которого их пятьсот, опять не так, как стоит — действительно в ревизской сказке. Я привык ни в чем дело. В немногих словах объяснил он ей, что эта.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2016-02-02 04:49:09',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 168,
            'login' => 'Tito_1772',
            'name' => 'Стефан Алексеевич Селиверстов',
            'email' => 'ofadel@windler.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/69d08490c6f200bcb549da023982e329.jpg',
            'about' => 'Губернатору намекнул как-то вскользь, что самому себе он не был твой. — Нет, не слыхивала, нет такого помещика. — Какие миленькие дети, — сказал Манилов, явя в лице видно что-то простосердечное.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2016-09-26 04:49:09',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 169,
            'login' => 'Mallory_1932',
            'name' => 'Моисеев Аким Евгеньевич',
            'email' => 'tchamplin@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/fa1d5b3562915a34f2c65a8ee9c44ff2.jpg',
            'about' => 'Как-с? извините… я несколько туг на ухо, как — подавали ревизию? — Да на что половой, по обыкновению, отвечал: «О, большой, сударь, мошенник». Как в цене? — сказал Ноздрев. Немного прошедши, — они.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2016-02-03 04:49:10',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 170,
            'login' => 'Candice_776',
            'name' => 'Эмилия Владимировна Горшкова',
            'email' => 'uleffler@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/2ccf348393ec026497adbcefe01a9181.jpg',
            'about' => 'Маниловой. — — Прощайте, сударыня! — говорила Фетинья, постилая сверх перины простыню — и боже! чего бы дошло взаимное излияние чувств обоих приятелей, если бы вдруг припомнив: — А! чтоб не.',
            'is_finished' => 0,
            'position_id' => 4,
            'adopted_at' => '2015-09-27 04:49:10',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 171,
            'login' => 'Juwan_247',
            'name' => 'Давид Владимирович Колобов',
            'email' => 'jabari38@hettinger.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/e209b8b68273a1d5631f50e5689102ec.jpg',
            'about' => 'Да кто же говорит, что они живы, так, как были. — Нет, врешь, ты этого не случится, то все-таки что-нибудь да будет такое, чего с другим никак не мог изъяснить себе, и все это в ней ни было, сорок.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2013-06-03 04:49:11',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 172,
            'login' => 'Dena_600',
            'name' => 'Татьяна Дмитриевна Дементьева',
            'email' => 'bbalistreri@kutch.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/0513e531348a4cdba3a28abccde95a6c.jpg',
            'about' => 'Настасья Петровна? — Право, не знаю, — отвечал Ноздрев. — Ты пьян как сапожник! — сказал Манилов. Приказчик сказал: «Слушаю!» — и сделай подробный — реестрик всех поименно. — Да, я купил его.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2014-06-15 04:49:11',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 173,
            'login' => 'Morton_1732',
            'name' => 'Роберт Сергеевич Медведев',
            'email' => 'reymundo.terry@jacobi.biz',
            'image' => 'http://test.atwinta.ru/storage/avatars/f4ad53ae1b14636b38ae09852160c1ab.jpg',
            'about' => 'Другой имел прицепленный к имени «Коровий кирпич», иной оказался просто: Колесо Иван. Оканчивая писать, он потянул несколько к себе в избу. — Эй, Порфирий, — кричал он исступленно, обратившись к.',
            'is_finished' => 0,
            'position_id' => 1,
            'adopted_at' => '2016-02-04 04:49:11',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 174,
            'login' => 'Alfreda_954',
            'name' => 'Носова Лилия Романовна',
            'email' => 'nelda55@mertz.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/46b94b940ca78da54e9f33400574f7ff.jpg',
            'about' => 'Хозяйка очень часто обращалась к Чичикову и прибавил еще: — — сказал белокурый. — Как давно вы изволили — выразиться так для красоты слога? — Нет, барин, нигде не покосились, а в третью скажешь.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2014-02-27 04:49:11',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 175,
            'login' => 'Malinda_65',
            'name' => 'Евгения Алексеевна Никифорова',
            'email' => 'kozey.luz@klein.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/05549156c043931217d357183897baad.jpg',
            'about' => 'Ноздрев приветствовал его по-дружески и даже бузиной, подлец, затирает; но — за десять тысяч не отдам, наперед говорю. Эй, Порфирий! — закричал опять Ноздрев. — Все, знаете, лучше расписку. Не ровен.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2016-04-15 04:49:12',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 176,
            'login' => 'Cortney_649',
            'name' => 'Зайцева Эмма Львовна',
            'email' => 'lsteuber@mccullough.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/308e0ef3462bc8f1dbe35ad33b87d82f.jpg',
            'about' => 'Услыша эти слова, Чичиков, чтобы не вспоминал о нем. — Да, конечно, мертвые, — сказал Ноздрев. — Ну нет, не мечта! Я вам за них втрое больше. — Так как русский человек в чинах, с благородною.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2017-07-17 04:49:12',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 177,
            'login' => 'Joelle_53',
            'name' => 'Регина Борисовна Михеева',
            'email' => 'kmaggio@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/c23982d07d94ee9ac0e70915a39d2c8e.jpg',
            'about' => 'Чичиков уехал, сопровождаемый долго поклонами и маханьями платка приподымавшихся на цыпочках хозяев. Манилов долго стоял на крыльце самого хозяина, который стоял с — хорошим человеком! — Как честный.',
            'is_finished' => 0,
            'position_id' => 1,
            'adopted_at' => '2017-01-21 04:49:12',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 178,
            'login' => 'Garret_1348',
            'name' => 'Семён Иванович Кононов',
            'email' => 'sawayn.bailee@haley.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/313bbe8136437397d45fb584e42ec365.jpg',
            'about' => 'Поверишь ли, что препочтеннейший и прелюбезнейший человек? — Чрезвычайно приятный, и какой умный, какой начитанный человек! Мы у — тебя, чай, место есть на козлах, где бы ни случилось с ним; но.',
            'is_finished' => 0,
            'position_id' => 1,
            'adopted_at' => '2017-04-01 04:49:13',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 179,
            'login' => 'Emmitt_738',
            'name' => 'Георгий Максимович Дьячков',
            'email' => 'warren73@fahey.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/a66a7dd3e97fcb4f31720eb8b6d2ef5d.jpg',
            'about' => 'Эх, отец мой, у меня, верно, его купил. — А не могу судить, но свиные — котлеты и разварная рыба были превосходны. — Это с какой стати? Конечно, ничего. — Может быть, назовут его характером избитым.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2017-01-13 04:49:13',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 180,
            'login' => 'Twila_1113',
            'name' => 'Корнилова Нонна Дмитриевна',
            'email' => 'isaias55@borer.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/f8d3c0cd074f5ad9124039d5bb891e89.jpg',
            'about' => 'Не могу знать. Статься может, как-нибудь из брички поналезли. — Врешь, врешь, и не помогло никакое накаливанье, дядя Митяй с рыжей бородой взобрался на коренного коня и сделался похожим на.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2018-11-20 04:49:13',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 181,
            'login' => 'Charity_421',
            'name' => 'Алина Романовна Филатова',
            'email' => 'rolfson.helen@collier.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/f107a04d68143e27d3719083e1ae99fe.jpg',
            'about' => 'Лицо Ноздрева, верно, уже сколько-нибудь знакомо читателю. Таких людей приходилось всякому встречать немало. Они называются разбитными малыми, слывут еще в детстве и в убыток вам, что — очень.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2018-04-14 04:49:13',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 182,
            'login' => 'Hilton_1566',
            'name' => 'Спартак Александрович Шарапов',
            'email' => 'padberg.walter@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/63c264b884729001976b23ee46e29e75.jpg',
            'about' => 'Милушкин, кирпичник! мог поставить печь в каком угодно доме. Максим — Телятников, сапожник: что шилом кольнет, то и затрудняет, что они живы, так, как у тоненьких, зато в шкатулках благодать божия.',
            'is_finished' => 0,
            'position_id' => 2,
            'adopted_at' => '2014-07-11 04:49:14',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 183,
            'login' => 'Marc_1330',
            'name' => 'Лазарев Артур Романович',
            'email' => 'ymcglynn@hills.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/3710199733f6ccb59484ffd1a97cfa12.jpg',
            'about' => 'Нужно его задобрить: теста со «вчерашнего вечера еще осталось, так пойти сказать Фетинье, чтоб «спекла блинов; хорошо бы также загнуть пирог пресный с яйцом, у меня к тебе просьба. — Какая? — Дай.',
            'is_finished' => 0,
            'position_id' => 4,
            'adopted_at' => '2014-01-10 04:49:14',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 184,
            'login' => 'Kiera_1385',
            'name' => 'Валерия Владимировна Агафонова',
            'email' => 'leilani42@jacobson.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/ff2424ae42321635b03d7c383b6c5fd0.jpg',
            'about' => 'И потому теперь он совершенно было не приметил, раскланиваясь в дверях с Маниловым. Она была недурна, одета к лицу. На ней хорошо сидел матерчатый шелковый капот бледного цвета; тонкая небольшая.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2019-04-18 04:49:14',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 185,
            'login' => 'Kenton_730',
            'name' => 'Аполлон Евгеньевич Князев',
            'email' => 'carter.ruben@macejkovic.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/556a897ddc462cd279754a67f20ddd9a.jpg',
            'about' => 'Собакевич замолчал. Чичиков тоже замолчал. Минуты две длилось молчание. Багратион с орлиным носом глядел со стены чрезвычайно внимательно рассматривали его взятки и следили почти за всякою картою, с.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2014-11-21 04:49:15',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 186,
            'login' => 'Kip_1353',
            'name' => 'Веселов Артём Андреевич',
            'email' => 'xsmitham@anderson.biz',
            'image' => 'http://test.atwinta.ru/storage/avatars/f152c80ca38cf8708c07d26e18156c62.jpg',
            'about' => 'По двенадцати рублей пуд. — Хватили немножко греха на душу, матушка. По двенадцати не продали. — Ей-богу, повесил бы, — повторил Ноздрев, — покажу отличнейшую пару собак: крепость черных мясом.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2017-07-17 04:49:15',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 187,
            'login' => 'Mauricio_226',
            'name' => 'Васильев Степан Андреевич',
            'email' => 'lavada38@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/5276dddd8d743b4f9bf7cb581e84b4a0.jpg',
            'about' => 'У вас, матушка, блинцы очень вкусны, — сказал Манилов, явя в лице своем мыслящую физиономию, покрыл нижнею губою верхнюю и сохранил такое положение во все что ни есть ненужного, что Акулька у нас.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2016-09-15 04:49:15',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 188,
            'login' => 'Berneice_1601',
            'name' => 'Субботина Вероника Алексеевна',
            'email' => 'wyman.fay@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/9f4e7ff8bb5a9b02dceb2bcd836dd649.jpg',
            'about' => 'Еще мне всякий с охотой сбудет их, чтобы — только поскорей избавиться. Дурак разве станет держать их при себе и — наслал его. Такой гадкий привиделся; а рога-то длиннее бычачьих. — Я уж знала это.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2016-01-27 04:49:16',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 189,
            'login' => 'Brisa_953',
            'name' => 'Лаврентьева Флорентина Андреевна',
            'email' => 'kaya.huel@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/4600672fd02f8f3355b5aeaa440a5cbd.jpg',
            'about' => 'Таков уже русский человек: страсть сильная зазнаться с тем, у которого их пятьсот, а с другой стороны трактирным слугою, и сел на коренного, который чуть не упал. На крыльцо вышел лакей в серой.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2017-06-26 04:49:16',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 190,
            'login' => 'Bailee_20',
            'name' => 'Субботина Лилия Сергеевна',
            'email' => 'bechtelar.danyka@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/fa1b5e5436c5db7d032e926a8e899da2.jpg',
            'about' => 'Вы, кажется, человек довольно умный, владеете сведениями — образованности. Ведь предмет просто фу-фу. Что ж он стоит? кому — нужен? — Да когда же этот лес сделался твоим? — спросил он и тут же, пред.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2018-05-08 04:49:16',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 191,
            'login' => 'Jedediah_804',
            'name' => 'Яковлев Адриан Владимирович',
            'email' => 'kirstin21@frami.org',
            'image' => 'http://test.atwinta.ru/storage/avatars/55612fe9a53c338dce377ce86f1b8d12.jpg',
            'about' => 'Манилова. Есть род людей, известных под именем: люди так себе, ни то ни стало отделаться от всяких бричек, шарманок и «всех возможных собак, несмотря на непостижимую уму бочковатость ребр «и.',
            'is_finished' => 0,
            'position_id' => 2,
            'adopted_at' => '2016-10-13 04:49:16',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 192,
            'login' => 'Margarett_710',
            'name' => 'Архипова София Максимовна',
            'email' => 'bratke@gmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/441385e0feba8a7dfd222b29048a9c59.jpg',
            'about' => 'Ивановны, которую она почти впихнула ему в род и потомство, утащит он его в бричку. С громом выехала бричка из-под ворот гостиницы на улицу. Проходивший поп снял шляпу, несколько мальчишек в.',
            'is_finished' => 0,
            'position_id' => 6,
            'adopted_at' => '2017-04-21 04:49:17',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 193,
            'login' => 'Kip_316',
            'name' => 'Козлов Геннадий Александрович',
            'email' => 'ziemann.connor@emmerich.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/3c1c8b5404b6192b431b4b0846cf5361.jpg',
            'about' => 'Моя цена! Мы, верно, как-нибудь ошиблись или не ради, но должны — сесть. Чичиков сел. — Позвольте узнать, кто здесь господин Ноздрев? — сказал Чичиков, изумленный в самом деле дело станете делать.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2013-09-12 04:49:17',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 194,
            'login' => 'Kraig_9',
            'name' => 'Анатолий Дмитриевич Носков',
            'email' => 'patsy.pfannerstill@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/6b811568449f3f3d08c2d7fcce725898.jpg',
            'about' => 'Чичиков в после минутного «размышления объявил, что мертвые души дело не шло и не сердился ли, что — заседателя вам подмасливать больше не осталось показывать. Прежде всего пошли они обсматривать.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2015-01-09 04:49:17',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 195,
            'login' => 'Betty_613',
            'name' => 'Эмма Львовна Шестакова',
            'email' => 'kessler.alfonso@hotmail.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/e04f01893f9ebc5eed88bb4b4072f100.jpg',
            'about' => 'Нет, кто уж кулак, тому не разогнуться в ладонь! А разогни кулаку один или два пальца, выдет еще хуже. Попробуй он слегка верхушек какой-нибудь науки, даст он знать потом, занявши место повиднее.',
            'is_finished' => 0,
            'position_id' => 8,
            'adopted_at' => '2015-10-23 04:49:18',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 196,
            'login' => 'Jany_1930',
            'name' => 'Симонова Люся Владимировна',
            'email' => 'cruickshank.marjorie@rodriguez.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/3d46ea17576d71884e6c6149bb4fe164.jpg',
            'about' => 'Но как ни бился архитектор, потому что приезжий оказал необыкновенную деятельность насчет визитов: он явился даже засвидетельствовать почтение инспектору врачебной управы и городскому архитектору. И.',
            'is_finished' => 0,
            'position_id' => 2,
            'adopted_at' => '2016-12-19 04:49:18',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 197,
            'login' => 'Donny_1804',
            'name' => 'Борисов Николай Сергеевич',
            'email' => 'santos53@blick.info',
            'image' => 'http://test.atwinta.ru/storage/avatars/4c5f157f060445e99aa624c54094ca3a.jpg',
            'about' => 'Эй, Порфирий, — принеси-ка сюда шашечницу. — Напрасен труд, я не буду играть. — Да зачем же среди недумающих, веселых, беспечных минут сама собою вдруг пронесется иная чудная струя: еще смех не.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2016-11-20 04:49:18',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 198,
            'login' => 'Josephine_1079',
            'name' => 'Людмила Евгеньевна Блинова',
            'email' => 'arnulfo.heathcote@harris.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/8075d7f5962f13fead19f2af3af35b03.jpg',
            'about' => 'Чичиков, прощаясь. — Да у меня-то их хорошо пекут, — сказала — хозяйка, когда они вышли на крыльцо. — Будет, будет готова. Расскажите только мне, как добраться до большой — дороги. — Как не быть.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2017-09-18 04:49:19',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 199,
            'login' => 'Charlie_767',
            'name' => 'Самойлов Захар Владимирович',
            'email' => 'swaniawski.diamond@yahoo.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/a472617f06f8d91469288353c53c9fc4.jpg',
            'about' => 'Павел Иванович Чичиков отправился на обед и вечер к полицеймейстеру, где с трех часов после обеда засели в вист вместе с нею заговорить, но как-то чрезвычайно искусно, так что даже в необитаемой.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2019-02-11 04:49:19',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 200,
            'login' => 'Braulio_407',
            'name' => 'Суханов Андрей Сергеевич',
            'email' => 'leda.gerhold@wiegand.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/0c51cdf94021f1d0cc416ca861e22bea.jpg',
            'about' => 'Сами купцы говорят, что — заседателя вам подмасливать больше не нужно, потому что Чичиков, несмотря на то что прокурор и все это было довезено домой; почти в одно и то в минуту самого головоломного.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2014-01-01 04:49:19',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 201,
            'login' => 'Chanelle_942',
            'name' => 'Хохлова Антонина Андреевна',
            'email' => 'hirthe.gordon@crona.org',
            'image' => 'http://test.atwinta.ru/storage/avatars/2b971b23e4ff83e48786c4235e0f8433.jpg',
            'about' => 'Прошу прощенья! я, кажется, вас побеспокоил. Пожалуйте, садитесь — сюда! Прошу! — Здесь вам будет попокойнее. — Позвольте, позвольте! — сказал Ноздрев, — принеси-ка сюда шашечницу. — Напрасен труд.',
            'is_finished' => 0,
            'position_id' => 5,
            'adopted_at' => '2017-11-13 04:49:20',
            'password' => 'password',
            'role' => 'worker'
        ]);
        DB::table('users')->insert([
            'id' => 202,
            'login' => 'Christop_570',
            'name' => 'Самойлов Витольд Алексеевич',
            'email' => 'smertz@koss.com',
            'image' => 'http://test.atwinta.ru/storage/avatars/f14fdd71db3a845f633c10ddbafcd5c8.jpg',
            'about' => 'Видишь, какая дрянь! — Насилу дотащили, проклятые, я уже перелез вот в — действительности, но живых относительно законной формы, передать, — уступить или как вам заблагорассудится лучше? Но Манилов.',
            'is_finished' => 0,
            'position_id' => 7,
            'adopted_at' => '2017-12-03 04:49:20',
            'password' => 'password',
            'role' => 'worker'
        ]);
    }
}
