const PTSP_admin_DoanhSoSanPhamMoi = document.getElementById("PTSP_admin_DoanhSoSanPhamMoi");

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgba(" + r + "," + g + "," + b + ")";
}

new Chart(PTSP_admin_DoanhSoSanPhamMoi, {
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
                label: "SP A",
                data: [0, 0, 30, 35, 50, 67, 64, 69, 75, 70, 65, 62],
                backgroundColor: "rgb(209, 20, 20)",
                borderColor: "rgba(209, 20, 20, 0.75)",
                tension: 0,
                fill: false,
            },
            {
                label: "SP B",
                data: [0, 0, 0, 0, 30, 37, 42, 35, 33, 20, 0, 0],
                backgroundColor: "rgb(255,165,0)",
                borderColor: "rgba(255,165,0,0.75)",
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
                position: "bottom",
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
                text: 'Doanh số các sản phẩm mới'
              },
        },
    },
});
