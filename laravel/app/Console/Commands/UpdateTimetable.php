<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;
use Carbon\Carbon;

class UpdateTimetable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:update_timetable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '時間割更新';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        Carbon::setWeekStartsAt(Carbon::MONDAY);
        $dt = Carbon::today();

        $users = User::all();
        foreach($users as $user){
            $timetables = $user->timetables()->get();
            foreach($timetables as $timetable){
                $user->timetables()->findOrFail($timetable->id)->update([
                    'start' => Carbon::parse($timetable->start)->addDays(7)->toDateString()  . ' ' . explode(' ', $timetable->start)[1],
                    'end' => Carbon::parse($timetable->end)->addDays(7)->toDateString() . ' ' . explode(' ', $timetable->end)[1],
                ]);
            }
        }
    }
}
