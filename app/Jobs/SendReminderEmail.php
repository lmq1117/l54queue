<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;

class SendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        //
        $this->name = $name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        DB::table('email')->insert([
            'name'=>$this->name,
            'img'=>1,
            'sort'=>1
        ]);
    }
}
