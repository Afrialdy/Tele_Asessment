const ctx = document.getElementById('myChart');
const ourchart = document.getElementById('ourchart');

var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [10, 18, 26, 24, 22],
      label: '# of Minute',
      borderWidth: 1,
      backgroundColor: [
        '#165baa',
        '#f765a3',
        '#e697ff',
        '#2d9cdb',
        '#a155b9'
      ]
    }],
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false
      },
    }
  }
});

var myChart = new Chart(ourchart, {
  type: 'pie',
  data: {
    datasets: [{
      data: [5, 3, 20, 27, 24, 21],
      label: '# of Score',
      borderWidth: 1,
      backgroundColor: [
        '#ad61c5',
        '#165baa',
        '#e13760',
        '#2d9cdb',
        '#e697ff',
        '#f76593'
      ]
    }],
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        display: false
      }
    }
  }
});
