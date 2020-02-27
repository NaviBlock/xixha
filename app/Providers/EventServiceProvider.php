<?php

namespace xixha\Providers;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider{
    protected $listen = [
        'xixha\Events\SomeEvent' => [
            'xixha\Listeners\EventListener',
        ],
    ];
    public function boot(DispatcherContract $events){
        parent::boot($events);
    }
}