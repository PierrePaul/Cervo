<?php

/**
 * This file is part of the Cervo package.
 *
 * Copyright (c) 2010-2018 Nevraxe inc. & Marc André Audet <maudet@nevraxe.com>.
 *
 * @package   Cervo
 * @author    Marc André Audet <maaudet@nevraxe.com>
 * @copyright 2010 - 2018 Nevraxe inc. & Marc André Audet
 * @license   See LICENSE.md  BSD-2-Clauses
 * @link      https://github.com/Nevraxe/Cervo
 * @since     5.0.0
 */

namespace Cervo\Utils;

/**
 * Cervo provider interface.
 *
 * @author Marc André Audet <maudet@nevraxe.com>
 */
final class ClassUtils
{
    /**
     * Verify if a Class implement an Interface.
     *
     * @param string $class The name of the Class that implements the Interface
     * @param string $interface The Interface to check against
     *
     * @return bool
     */
    public static function implements(string $class, string $interface): bool
    {
        try {

            $reflection = new \ReflectionClass($class);
            return $reflection->implementsInterface($interface);

        } catch (\ReflectionException $e) {
            return false;
        }
    }
}
