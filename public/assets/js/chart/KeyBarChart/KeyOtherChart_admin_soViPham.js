const KeyOtherChart_admin_soViPham = document.getElementById("KeyOtherChart_admin_soViPham");

new Chart(KeyOtherChart_admin_soViPham, {
    type: "scatter",
    data: {
        // labels: ["Nhân sự", "Marketing", "Tuyển Dụng", "Kiếm Soát"],
        // datasets: [
        //     {
        //         label: "Chỉ số 1",
        //         data: [12, 19, 3, 5],
        //         backgroundColor: "rgb(0,165,255)",
        //         borderColor: "rgba(0,165,255,0.75)",
        //         borderWidth: 1,
        //     },
        //     {
        //       label: "Chỉ số 2",
        //       data: [5, 10, 18, 9],
        //       backgroundColor: "rgb(255,165,0)",
        //       borderColor: "rgba(255,165,0,0.75)",
        //       borderWidth: 1,
        //   },
        // ],
        datasets: [{
          label: 'Vi phạm hành chính',
          data: [{
            x: 1,
            y: 15,
          }, {
            x: 2,
            y: 8,
          }, {
            x: 3,
            y: 8,
          },{
            x: 4,
            y: 5,
          },{
            x: 6,
            y: 13,
          },{
            x: 7,
            y: 14,
          },{
            x: 8,
            y: 9,
          },{
            x: 9,
            y: 4,
          },{
            x: 10,
            y: 10,
          },{
            x: 12,
            y: 4,
          }],
          backgroundColor: 'rgb(224, 18, 202)'
        },{
          label: 'Vi phạm nghiệp vụ',
          data: [{
            x: 1,
            y: 9,
          }, {
            x: 2,
            y: 14,
          }, {
            x: 3,
            y: 10,
          },{
            x: 5,
            y: 15,
          },{
            x: 6,
            y: 7,
          },{
            x: 7,
            y: 7,
          },{
            x: 8,
            y: 10,
          },{
            x: 9,
            y: 13,
          },{
            x: 10,
            y: 9,
          },{
            x: 11,
            y: 11,
          },{
            x: 12,
            y: 13,
          }],
          backgroundColor: 'orange'
        },{
          label: 'Số sự cố',
          data: [{
            x: 1,
            y: 11,
          }, {
            x: 2,
            y: 11,
          }, {
            x: 3,
            y: 12,
          },{
            x: 4,
            y: 13,
          },{
            x: 5,
            y: 10,
          },{
            x: 6,
            y: 5,
          },{
            x: 7,
            y: 10,
          },{
            x: 8,
            y: 6,
          },{
            x: 9,
            y: 5,
          },{
            x: 10,
            y: 14,
          },{
            x: 11,
            y: 10,
          },{
            x: 12,
            y: 6,
          }],
          backgroundColor: 'yellow'
        }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          labels:{
            font: {
              size:8
            },
            boxWidth:15,          
          },
          maxWidth:4,        
        },
        title: {
          display: false,
          // text: 'Chart.js Scatter Chart'
        }
      }
    },
});
