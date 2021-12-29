<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;

class AddTasksCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:add_tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ADD TASkS';

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
        $users = User::all();
        foreach($users as $user){
            $timetables = $user->timetables()->get();
            foreach($timetables as $timetable){
                if($timetable->week_count == date('w')){
                    $user->tasks()->create([
                        'lesson_id' => $timetable->lesson_id,
                        'user_id' => $user->id,
                    ]);
                }
            }
        }
    }
}
