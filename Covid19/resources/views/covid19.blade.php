<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- @foreach ($data as $item)
      {{$item['Confirmed']}}
    @endforeach -->
    <?php
      // header('Content-type: application/json');
      // $dataCovid = file_get_contents('https://api.covid19api.com/total/dayone/country/switzerland');
      // $obj = json_decode($dataCovid, true);
      // echo "$dataCovid";
     ?>

      <center>
        <h1 style="font-family: sans-serif;">Perkembangan Status Covid19 di Switzerland</h1>
          <div style="width:50%;">
            <canvas id="myChart" />
            <script type="text/javascript">
            var months = ["2020-02-25", "2020-03-25", "2020-04-25", "2020-05-25", "2020-06-25", "2020-07-25", "2020-08-25", "2020-09-25"];
            var confirmed = [1, 10897, 28894, 30746, 31428, 34302, 40262, 51864];

                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                  // The type of chart we want to create
                  type: 'line',

                  // The data for our dataset
                  data: {
                      labels: months,
                      datasets: [{
                          label: 'Confirmed Positive',
                          backgroundColor: '#273c75',
                          borderColor: '#273c75',
                          data: confirmed,
                          fill: false,
                          pointBorderWidth:0.1
                      }, {
                          label: 'Recovered',
                          backgroundColor: '#44bd32',
                          borderColor: '#44bd32',
                          data: [0, 131, 21300, 28200, 29000, 30500, 34400, 42600, ],
                          fill: false,
                          pointBorderWidth:0.1

                      }, {
                          label: 'Confirmed Deaths',
                          backgroundColor: '#d63031',
                          borderColor: '#d63031',
                          data: [0, 153, 1599, 1913, 1958, 1977, 2002, 2064, ],
                          fill: false,
                          pointBorderWidth:0.1
                      }],

                  },

                  // Configuration options go here
                  options: {
                    // scales:{
                    //   xAxes: [{
                    //     type: 'time',
                    //     display: true,
                    //     scaleLable: {
                    //       display: true,
                    //       labelString: 'Date'
                    //     }
                    //   }]
                    // },
                      elements: {
                        line: {
                            tension: 0 // disables bezier curves
                        }
                      },
                  }
                });
          </script>
        </div>
      </center>
  </body>
</html>
