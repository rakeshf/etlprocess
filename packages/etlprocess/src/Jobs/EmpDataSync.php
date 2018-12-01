<?php

namespace Aspiration\Etlprocess\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Carbon\Carbon;
use DB;
use Storage;

class EmpDataSync implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://dev-payemp.pantheonsite.io/export');
        $res->getStatusCode();
        $res->getHeaderLine('content-type');
        $data = $res->getBody();
        $mytime = Carbon::now();
        $filename = 'empdata-' . $mytime->format('Y-m-d_H:i:s') . '.json';
        Storage::disk('local')->put($filename, $data);
        //print_r(\GuzzleHttp\json_decode($data, true));
        echo "from jobs done!!!!";
    }
}
