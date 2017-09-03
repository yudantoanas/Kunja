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
        //
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Muhammad Ilham',
            'username' => 'HAM',
            'email' => 'milham939@gmail.com',
            'password' => bcrypt('asistenkece')
        ]);
        DB::table('users')->insert([
            'name' => 'Taufan Fadhilah Iskandar',
            'username' => 'TFD',
            'email' => 'tfd@daspro.com',
            'password' => bcrypt('asistenkece')
        ]);

        DB::table('users')->insert([
          'name' => 'Yudanto Anas Nugroho',
          'username' => 'IGO',
          'email' => 'igo@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);
    }
}
