<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            DB::table('perpustakaans')->insert([
                'judul' => 'petualangan kronjonian warrior',
                'pengarang' => 'kronjo',
                'penerbit' => 'kronjo',
                'ISBN' => '1234567890',
                'tahun_terbit' => '2021',
                'jumlah_buku' => '10',
                'tanggal_dipinjam' => '2021-07-12',
                'tanggal_dikembalikan' => '2021-07-12',
                'status' => 'Dipinjam',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]);
    }
}
