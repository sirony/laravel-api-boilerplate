<?php

use Carbon\Carbon;

if (! function_exists('getMoneyFormat')) {
    /**
     * Helper to grab the application name.
     *
     * @return formated money amount
     */
    function getMoneyFormat($amount)
    {
        return [
            'raw' => $amount,
            'human' => number_format($amount, '2', '.', ',')
        ];
    }
}

if (! function_exists('getDateFormat')) {
    /**
     * Helper to grab the application name.
     *
     * @return getDateFormat money amount
     */
    function getDateFormat($raw_date, $format = "Y-m-d")
    {
        return [
            'raw' => $raw_date,
            'human' => Carbon::make($raw_date)->format($format )
        ];
    }
}