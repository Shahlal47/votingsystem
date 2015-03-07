<?php

use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('voters')->delete();

        $voters = array(
            ['id' => 1, 'votername' => 'Shahlal','voterid' => 1990112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'votername' => 'Kamal', 'voterid' => 1991112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'votername' => 'Jamal', 'voterid' => 1992112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'votername' => 'Pavel', 'voterid' => 1993112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'votername' => 'Farzana', 'voterid' => 1994112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'votername' => 'Jinia', 'voterid' => 1995112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'votername' => 'Janifar', 'voterid' => 1996112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'votername' => 'Mukta','voterid' => 1997112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'votername' => 'Farid', 'voterid' => 1998112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'votername' => 'Motiur', 'voterid' => 1999112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'votername' => 'Shahlal','voterid' => 2000112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'votername' => 'Kamal', 'voterid' => 2001112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'votername' => 'Jamal', 'voterid' => 2002112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'votername' => 'Pavel', 'voterid' => 2003112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'votername' => 'Farzana', 'voterid' => 2004112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'votername' => 'Jinia', 'voterid' => 2005112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 17, 'votername' => 'Janifar', 'voterid' => 2006112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 18, 'votername' => 'Shahlal','voterid' => 2007112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 19, 'votername' => 'Kamal', 'voterid' => 2008112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 20, 'votername' => 'Jamal', 'voterid' => 2009112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 21, 'votername' => 'Pavel', 'voterid' => 2010112612345, 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' => 22, 'votername' => 'Farzana', 'voterid' => 1989112612301, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 23, 'votername' => 'Jinia', 'voterid' => 1989112612302, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 24, 'votername' => 'Janifar', 'voterid' => 1989112612303, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 25, 'votername' => 'Shahlal','voterid' => 1989112612304, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 26, 'votername' => 'Kamal', 'voterid' => 1989112612305, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 27, 'votername' => 'Jamal', 'voterid' => 1989112612306, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 28, 'votername' => 'Pavel', 'voterid' => 1989112612307, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 29, 'votername' => 'Farzana', 'voterid' => 1989112612308, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 30, 'votername' => 'Jinia', 'voterid' => 1989112612309, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 31, 'votername' => 'Janifar', 'voterid' => 1989112612310, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 32, 'votername' => 'Shahlal','voterid' => 1989112612311, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 33, 'votername' => 'Kamal', 'voterid' => 1989112612312, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 34, 'votername' => 'Jamal', 'voterid' => 1989112612313, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 35, 'votername' => 'Pavel', 'voterid' => 1989112612314, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 36, 'votername' => 'Farzana', 'voterid' => 1989112612315, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 37, 'votername' => 'Jinia', 'voterid' => 1989112612316, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 38, 'votername' => 'Janifar', 'voterid' => 1989112612317, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 39, 'votername' => 'Shahlal','voterid' => 1989112612318, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 40, 'votername' => 'Kamal', 'voterid' => 1989112612319, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 41, 'votername' => 'Jamal', 'voterid' => 1989112612320, 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' => 42, 'votername' => 'Pavel', 'voterid' => 2001112612301, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 43, 'votername' => 'Farzana', 'voterid' => 2001112612302, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 44, 'votername' => 'Jinia', 'voterid' => 2001112612303, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 45, 'votername' => 'Janifar', 'voterid' => 2001112612304, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 46, 'votername' => 'Shahlal','voterid' => 2001112612305, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 47, 'votername' => 'Kamal', 'voterid' => 2001112612306, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 48, 'votername' => 'Jamal', 'voterid' => 2001112612307, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 49, 'votername' => 'Pavel', 'voterid' => 2001112612308, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 50, 'votername' => 'Farzana', 'voterid' => 2001112612309, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 51, 'votername' => 'Jinia', 'voterid' => 2001112612310, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 52, 'votername' => 'Janifar', 'voterid' => 2001112612311, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 53, 'votername' => 'Shahlal','voterid' => 2001112612312, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 54, 'votername' => 'Kamal', 'voterid' => 2001112612313, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 55, 'votername' => 'Jamal', 'voterid' => 2001112612314, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 56, 'votername' => 'Pavel', 'voterid' => 2001112612315, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 57, 'votername' => 'Farzana', 'voterid' => 2001112612316, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 58, 'votername' => 'Jinia', 'voterid' => 2001112612317, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 59, 'votername' => 'Janifar', 'voterid' => 2001112612318, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 60, 'votername' => 'Shahlal','voterid' => 2001112612319, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 61, 'votername' => 'Kamal', 'voterid' => 2001112612320, 'created_at' => new DateTime, 'updated_at' => new DateTime],

            ['id' => 62, 'votername' => 'Jamal', 'voterid' => 1988112612301, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 63, 'votername' => 'Pavel', 'voterid' => 1988112612302, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 64, 'votername' => 'Farzana', 'voterid' => 1988112612303, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 65, 'votername' => 'Jinia', 'voterid' => 1988112612304, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 66, 'votername' => 'Janifar', 'voterid' => 1988112612305, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 67, 'votername' => 'Shahlal','voterid' => 1988112612306, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 68, 'votername' => 'Kamal', 'voterid' => 1988112612307, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 69, 'votername' => 'Jamal', 'voterid' => 1988112612308, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 70, 'votername' => 'Pavel', 'voterid' => 1988112612309, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 71, 'votername' => 'Farzana', 'voterid' => 1988112612310, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 72, 'votername' => 'Jinia', 'voterid' => 1988112612311, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 73, 'votername' => 'Janifar', 'voterid' => 1988112612312, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 74, 'votername' => 'Shahlal','voterid' => 1988112612313, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 75, 'votername' => 'Kamal', 'voterid' => 1988112612314, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 76, 'votername' => 'Jamal', 'voterid' => 1988112612315, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 77, 'votername' => 'Pavel', 'voterid' => 1988112612316, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 78, 'votername' => 'Farzana', 'voterid' => 1988112612317, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 89, 'votername' => 'Jinia', 'voterid' => 1988112612318, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 80, 'votername' => 'Janifar', 'voterid' => 1988112612319, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('voters')->insert($voters);
    }

}