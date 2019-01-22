<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'vinna',
                'email' => 'ni.chan63@gmail.com',
                'role' => 'staff',
                'tempat_lahir' => 'london',
                'tanggal_lahir' => NOW(),
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Miami',
                'no_telepon' => '08971283123',
                'status' => 'aktif',
                'password' => bcrypt('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'nama' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'role' => 'pendeta',
                'tempat_lahir' => 'California, USA',
                'tanggal_lahir' => NOW(),
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Florida',
                'no_telepon' => '0278312',
                'status' => 'aktif',
                'password' => bcrypt('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
        ]);
    }
}
