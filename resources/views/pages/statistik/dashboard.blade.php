@extends('layouts.layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <!-- Card Chart -->
    <section>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <x-card-basic class="" title="Grafik Pemesanan">
                    <x-slot name="floatRight"></x-slot>
                    <div class="height-300">
                        <canvas id="bar-chart"></canvas>
                    </div>
                </x-card-basic>
            </div>
        </div>
    </section>
    <!--/ Card Chart -->
@endsection

@section('js')
    <script src="{{ asset('app-assets/vendors/js/charts/chart.min.js') }}"></script>
    <script>
        var $primary = '#7367F0';
        var $success = '#28C76F';
        var $danger = '#EA5455';
        var $warning = '#FF9F43';
        var $label_color = '#1E1E1E';
        var grid_line_color = '#dae1e7';
        var scatter_grid_color = '#f3f3f3';
        var $scatter_point_light = '#D1D4DB';
        var $scatter_point_dark = '#5175E0';
        var $white = '#fff';
        var $black = '#000';

        var themeColors = [$primary, $success, $danger, $warning, $label_color, grid_line_color, scatter_grid_color, $scatter_point_light, $scatter_point_dark, grid_line_color, $black, $primary];

        // Bar Chart
        // ------------------------------------------

        //Get the context of the Chart canvas element we want to select
        var barChartctx = $("#bar-chart");

        // Chart Options
        var barchartOptions = {
        // Elements options apply to all of the options unless overridden in a dataset
        // In this case, we are setting the border of each bar to be 2px wide
        elements: {
            rectangle: {
            borderWidth: 2,
            borderSkipped: 'left'
            }
        },
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration: 500,
        legend: { display: false },
        scales: {
            xAxes: [{
            display: true,
            gridLines: {
                color: grid_line_color,
            },
            scaleLabel: {
                display: true,
            }
            }],
            yAxes: [{
            display: true,
            gridLines: {
                color: grid_line_color,
            },
            scaleLabel: {
                display: true,
            },
            ticks: {
                stepSize: 1000
            },
            }],
        },

        };

        // Chart Data
        var barchartData = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: "Total Pemesanan",
            data: [247, 267, 734, 784, 433, 123, 456, 923, 345, 293, 685, 384],
            backgroundColor: themeColors,
            borderColor: "transparent"
        }]
        };

        var barChartconfig = {
        type: 'bar',

        // Chart Options
        options: barchartOptions,

        data: barchartData
        };

        // Create the chart
        var barChart = new Chart(barChartctx, barChartconfig);
    </script>
@endsection