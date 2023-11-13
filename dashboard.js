// Example of Chart.js for displaying air quality data

const ctx = document.getElementById('airQualityChart').getContext('2d');
const airQualityChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: /* Time Labels */,
    datasets: [{
      label: 'CO2 Levels',
      data: /* Data from JSON file */,
      backgroundColor: 'rgba(0, 123, 255, 0.5)',
      borderColor: 'rgba(0, 123, 255, 1)',
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
