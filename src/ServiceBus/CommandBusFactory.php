<?php
/*
 * This file is part of the prooph/proophessor.
 * (c) 2014-2015 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 30.10.14 - 16:07
 */

namespace Prooph\Proophessor\ServiceBus;

/**
 * Class CommandBusFactory
 *
 * @package Prooph\Proophessor\ServiceBus
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
class CommandBusFactory extends AbstractBusFactory
{

    /**
     * @return string
     */
    protected function getBusClass()
    {
        return 'Prooph\ServiceBus\CommandBus';
    }

    /**
     * Return config key used within the prooph.psb config namespace to define utils list for the bus.
     *
     * @return string
     */
    protected function getConfigKey()
    {
        return 'command_bus';
    }
}
 