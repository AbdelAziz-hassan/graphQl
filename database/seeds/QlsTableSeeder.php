<?php

use Illuminate\Database\Seeder;
use App\Ql;
class QlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ql::create([
            'name' => 'Name 1',
            'description' => 'Description Description Description Description Description',
            'color' => 'red',
            'info' => 'Info 1',
            'country' => 'Italy'
        ]);

        Ql::create([
            'name' => 'Name 2',
            'description' => 'Description2 Description2 Description2 Description2 Description2',
            'color' => 'blue',
            'info' => 'Info 2',
            'country' => 'France'
        ]);

        Ql::create([
            'name' => 'Name 3',
            'description' => 'Description3 Description3 Description3 Description3 Description3',
            'color' => 'green',
            'info' => 'Info 3',
            'country' => 'England'
        ]);

        Ql::create([
            'name' => 'Name 4',
            'description' => 'Description4 Description4 Description4 Description4 Description4',
            'color' => 'black',
            'info' => 'Info 4',
            'country' => 'Egypt'
        ]);

        Ql::create([
            'name' => 'Name 5',
            'description' => 'Description5 Description5 Description5 Description5 Description5',
            'color' => 'white',
            'info' => 'Info 5',
            'country' => 'KSA'
        ]);
    }
}
