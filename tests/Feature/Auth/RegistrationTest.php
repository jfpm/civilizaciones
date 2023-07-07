<?php

use App\Providers\RouteServiceProvider;

test('registration screen can be rendered', function () {
    $response = $this->get('/register');

    $response->assertStatus(200);
});

test('new users can register', function () {
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
