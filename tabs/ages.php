<div id="ages" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
      google.setOnLoadCallback(function(){
        var data = google.visualization.arrayToDataTable([
        	["Grupa wiekowa", "Średnia liczba wypadków"],
        	["0-6", (28 + 24) / 2],
        	["7-14", (431 + 410) / 2],
        	["15-17", (480 + 475) / 2],
        	["18-24", (6526 + 6233) / 2],
        	["25-29", (10192 + 9785) / 2],
        	["40-59", (7572 + 7437) / 2],
        	["60+", (3524 + 3548) / 2]
        ]);
        var options = {
          title: 'Średnia roczna liczba wypadków powodowana osoby w podanej grupie wiekowej'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('ages'));
        chart.draw(data, options);
      });
</script>

<div id="ages_stat" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
      google.setOnLoadCallback(function(){
        var data = google.visualization.arrayToDataTable([
        	["Grupa wiekowa", "Średnia liczba wypadków"],
        	["0-6", 1],
        	["7-14", 14],
        	["15-17", 37],
        	["18-24", 171],
        	["25-29", 105],
        	["40-59", 71],
        	["60+", 43]
        ]);
        var options = {
          title: 'Wskaźnik liczby wypadków na 1000 os. z wybranej grupy wiekowej'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('ages_stat'));
        chart.draw(data, options);
      });
</script>

<div id="ages_danger" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
      google.setOnLoadCallback(function(){
        var data = google.visualization.arrayToDataTable([
        	["Grupa wiekowa", "Wskaźnik poważności wypadków"],
        	["0-6", 1 / (28 + 24) ],
        	["7-14", 12/(431 + 410)],
        	["15-17", (31+29)/(480 + 475)],
        	["18-24", (626+584)/(6526 + 6233)],
        	["25-29", (853+770)/(10192 + 9785)],
        	["40-59", (634+541)/(7572 + 7437) ],
        	["60+", (342+305)/(3524 + 3548)]
        ]);
        var options = {
          title: 'Poważność powodowanych wypadków prez osoby z wybranej grupy wiekowej (liczba zabitych / liczba wypadków)'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('ages_danger'));
        chart.draw(data, options);
      });
</script>