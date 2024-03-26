const KeyBarChart_capphat_right = document.getElementById('KeyBarChart_capphat_right');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyBarChart_capphat_right, {
  type: 'bar',
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
        label: 'Laptop',
        data: [4000, 3766, 3419, 3411, 4107, 3644, 3715, 3659, 4181, 3316, 3329, 3894],
        backgroundColor: 'rgb(203, 11, 11)',
      },
      {
        label: 'Bàn ghế',
        data: [null, null, null, null, 1500, null, null, null, null, null, null, null],
        backgroundColor: 'rgb(235, 131, 131)',
      },
      {
        label: 'Màn chiếu',
        data: [null, null, null, null, null, null, 3000, null, null, null, null, null],
        backgroundColor: 'rgb(236, 184, 184)',
      },
      {
        label: 'Máy in',
        data: [null, null, null, null, null, null, null, null, 2000, null, null, null],
        backgroundColor: 'rgb(236, 184, 184)',
      },
    ]
  },
  options: {
    plugins: {
      title: {
        display: false,
        // text: 'Chart.js Bar Chart - Stacked'
      },
      legend: {
        display: false,                     
      },
    },
    responsive: true,
      maintainAspectRatio: false,     
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


// const KeyBarChart_capphat_right = document.getElementById('KeyBarChart_capphat_right');

// function dynamicColors() {
//   var r = Math.floor(Math.random() * 255);
//   var g = Math.floor(Math.random() * 255);
//   var b = Math.floor(Math.random() * 255);
//   return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
// }


// new Chart(KeyBarChart_capphat_right, {
//   type: 'line',
//   data: {
//     labels: [ 
//       "T1",
//       "T2",
//       "T3",
//       "T4",
//       "T5",
//       "T6",
//       "T7",
//       "T8",
//       "T9",
//       "T10",
//       "T11",
//       "T12",
//   ],
//     datasets: [
//       {
//         label: 'Laptop',
//         data: [4000, 3766, 3419, 3411, 4107, 3644, 3715, 3659, 4181, 3316, 3329, 3894],
//         borderColor: 'rgb(203, 11, 11)',
//         backgroundColor: 'rgb(203, 11, 11)',
//         stack: 'combined',
//         type: 'bar'
//       },
//       {
//         label: 'Bàn ghế',
//         data: [null, null, null, null, 1500, null, null, null, null, null, null, null],
//         borderColor: 'rgb(235, 131, 131)',
//         backgroundColor: 'rgb(235, 131, 131)',
//         stack: 'combined',
//         type: 'bar'
//       },
//       {
//         label: 'Màn chiếu',
//         data: [null, null, null, null, null, null, 3000, null, null, null, null, null],
//         borderColor: 'rgb(236, 184, 184)',
//         backgroundColor: 'rgb(236, 184, 184)',
//         stack: 'combined',
//         type: 'bar'
//       }, 
//       {
//         label: 'Máy in',
//         data: [null, null, null, null, null, null, null, null, 2000, null, null, null],
//         borderColor: 'rgb(236, 184, 184)',
//         backgroundColor: 'rgb(236, 184, 184)',
//         stack: 'combined',
//         type: 'bar'
//       },      
//     ]
//   },
//   options: {
//     responsive: true,
//     maintainAspectRatio: false,
//     interaction: {
//       mode: 'index',
//       intersect: false,
//     },
//     stacked: false,
//     plugins: {
//       title: {
//         display: false,
//         // text: 'Chart.js Stacked Line/Bar Chart'
//       },
//       legend: {
//         display: false, 
//         labels:{          
//           font: {
//             size:8
//           },
//           boxWidth:15,          
//         },
//         maxWidth:4,        
//       },
//     },
//     scales: {
//       x: {
//         stacked: true,
//       },
//       y: {
//         stacked: true
//       }
//     }
//   },
// });


// // datasets: [
// //   {
// //     label: 'Golf & nội khu',
// //     data: [30.214580000, 37.637540000, 33.148120000, 18.149140000, 53.418160000, 51.351840000, 37.583800000, 21.127020000, 28.546680000, 33.832220000, 34.934000000, 24.821380000],
// //     borderColor: 'rgb(203, 11, 11)',
// //     backgroundColor: 'rgb(203, 11, 11)',
// //     stack: 'combined',
// //     type: 'bar'
// //   },
// //   {
// //     label: 'Trolley & Cargo cart',
// //     data: [66.747680000, 10.0102000000, 97.937720000, 90.383620000, 121.316000000, 66.707820000, 116.428000000, 121.696000000, 102.778000000, 145.150000000, 109.540000000, 59.636080000],
// //     borderColor: 'rgb(235, 131, 131)',
// //     backgroundColor: 'rgb(235, 131, 131)',
// //     stack: 'combined',
// //     type: 'bar'
// //   },
// //   {
// //     label: 'Xe tải Van',
// //     data: [55.304700000, 90.943380000, 76.138240000, 61.183420000, 84.192280000, 106.020000000, 57.234480000, 66.815500000, 43.494000000, 71.158620000, 60.660760000, 52.645160000],
// //     borderColor: 'rgb(236, 184, 184)',
// //     backgroundColor: 'rgb(236, 184, 184)',
// //     stack: 'combined',
// //     type: 'bar'
// //   },
// //   {
// //     label: 'Xe tham quan',
// //     data: [26.921960000, 52.146620000, 32.090680000, 41.255900000, 41.143040000, 36.474580000, 38.322680000, 36.258840000, 25.549700000, 28.084900000, 50.471260000, 32.236160000],
// //     borderColor: 'rgb(241, 158, 158)',
// //     backgroundColor: 'rgb(241, 158, 158, 0.5)',
// //     stack: 'combined',
// //     type: 'bar'
// //   },
// //   {
// //     label: 'Số đơn hàng',
// //     data: [1000, 2000, 1900, 1100, 1700, 1500, 1550, 1600, 1300, 1800, 2100, 1850],
// //     borderColor: 'rgb(255, 17, 17)',
// //     backgroundColor: 'rgb(255, 17, 17, 0.5)',
// //     stack: 'combined'
// //   }
// // ]