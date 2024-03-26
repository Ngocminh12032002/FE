const MTT_HieuQuaTruyenThong = document.getElementById("MTT_HieuQuaTruyenThong");

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgba(" + r + "," + g + "," + b + ")";
}

new Chart(MTT_HieuQuaTruyenThong, {
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
                label: "Bài viết SEO",
                data: [46, 45, 52, 24, 21, 43, 41, 49, 51, 29, 49, 51],
                backgroundColor: "rgb(255,165,0)",
                borderColor: "rgba(255,165,0, 0.75)",
                tension: 0,
                fill: false,
            },
            {
                label: "Lưu lượng truy cập web",
                data: [68, 53, 47, 49, 65, 45, 31, 73, 49, 14, 69, 26],
                backgroundColor: "rgb(197, 230, 126)",
                borderColor: "rgba(197, 230, 126,0.75)",
                tension: 0,
                fill: false,
            }, 
            {
                label: "Hiển thị tự nhiên",
                data: [191, 113, 118, 67, 96, 154, 184, 116, 138, 135, 93, 39],
                backgroundColor: "rgb(209, 20, 20)",
                borderColor: "rgba(209, 20, 20, 0.75)",
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
                text: 'Hiệu quả truyền thông'
              },
        },
    },
});
