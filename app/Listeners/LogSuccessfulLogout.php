<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\LogsModel;

class LogSuccessfulLogout
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
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        $user_id = $event->user->id;
        $user_ip = $this->request->ip();
        $current_time = Carbon::now();

        $saveLog = LogsModel::where('user_id', '=', $user_id)->whereNull('logout_at')->latest()->first();
        // dd($saveLog);
        $saveLog->status                = 0;
        $saveLog->logout_at             = $current_time;
        $saveLog->session_online        = $current_time->diffInMinutes($saveLog->created_at);

        $saveLog->save();
        // dd($saveLog->session_online);
    }
}
