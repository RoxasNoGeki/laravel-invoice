<?php

namespace App\Events\Subscription;

/*===============================
=            LARAVEL            =
===============================*/
use Illuminate\Queue\SerializesModels;
/*=====  End of LARAVEL  ======*/

/*=============================
=            MODEL            =
=============================*/
use App\Models\Subscription as Model;
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
    public function __construct(Model $data = null, $when = 'now')
    {
        $this->data = $data;
        $this->when = \Carbon\Carbon::parse($when);
    }

    public function __get($x)
    {
        if ( $x == 'data' ) return $this->data;
        if ( $x == 'when' ) return $this->when;
    }
}
