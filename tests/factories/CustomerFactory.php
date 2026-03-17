<?php

declare(strict_types=1);

final class CustomerFactory
{
    public function __construct(
        private readonly Generator $faker
    ) {}

    public function make(array $dados = []): Customer
    {
        return new Customer(
            nome: $dados['nome'] ?? $this->faker->name(),
            cpf: $dados['cpf']  ?? $this->faker->cpf(false),
            matricula: $dados['mat']  ?? $this->faker->numerify('2025######'),
            email: $dados['email'] ?? $this->faker->safeEmail(),
        );
    }
}
