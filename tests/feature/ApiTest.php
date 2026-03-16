<?php

declare(strict_types=1);

it('GET /alunos retorna lista com status 200', function () {
    $response = $this->get('/alunos');

    expect($response)
        ->status()->toBe(200)
        ->and($response)->json('data')
        ->toBeArray()
        ->not->toBeEmpty();
});

it('POST /alunos sem body retorna 422', function () {
    $response = $this->postJson('/alunos', []);

    expect($response->status())->toBe(422);
});
