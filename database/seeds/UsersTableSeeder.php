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
                'nama' => 'Vinna Dwina',
                'email' => 'ni.chan63@gmail.com',
                'role' => 'staff',
                'tempat_lahir' => 'Banyuwangi',
                'tanggal_lahir' => '1994-06-24',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Dalung Permai YY/130',
                'no_telepon' => '082230906515',
                'status' => 'aktif',
                'foto' => null,
                'password' => bcrypt('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'nama' => 'Timotius Deddy Usman',
                'email' => 'deddyusman@gmail.com',
                'role' => 'staff',
                'tempat_lahir' => 'Banyuwangi',
                'tanggal_lahir' => '1995-02-17',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Tuban 9A/100',
                'no_telepon' => '082112556334',
                'status' => 'aktif',
                'foto' => null,
                'password' => bcrypt('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
            [
                'nama' => 'Johan Albertus',
                'email' => 'johan@gmail.com',
                'role' => 'pendeta',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1964-11-11',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jimbaran D3/23',
                'no_telepon' => '082783121334',
                'status' => 'aktif',
                'foto' => null,
                'password' => bcrypt('123456'),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ],
        ]);
    }
}
