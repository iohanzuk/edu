<?php

namespace App\Domain\Enums;
use BenSampo\Enum\Enum;

final class ClientTypeEnum extends Enum
{
    const ALUNO             = 1;
    const RESPONSAVEL       = 2;
    const ALUNO_RESPONSAVEL = 3;
}