<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// make fake note data
        \App\Models\Note::factory()->count(30)->create(); 
    }
}
