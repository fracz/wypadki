<div id="regions_qty" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
	  var qtys = [
        	["Województwo", "Liczba zabitych", "Ilość rannych", "Ilość wypadków"],
        	["Dolnośląskie", 7.7, 116.1, 88.7],    
        	["Kujawsko - pomorskie", 8.5, 65.1, 56.4],
        	["Lubelskie", 11.5, 82.9, 69.1],
        	["Lubuskie", 9.2, 99.6, 73],
        	["Łódzkie", 10.4, 187.5, 151.7],
			["Małopolskie", 6.6, 138.9, 112.2],
			["Mazowieckie", 14.6, 128.1, 104],
			["Opolskie", 9.6, 91.4, 78.3],
			["Podkarpackie", 7.1, 105.7, 84.8],
			["Podlaskie", 11.3, 72.9, 61.6],
			["Pomorskie", 7.6, 148.7, 115.3],
			["Śląskie", 5.8, 119.3, 98.1],
			["Świętokrzystkie", 11.2, 135.6, 109.8],
			["Warmińsko-mazurskie", 10.6, 135.7, 111.7],
			["Wielkopolskie", 8.3, 90.3, 87.3],
			["Zachodniopomorskie", 9, 105.3, 87.3]
        ];
      google.setOnLoadCallback(function(){
        var data = google.visualization.arrayToDataTable(qtys);
        var options = {
          title: 'Wypadki w liczbach (dane na 1000 mieszkańców)'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('regions_qty'));
        chart.draw(data, options);
      });
</script>

<div id="danger" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
      google.setOnLoadCallback(function(){
	    var src = [["Województwo", "Wskaźnik poważności wypadków"]];
		for(var i = 1; i < qtys.length; i++){
			src.push([qtys[i][0], qtys[i][1] / qtys[i][3]]);
		}
        var data = google.visualization.arrayToDataTable(src);
        var options = {
          title: 'Poważność wypadków (liczba zabitych / liczba wypadków)'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('danger'));
        chart.draw(data, options);
      });
</script>

