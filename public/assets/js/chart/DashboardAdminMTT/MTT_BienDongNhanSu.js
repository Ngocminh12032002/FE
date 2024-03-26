const MTT_BienDongNhanSu = document.getElementById('MTT_BienDongNhanSu');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(MTT_BienDongNhanSu, {
  
  type: 'line',
  data: {
    labels: [ 
      "1",
      "2",
      "3",
      "4",
      "5",
      "6",
      "7",
      "8",
      "9",
      "10",
      "11",
      "12",
  ],
    datasets: [
      {
        label: 'Vị trí trống',
        data: [9, 11, 6, 13, 8, 4, 8, 5, 8, 11, 6, 6],
        borderColor:'rgb(209, 20, 20, 0.75)',
        backgroundColor: 'rgb(209, 20, 20)',
        type: "scatter"
      },
      {
        label: 'Tuyển mới',
        data: [5, 8, 7, 10, 9, 8, 7, 8, 7, 7, 5, 9],
        borderColor:'rgb(255, 230, 139, 0.75)',
        backgroundColor: 'rgb(255, 230, 139)',    
        borderSkipped: false,
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Nghỉ việc',
        data: [-1, -2, -5, -5, -2, 0, -6, -1, -5, -4, -3, -1],
        borderColor:'rgb(255, 165, 0, 0.75)',
        backgroundColor: 'rgb(255, 165, 0',     
        borderSkipped: false,
        stack: 'combined',
        type: 'bar'
      },
    ]
  },
  options: {
    barPercentage:0.5,
    plugins: {
      title: {
        display: true,
        text: 'Biến động nhân sự'
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
