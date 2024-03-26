const KeyOtherChart_admin_chiPhi = document.getElementById("KeyOtherChart_admin_chiPhi");

new Chart(KeyOtherChart_admin_chiPhi, {
  type: "pie",
  data: {
      labels: ['Vận hành sản xuất', 'Vận hành kinh doanh', 'Truyền thông', 'Sự kiện'],
      datasets: [
          {
              label: "Chi Phí",
              backgroundColor: ['rgb(236, 184, 184)', 'rgb(241, 158, 158)', 'rgb(203, 11, 11)', 'rgb(235, 131, 131)'],              
              data: [300, 60, 66, 75],
              borderWidth: 1,
          },
      ],
  },
  options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          y: {
              display: false,
              scaleLabel: {
                  display: true,
                  labelString: "probability",
              },
              ticks: {
                  beginAtZero: true,
              },
          },
          x: {
              display: false,
          },
      },
      plugins: {
          legend: {
              display: false,
              position: 'top',
          },
          datalabels: {
            formatter: function (value) {
                return Math.round(value) + '%';
            },
            color: "white",
        },
          tooltip: { enabled: true },
          title: {
            display: false,
            // text: 'Tình hình kinh doanh'
          }
      },
  },
});


// const KeyOtherChart_admin_chiPhi = document.getElementById("KeyOtherChart_admin_chiPhi");

// new Chart(KeyOtherChart_admin_chiPhi, {
//     type: "doughnut",
//     data: {
//       labels: ['Máy móc thiết bị', 'Nguyên liệu lắp ráp', 'Khấu hao tài sản', 'Thuê mặt bằng', 'Quảng cáo', 'Mạng xã hội', 'Sự kiện A', 'Sự kiện B', 'Sự kiện C', 'Vận hành sản xuất', 'Vận hành kinh doanh', 'Truyền thông', 'Sự kiện'],
//       // labels: [],
//       datasets: [
//         { 
//           label: "Chi phí", 
//           backgroundColor: ['red', 'red', 'red', 'yellow', 'orange', 'orange', 'pink', 'pink', 'pink'],
//           data: [150, 100, 50, 60, 36, 30, 30, 25, 20]
//         },
//         {
//           labels: "Chi phí",
//           backgroundColor: ['red', 'yellow', 'orange', 'pink'],
//           data: [300, 60, 66, 75]
//         },        
//       ]
//     },
//     options: {
//       responsive: true,
//       maintainAspectRatio: false,
//       scales: {
//           y: {
//               display: false,
//               scaleLabel: {
//                   display: true,
//                   labelString: "probability",
//               },
//               ticks: {
//                   beginAtZero: true,
//               },
//           },
//           x: {
//               display: false,
//           },
//       },
//       plugins: {
//           legend: {
//             display: false, 
//             position: 'top',
//           },
//           title: {
//             display: false,
//           //   text: 'Chart.js Doughnut Chart'
//           }
//         }
//   },
// });
