<?php
namespace PRayno\MoveOnApiBundle;

use PRayno\MoveOnApiBundle\DependencyInjection\PRaynoMoveOnApiExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PRaynoMoveOnApiBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new PRaynoMoveOnApiExtension();
        }
        return $this->extension;
    }
}