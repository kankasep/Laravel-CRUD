<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 20; $i++) {

            // insert data ke table profile menggunakan Faker
            DB::table('profile')->insert([
                'npm' => $faker->numberBetween($min = 17000000, $max = 18999999),
                'nama' => $faker->name,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->dateTimeBetween('1995-01-01', '2000-12-31'),
                'jenis_kelamin' => $faker->randomElement($array = array('Laki-laki', 'Perempuan')),
                'agama' => $faker->randomElement($array = array('Islam', 'Kristen Protestan', 'Kristen Katholik', 'Budha', 'Hindu')),
                'alamat' => $faker->address,
                'ponsel' => $faker->phoneNumber,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }
}
