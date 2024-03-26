const Income = document.getElementById('Income');
new Chart(Income, {
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
        label: 'Avg Salary',
        data: [30, 20, 20, 60],
        borderColor: 'rgb(230, 181, 102, 0.5)',
        backgroundColor: 'rgb(230, 181, 102)',
        stack: 'combined',

      },
      
      {
        label: 'Avg Bonus',
        data: [20, 26, 10, 48],
        borderColor: 'rgb(162, 221, 202, 0.5)',
        backgroundColor: 'rgb(162, 221, 202)',
        stack: 'combined',

      },

      {
        label: 'Avg Overtime',
        data: [20, 26, 10, 48],
        borderColor: 'rgb(173, 142, 112, 0.5)',
        backgroundColor: 'rgb(173, 142, 112)',
        stack: 'combined',

      }
    ]
  },
  options: {
    indexAxis: 'y',
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each horizontal bar to be 2px wide
    elements: {
      bar: {
        borderWidth: 2,
      }
    },
    responsive: true,
      maintainAspectRatio: false,
    plugins: {
      legend: {
        position: 'bottom',
      },
      title: {
        display: true,
        // text: 'Chart.js Horizontal Bar Chart'
      }
    }
  },
});
