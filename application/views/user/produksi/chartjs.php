<!-- Harian -->
<script type="text/javascript">
var SeriesData= [[]];
var SeriesLabel= ["0am", "2am", "4am", "6am", "8am", "10am", "12am", "2pm", "4pm", "6pm", "8pm", "10pm", "12pm"];
$(function() {
  var chart = new Chartist.Line('#produksiHarian', {
      labels: SeriesLabel,
      series: SeriesData
  }, {
      low: 0,
      high: 600,
      
      showArea: true,
      fullWidth: true,
      plugins: [
          Chartist.plugins.tooltip()
      ],
      axisY: {
          onlyInteger: true,
          scaleMinSpace: 40,
          offset: 60,
          labelInterpolationFnc: function(value) {
              return (value / 1) + 'KWh';
          }
      },

  });

  chart.on('draw', function(ctx) {
      if (ctx.type === 'area') {
          ctx.element.attr({
              x1: ctx.x1 + 0.001
          });
      }
  });

  chart.on('created', function(ctx) {
      var defs = ctx.svg.elem('defs');
      defs.elem('linearGradient', {
          id: 'gradient',
          x1: 0,
          y1: 1,
          x2: 0,
          y2: 0
      }).elem('stop', {
          offset: 0,
          'stop-color': 'rgba(255, 165, 0, 1)'
      }).parent().elem('stop', {
          offset: 1,
          'stop-color': 'rgba(255, 165, 255, 1)'
      });
  });

  function callDataHarian() {
    jqXHR = jQuery.ajax({
        url: "<?php echo base_url('User/realtime_grafik_produksi_harian/'); ?>",
        type: 'GET',
        dataType: "json"
    }).then(function (responseJson) { // ajax success handler
        if (responseJson!='') {
            SeriesData[0] = responseJson[0];
            var newData = {'labels':SeriesLabel,'series':SeriesData}
            chart.update(newData);
            $('#realHarian').text(responseJson[2]+"KWh");
            $('#TotalHarian').text(responseJson[3]+"KWh");
        }
    });
  }
  callDataHarian();
  setInterval(function() {
    callDataHarian();
  }, 5000);

})

</script>

<!-- Mingguan -->
<script type="text/javascript">
var SeriesData1= [[]];
var SeriesLabel1= [];
$(function() {
  var chart1 = new Chartist.Line('#produksiMingguan', {
      labels: SeriesLabel1,
      series: SeriesData1
  }, {
      low: 0,
      high: 600,

      showArea: true,
      fullWidth: true,
      plugins: [
          Chartist.plugins.tooltip()
      ],
      axisY: {
          onlyInteger: true,
          scaleMinSpace: 40,
          offset: 60,
          labelInterpolationFnc: function(value) {
              return (value / 1) + 'KWh';
          }
      },

  });

  chart1.on('draw', function(ctx) {
      if (ctx.type === 'area') {
          ctx.element.attr({
              x1: ctx.x1 + 0.001
          });
      }
  });

  chart1.on('created', function(ctx) {
      var defs = ctx.svg.elem('defs');
      defs.elem('linearGradient', {
          id: 'gradient',
          x1: 0,
          y1: 1,
          x2: 0,
          y2: 0
      }).elem('stop', {
          offset: 0,
          'stop-color': 'rgba(255, 165, 0, 1)'
      }).parent().elem('stop', {
          offset: 1,
          'stop-color': 'rgba(255, 165, 255, 1)'
      });
  });

  function callDataMingguan() {
    jqXHR = jQuery.ajax({
        url: "<?php echo base_url('User/realtime_grafik_produksi_mingguan/'); ?>",
        type: 'GET',
        dataType: "json"
    }).then(function (responseJson) { // ajax success handler
        if (responseJson!='') {
            SeriesData1[0] = responseJson[0];
            SeriesLabel1=responseJson[1];
            var newData = {'labels':SeriesLabel1,'series':SeriesData1}
            chart1.update(newData);
            $('#TotalMingguan').text(responseJson[2]+"KWh");
        }
    });
  }

  callDataMingguan();
  setInterval(function() {
    callDataMingguan();
  }, 5000);

})

</script>

<!-- Bulanan -->
<script type="text/javascript">
var SeriesData2= [[]];
var SeriesLabel2= [];
$(function() {
  var chart2 =new Chartist.Bar('#produksiBulanan', {
      labels: SeriesLabel2,
      series: SeriesData2
  }, {
      low: 0,
      high: 600,

      stackBars: true,
      axisY: {
          onlyInteger: true,
          scaleMinSpace: 40,
          offset: 60,
          labelInterpolationFnc: function(value) {
              return (value / 1) + 'KWh';
          }
      },
      axisX: {
          showGrid: false
      },
      plugins: [
          Chartist.plugins.tooltip()
      ],
      seriesBarDistance: 1,
      chartPadding: {
          top: 15,
          right: 15,
          bottom: 5,
          left: 0
      }
  }).on('draw', function(data) {
      if (data.type === 'bar') {
          data.element.attr({
              style: 'stroke-width: 25px'
          });
      }
  });

  function callDataBulanan() {
    jqXHR = jQuery.ajax({
        url: "<?php echo base_url('User/realtime_grafik_produksi_bulanan/'); ?>",
        type: 'GET',
        dataType: "json"
    }).then(function (responseJson) { // ajax success handler
        if (responseJson!='') {
            SeriesData2[0] = responseJson[0];
            SeriesLabel2=responseJson[1];
            var newData = {'labels':SeriesLabel2,'series':SeriesData2}
            chart2.update(newData);
            $('#TotalBulanan').text(responseJson[2]+"KWh");
        }
    });
  }

  callDataBulanan();
  setInterval(function() {
    callDataBulanan();
  }, 5000);

})

</script>

<!-- Bulanan -->
<script type="text/javascript">
var SeriesData3= [[]];
var SeriesLabel3= [];
$(function() {
  var chart3 =new Chartist.Bar('#produksiTahunan', {
      labels: SeriesLabel3,
      series: SeriesData3
  }, {
      low: 0,
      high: 600,

      stackBars: true,
      axisY: {
          onlyInteger: true,
          scaleMinSpace: 40,
          offset: 60,
          labelInterpolationFnc: function(value) {
              return (value / 1) + 'KWh';
          }
      },
      axisX: {
          showGrid: false
      },
      plugins: [
          Chartist.plugins.tooltip()
      ],
      seriesBarDistance: 1,
      chartPadding: {
          top: 15,
          right: 15,
          bottom: 5,
          left: 0
      }
  }).on('draw', function(data) {
      if (data.type === 'bar') {
          data.element.attr({
              style: 'stroke-width: 25px'
          });
      }
  });

  function callDataTahunan() {
    jqXHR = jQuery.ajax({
        url: "<?php echo base_url('User/realtime_grafik_produksi_tahunan/'); ?>",
        type: 'GET',
        dataType: "json"
    }).then(function (responseJson) { // ajax success handler
        if (responseJson!='') {
            SeriesData3[0] = responseJson[0];
            SeriesLabel3=responseJson[1];
            var newData = {'labels':SeriesLabel3,'series':SeriesData3}
            chart3.update(newData);
            $('#TotalTahunan').text(responseJson[2]+"KWh");
        }
    });
  }
callDataTahunan();
setInterval(function() {
callDataTahunan();
}, 5000);

})

</script>
