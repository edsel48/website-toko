<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ArimaChart
{
    protected $chart;

    protected $arima;
    protected $actual;
    protected $lr;
    protected $svr;

    protected $dates;

    public function __construct(LarapexChart $chart, $actual, $arima, $lr, $svr, $dates)
    {
        $this->chart = $chart;

        $this->actual = $actual;
        $this->arima = $arima;
        $this->lr = $lr;
        $this->svr = $svr;

        $this->dates = $dates;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Product Resource Management')
            ->setSubtitle('Actual Data vs Arima vs Linear Regression vs SVR')
            ->addData('Actual', $this->actual)
            ->addData('Arima', $this->arima)
            ->addData('Linear Regression', $this->lr)
            ->addData('SVR (Support Vector Regression)', $this->svr)
            ->setXAxis($this->dates);
    }
}
