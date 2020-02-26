<?php
namespace xixha\Listeners;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
class SuccessfulLogin{
    public function __construct(){
    } 
 
    public function handle(Login $event){
        $event->user->last_login = new DataTime;
        $event->user->save();
    }
}