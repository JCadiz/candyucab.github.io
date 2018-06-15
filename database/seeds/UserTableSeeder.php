<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('candyucabadmin')
        ]);

         $admin->assignRole('admin');

         $vendedor= User::create([
            'name' => 'vendedor',
            'email' => 'vendedor@gmail.com',
            'password' => bcrypt('candyucabvendedor')
        ]);

         $vendedor->assignRole('vendedor');

         $gerente= User::create([
            'name' => 'gerente',
            'email' => 'gerente@gmail.com',
            'password' => bcrypt('candyucabgerente')
        ]);

         $gerente->assignRole('gerente');

         $owner= User::create([
            'name' => 'owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('candyucabowner')
        ]);

         $owner->assignRole('dueño');

            /* forma de generar usuarios falsos en modo de desarrollo
        factory(App\User::class, 10)->create()->each(function($user){
            $user->posts()->save(factory(App\Post::class)->make());
        }); */

    }
}
