<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniqueCode extends Model
{
    use HasFactory;

    public function generate($var)
    {
        switch ($var) {
            case 'p':
                $code = 'PID-' . mt_rand(10000, 99999);
                return $code;
                break;

            case 't':
                $code = 'TID-' . mt_rand(10000, 99999);
                return $code;
                break;

            case 'c':
                $code = 'CID-' . mt_rand(10000, 99999);
                return $code;
                break;
            default:
                $code = 'ID-' . mt_rand(10000, 99999);
                return $code;
                break;
        }
    }
}
