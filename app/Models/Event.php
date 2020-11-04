<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'start',
        'color',
        'draggable',
        'resizable',
        'products',
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
        'total',
        'provider_name',
        'material_name',
        'material_qty',
        'costo_unitario',
        'flete',
        'mano_de_obra',
        'hotel',
        'comision',
        'comisionFinal',
        'coordinacion',
        'ctoOperacion',
        'entretenimiento',
        'finalDlrs',
        'group',
        'ivaDlrs',
        'ivaFinal',
        'mn',
        'proveedores',
        'subEntretainment',
        'subEquipment',
        'supOperacion',
        'subTotalDlrs',
        'subtotalFinal',
        'totalDlrs',
        'totalIvaFinal',
        'utilidad',
        'workforce',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    /**
     * Value Attribute
     *
     * @param  string  $value
     * @return json
     */
    public function getColorAttribute($value)
    {
        return json_decode($value);
    }

     /**
     * Value Attribute
     *
     * @param  string  $value
     * @return json
     */
    public function getResizableAttribute($value)
    {
        return json_decode($value);
    }

    /**
     * Value Attribute
     *
     * @param  string  $value
     * @return json
     */
    public function getMaterialQtyAttribute($value)
    {
        return json_decode($value);
    }

    /**
     * Value Attribute
     *
     * @param  string  $value
     * @return json
     */
    public function getProductsAttribute($value)
    {
        return json_decode($value);
    }

    /**
     * Value Attribute
     *
     * @param  string  $value
     * @return json
     */
    public function getStartAttribute($value)
    {
        $dt = Carbon::createFromDate($value);
        return $dt->toISOString(); 
    }

    /**
     * Cost Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getEquipmentAttribute($value)
    {
        return floatval($value);
    }

    /**
     * Cost Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getOperationAttribute($value)
    {
        return floatval($value);
    }

     /**
     * Cost Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getEntertainmentAttribute($value)
    {
        return floatval($value);
    }

    /**
     * Cost Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getSubtotalAttribute($value)
    {
        return floatval($value);
    }

    /**
     * Cost Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getFinalAttribute($value)
    {
        return floatval($value);
    }

    /**
     * Cost Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getIvaAttribute($value)
    {
        return floatval($value);
    }

    /**
     * Cost Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getTotalAttribute($value)
    {
        return floatval($value);
    }

    /**
     * Costo Unitario Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getCostoUnitarioAttribute($value)
    {
        return floatval($value);
    }

    /**
     * Costo Unitario Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getFleteAttribute($value)
    {
        return floatval($value);
    }

    /**
     * Costo Unitario Attribute
     *
     * @param  string  $value
     * @return float
     */
    public function getManoDeObraAttribute($value)
    {
        return floatval($value);
    }
}
