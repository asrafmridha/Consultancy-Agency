
@extends('backend.mastaring.master')
 
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home Page</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
     @include('backend.includes.content')
 
@endsection

@section('js')
{{-- <script src="{{ asset('backend/app-assets/js/scripts/charts/chart-apex.js') }}"></script> --}}


<script>

    var flatPicker = $('.flat-picker'),
    isRtl = $('html').attr('data-textdirection') === 'rtl',
    chartColors = {
      column: {
        series1: '#826af9',
        series2: '#d2b0ff',
        bg: '#f8d3ff'
      },
      success: {
        shade_100: '#7eefc7',
        shade_200: '#06774f'
      },
      donut: {
        series1: '#ffe700',
        series2: '#00d4bd',
        series3: '#826bf8',
        series4: '#2b9bf4',
        series5: '#FFA1A1'
      },
      area: {
        series3: '#a4f8cd',
        series2: '#60f2ca',
        series1: '#2bdac7'
      }
    };

    var lineChartEl = document.querySelector('#line-chart'),
        lineChartConfig = {
        chart: {
            height: 400,
            type: 'line',
            zoom: {
            enabled: false
            },
            parentHeightOffset: 0,
            toolbar: {
            show: false
            }
        },
        series: [
            {
            data: @json($message_count)
            }
        ],
        markers: {
            strokeWidth: 7,
            strokeOpacity: 1,
            strokeColors: [window.colors.solid.white],
            colors: [window.colors.solid.warning]
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        colors: [window.colors.solid.warning],
        grid: {
            xaxis: {
            lines: {
                show: true
            }
            },
            padding: {
            top: -20
            }
        },
        tooltip: {
            custom: function (data) {
            return (
                '<div class="px-1 py-50">' +
                '<span>' +
                data.series[data.seriesIndex][data.dataPointIndex] +
                '%</span>' +
                '</div>'
            );
            }
        },
        xaxis: {
            categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'July',
            'Aug',
            'Sept',
            'Oct',
            'Nov',
            'Dec',
            ]
        },
        yaxis: {
            opposite: isRtl
        }
        };
    if (typeof lineChartEl !== undefined && lineChartEl !== null) {
        var lineChart = new ApexCharts(lineChartEl, lineChartConfig);
        lineChart.render();
    }




    //Bar Chart

    var barChartEl = document.querySelector('#bar-chart'),
    barChartConfig = {
      chart: {
        height: 400,
        type: 'bar',
        parentHeightOffset: 0,
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: true,
          barHeight: '30%',
          endingShape: 'rounded'
        }
      },
      grid: {
        xaxis: {
          lines: {
            show: false
          }
        },
        padding: {
          top: -15,
          bottom: -10
        }
      },
      colors: window.colors.solid.info,
      dataLabels: {
        enabled: false
      },
      series: [
        {
          data: @json($subcription_count)
        }
      ],
      xaxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'July',
            'Aug',
            'Sept',
            'Oct',
            'Nov',
            'Dec',      
        ]
      },
      yaxis: {
        opposite: isRtl
      }
    };
  if (typeof barChartEl !== undefined && barChartEl !== null) {
    var barChart = new ApexCharts(barChartEl, barChartConfig);
    barChart.render();
  }
</script>
@endsection
















