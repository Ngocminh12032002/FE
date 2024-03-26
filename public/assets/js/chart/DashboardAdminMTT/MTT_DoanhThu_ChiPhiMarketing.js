const MTT_DoanhThu_ChiPhiMarketing = document.getElementById("MTT_DoanhThu_ChiPhiMarketing");

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgba(" + r + "," + g + "," + b + ")";
}

new Chart(MTT_DoanhThu_ChiPhiMarketing, {
    type: "line",
    data: {
        labels: [
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "10",
            "11",
            "12",
        ],
        datasets: [
            {
                label: "Doanh thu",
                data: [1900, 2300, 2280, 2900, 3500, 4450, 1700, 1600, 1650, 2000, 1950, 2100],
                backgroundColor: "rgb(209, 20, 20)",
                borderColor: "rgba(209, 20, 20, 0.75)",
                tension: 0,
                fill: false,
            },
            {
                label: "Chi phí Marketing",
                data: [300, 320, 700, 320, 280, 680, 340, 330, 330, 320, 720, 320],
                backgroundColor: "rgb(197, 230, 126)",
                borderColor: "rgba(197, 230, 126,0.75)",
                tension: 0,
                fill: false,
            },            
        ],
    },
    options: {
        responsive: true,
        interaction: {
            mode: 'index',
            intersect: false,
          },
        maintainAspectRatio: false,
        scales: {
            y: {
                scaleLabel: {
                    display: true,
                    labelString: "probability",
                },
                ticks: {
                    beginAtZero: true,
                },
            },
        },
        plugins: {
            legend: {
                position: "top",
                labels: {
                    usePointStyle: true,
                    pointStyle: "rectRounded",
                    font: {
                        size:8
                      },
                    boxWidth:15, 
                },                
            },
            title: {
                display: true,
                text: 'Doanh thu - Chi phí Marketing'
              },
        },
    },
});
