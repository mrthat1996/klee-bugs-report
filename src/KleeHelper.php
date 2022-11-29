<?php

namespace Mrthat1996\KleeBugsReport;

use Illuminate\Support\Facades\Http;

class KleeHelper
{
    public function log($message, array $data)
    {
        try {
            Http::withHeaders([
                'klee-auth' => config('klee_bugs_report.token')
            ])->post(config('klee_bugs_report.endpoint'), [
                'message' => $message,
                'data'    => json_encode($data),
                'env'     => config('app.env')
            ]);
        } catch (\Exception $e) {

        }
    }
}