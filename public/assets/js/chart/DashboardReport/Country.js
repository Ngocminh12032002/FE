const Country = document.getElementById("Country");

new Chart(Country, {
  type: "line",
  data: {
    labels: [
      "Wales",
      "England",
      "Germany",
      "Scotland",
      "Italy",
      "Ireland",
      "Spain",
      "France",
      "Greece",
      "Portugal",
    ],
    // datasets: [
    //   {
    //     label: "Avg Salary",
    //     data: [
    //       { x: 0, y: 25 },
    //       { x: 1, y: 14 },
    //       { x: 2, y: 10 },
    //       { x: 3, y: 5 },
    //       { x: 4, y: 10 },
    //       { x: 5, y: 35 },
    //       { x: 6, y: 5 },
    //     ],
    //     type: "scatter",
    //     backgroundColor: "rgb(246, 214, 173)",
    //     yAxisID: "y2",
    //   },
    //   {
    //     label: "FTEs",
    //     data: [0, 20, 20, 60, 60, 120, 20],
    //     backgroundColor: "rgb(204, 246, 200)",
    //     yAxisID: "y1",
    //   },
    // ],
    datasets: [
      {
        label: 'FTEs',
        data: [20, 20, 20, 60, 60, 120, 20, 180, 120, 125],
        borderColor: 'rgb(204, 246, 200)',
        backgroundColor: 'rgb(204, 246, 200, 0.5)',
        stack: 'combined',
        type: 'bar',
        yAxisID: "y2"
      },
      {
        label: 'Avg Salary',
        data: [10, 26, 10, 48, 94, 118, 10, 80, 20, 25],
        borderColor: 'rgb(246, 214, 173)',
        backgroundColor: 'rgb(246, 214, 173)',
        stack: 'combined',
        type: 'scatter',
        yAxisID: "y1"
      }
    ]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y1: {
        type: "linear",
        position: "left",
        ticks: {
          // color: "rgb(255, 99, 132)",
        },
        grid: {
          drawOnChartArea: false,
        },
      },
      y2: {
        type: "linear",
        position: "right",
        ticks: {
          // color: "rgb(54, 162, 235)",
        },
        grid: {
          drawOnChartArea: false,
        },
        title: {
          display: true,
          text: 'Avg Salary'
        }
      },
    },
  },
});
