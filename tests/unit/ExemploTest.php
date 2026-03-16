<?php

declare(strict_types=1);

it('calcula matrícula corretamente', function () {
    $calc = new Calculadora();

    expect($calc->calcularNota(8.5, 7.0))
        ->toBe(7.75)
        ->toBeFloat();
});

it('rejeita nota acima de 10', function () {
    expect(fn() => new Nota(11))
        ->toThrow(InvalidArgumentException::class);
});
