const KeyBarChart_admin_bienDongNhanSu = document.getElementById('KeyBarChart_admin_bienDongNhanSu');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_admin_bienDongNhanSu, {
  
  type: 'line',
  data: {
    labels: [ 
      "T1",
      "T2",
      "T3",
      "T4",
      "T5",
      "T6",
      "T7",
      "T8",
      "T9",
      "T10",
      "T11",
      "T12",
  ],
    datasets: [
      {
        label: 'Tuyển mới',
        data: [5, 8, 7, 10, 9, 8, 7, 8, 7, 7, 5, 9],
        borderColor:'rgb(235, 131, 131)',
        backgroundColor: 'rgb(235, 131, 131, 0.5)',    
        borderSkipped: false,
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Nghỉ việc',
        data: [-1, -2, -5, -5, -2, 0, -6, -1, -5, -4, -3, -1],
        borderColor:'rgb(236, 184, 184)',
        backgroundColor: 'rgb(236, 184, 184, 0.5)',     
        borderSkipped: false,
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Vị trí trống',
        data: [9, 11, 6, 13, 8, 4, 8, 5, 8, 11, 6, 6],
        borderColor:'rgb(255, 17, 17)',
        borderColor: 'rgb(255, 17, 17)',
        backgroundColor: 'rgb(255, 17, 17)',
        type: "scatter"
      }
    ]
  },
  options: {
    plugins: {
      title: {
        display: false,
        // text: 'Chart.js Bar Chart - Stacked'
      },
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,          
        },
        maxWidth:4,        
      },
    },
    responsive: true,
      maintainAspectRatio: false,
      interaction: {
        mode: 'index',
        intersect: false,
      },
      stacked: false,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }
  }
});
