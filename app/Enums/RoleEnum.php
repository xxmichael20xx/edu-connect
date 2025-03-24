<?php

namespace App\Enums;

class RoleEnum extends BaseEnum
{
    public const CENTRAL_ADMIN = 'central-admin';

    /**
     * Return the central admin role as strong for middleware
     *
     * @return string
     */
    public static function centralAdminRole(): string
    {
        return 'role:' . self::CENTRAL_ADMIN;
    }
}
