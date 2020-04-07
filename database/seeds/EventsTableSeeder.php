<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'Prueba',
            'start' => "2020-02-27T06:00:00.000Z",
            'color' => json_encode([
                'primary' => '#EC1212',
            ]),
            'resizable' => json_encode([
                'beforeStart' => true,
                'afterEnd' => true,
            ]),
            'salon' => 'Aranjuez',
            'grupo' => '3 B',
            'cliente' => 'El alex Mejia',
            'gte_de_gpos' => 'Enrique Mendoza III',
            'pax' => 'pax',
            'montaje' => 'montaje',
            'notas' => 'notas',
            'equipment' => 150,
            'operation' => 200,
            'entertainment' => 150,
            'subtotal' => 500,
            'final' => 0,
            'iva' => 80,
            'total' => 580,
        ]);
    }
}
