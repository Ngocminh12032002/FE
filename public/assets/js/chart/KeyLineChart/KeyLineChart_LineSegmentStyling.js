const KeyLineChart_LineSegmentStyling = document.getElementById('KeyLineChart_LineSegmentStyling');

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}

new Chart(KeyLineChart_LineSegmentStyling, {
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
    datasets: [{
      label: 'My First Dataset',
      data: [65, 59, NaN, 48, 56, 57, 40],
      borderColor: 'rgb(75, 192, 192)',
      segment: {
        borderColor: KeyLineChart_LineSegmentStyling => skipped(KeyLineChart_LineSegmentStyling, 'rgb(0,0,0,0.2)') || down(ctKeyLineChart_LineSegmentStylingx, 'rgb(192,75,75)'),
        borderDash: KeyLineChart_LineSegmentStyling => skipped(KeyLineChart_LineSegmentStyling, [6, 6]),
      },
      spanGaps: true
    }]
  },
  options: {
    fill: false,
    interaction: {
      intersect: false
    },
    radius: 0,
  }










  // type: "line",
  // data: {
  //     labels: [
  //         "T1",
  //         "T2",
  //         "T3",
  //         "T4",
  //         "T5",
  //         "T6",
  //         "T7",
  //         "T8",
  //         "T9",
  //         "T10",
  //         "T11",
  //         "T12",
  //     ],
  //     datasets: [
  //         {
  //             label: "Ngày",
  //             data: [80, 75, 70, 65, 60, 65, 70, 75, 80, 75, 70, 65],
  //             backgroundColor: "rgb(54, 162, 235)",
  //             borderColor: "rgb(54, 162, 235, 0.5)",
  //             tension: 0,
  //             fill: false,
  //         },
  //         {
  //             label: "Tháng",
  //             data: [0, 20, 10, 30, 40, 60, 50, 70, 80, 100, 90, 0],
  //             backgroundColor: "rgb(153, 102, 255)",
  //             borderColor: "rgb(153, 102, 255, 0.5)",
  //             tension: 0,
  //             fill: false,
  //         },
  //         {
  //             label: "Năm",
  //             data: [100, 20, 30, 40, 50, 10, 70, 80, 90, 100, 90, 95],
  //             backgroundColor: "rgb(201, 203, 207)",
  //             borderColor: "rgb(201, 203, 207, 0.5)",
  //             tension: 0,
  //             fill: false,
  //         },
  //     ],
  // },
  // options: {
  //   responsive: true,
  //     maintainAspectRatio: false,
  //   plugins: {
  //     legend: {
  //       position: 'top',
  //     },
  //     title: {
  //       display: true,
  //       text: 'Chart.js Line Chart'
  //     }
  //   }
  // },
});



