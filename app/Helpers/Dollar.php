<?php

namespace App\Helpers;

class Dollar {
	public static function display($exp){
		$exp 	= $exp*1;
		if($exp >= 1000000){
	        $mon    = $exp/1000000;
	        return (string)number_format($mon,0,",",".").'MIO';
	    }elseif($exp >= 1000){
	        $mon    = $exp/1000;
	        return (string)number_format($mon,0,",",".").'K';
	    }elseif($exp == 0){
	        return 'FREE';
	    }
	    return (string)$exp;
	}
}
