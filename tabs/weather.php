<div id="weather" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
      google.setOnLoadCallback(function(){
        var data = google.visualization.arrayToDataTable([
        	["Warunki pogodowe", "Średnia roczna liczba wypadków", "Liczba zabitych", "Liczba rannych"],
        	["Ładna pogoda", 22102, 2083, 26904],
        	["Pochmurna pogoda", 8595, 787, 10591],
        	["Deszcz", 3929, 375, 4697],
        	["Śnieg lub grad", 1643, 110, 2221],
        	["Oślepiające słońce", 720, 31, 853],
        	["Mgła lub dym", 343, 66, 415],
        	["Silny wiatr", 294, 48, 380]
        ]);
        var options = {
          title: 'Liczba wypadków w danych warunkach pogodowych'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('weather'));
        chart.draw(data, options);
      });
</script>


<div id="weather_danger" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
      google.setOnLoadCallback(function(){
        var data = google.visualization.arrayToDataTable([
        	["Warunki pogodowe", "Wskaźnik poważności wypadków"],
        	["Ładna pogoda", 2083 / 22102],
        	["Pochmurna pogoda", 787 / 8595],
        	["Deszcz", 375 / 3929],
        	["Śnieg lub grad", 110 / 1643],
        	["Oślepiające słońce", 31 / 720],
        	["Mgła lub dym", 66 / 343],
        	["Silny wiatr", 48 / 294]
        ]);
        var options = {
          title: 'Wskaźnik poważności wypadków w zależności od warunków pogodowych (liczba zabitych / ilość wypadków)'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('weather_danger'));
        chart.draw(data, options);
      });
</script>
