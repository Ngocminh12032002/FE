const AvgLeave = document.getElementById('AvgLeave');
new Chart(AvgLeave, {
  type: 'bar',
  data: {
    labels:[ 
      "Strategy",
      "HR",
      "Finance",
      "IT",
  ],
    datasets: [
      {
        label: '',
        data: [30, 20, 20, 60],
        borderColor: 'rgb(230, 181, 102, 0.5)',
        backgroundColor: 'rgb(230, 181, 102)',
        tension: 0,
        fill: false

      },
    ]
  },
  options: {
    indexAxis: 'y',
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      x: {
        display: false, 
        stacked: false,
      }
    },
    plugins: {
      legend: {
        display: false,
        position: 'right',
      },
      title: {
        display: true,
        // text: 'Chart.js Horizontal Bar Chart'
      },
      datalabels: {
        anchor: 'center',
        align: 'center',
        font: {
          size: 12,
        },
        formatter: function(value) {
          return value;
        },
        color: 'white'
      }
    }
  },
  // Add ChartDataLabels plugin to show the data labels
  plugins: [ChartDataLabels],
});

