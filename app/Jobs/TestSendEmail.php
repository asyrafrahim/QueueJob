<?php

namespace App\Jobs;

use App\Jobs\TestSendEmail;
use App\Mail\TestHelloEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\Mail

class TestSendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

class TestSendEmail implements ShouldQueue{

    public function __construct(){
        //
    }

    public function handle(){
         $email = new TestHelloEmail();
        Mail::to('johndoe@tests.com')->send($email);
    }
}
