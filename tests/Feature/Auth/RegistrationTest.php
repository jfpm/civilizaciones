<?php

use App\Providers\RouteServiceProvider;

test('Mostrar pantalla de registro', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('Nuevo usuario registrado en el sistema', function () {
    $response = $this->post('/register', [
        'name' => 'Test User',
        'email' => 'jhon.popo@correounivalle.edu.co',
        'password' => 'password',
        'password_confirmation' => 'password',
        'state' => true,
        'rol' => 1,
        'username' => 'sysadmin'
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(RouteServiceProvider::HOME);
});
