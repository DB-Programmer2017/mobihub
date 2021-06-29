<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\LogsModel;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @param  Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user_id = $event->user->id;
        $user_ip = $this->request->ip();
        $current_time = Carbon::now();
        
        $saveLog = LogsModel::create([
            'user_id' => $user_id,
            'user_ip' => $user_ip,
            'created_at' => $current_time,
            'updated_at' => $current_time,
        ]);
        // dd($saveLog);
        // dd(Carbon::parse($saveLog->created_at));
    }
}
