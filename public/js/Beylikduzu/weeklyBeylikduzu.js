$(document).ready(function () {
    WeeklyBeylikduzu();
});


function WeeklyBeylikduzu() {
    $.post('../data/Beylikduzu/getBeylikduzuWeekly.php', function (data) {
              
        const data2 = JSON.parse(data);

        let datum = data2.map((t) => {     
            const dat = new Date(Date.parse(t.created_At.replace(/-/g, '/')));
            return dat;
        });
        console.log(datum);
        

        $("#hafta").html(`Beylikdüzü İçin 
        ${datum[datum.length-1].getDate()}-${datum[datum.length-1].getMonth()+1}-${datum[datum.length-1].getFullYear()} ve  
        ${datum[0].getDate()}-${datum[0].getMonth()+1}-${datum[0].getFullYear()}
        Tarihleri Arası Veriler`);
        
        const bnch = Object.values(data2).reduce((t,{bench}) => t + parseInt(bench), 0);      
        const sqt = Object.values(data2).reduce((t,{squat_rack}) => t + parseInt(squat_rack), 0);
        const smth = Object.values(data2).reduce((t,{smith_machine}) => t + parseInt(smith_machine), 0);
        const trd = Object.values(data2).reduce((t,{treadmill}) => t + parseInt(treadmill), 0);       
        const bks = Object.values(data2).reduce((t,{exercise_bikes}) => t + parseInt(exercise_bikes), 0);     
        const leg = Object.values(data2).reduce((t,{leg_press}) => t + parseInt(leg_press), 0);
    

        let chartdata = {
            labels: ["Bench","Squat Rack","Smith Machine","Treadmill","Exercise Bike","Leg Press"],
            datasets: [{
                label: "Alet Kullanım Oranları",
                data: [bnch,sqt,smth,trd,bks,leg],
                backgroundColor: [
                    'black',
                    'blue',
                    'pink',
                    'dark gray',
                    'green',
                    'red'
                ]
            }]    
        }

        const graphTarget = $("#haftalikbduzu");

        let selectedVal = "";
        let selected = $("#radioDiv input[type='radio'][name='bduzugraphhaftalik']:checked");
        if (selected.length > 0) {
            selectedVal = selected.val();   
        }


        let chart = new Chart(graphTarget, {
            type: selectedVal,
            data: chartdata,
            options: {
                events: ['click']
            }
            
        });
    
    });
                      
}