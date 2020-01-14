<script type="text/javascript">
var rickshawSeries = [[],[]];
var rickshawGraph = null;
var rickshawRandomData = null;
var rickshawTimer = null;

rickshawRandomData = new Rickshaw.Fixtures.RandomData(50);
for (var i = 0; i < 287; i++) {
  rickshawRandomData.addData(rickshawSeries);
  // rickshawSeriesCo2[0].push({x : 1551276230, y : Math.ceil(Math.random()*10)});
  // rickshawSeriesCo2[1].push({x : 809100060, y : Math.ceil(Math.random()*10)});
}


function grafik() {
  rickshawGraph = new Rickshaw.Graph({
      element: $('#rickshawGraph').get(0),
      width: $('#rickshawGraph').closest('#aa').width(),
      height: $('#rickshawGraph').height(),
      interpolation: 'linear',
      renderer: 'area',
      series: [
        {
          data: rickshawSeries[0],
          color: $('#rickshawGraph').data('color1'),
          name: 'Konsumsi'
        }, {
          data: rickshawSeries[1],
          color: $('#rickshawGraph').data('color2'),
          name: 'Produksi'
        }
      ]
    });

    // Add hover info
  		var hoverDetail = new Rickshaw.Graph.HoverDetail({
  			graph: rickshawGraph
  		});

  		// Render graph
  		rickshawGraph.render();


  		// Add animated data
  		clearInterval(rickshawTimer);
  		rickshawTimer = setInterval(function () {
  			_refreshRickshaw();
  		}, 2000);
}

_refreshRickshaw = function () {
  rickshawRandomData.removeData(this.rickshawSeries);
  rickshawRandomData.addData(this.rickshawSeries);
  rickshawGraph.update();
  console.log(this.rickshawSeries);
};
</script>
