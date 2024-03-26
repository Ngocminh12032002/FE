const PTSP_admin_GiaNVLThiTruong = document.getElementById('PTSP_admin_GiaNVLThiTruong');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(PTSP_admin_GiaNVLThiTruong, {
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
        label: 'Thép',
        data: [600, 620, 650, 640, 600, 580, 520, 500, 590, 620, 630, 630],
        borderColor: 'rgba(247, 188, 188)',
        backgroundColor: 'rgba(247, 188, 188)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Nhôm',
        data: [720, 730, 750, 740, 700, 670, 670, 660, 680, 700, 710, 720],
        borderColor: 'rgb(255, 210, 210)',
        backgroundColor: 'rgb(255, 210, 210)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Sắt',
        data: [890, 940, 900, 865, 825, 795, 795, 785, 750, 825, 835, 845],
        borderColor: 'rgb(230, 235, 55)',
        backgroundColor: 'rgb(230, 235, 55)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Nhựa',
        data: [780, 740, 730, 720, 680, 660, 570, 580, 670, 700, 710, 710],
        borderColor: 'rgb(255, 192, 152)',
        backgroundColor: 'rgb(255, 192, 152)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Cao su',
        data: [300, 290, 280, 310, 290, 350, 400, 410, 400, 390, 370, 370],
        borderColor: 'rgb(219, 172, 40)',
        backgroundColor: 'rgb(219, 172, 40)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Thuỷ tinh',
        data: [700, 690, 705, 730, 720, 685, 680, 690, 670, 630, 600, 610],
        borderColor: 'rgb(219, 82, 40)',
        backgroundColor: 'rgb(219, 82, 40)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Trend',
        data: [3990, 4010, 4015, 4005, 3815, 3740, 3635, 3625, 3760, 3865, 3855, 3885],
        borderColor: 'rgb(209, 20, 20)',
        backgroundColor: 'rgb(209, 20, 20)',
        // stack: 'combined'
      }
    ]
  },
  options: {
    barPercentage:0.5,
    responsive: true,
    maintainAspectRatio: false,
    interaction: {
      mode: 'index',
      intersect: false,
    },
    stacked: false,
    plugins: {
      title: {
        display: true,
        text: 'Giá NVL thị trường'
      },
      legend: {
        labels:{
          font: {
            size:8
          },
          boxWidth:15,          
        },
        maxWidth:4,
        position:'bottom',
      },
    },
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }
  },
});
