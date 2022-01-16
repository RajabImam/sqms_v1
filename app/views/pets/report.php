<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

  <div class="col-3">
    <?php require APPROOT . '/views/includes/menu.php'; ?>
  </div>
  <div class="col-9">
    <?php require APPROOT . '/views/includes/footer.php'; ?>

    <p>
      <a href="<?php echo URLROOT; ?>/pets/index" class="btn btn-success">Back to My Pets</a>
    </p>

    <h1 class="text-success">Pet Sleep Report</h1>

    <input type="hidden" name="device-id" id = "device-id" value = "<?php echo $_GET['device_code'];?>">
    <input type="hidden" name="api-base-url" id = "api-base-url" value = "<?php echo BASEURL; ?>">

    <div class="container">
      <div class="row">
        
        <div class="col-8">
          <div class="graph-top-row row">
            <div class="col-6">
              <div class="heart-rate-graph">
                <canvas id="myChart1"></canvas>
              </div>
            </div>

            <div class="col-6">
              <div class="temperature-graph">
                <canvas id="myChart2"></canvas>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="oxygen-saturation-graph">
                <canvas id="myChart3"></canvas>
              </div>
            </div>

            <div class="col-6">
              <div class="accelerometer-graph">
                <canvas id="myChart4"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">

          <div>
            <div>
            <div class='col-lg-9'>
              <!--<div><span>From:</span><input type="datetime-local" name="from-date" value=<?php $d2 = new DateTime('NOW'); $d1 = $d2->sub(new DateInterval('PT8H')); echo '"'.$d1->format('Y-m-d').'T'.$d1->format('H:i').'"'?> id="from-date"></div>
              <div><span>To:</span><input type="datetime-local" name="to-date" value=<?php $d2 = new DateTime('NOW'); echo '"'.$d2->format('Y-m-d').'T'.$d2->format('H:i').'"'?> id="to-date"></div>-->
              <span id = "filter-message" style = "color:red;font-weight:bold;"></span>

              <div><span>From:</span><input type="date" onchange="handler(event);"name="from-date" value=<?php $d2 = new DateTime('NOW'); $d1 = $d2->sub(new DateInterval('PT8H')); echo '"'.$d1->format('Y-m-d').'"'?> id="from-date"></div>
              <div><span>To:</span><input type="date" onchange="handler(event);" name="to-date" value=<?php $d2 = new DateTime('NOW'); echo '"'.$d2->format('Y-m-d').'"'?> id="to-date"></div>
              
              <div class="sleep-score-card">
                  <div class="sleep-score-title">
                    <h2>Sleep Score</h2>
                  </div>
                  <div class="sleep-score" id = "score"></div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(
        function() {
          
          var xValues = []
          var temperature = []
          var heart_rate = []
          var oxygen_saturation = []
          var accelerometer_data = []

          var fromDate = $("#from-date").val()
          var toDate = $("#to-date").val()
          var deviceId = $("#device-id").val()
          var baseUrl = $("#api-base-url").val()

          var apiUrl = baseUrl + "/analytics/sleepdata" + "?id=" + deviceId + "&" + "fromdate=" + fromDate + "&" + "todate=" + toDate;
          console.log(apiUrl)
          $.ajax({
            url: apiUrl,
            type: "get",
            success: function(data) {
              //var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];
              xValues = data.map(el => el.time)
              temperature = data.map(el => el.temperature)
              heart_rate = data.map(el => el.heart_rate)
              oxygen_saturation = data.map(el => el.oxygen_saturation)
              accelerometer_data = data.map(el => el.accelerometer_data)

              new Chart("myChart1", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'Heart Rate',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: heart_rate,
                    borderColor: "red",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart2", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'temperature',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: temperature,
                    borderColor: "blue",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart3", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'oxygen saturation',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: oxygen_saturation,
                    borderColor: "green",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart4", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'accelerometer',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: accelerometer_data,
                    borderColor: "brown",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              if(data.length !== 0){
                document.getElementById('filter-message').innerHTML = ''
              const average = (array) => array.reduce((a, b) => a + b) / array.length;
              var averageTemperature = average(temperature);
              var averageHeartRate = average(heart_rate);
              var averageOxygenSaturation = average(oxygen_saturation);
              var averageAccelerometerData = average(accelerometer_data);

              var sleepScore = ((averageHeartRate * averageOxygenSaturation)/(averageTemperature * averageAccelerometerData)) * 100
              sleepScore = Number.parseFloat(sleepScore).toFixed(2);
              document.getElementById('score').innerHTML = sleepScore
              }

              else{
                document.getElementById('filter-message').innerHTML = 'No sleep Data for period'
                document.getElementById('score').innerHTML = "-"
              }
            },
            error: function(request, status, error) {
              alert('Currently Unable to retrieve sleep Data')

              document.getElementById('score').innerHTML = "-"

              new Chart("myChart1", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'Heart Rate',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: heart_rate,
                    borderColor: "red",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart2", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'temperature',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: temperature,
                    borderColor: "blue",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart3", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'oxygen saturation',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: oxygen_saturation,
                    borderColor: "green",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart4", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'accelerometer',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: accelerometer_data,
                    borderColor: "brown",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });
            }

          })
        })

        function handler(e){
          var xValues = []
          var temperature = []
          var heart_rate = []
          var oxygen_saturation = []
          var accelerometer_data = []

          var fromDate = $("#from-date").val()
          var toDate = $("#to-date").val()
          var deviceId = $("#device-id").val()

          /*var fromSplit = fromDate.split('T');
          var toSplit = toDate.split('T');

          fromDate = fromSplit[0]
          toDate = toSplit[0]

          var fromTime = fromSplit[1] + ":00"
          var toTime = toSplit[1] + ":00"

          console.log(toTime)*/

          var baseUrl = $("#api-base-url").val()

          var apiUrl = baseUrl + "/analytics/sleepdata" + "?id=" + deviceId + "&" + "fromdate=" + fromDate + "&" + "todate=" + toDate;
          

            $.ajax({
            url: apiUrl,
            type: "get",
            success: function(data) {
              //var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];
              xValues = data.map(el => el.time)
              temperature = data.map(el => el.temperature)
              heart_rate = data.map(el => el.heart_rate)
              oxygen_saturation = data.map(el => el.oxygen_saturation)
              accelerometer_data = data.map(el => el.accelerometer_data)

              new Chart("myChart1", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'Heart Rate',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: heart_rate,
                    borderColor: "red",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart2", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'temperature',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: temperature,
                    borderColor: "blue",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart3", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'oxygen saturation',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: oxygen_saturation,
                    borderColor: "green",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart4", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'accelerometer',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: accelerometer_data,
                    borderColor: "brown",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              if(data.length !== 0){
                document.getElementById('filter-message').innerHTML = ''
              const average = (array) => array.reduce((a, b) => a + b) / array.length;
              var averageTemperature = average(temperature);
              var averageHeartRate = average(heart_rate);
              var averageOxygenSaturation = average(oxygen_saturation);
              var averageAccelerometerData = average(accelerometer_data);

              var sleepScore = ((averageHeartRate * averageOxygenSaturation)/(averageTemperature * averageAccelerometerData)) * 100
              sleepScore = Number.parseFloat(sleepScore).toFixed(2);
              document.getElementById('score').innerHTML = sleepScore
              }

              else{
                document.getElementById('filter-message').innerHTML = 'No sleep Data for period'
                document.getElementById('score').innerHTML = "-"
              }
              
            },
            error: function(request, status, error) {
              alert('Currently Unable to retrieve sleep Data')

              document.getElementById('score').innerHTML = "-"

              new Chart("myChart1", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'Heart Rate',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: heart_rate,
                    borderColor: "red",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart2", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'temperature',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: temperature,
                    borderColor: "blue",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart3", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'oxygen saturation',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: oxygen_saturation,
                    borderColor: "green",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });

              new Chart("myChart4", {
                type: "line",
                data: {
                  labels: xValues,
                  datasets: [{
                    label: 'accelerometer',
                    //data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    data: accelerometer_data,
                    borderColor: "brown",
                    pointRadius: 0,
                    lineTension: 0,
                    fill: false,
                  }]
                },
                options: {

                }
              });
            }

          })
          }
    </script>


    <!--<section class="container-fluid mb-5">
    <div class="row">
      <div class="col-md-4">
        <div id="bar-chart"></div>
      </div>

      <div class="col-md-8">
        <div id="line-chart"></div>
      </div>

      <div class="col-md-8">
        <div id="area-chart"></div>
      </div>

      <div class="col-md-4">
        <div id="donut-chart"></div>
      </div>

      <div class="col-md-8">
        <div id="pie-chart"></div>
      </div>
    </div>
  </section>-->