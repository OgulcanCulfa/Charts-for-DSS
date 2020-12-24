<!DOCTYPE html>
<html lang="en">
<head>   
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <!--bootstrap import-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--chart.js import-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!--jquery import-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>

    

    <div class="container justify-content-center my-4">

        <!-- Graph div -->
        <canvas id="myChart" width="50" height="25" style="width: 50%; height: 50%"/>

    </div>

        <!-- Radio buttons -->
    <div id="radioDiv" class="d-flex justify-content-center my-3">
        <div class="form-check form-check-inline justify-content-center">

            <input class="form-check-input" type="radio" name="graph" checked onclick="showGraph()" value="pie">
            <label class="form-check-label mr-3" for="pie">Pie Grafiği</label>

            <input class="form-check-input" type="radio" name="graph" onclick="showGraph()" value="bar">
            <label class="form-check-label mr-3" for="bar">Bar Grafiği</label>

            <input class="form-check-input" type="radio" name="graph" onclick="showGraph()" value="line">
            <label class="form-check-label mr-3" for="line">Line Grafiği</label>

            <input class="form-check-input" type="radio" name="graph" onclick="showGraph()" value="radar">
            <label class="form-check-label mr-3" for="line">Radar Grafiği</label>

        </div>
    </div>

    <div id="gg"></div>
    

    
<!-- Script begins -->

<script>
$(document).ready(function () {
    showGraph();
});


function showGraph() {
    $.post('./data/film_count.php', function (data) {
            
        
        var count = [];    
        var tur = [];


        
        var data2 = JSON.parse(data);

        data2.forEach(function (obj) {
            tur.push(obj.Ad);
            count.push(obj.Film_Sayisi);
        });
        
        //$("#gg").html(data)

        var chartdata = {
            labels: tur,
            datasets: [{
                label: "Film türlerine göre film sayısı",
                data: count,
                backgroundColor: [
                    'black',
                    'blue',
                    'turquoise',
                    'dark gray',
                    'green',
                    'red',
                    'gray',
                    'pink'
                ]
            }]    
        }

        var graphTarget = $("#myChart");

        var selectedVal = "";
        var selected = $("#radioDiv input[type='radio'][name='graph']:checked");
        if (selected.length > 0) {
            selectedVal = selected.val();
            
        }

        // $("#gg").html(selectedVal)

        var chart = new Chart(graphTarget, {
            type: selectedVal,
            data: chartdata,
            options: {
                events: ['click']
            }
            
        });

    });
        
        
}
</script>


















</body>
</html>