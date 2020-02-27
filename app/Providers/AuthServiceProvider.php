<?php

namespace xixha\Providers;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider{
    protected $policies = [
        'xixha\Model' => 'xixha\Policies\ModelPolicy',
    ];
    public function boot(GateContract $gate){
        $this->registerPolicies($gate);
    }
}