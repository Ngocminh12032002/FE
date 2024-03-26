const MTT_DoanhThuTheoVung = document.getElementById("MTT_DoanhThuTheoVung");

new Chart(MTT_DoanhThuTheoVung, {
  type: "pie",
  data: {
      labels: ['Miền Bắc', 'Miền Trung', 'Miền Nam'],
      datasets: [
          {
              label: "Doanh thu",
              backgroundColor: ['rgb(197, 230, 126)', 'rgb(255, 230, 139)', 'rgb(255,165,0)'],              
              data: [8000, 5400, 6800],
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
              display: true,
              position: 'bottom',
              labels:{
                font: {
                  size:8
                },
                boxWidth:15,
                position:'top',
              },
              maxWidth:4, 
          },
          datalabels: {
            formatter: function (value) {
                return Math.round(value) + '%';
            },
            color: "white",
        },
          tooltip: { enabled: true },
          title: {
            display: true,
            text: 'Doanh thu theo vùng'
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
