<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('candidates')->delete();

        $candidates = array(
            ['id' => 1, 'candidatename' => 'Baby', 'symbol' => 'Laptop', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'candidatename' => 'Arifa', 'symbol' => 'Mirror', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'candidatename' => 'Mim', 'symbol' => 'Candle', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'candidatename' => 'Fahad', 'symbol' => 'Mango', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('candidates')->insert($candidates);
    }

}
