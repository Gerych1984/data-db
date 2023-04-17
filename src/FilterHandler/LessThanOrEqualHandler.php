<?php

declare(strict_types=1);

namespace Yiisoft\Data\Db\FilterHandler;

use Yiisoft\Data\Db\Filter\LessThanOrEqual;

final class LessThanOrEqualHandler extends CompareHandler
{
    public function getOperator(): string
    {
        return LessThanOrEqual::getOperator();
    }
}
