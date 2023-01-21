<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Order;
use Carbon\Carbon;

class UpdateActiveOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:active-order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the active column of orders to true, when the start time is less than or equal to the current time and end time is greater';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $orders = Order::where('start', '<=', Carbon::now())->where('active', false)->get();
        foreach ($orders as $order) {
            $order->active = true;
            $order->save();
        }

        $endedOrders = Order::where('end', '<=', Carbon::now())->where('ended', false)->get();
        foreach ($endedOrders as $order) {
            $order->active = false;
            $order->ended = true;
            $order->save();
        }
        
        return Command::SUCCESS;
    }
}
