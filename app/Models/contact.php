<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    /**
     * @var what 'Здесь пишется документация'
     */
    private $email;
    /**
     * @var mixed
     */
    private $subject;
    /**
     * @var mixed
     */
    private $message;
}
