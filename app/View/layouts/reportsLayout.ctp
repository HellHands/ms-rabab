<?php if(($this->Session->read('Auth.User.id'))== NULL){ $this->redirect('../home/index'); } ?>
<!DOCTYPE html>
<html lang="en">

<head>  
  
  <?= $this->Html->meta(array('http-equiv' => 'Content-Type', 'content' => 'text/html; charset=UTF-8')); ?>
  <meta charset="utf-8">
  <?= $this->Html->meta(array('http-equiv' => 'X-UA-Compatible', 'content' => 'IE-edge')); ?>
  <?= $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1')); ?>
  <?= $this->Html->meta('icon', $this->webroot.'images/rsu-favicon.ico'); ?>
  
  <title>Dashboard - Reform Support Unit</title>

  <!-- Bootstrap core CSS -->
  
  <?= $this->Html->css('css-reporting/bootstrap.min.css'); ?>  
  
  <?= $this->Html->css('fonts-reporting/css/font-awesome.min.css'); ?>    
  <?= $this->Html->css('css-reporting/animate.min.css'); ?>  


  <!-- Custom styling plus plugins -->
  
  <?= $this->Html->css('css-reporting/custom.css'); ?>    
  <!--<link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" /> -->
  <?= $this->Html->css('css-reporting/maps/jquery-jvectormap-2.0.3.css'); ?>    
  <!--<link href="css/icheck/flat/green.css" rel="stylesheet" />-->
  <?= $this->Html->css('css-reporting/icheck/flat/green.css'); ?>    

  <!--<link href="css/floatexamples.css" rel="stylesheet" type="text/css" />-->
  <?= $this->Html->css('css-reporting/floatexamples.css'); ?>    

  

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body class="nav-md">

