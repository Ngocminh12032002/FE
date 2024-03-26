const dash = document.getElementById('dash');
new Chart(dash, {
  type: 'bar',
  data: {
    labels:[ 
      "TC cart",
      "Golf",
      "TQ",
      "Van",
  ],
    datasets: [
      {
        label: 'Kế hoạch',
        data: [2000, 1500, 1300, 900],
        borderColor: 'rgb(255, 205, 86, 0.5)',
        backgroundColor: 'rgb(239, 197, 14)',
        stack: 'combined',

      },
      
      {
        label: 'Đã bán',
        data: [800, 450, 350, 270],
        borderColor: 'rgb(162, 221, 202, 0.5)',
        backgroundColor: 'rgb(247, 129, 11)',
        stack: 'combined',

      },

      {
        label: 'Đã SXLR',
        data: [300, 170, 120, 90],
        borderColor: 'rgb(173, 142, 112, 0.5)',
        backgroundColor: 'rgb(38, 115, 215)',
        stack: 'combined',

      }
    ]
  },
//   options: {
//     indexAxis: 'x',
//     elements: {
//       bar: {
//         borderWidth: 2,
//       }
//     },
//     responsive: true,
//     maintainAspectRatio: false,
//     plugins: {
//       legend: {
//         display: false,
//         position: 'bottom',
//       },
//       title: {
//         display: true,
//         // text: 'Chart.js Horizontal Bar Chart'
//       }
//     }
//   },
options: {
    maintainAspectRatio: false,
    plugins: {
        legend: {
            display: false,
            position: 'bottom',
        },
        title: {
        display: false,
        // text: 'Chart.js Bar Chart - Stacked'
        },
    },
    responsive: true,
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
