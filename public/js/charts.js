new Chart(document.getElementById("chartjs-doughnut"), {
    type: "doughnut",
    data: {
      labels: ["Social", "Search Engines", "Direct", "Other"],
      datasets: [{
        data: [260, 125, 54, 146],
        backgroundColor: [
          window.theme.primary,
          window.theme.success,
          window.theme.warning,
          "#dee2e6"
        ],
        borderColor: "transparent"
      }]
    },
    options: {
      maintainAspectRatio: false,
      cutoutPercentage: 65,
    }
  });
