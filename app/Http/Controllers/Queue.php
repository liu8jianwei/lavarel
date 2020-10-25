<?php

namespace App\Http\Controllers;

use App\Jobs\Queue as JobsQueue;
use Illuminate\Http\Request;

class Queue extends Controller
{
    /**
     * 使用队列插入数据
     *
     * @return string
     */
    public function index(Request $request)
    {
        $this->dispatch(new JobsQueue($request));
        return 'success';
    }

    /**
     * 直接插入数据
     *
     * @return string
     */
    public function insert()
    {
        sleep(2);
        // $user = new User();
        // $user->insert(['user_name' => rand(100000, 999999)]);
        return 'success';
    }
}
