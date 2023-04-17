<?php

declare(strict_types=1);

namespace Yiisoft\Data\Db\FilterHandler;

use Yiisoft\Data\Db\Filter\ILike;

final class ILikeHandler extends CompareHandler
{
    public function getOperator(): string
    {
        return ILike::getOperator();
    }
}
