<script type="text/javascript">
var SeriesData= [];
var SeriesLabel= ["0am", "2am", "4am", "6am", "8am", "10am", "12am", "2pm", "4pm", "6pm", "8pm", "10pm", "12pm"];
$(function() {
  var chart =  new Chartist.Line('#konsumsiHarian', {
      labels: SeriesLabel,
      series: SeriesData
    },{
      low: 0,
      high: 600,
      fullWidth: true,
      axisY: {
                onlyInteger: true,
                scaleMinSpace: 40,
                offset: 60,
                labelInterpolationFnc: function(value) {
                    return (value / 1) + 'KWh';
                }
            },

      plugins: [
        Chartist.plugins.tooltip()
      ],
      chartPadding: {
        right: 40
      }
    });

  function callDataHarian() {
    jqXHR = jQuery.ajax({
        url: "<?php echo base_url('User/realtime_grafik_konsumsi_harian/'); ?>",
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
