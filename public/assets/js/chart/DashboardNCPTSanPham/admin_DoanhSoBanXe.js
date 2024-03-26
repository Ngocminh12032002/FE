const PTSP_admin_DoanhSoBanXe = document.getElementById('PTSP_admin_DoanhSoBanXe');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(PTSP_admin_DoanhSoBanXe, {
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
        label: 'TC cart',
        data: [197, 187, 200, 128, 162, 107, 171, 136, 144, 163, 129, 167],
        borderColor: 'rgba(247, 188, 188)',
        backgroundColor: 'rgba(247, 188, 188)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Golf',
        data: [66, 43, 91, 95, 80, 35, 14, 26, 11, 24, 23, 19],
        borderColor: 'rgb(230, 235, 55)',
        backgroundColor: 'rgb(230, 235, 55)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'TQ',
        data: [53, 153, 133, 100, 120, 170, 140, 100, 120, 60, 70, 75],
        borderColor: 'rgb(255, 192, 152)',
        backgroundColor: 'rgb(255, 192, 152)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Van',
        data: [10, 44, 11, 38, 19, 35, 13, 44, 19, 32, 18, 31],
        borderColor: 'rgb(237, 166, 123)',
        backgroundColor: 'rgb(237, 166, 123)',
        stack: 'combined',
        type: 'bar'
      },
      {
        label: 'Trend',
        data: [326, 427, 435, 361, 381, 347, 338, 306, 294, 279, 240, 292],
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
        text: 'Doanh số bán xe'
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