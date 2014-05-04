<div id="seasons" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        	["Pora roku", "Średnia ilość wypadków"],
        	["Wiosna", 2168 + 2318 + 3108],    
        	["Lato", 3375 + 3646 + 3645],
        	["Jesień", 3590 + 3645 + 3059],
        	["Zima", 3202 + 2195 + 1896]
        ]);

        var options = {
          title: 'Rozkład wypadków na pory roku'
        };

        var chart = new google.visualization.PieChart(document.getElementById('seasons'));
        chart.draw(data, options);
      }
</script>


<div id="weeks" style="width: 90%; height: 500px; margin: 0 auto; margin-top: 20px"></div>
<script type="text/javascript">
google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        	["Dzień tygodnia", "Średnia ilość wypadków"],
        	["Poniedziałek", 5255],
        	["Wtorek", 5206],
        	["Środa", 5060],
        	["Czwartek", 5109],
        	["Piątek", 5965],
        	["Sobota", 4961],
        	["Niedziela", 4291]
        ]);

        var options = {
          title: 'Rozkład wypadków na dni tygodnia'
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('weeks'));
        chart.draw(data, options);
      }
</script>

<div id="hours" style="width: 90%; height: 500px; margin: 0 auto; margin-top: 20px"></div>
<script type="text/javascript">
google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        	["Dzień tygodnia", "Średnia ilość wypadków"],
        	["00", 384],
        	["01", 318],
        	["02", 269],
        	["03", 277],
        	["04", 299],
        	["05", 698],
        	["06", 1308],
        	["07", 1694],
        	["08", 1616],
        	["09", 1696],
        	["10", 1843],
        	["11", 1944],
        	["12", 2005],
        	["13", 2167],
        	["14", 2572],
        	["15", 2641],
        	["16", 2896],
        	["17", 2707],
        	["18", 2477],
        	["19", 1902],
        	["20", 1464],
        	["21", 1166],
        	["22", 889],
        	["23", 615]
        ]);

        var options = {
          title: 'Rozkład wypadków na godziny dnia'
        };

        var chart = new google.visualization.LineChart(document.getElementById('hours'));
        chart.draw(data, options);
      }
</script>