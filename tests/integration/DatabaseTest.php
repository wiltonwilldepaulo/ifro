<?php

declare(strict_types=1);

it('salva e recupera aluno no PostgreSQL', function () {
    $factory = new AlunoFactory(faker());
    $aluno   = $factory->make();

    // salva via repositório real
    app(AlunoRepository::class)->salvar($aluno);

    // busca do banco real
    $resultado = app(AlunoRepository::class)
        ->buscarPorCpf($aluno->cpf);

    expect($resultado->nome)
        ->toBe($aluno->nome);
})->group('integration'); // tag: só roda com DB