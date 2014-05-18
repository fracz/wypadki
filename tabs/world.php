<div id="countries_death" style="width: 90%; height: 500px; margin: 0 auto"></div>
<script type="text/javascript">
      google.setOnLoadCallback(function(){
        var data = google.visualization.arrayToDataTable([
        	["Kraj", "Liczba wypadków"],
        	["Namibia", 53.4],    
        	["Irak", 44.7],          
        	["Rosja", 21.9],    
        	["Ukraina", 18.8],    
        	["Polska", 14.3],    
        	["USA", 13.9],    
        	["Słowacja", 12.9],               
        	["Turcja", 9],    
        	["Włochy", 8.4],    
        	["Czechy", 8],    
        	["Francja", 6.6],      
        	["Niemcy", 5.7],    
        	["Finlandia", 5.7],    
        	["Norwegia", 5.2],    
        	["Wielka Brytania", 4.8],    
        	["Szwecja", 4.1],    
        	["Izrael", 4.1],    
        	["Szwajcaria", 3.8],       
        	["Malediwy", 2.4]
        ]);
        var options = {
          title: 'Liczba wypadków (dziennie) na 100 tys. mieszkańców'
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('countries_death'));
        chart.draw(data, options);
      });
</script>