<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

namespace App\Listeners;

use App\Events\AntrianSaving;
use Illuminate\Support\Str;

class AntrianSavingListener
{
    public function handle(AntrianSaving $event)
    {
        // Generate nilai unik untuk no_rekam_medis
        $event->antrian->no_rekam_medis = $this->generateUniqueNoRekamMedis();
    }

    protected function generateUniqueNoRekamMedis()
    {
        do {
            $noRekamMedis = Str::random(3); // Ubah sesuai dengan panjang yang diinginkan
        } while (\App\Models\Antrian::where('no_rekam_medis', $noRekamMedis)->exists());

        return $noRekamMedis;
    }
}
