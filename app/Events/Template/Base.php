<?php

namespace App\Events\Template;

/*===============================
=            LARAVEL            =
===============================*/
use Illuminate\Queue\SerializesModels;
/*=====  End of LARAVEL  ======*/

/*=============================
=            MODEL            =
=============================*/
use App\Models\Template as Model;
/*=====  End of MODEL  ======*/

abstract class Base
{
    use SerializesModels;

    protected $data;
    public $when;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Model $data = null)
    {
        $this->data = $data;
    }

    public function __get($x)
    {
        if ( $x == 'data' ) return $this->data;
    }
}
