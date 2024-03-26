
const Open = document.getElementById("Open");

new Chart(Open, {
    type: "doughnut",
    data: {
        labels: ["IT", "Finance", "HR", "Strategy"],
        datasets: [
            {
                // label: "Chỉ số",
                data: [17, 12, 7, 4],
                borderWidth: 1,
                backgroundColor: [
                    'rgb(246, 241, 233)',
                    'rgb(255, 217, 90)',
                    'rgb(192, 127, 0)',
                    'rgb(76, 61, 61)'
                ]
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
            position: "bottom",
          },
          title: {
            display: true,
            //   text: 'Chart.js Doughnut Chart'
          },
          datalabels: {
            formatter: (value, ctx) => {
              let sum = 0;
              let dataArr = ctx.chart.data.datasets[0].data;
              dataArr.map((data) => {
                sum += data;
              });
              let percentage = value + "%";
              return percentage;
            },
            color: "white",
          },
        },
      },
      plugins: [ChartDataLabels],
});

