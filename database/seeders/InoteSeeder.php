<?php

namespace Database\Seeders;

use App\Models\INote;
use Illuminate\Database\Seeder;

class InoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inote = new INote();
        $inote->name = 'Nam';
        $inote->note = 'Làm xong';
        $inote->save();
    }
}
