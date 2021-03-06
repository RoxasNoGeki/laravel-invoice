<?php

namespace App\Models;

// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// LARAVEL
// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

use App\Events\User\Registering;
use App\Events\User\Saving;
use App\Events\User\Authenticating;
use Carbon\Carbon;
//use Tymon\JWTAuth\Contracts\JWTSubject;

//JWTSubject,
class User extends Authenticatable
{
    use Authorizable;
	// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	// VARIABLES
	// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

	protected $table    = 'AUTH_users';
	public $timestamps  = true;
	protected $fillable = [
		'uuid',
		'name', 
		'username',
		'password'
	];

	protected $hidden = [
	];

	protected $casts = [
	];

	protected $dates = [
		'username_verified_at',
	];

	protected $touches = [
	];

	protected $dispatchesEvents = [
        'creating' 	=> Registering::class,
        'saving'    => Saving::class,
    ];

    protected $observables = [

    ];

	/*=====================================
	=            CONFIGURATION            =
	=====================================*/
	/*=====  End of CONFIGURATION  ======*/
	


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
			'username'     	=> ['required', 'string', Rule::unique($this->table)->ignore($this->id)],
		];
	}

	public function getRelationships()
	{
		return [];
	}


    /**
	* Publish address & fire custom model event
	*
	*/


    /**
	* Publish address & fire custom model event
	*
	*/


    /**
	* Publish address & fire custom model event
	*
	*/


    /**
	* Publish address & fire custom model event
	*
	*/

    /**
	* Publish address & fire custom model event
	*
	*/

    public function authenticate($password)
    {
        event(new Authenticating($this));
       if(!app('hash')->check($password, $this->password)) {
            throw ValidationException::withMessages(['password' => ['mismatch']]);
        }
    }

	// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	// ACCESSOR
	// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	
	// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	// MUTATOR
	// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    public function setPasswordAttribute($value) {
        if (app('hash')->needsRehash($value)) {
            $value = app('hash')->make($value);
        }
        $this->attributes['password']	= $value;
    }

	// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	// QUERY
	// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

}
