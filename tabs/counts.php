<div id="carCount" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        	["Rok", "Ilość wypadków", "Ilość samochodów (x1000)"],
        	[new Date("2004-01-01"), 51069, 15899.185],    
        	[new Date("2005-01-01"), 48100, 16701.072],
        	[new Date("2006-01-01"), 46876, 16815.923],
        	[new Date("2007-01-01"), 49536, 18035.047],
        	[new Date("2008-01-01"), 49054, 19471.836],
        	[new Date("2009-01-01"), 44196, 21336.913],
        	[new Date("2010-01-01"), 38832, 22024.697],
        	[new Date("2011-01-01"), 40065, 23037.149],
        	[new Date("2012-01-01"), 37046, 24189.370],
        	[new Date("2013-01-01"), 35847, 24875.717]
        ]);

        var options = {
          title: 'Ilość wypadków w zależności od ilości samochodów zarejestrowanych w Polsce',
		  trendlines: { 0: {}, 1 : {} }
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('carCount'));
        chart.draw(data, options);
      }
</script>


<div id="injured" style="width: 90%; height: 500px; margin: 0 auto; margin-top: 20px"></div>
<script type="text/javascript">
google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        	["Rok", "Ilość zabitych", "Ilość rannych (x10)"],
        	[new Date("2004-01-01"), 5712, 6466.1],    
        	[new Date("2005-01-01"), 5444, 6119.1],
        	[new Date("2006-01-01"), 5243, 5912.3],
        	[new Date("2007-01-01"), 5583, 6322.4],
        	[new Date("2008-01-01"), 5437, 6209.7],
        	[new Date("2009-01-01"), 4572, 5604.6],
        	[new Date("2010-01-01"), 3907, 4895.2],
        	[new Date("2011-01-01"), 4189, 4950.1],
        	[new Date("2012-01-01"), 3571, 4579.2],
        	[new Date("2013-01-01"), 3357, 4405.9]
        ]);

        var options = {
          title: 'Ilość zabitych i rannych w wypadkach drogowych w Polsce',
		  trendlines: { 0: {}, 1 : {} }
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('injured'));
        chart.draw(data, options);
      }
</script>