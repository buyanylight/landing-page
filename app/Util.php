<?php

namespace App;

class Util  {

	
	public static function assetUrl($asset) {
		return asset($asset).'?ver='.env('VERSION','0');
	}
	

}
