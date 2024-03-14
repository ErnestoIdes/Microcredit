<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Loan;

class DisbursementsChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {

        //Loans

        // January
        $januaryCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 1)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // February
        $februaryCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 2)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // March
        $marchCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 3)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // April
        $aprilCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 4)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // May
        $mayCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 5)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // June
        $juneCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 6)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // July
        $julyCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 7)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // August
        $augustCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 8)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // September
        $septemberCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 9)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // October
        $octoberCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 10)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // November
        $novemberCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 11)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // December
        $decemberCivilServants = Loan::where('state','approved')->where('type',"=",'Loan')->whereMonth('created_at', '=', 12)->whereYear('created_at', '=', date('Y'))->sum('amount');
     
        


        // Simulation

        // January
        $januaryAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 1)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // February
        $februaryAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 2)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // March
        $marchAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 3)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // April
        $aprilAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 4)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // May
        $mayAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 5)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // June
        $juneAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 6)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // July
        $julyAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 7)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // August
        $augustAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 8)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // September
        $septemberAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 9)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // October
        $octoberAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 10)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // November
        $novemberAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 11)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // December
        $decemberAuto = Loan::where('state','approved')->where('type',"=",'Simulation')->whereMonth('created_at', '=', 12)->whereYear('created_at', '=', date('Y'))->sum('amount');
       
        




        // Private Loans

        // January
        $januaryPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 1)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // February
        $februaryPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 2)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // March
        $marchPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 3)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // April
        $aprilPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 4)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // May
        $mayPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 5)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // June
        $junePrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 6)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // July
        $julyPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 7)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // August
        $augustPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 8)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // September
        $septemberPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 9)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // October
        $octoberPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 10)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // November
        $novemberPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 11)->whereYear('created_at', '=', date('Y'))->sum('amount');
        
        // December
        $decemberPrivate = Loan::where('state','approved')->where('type',"=",3)->whereMonth('created_at', '=', 12)->whereYear('created_at', '=', date('Y'))->sum('amount');
        




        return $this->chart->lineChart()
            ->setTitle('Disbursements '.date('F Y'))
            ->setSubtitle('Civil Servants, Private Sector & Auto Loans')
            ->addData('Civil Servants', [$januaryCivilServants, $februaryCivilServants, $marchCivilServants, $aprilCivilServants, $mayCivilServants, $juneCivilServants,$julyCivilServants, $augustCivilServants, $septemberCivilServants, $octoberCivilServants, $novemberCivilServants, $decemberCivilServants])
            ->addData('Private Sector', [$januaryAuto, $februaryAuto, $marchAuto, $aprilAuto, $mayAuto, $juneAuto,$julyAuto, $augustAuto, $septemberAuto, $octoberAuto, $novemberAuto, $decemberAuto])
            ->addData('Auto Based', [$januaryPrivate, $februaryPrivate, $marchPrivate, $aprilPrivate, $mayPrivate, $junePrivate,$julyPrivate, $augustPrivate, $septemberPrivate, $octoberPrivate, $novemberPrivate, $decemberPrivate])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June','July', 'August', 'Sept', 'Oct', 'Nov', 'December']);
    }
}
