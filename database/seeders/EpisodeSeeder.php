<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Episode;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eps = [
            16, 16, 16, 20, 21, 16, 20, 16, 16, 20,     //Drama
            39, 24, 20, 25, 30, 24, 25, 33,             //Kids
            45, 30, 35, 20, 45, 45, 36, 84, 67, 28      //TV Show
        ];
        for($i=1;$i<=28;$i++){
            for($j=1;$j<=$eps[$i-1];$j++){
                Episode::create([
                    'movie_id' => $i,
                    'episode' => $j,
                    'title' => 'Episode '.$j
                ]);
            }
        }

        // for($i=1;$i<=12;$i++){
        //     for($j=1;$j<=20;$j++){
        //         Episode::create([
        //             'movie_id' => $i,
        //             'episode' => $j,
        //             'title' => 'Episode '.$j
        //         ]);
        //     }
        // }
    }
}
