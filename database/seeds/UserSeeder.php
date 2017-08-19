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
        User::create([
          'name' => 'Taufan Fadhilah Iskandar',
          'username' => 'TFD',
          'email' => 'tfd@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);

        User::create([
          'name' => 'Yudanto Anas Nugroho',
          'username' => 'IGO',
          'email' => 'igo@daspro.com',
          'password' => bcrypt('asistenkece')
        ]);
    }
}
