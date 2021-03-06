<?php

namespace App\Models;

// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// LARAVEL
// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



use Carbon\Carbon;

class History extends Model
{
    use SoftDeletes;

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // VARIABLES
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    protected $table    = 'Inv_history';
    public $timestamps  = true;
    protected $fillable = [
        'no',
        'issued_at',
        'due_at',
        'billed_to',
        'issuer',
        'lines',
        'payment_option',
        'payment_terms',
        'is_send'
    ];

    protected $hidden = [
    ];

    protected $casts = [
        'billed_to'=>'array',
        'issuer'=>'array',
        'lines'=>'array',
        'payment_option'=>'array',
        'payment_terms'=>'array'

    ];

    protected $dates = [
        'issued_at',
        'deleted_at'
    ];

    protected $touches = [
    ];

    protected $dispatchesEvents = [

    ];





    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // BOOT
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // RELATIONSHIP
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // BOOT
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // STATIC FUNCTION
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // FUNCTION
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    public function getRules()
    {
        return [
            'name'       	=> ['required', 'string'],
            'period'      	=> ['required', 'numeric'],
            'published_at' 	=> ['nullable', 'date', 'after:now'],
        ];
    }

    public function getRelationships()
    {
        return [];
    }

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // ACCESSOR
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // MUTATOR
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    // QUERY
    // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

}
