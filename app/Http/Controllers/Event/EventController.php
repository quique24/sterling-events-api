<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response()->json(Event::all(), 200);
    }

    /**
     * Display one field of the current resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return response()->json($event, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::beginTransaction();
        try {
            $event = new Event();
            $event->title = $request->title;
            $event->start = $request->start;
            $event->color = json_encode($request->color);
            $event->resizable = json_encode($request->resizable);
            $event->products = json_encode($request->products);
            $event->total = $request->total;
            $event->salon = $request->salon;
            $event->grupo = $request->grupo;
            $event->cliente = $request->cliente;
            $event->gte_de_gpos = $request->gte_de_gpos;
            $event->pax = $request->pax;
            $event->montaje = $request->montaje;
            $event->notas = $request->notas;
            $event->equipment = $request->equipment;
            $event->operation = $request->operation;
            $event->entertainment = $request->entertainment;
            $event->subtotal = $request->subtotal;
            $event->final = $request->final;
            $event->iva = $request->iva;
            $event->provider_name = $request->provider_name;
            $event->material_name = $request->material_name;
            $event->material_qty = json_encode($request->material_qty);
            $event->costo_unitario = $request->costo_unitario;
            $event->flete = $request->flete;
            $event->mano_de_obra = $request->mano_de_obra;
            $event->save();
             
            \DB::commit();
            return response()->json($event, 200);
        } catch (\Exception $exception) {
            \DB::rollback();
            return response()->json($exception->getMessage(), 404);
        }
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Event $event, Request $request)
    {
        $event->update($request->only([
            'title', 
            'start', 
            'total',
            'salon',
            'grupo',
            'cliente',
            'gte_de_gpos', 
            'pax',           
            'montaje', 
            'notas', 
            'equipment', 
            'operation', 
            'entertainment', 
            'subtotal', 
            'final',  
            'iva',            
            'provider_name', 
            'material_name', 
            'costo_unitario', 
            'flete', 
            'mano_de_obra', 
            ]));
        $event->update([
            "color" => json_encode($request->color),
            "resizable" => json_encode($request->resizable),
            "products" => json_encode($request->products),
            "material_qty" => json_encode($request->material_qty),
        ]);
        return response()->json($event, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     *  @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return response()->json('Success', 200);
    }
}
