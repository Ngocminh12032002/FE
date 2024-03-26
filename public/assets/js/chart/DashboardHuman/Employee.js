const Employee = document.getElementById('Employee');
new Chart(Employee, {
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
        borderColor: 'rgb(192, 127, 0, 0.5)',
        backgroundColor: 'rgb(192, 127, 0)',
        tension: 0,
        fill: false

      },
    ]
  },
  options: {
    indexAxis: 'x',
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: {
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

