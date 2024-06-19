<?php

namespace App\Enums;

enum TransactionStatus : int 
{
    case PAID = 1;
    case PENDING = 2;
    case FAILED = 3;
    case CANCELED = 0;
}