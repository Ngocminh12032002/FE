const KeyLineChart_admin_loiNhuan = document.getElementById('KeyLineChart_admin_loiNhuan');

function dynamicColors() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return 'rgba(' + r + ',' + g + ',' + b + ', 0.5)';
}


new Chart(KeyLineChart_admin_loiNhuan, {
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
    datasets: [
        {
            label: "Biên lợi nhuận gộp",
            data: [13.62, 6.86, 19.1, 2.25, 43.1, 17.29, 8.36, 16.75, 0.45, 0.40, 8.17, 2.42],
            backgroundColor: "rgb(170, 17, 17)",
            borderColor: "rgb(170, 17, 17, 0.5)",
            tension: 0,
            fill: false,
        },
        {
            label: "Biên lợi nhuận ròng",
            data: [10.58, 3.8, 16.14, -0.69, 40.13, 14.31, 5.42, 13.98, -2.5, -2.36, 5.66, -0.12],
            backgroundColor: "rgb(198, 172, 42)",
            borderColor: "rgb(198, 172, 42, 0.5)",
            tension: 0,
            fill: false,
        },        
    ],
},
options: {
  responsive: true,
    maintainAspectRatio: false,
    interaction: {
      mode: 'index',
      intersect: false,
    },
  plugins: {
    legend: {
      position: 'top',
    },
    title: {
      display: false,
      // text: 'Chart.js Line Chart'
    },
    legend: {
      labels:{
        font: {
          size:8
        },
        boxWidth:15,          
      },
      maxWidth:4,        
    },
  }
},
});


// datasets: [
//   {
//       label: "Biên lợi nhuận gộp",
//       data: [13622900000, 6861082000, 19100704000, 2248856000, 43103650000, 17297506000, 8361572000, 16753020000, 457086000, 401608000, 8169750000, 2422142000],
//       backgroundColor: "rgb(170, 17, 17)",
//       borderColor: "rgb(170, 17, 17, 0.5)",
//       tension: 0,
//       fill: false,
//   },
//   {
//       label: "Biên lợi nhuận ròng",
//       data: [10579235965, 3808153490, 16135546928, -686968005, 40126434423, 14312050868, 5422199261, 13979928916, -2497534322, -2363121218, 5664529905, -120507467],
//       backgroundColor: "rgb(198, 172, 42)",
//       borderColor: "rgb(198, 172, 42, 0.5)",
//       tension: 0,
//       fill: false,
//   },        
// ]