<?= $content_for_layout; ?>

  <!--<script src="js/jquery.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/jquery.min.js'); ?>
  <!--<script src="js/bootstrap.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/bootstrap.min.js'); ?>
  <!--<script src="js/nprogress.js"></script>-->
  <?= $this->Html->script('/js-reporting/nprogress.js'); ?>

  <!-- gauge js -->
  <!--<script type="text/javascript" src="js/gauge/gauge.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/gauge/gauge.min.js'); ?>  
  <!--<script type="text/javascript" src="js/gauge/gauge_demo.js"></script>-->
  <!--< ?= $this->Html->script('/js-reporting/gauge/gauge_demo.js'); ?> -->
  
  <!-- bootstrap progress js -->
  <!--<script src="js/progressbar/bootstrap-progressbar.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/progressbar/bootstrap-progressbar.min.js'); ?>
  <!--<script src="js/nicescroll/jquery.nicescroll.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/nicescroll/jquery.nicescroll.min.js'); ?>
  
  <!-- icheck -->
  <!--<script src="js/icheck/icheck.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/icheck/icheck.min.js'); ?>
  
  <!-- daterangepicker -->
  <!--<script type="text/javascript" src="js/moment/moment.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/moment/moment.min.js'); ?>
  <!--<script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>-->
  <?= $this->Html->script('/js-reporting/datepicker/daterangepicker.js'); ?>
  
  <!-- chart js -->
  <!--<script src="js/chartjs/chart.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/chartjs/chart.min.js'); ?>

  <!--<script src="js/custom.js"></script>-->
  <?= $this->Html->script('/js-reporting/custom.js'); ?>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <!--<script type="text/javascript" src="js/flot/jquery.flot.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/jquery.flot.js'); ?>
  <!--<script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/jquery.flot.pie.js'); ?>
  <!--<script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/jquery.flot.orderBars.js'); ?>
  <!--<script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/jquery.flot.time.min.js'); ?>
  <!--<script type="text/javascript" src="js/flot/date.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/date.js'); ?>
  <!--<script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/jquery.flot.spline.js'); ?>
  <!--<script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/jquery.flot.stack.js'); ?>
  <!--<script type="text/javascript" src="js/flot/curvedLines.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/curvedLines.js'); ?>
  <!--<script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>-->
  <?= $this->Html->script('/js-reporting/flot/jquery.flot.resize.js'); ?>
  <script>
    $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
        },
        yaxis: {
          ticks: 8,
          tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <!--<script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/maps/jquery-jvectormap-2.0.3.min.js'); ?>
  <!--<script type="text/javascript" src="js/maps/gdp-data.js"></script>-->
  <?= $this->Html->script('/js-reporting/maps/gdp-data.js'); ?>
  <!--<script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>-->
  <?= $this->Html->script('/js-reporting/maps/jquery-jvectormap-world-mill-en.js'); ?>
  <!--<script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>-->
  <?= $this->Html->script('/js-reporting/maps/jquery-jvectormap-us-aea-en.js'); ?>
  
  <!-- pace -->
  <!--<script src="js/pace/pace.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/pace/pace.min.js'); ?>

  <script>
    $(function() {
      $('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  
  <!-- skycons -->
  <!--<script src="js/skycons/skycons.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/skycons/skycons.min.js'); ?>
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- dashbord linegraph -->
  <script>
    Chart.defaults.global.legend = {
      enabled: false
    };

    var data = {
      labels: [
        "Symbian",
        "Blackberry",
        "Other",
        "Android",
        "IOS"
      ],
      datasets: [{
        data: [15, 20, 30, 10, 30],
        backgroundColor: [
          "#BDC3C7",
          "#9B59B6",
          "#455C73",
          "#26B99A",
          "#3498DB"
        ],
        hoverBackgroundColor: [
          "#CFD4D8",
          "#B370CF",
          "#34495E",
          "#36CAAB",
          "#49A9EA"
        ]

      }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });
  </script>
  <!-- /dashbord linegraph -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>

  <!--<script src="js/moris/raphael-min.js"></script>-->
  <?= $this->Html->script('/js-reporting/moris/raphael-min.js'); ?>
  <!--<script src="js/moris/morris.min.js"></script>-->
  <?= $this->Html->script('/js-reporting/moris/morris.min.js'); ?>  
  
  <script type="text/javascript">
  $(document).ready(function() {
    var opts = {
      lines: 12, // The number of lines to draw
      angle: 0, // The length of each line
      lineWidth: 0.4, // The line thickness
      pointer: {
          length: 0.75, // The radius of the inner circle
          strokeWidth: 0.042, // The rotation offset
          color: '#1D212A' // Fill color
      },
      limitMax: 'false', // If true, the pointer will not go past the end of the gauge
      colorStart: '#1ABC9C', // Colors
      colorStop: '#1ABC9C', // just experiment with them
      strokeColor: '#F0F3F3', // to see which ones work best for you
      generateGradient: true
    };
    
    var target = document.getElementById('foo'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = <?= $total_schools2; ?>; // set max gauge value
    gauge.animationSpeed = 32; // set animation speed (32 is default value)
    gauge.set(<?= $filled_forms_asc201516; ?>); // set actual value
    gauge.setTextField(document.getElementById("gauge-text"));


    Morris.Donut({
        element: 'graph_donut',
        data: [
            {label: 'Functional Schools', value: <?= $functional_schools_percent; ?>},
            {label: 'Temporary Closed Schools', value: <?= $closed_temporary_schools_percent; ?>},
            {label: 'Permanent Closed Schools', value: <?= $closed_permanent_schools_percent; ?>}
            
        ],
        colors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
        formatter: function (y) {
            return y + "%"
        }
    });
  });

  /*new Morris.Line({
      element: 'graph_line',
      xkey: 'year',
      ykeys: ['value'],
      labels: ['Value'],
      hideHover: 'auto',
      lineColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
      data: [
          {year: '2012', value: 20},
          {year: '2013', value: 10},
          {year: '2014', value: <?= $functional_schools; ?>},
          {year: '2015', value: 5},
          {year: '2016', value: 20}
      ]
  });*/

  </script>
  
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
