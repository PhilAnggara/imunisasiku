var optionsBb = {
  series: [{
    name: 'Berat badan',
    data: bb
  }],
  title: {
    text: 'Berat badan',
    align: 'center'
  },
  chart: {
    type: 'area',
    height: 350,
    zoom: {
      enabled: false
    }
  },
  stroke: {
    curve: 'straight'
  },
  xaxis: {
    categories: labels
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " kg"
      }
    }
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'],
      opacity: 0.5
    },
  },
  theme: {
    palette: 'palette3' // upto palette10
  }
}

var optionsTb = {
  series: [{
    name: 'Tinggi badan',
    data: tb
  }],
  title: {
    text: 'Tinggi badan',
    align: 'center'
  },
  chart: {
    type: 'bar',
    height: 350,
    zoom: {
      enabled: false
    }
  },
  stroke: {
    curve: 'straight'
  },
  xaxis: {
    categories: labels
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " cm"
      }
    }
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'],
      opacity: 0.5
    },
  },
  theme: {
    palette: 'palette1' // upto palette10
  }
}

var optionsLk = {
  series: [{
    name: 'Lingkar kepala',
    data: lk
  }],
  title: {
    text: 'Lingkar kepala',
    align: 'center'
  },
  chart: {
    type: 'line',
    height: 350,
    zoom: {
      enabled: false
    }
  },
  stroke: {
    curve: 'straight'
  },
  xaxis: {
    categories: labels
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return val + " cm"
      }
    }
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'],
      opacity: 0.5
    },
  },
  theme: {
    palette: 'palette5' // upto palette10
  }
}

var chart = new ApexCharts(document.querySelector("#chart-bb"), optionsBb);
chart.render();
var chart = new ApexCharts(document.querySelector("#chart-tb"), optionsTb);
chart.render();
var chart = new ApexCharts(document.querySelector("#chart-lk"), optionsLk);
chart.render();