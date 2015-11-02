<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        /*
          DB::table('users')->insert([
          'name' => 'Alvaro'
          ]);

          App/User::create([
          'name' => 'Alvaro'
          ]);

         */
        factory(App\User::class)->create([
            'name' => 'Alvaro',
            'email' => 'pastalvaro@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);
        factory(App\User::class, 49)->create();
    }

}
