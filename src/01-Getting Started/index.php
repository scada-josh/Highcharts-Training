<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Highcharts Training</title>

    <link rel="stylesheet" href="../../lib/bootstrap-2.3.2/css/bootstrap.min.css">
    <script src="../../lib/jquery-1.8.2/jquery.min.js"></script>
    
    <script src="../../lib/Highcharts-3/js/highcharts.js"></script>
    <!-- <script src="http://code.highcharts.com/highcharts.js"></script> -->
    <!-- <script src="http://code.highcharts.com/modules/exporting.js"></script> -->

    <script type="text/javascript">
      var chart

      $(function(){

          chart = new Highcharts.Chart({
              chart: {
                renderTo: 'chartContainer',
                showAxes: true
              },
              title: {
                text: 'My First Highcharts'
              },
              subtitle: {
                text: 'My Sub-title'
              },
              xAxis: {
                title: {
                  text: 'แกน X'
                },
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
              },
              yAxis: {
                title: {
                  text: 'แกน Y'
                }
              },
              series: [{
                name: 'First-series',
                data: [125, 23, 45, 56, 78.7, 45, 23, 56, 78, 90, 124, 35]
              }]
          })

      });

    </script>


</head>
<body>

    <div class="container-fluid">
        <div class="row-fluid">
          <div class="span10 offset1">
            <div class="page-header">
              <img src="../../resources/code-aholic_logo.png" style="width: 90px" class="pull-left">
              <img src="../../resources/logohighcharts.png" style="width: 250px" class="pull-right img-rounded">
              <span class="lead"> &nbsp;&nbsp;Getting Started </span><small>with Line Chart</small>
              <blockquote >
                <small class="pull-left">by THE JOSH
                  <cite class="text-info" title="Source Title">, scada.josh@gmail.com</cite>
              </small>
          </blockquote>
      </div>
      <!-- ################################################################################ -->

      <div style="width: 100%; height: 400px" id="chartContainer"></div>
      


      <!-- ################################################################################ -->
  </div>
</div>
</div>

</body>
</html>
