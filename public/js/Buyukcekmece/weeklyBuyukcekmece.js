$(document).ready(function () {
    WeeklyBuyukcekmece();
});


// Daily Beylikduzu

function WeeklyBuyukcekmece() {
    $.post('../data/Buyukcekmece/getBuyukcekmeceWeekly.php', function (data) {
            
        const data2 = JSON.parse(data);
        
        let datum = data2.map((t) => {     
            const dat = new Date(Date.parse(t.created_At.replace(/-/g, '/')));
            return dat;
        });
        
        

        $("#hafta").html(`Büyükçekmece İçin ${datum[datum.length-1].getDate()}-${datum[datum.length-1].getMonth()+1}-${datum[datum.length-1].getFullYear()} ve  
        ${datum[0].getDate()}-${datum[0].getMonth()+1}-${datum[0].getFullYear()} Tarihi Verileri`);
        
        const bnch = Object.values(data2).reduce((t,{bench}) => t + parseInt(bench), 0);      
        const sqt = Object.values(data2).reduce((t,{squat_rack}) => t + parseInt(squat_rack), 0);
        const smth = Object.values(data2).reduce((t,{smith_machine}) => t + parseInt(smith_machine), 0);
        const trd = Object.values(data2).reduce((t,{treadmill}) => t + parseInt(treadmill), 0);       
        const bks = Object.values(data2).reduce((t,{exercise_bikes}) => t + parseInt(exercise_bikes), 0);     
        const leg = Object.values(data2).reduce((t,{leg_press}) => t + parseInt(leg_press), 0);
    

        let chartdata = {
            labels: ["Bench","Squat Rack","Smith Machine","Treadmill","Exercise Bike","Leg Press"],
            datasets: [{
                fill: false,
                borderColor: "black",
                borderWidth: 1,
                label: "Alet Kullanım Oranları",
                data: [bnch,sqt,smth,trd,bks,leg],
                backgroundColor: [
                    'black',
                    'blue',
                    'pink',
                    'rgba(233, 235, 107, 1)',
                    'green',
                    'red'
                ]
            }]    
        }

        const graphTarget = $("#haftalikbcekmece");

        let selectedVal = "";
        let selected = $("#radioDiv input[type='radio'][name='bcekmecegraphhaftalik']:checked");
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