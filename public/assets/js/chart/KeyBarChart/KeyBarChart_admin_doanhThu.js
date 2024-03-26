const KeyBarChart_admin_doanhThu = document.getElementById('KeyBarChart_admin_doanhThu');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_admin_doanhThu, {
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
        label: 'Golf & nội khu',
        data: [30.21, 37.64, 33.15, 18.15, 53.42, 51.35, 37.58, 21.13, 28.55, 33.83, 34.93, 24.82],
        borderColor: 'rgb(203, 11, 11)',
        backgroundColor: 'rgb(203, 11, 11)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Trolley & Cargo cart',
        data: [66.75, 100.1, 97.94, 90.38, 121.32, 66.71, 116.43, 121.7, 102.78, 145.15, 109.54, 59.64],
        borderColor: 'rgb(235, 131, 131)',
        backgroundColor: 'rgb(235, 131, 131)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Xe tải Van',
        data: [55.3, 90.94, 76.14, 61.18, 84.19, 106.02, 57.23, 66.82, 43.49, 71.16, 60.66, 52.65],
        borderColor: 'rgb(236, 184, 184)',
        backgroundColor: 'rgb(236, 184, 184)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Xe tham quan',
        data: [26.92, 52.15, 32.09, 41.26, 41.14, 36.47, 38.32, 36.26, 25.55, 28.08, 50.47, 32.24],
        borderColor: 'rgb(241, 158, 158)',
        backgroundColor: 'rgb(241, 158, 158, 0.5)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Số đơn hàng (nghìn)',
        data: [1, 2, 1.9, 1.1, 1.7, 1.5, 1.55, 1.6, 1.3, 1.8, 2.1, 1.85],
        borderColor: 'rgb(255, 17, 17)',
        backgroundColor: 'rgb(255, 17, 17, 0.5)',
        stack: 'combined'
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    interaction: {
      mode: 'index',
      intersect: false,
    },
    stacked: false,
    plugins: {
      title: {
        display: false,
        // text: 'Chart.js Stacked Line/Bar Chart'
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


// datasets: [
//   {
//     label: 'Golf & nội khu',
//     data: [30.214580000, 37.637540000, 33.148120000, 18.149140000, 53.418160000, 51.351840000, 37.583800000, 21.127020000, 28.546680000, 33.832220000, 34.934000000, 24.821380000],
//     borderColor: 'rgb(203, 11, 11)',
//     backgroundColor: 'rgb(203, 11, 11)',
//     stack: 'combined',
//     type: 'bar'
//   },
//   {
//     label: 'Trolley & Cargo cart',
//     data: [66.747680000, 10.0102000000, 97.937720000, 90.383620000, 121.316000000, 66.707820000, 116.428000000, 121.696000000, 102.778000000, 145.150000000, 109.540000000, 59.636080000],
//     borderColor: 'rgb(235, 131, 131)',
//     backgroundColor: 'rgb(235, 131, 131)',
//     stack: 'combined',
//     type: 'bar'
//   },
//   {
//     label: 'Xe tải Van',
//     data: [55.304700000, 90.943380000, 76.138240000, 61.183420000, 84.192280000, 106.020000000, 57.234480000, 66.815500000, 43.494000000, 71.158620000, 60.660760000, 52.645160000],
//     borderColor: 'rgb(236, 184, 184)',
//     backgroundColor: 'rgb(236, 184, 184)',
//     stack: 'combined',
//     type: 'bar'
//   },
//   {
//     label: 'Xe tham quan',
//     data: [26.921960000, 52.146620000, 32.090680000, 41.255900000, 41.143040000, 36.474580000, 38.322680000, 36.258840000, 25.549700000, 28.084900000, 50.471260000, 32.236160000],
//     borderColor: 'rgb(241, 158, 158)',
//     backgroundColor: 'rgb(241, 158, 158, 0.5)',
//     stack: 'combined',
//     type: 'bar'
//   },
//   {
//     label: 'Số đơn hàng',
//     data: [1000, 2000, 1900, 1100, 1700, 1500, 1550, 1600, 1300, 1800, 2100, 1850],
//     borderColor: 'rgb(255, 17, 17)',
//     backgroundColor: 'rgb(255, 17, 17, 0.5)',
//     stack: 'combined'
//   }
// ]