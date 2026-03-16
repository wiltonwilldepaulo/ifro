<?php

declare(strict_types=1);

final class AlunoFactory
{
    public function __construct(
        private readonly Generator $faker
    ) {}

    public function make(array $dados = []): Aluno
    {
        return new Aluno(
            nome: $dados['nome'] ?? $this->faker->name(),
            cpf: $dados['cpf']  ?? $this->faker->cpf(false),
            matricula: $dados['mat']  ?? $this->faker->numerify('2025######'),
            email: $dados['email'] ?? $this->faker->safeEmail(),
        );
    }
}
