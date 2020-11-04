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
            'flete' => json_encode([
                'beforeStart' => true,
                'afterEnd' => true,
            ]),
            'iva' => 80,
            'total' => 580,
            'coordinacion' => json_encode([
                [
                    'name' => 'coordinacion',
                    'cost' => 1000,
                    'checked' => false,
                    'quantity' => 1,
                    'subtotal' => 1000
                ],
                [
                    'name' => 'coordinacion',
                    'cost' => 1000,
                    'checked' => false,
                    'quantity' => 1,
                    'subtotal' => 1000
                ],
                [
                    'name' => 'coordinacion',
                    'cost' => 1000,
                    'checked' => false,
                    'quantity' => 1,
                    'subtotal' => 1000
                ]
            ]),
            'ctoOperacion' => 5450,
            'entretenimiento' => json_encode([
                'beforeStart' => true,
                'afterEnd' => true,
            ]),
            'finalDlrs' => 706,
            'group' => '3 B',
            'hotel' => "Hotel",
            'ivaDlrs' => 112.12,
            'ivaFinal' => 751.154,
            'mn' => 13414,
            'montaje' => "Montaje",
            'notas' => 'notas',
            'pax' => "Pax",
            'products' => json_encode([
                'beforeStart' => true,
                'afterEnd' => true,
            ]),
            'proveedores' => json_encode([
                'beforeStart' => true,
                'afterEnd' => true,
            ]),
            'subEntretainment' => 15.15,
            'subEquipment' => 15.15,
            'supOperacion' => 15.15,
            'subTotalDlrs' => 15.15,
            'subtotalFinal' => 15.15, 
            'totalDlrs' => 15.15,
            'totalIvaFinal' => 15.15, 
            'utilidad' => 15.15,
            'workforce' => json_encode([
                'beforeStart' => true,
                'afterEnd' => true,
            ]),
        ]);
    }
}
