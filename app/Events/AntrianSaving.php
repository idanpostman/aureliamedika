<?php

namespace App\Events;

use App\Models\Antrian;
use Illuminate\Queue\SerializesModels;

class AntrianSaving
{
    use SerializesModels;

    public $antrian;

    public function __construct(Antrian $antrian)
    {
        $this->antrian = $antrian;
    }
}
