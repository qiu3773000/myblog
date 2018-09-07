<?php

namespace App\Jobs;

use App\Models\Behavior;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class InsertBehaviorData extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $behavior = [];
    /**
     * Create a new job instance.
     * @param $behavior
     * @return void
     */
    public function __construct($behavior)
    {
        //
        $this->behavior = $behavior;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        Behavior::create($this->behavior);

    }


    public function failed()
    {
        Mail::raw('他妈的,好像延迟任务有问题,明天起床看看？', function ($m) {
            $m->to('1043935194@qq.com', '梦心缘星')->subject('好像延迟任务有问题');
        });
    }
}
