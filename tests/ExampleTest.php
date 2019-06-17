<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test()
    {
        $this->visit('/')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }

    public function test2()
    {
        $this->visit('/home')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }

    public function test3()
    {
        $this->visit('/compras/proveedor')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }
    public function test4()
    {
        $this->visit('/compras/proveedor')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }

    public function test5()
    {
        $this->visit('/compras/proveedor/index')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }

    public function test6()
    {
        $this->visit('/compras/proveedor/create')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }
    public function test7()
    {
        $this->visit('/compras/proveedor/edit')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }
    public function test8()
    {
        $this->visit('/compras/proveedor/modal')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }
    public function test9()
    {
        $this->visit('/compras/proveedor/search')
             ->see('Laravel 5');
             $this->get('/home')
             ->assertStatus(200)
             ->assertSee('Usuarios');             
    }
    public function test10()
    {
        $this->visit('/compras/proveedor/show')
             ->see('Laravel 5');
        
        $this->get('/home')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }
}
