const Bottom4 = document.getElementById('Bottom4');
new Chart(Bottom4, {
  type: 'bar',
  data: {
    labels: ["England", "Scotland", "Wales", "Northern Ireland"],
    datasets: [
      {
        label: '',
        data: [215, 478, 347, 27],
        borderColor: 'rgb(154, 134, 164, 0.5)',
        backgroundColor: 'rgb(154, 134, 164)',
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
        display: false,
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
        color: 'black'
      }
    }
  },
  // Add ChartDataLabels plugin to show the data labels
  plugins: [ChartDataLabels],
});

