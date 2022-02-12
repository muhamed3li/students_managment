<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Payment;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class MoneyMonthChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $arr = [];
        $total = 0;
        for($i = 1; $i <= 12; $i++)
        {
            $data = Payment::whereMonth('pay_from',"$i")->get();
            foreach($data as $payment)
            {
                $total += $payment->total;
            }
            $arr []= $total;
            $total = 0;
        }
        return Chartisan::build()
            ->labels(['January', 'February','March','April','May','June','July','August','September','October','November','December'])
            ->dataset('Sample 1', $arr);
    }
}