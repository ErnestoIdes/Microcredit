<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;
class RegisteredUsersChart
{
    protected $users;

    public function __construct(LarapexChart $users)
    {
        $this->users = $users;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {

        // Civil Servants

        // January
        $januaryUsers = User::whereMonth('created_at', '=', 1)->whereYear('created_at', '=', date('Y'))->count();
        
        // February
        $februaryUsers = User::whereMonth('created_at', '=', 2)->whereYear('created_at', '=', date('Y'))->count();
        
        // March
        $marchUsers = User::whereMonth('created_at', '=', 3)->whereYear('created_at', '=', date('Y'))->count();
        
        // April
        $aprilUsers = User::whereMonth('created_at', '=', 4)->whereYear('created_at', '=', date('Y'))->count();
        
        // May
        $mayUsers = User::whereMonth('created_at', '=', 5)->whereYear('created_at', '=', date('Y'))->count();
        
        // June
        $juneUsers = User::whereMonth('created_at', '=', 6)->whereYear('created_at', '=', date('Y'))->count();
        
        // July
        $julyUsers = User::whereMonth('created_at', '=', 7)->whereYear('created_at', '=', date('Y'))->count();
        
        // August
        $augustUsers = User::whereMonth('created_at', '=', 8)->whereYear('created_at', '=', date('Y'))->count();
        
        // September
        $septemberUsers = User::whereMonth('created_at', '=', 9)->whereYear('created_at', '=', date('Y'))->count();
        
        // October
        $octoberUsers = User::whereMonth('created_at', '=', 10)->whereYear('created_at', '=', date('Y'))->count();
        
        // November
        $novemberUsers = User::whereMonth('created_at', '=', 11)->whereYear('created_at', '=', date('Y'))->count();
        
        // December
        $decemberUsers = User::whereMonth('created_at', '=', 12)->whereYear('created_at', '=', date('Y'))->count();
     
        

        return $this->users->lineChart()
            ->setTitle('Registered Users ' .date('Y'))
            ->setSubtitle('Monthly Registered Users')
            ->addData('registered users', [$januaryUsers, $februaryUsers, $marchUsers, $aprilUsers, $mayUsers, $juneUsers,$julyUsers, $augustUsers, $septemberUsers, $octoberUsers, $novemberUsers, $decemberUsers])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June','July', 'August', 'Sept', 'Oct', 'Nov', 'December']);
    }
}
