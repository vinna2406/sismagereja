<?php

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
        	[
        		'user_id' => 1,
        		'nama' => 'Reus Samarantaka',
        		'tempat_lahir' => 'Bogor, Cimahi',
        		'tanggal_lahir' => '1997-11-11',
        		'jenis_kelamin' => 'Laki-laki',
        		'alamat' => 'Jl. Kesatrean, Gianyar, Bali',
        		'no_telepon' => '0891238123',
        		'nama_ayah' => 'Samarantaka Reis',
        		'nama_ibu' => 'Samarantika Rois',
                'nm_anggota_keluarga' => 'Ridwan',
        		'notlp_keluarga' => '0891238123',
        		'status_keluarga' => 'Anak',
        		'status' => 'aktif',
        		'foto' => null,
        		'status_baptis' => 'tidak_ada',
        		'created_at' => now(),
        		'updated_at' => now()
        	]
        ]);
    }
}
