<?php

namespace agusabas\LaravelMercadoPago\Providers;

use Illuminate\Support\ServiceProvider;
use agusabas\LaravelMercadoPago\MP2;

class MercadoPagoServiceProvider extends ServiceProvider 
{

	protected $mp_app_id;
	protected $mp_app_secret;

	public function boot()
	{
		
		$this->publishes([__DIR__.'/../config/mercadopago.php' => config_path('mercadopago.php')]);

		$this->mp_app_id     = config('mercadopago.app_id');
		$this->mp_app_secret = config('mercadopago.app_secret');
	}

	public function register()
	{
		$this->app->singleton('MP2', function(){
			return new MP2($this->mp_app_id, $this->mp_app_secret);
		});
	}
}
