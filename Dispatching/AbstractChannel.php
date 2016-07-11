<?php

namespace Modera\NotificationBundle\Dispatching;

/**
 * @author    Sergei Lissovski <sergei.lissovski@modera.org>
 * @copyright 2016 Modera Foundation
 */
abstract class AbstractChannel implements ChannelInterface
{
    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}
