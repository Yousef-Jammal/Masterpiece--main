<?php

use Carbon\Carbon;

if (!function_exists('getAfterDate')) {
    /**
     * Get formatted date after a specified number of days.
     *
     * @param int $days
     * @return string
     */
    function getAfterDate(int $days): string
    {
        return Carbon::now()->addDays($days)->format('d M, l');
    }
}
