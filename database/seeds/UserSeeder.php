<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
          'name' => 'Mas Tong',
          'username' => 'TFD',
          'email' => 'tfd@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Yuda',

          'username' => 'IGO',
          'email' => 'igo@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Niken',
          'username' => 'KEN',
          'email' => 'ken@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Raisa',
          'username' => 'KNA',
          'email' => 'kna@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Maudy',
          'username' => 'AUL',
          'email' => 'aul@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Cinta',
          'username' => 'RFT',
          'email' => 'rft@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Emily',
          'username' => 'VNY',
          'email' => 'vny@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Ilham',
          'username' => 'HAM',
          'email' => 'ham@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Amri',
          'username' => 'AHA',
          'email' => 'aha@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Dennis',
          'username' => 'DNN',
          'email' => 'dnn@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Abay',
          'username' => 'MAA',
          'email' => 'maa@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Bayu',
          'username' => 'BAY',
          'email' => 'bay@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Yadi',
          'username' => 'NCP',
          'email' => 'aul@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Reja',
          'username' => 'ZAK',
          'email' => 'zak@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Ikhsan',
          'username' => 'SAN',
          'email' => 'san@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Oji',
          'username' => 'OJI',
          'email' => 'oji@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Gewede',
          'username' => 'GWD',
          'email' => 'gwd@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Ajeng',
          'username' => 'NAJ',
          'email' => 'naj@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Mbah Gugun',
          'username' => 'NUB',
          'email' => 'nub@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);
    }
}
