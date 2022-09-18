<?php

namespace App\Enums;

enum UserStatus: string
{
    case GUEST   = 'guest';
    case MEMBER = 'menmber';
    case VIP     = 'vip';

    public function showStatus()
    {
        return 'your status is ' . $this->value . ' !!';
    }
}
