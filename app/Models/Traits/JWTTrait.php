<?php

namespace App\Models\Traits;

use Firebase\JWT\JWT;
use Carbon\Carbon;

/**
 * Trait JWT
 *
 * Digunakan untuk initizialize JWT mode
 *
 * @package    TTagihan
 * @author     C Mooy <chelsymooy1108@gmail.com>
 */
trait JWTTrait {
 	 	
	public function getJWTTokenAttribute(){
		$key 	= config()->get('auth.jwt_key');
		$token 	= array(
		    "iss" 	=> env('APP_URL', ''),
		    "aud" 	=> env('APP_URL', ''),
			'iat' 	=> Carbon::now()->timestamp,
			'exp' 	=> Carbon::now()->addMinutes(config()->get('auth.jwt_exp'))->timestamp,
			'id'	=> $this->id,
			'name'	=> $this->name
		);
		$jwt_token = JWT::encode($token, $key);

		return $jwt_token;
	}
}
