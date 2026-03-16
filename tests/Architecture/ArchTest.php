<?php

declare(strict_types=1);

arch('todos os arquivos usam strict types')
    ->expect('App')
    ->toUseStrictTypes();

arch('sem debug no código de produção')
    ->expect('App')
    ->not->toUse([
        'var_dump',
        'dd',
        'dump',
        'die'
    ]);

arch('controllers não acessam banco direto')
    ->expect('App\Controllers')
    ->not->toUse('PDO');
