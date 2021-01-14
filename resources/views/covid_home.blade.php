@extends('covid_common')
@section('main_page')
<div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>World</h3>
                    <ul>
                        <li>Home</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                    <div class="col-xl-3 col-sm-6 col-12 rounded">
                        <div class="dashboard-summery-one mg-b-20 rounded" style="background-color: #edf6f7">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                               
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Total Cases</div>
                                        <div class="item-number"><span class="counter" data-num=" {{$all_data['Global']['TotalConfirmed']}}"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20" style="background-color: #edf6f7">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-yellow" style="opacity: 0.6">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Active Cases</div>
                                        <div class="item-number"><span class="counter" data-num="{{$all_data['Global']['TotalConfirmed']-$all_data['Global']['TotalRecovered']-$all_data['Global']['TotalDeaths']}}"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20" style="background-color: #edf6f7">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-success" style="opacity: 0.6">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Recovery Cases</div>
                                        <div class="item-number"><span class="counter" data-num="{{$all_data['Global']['TotalRecovered']}}"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20" style="background-color: #edf6f7">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-red" style="opacity: 0.6">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Death Cases</div>
                                        <div class="item-number"><span class="counter"
                                                data-num="{{$all_data['Global']['TotalDeaths']}}"></span></div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <h1>Daily Update</h1>
                <div class="row gutters-20">
                    <div class="col-xl-3 col-sm-6 col-12 rounded">
                        <div class="dashboard-summery-one mg-b-20 rounded" style="background-color: #edf6f7">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                               
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Total New Cases</div>
                                        <div class="item-number"><span class="counter" data-num=" {{$all_data['Global']['NewConfirmed']}}"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20" style="background-color: #edf6f7">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-success" style="opacity: 0.6">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">New Recovery </div>
                                        <div class="item-number"><span class="counter" data-num="{{$all_data['Global']['NewRecovered']}}"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="dashboard-summery-one mg-b-20" style="background-color: #edf6f7">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon bg-red" style="opacity: 0.6">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">New Death Cases</div>
                                        <div class="item-number"><span class="counter"
                                                data-num="{{$all_data['Global']['NewDeaths']}}"></span></div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>


                <!-- Dashboard summery End Here -->
                <div class="card height-auto" >
                    <div class="card-body" style="background-color: #edf6f7">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3><u>World Corona Pie Chart</u></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <button class="btn btn-primary my-2" onclick="totalcase()" style="width: 100%;height: 40px;border-radius: 10px;font-size: 20px;">All Cases</button>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <button class="btn btn-primary my-2" onclick="newworldcases()" style="width: 100%;height: 40px;border-radius: 10px;font-size: 20px;">New Cases</button>
                            </div>
                        </div>
                       <div class="row">
                        <div class="col-12" >
                            <div id="piechart_3d" style="height: 500px;width: 100%"></div>
                        </div>
                       </div>

                       <div class="heading-layout1">
                           <div class="item-title">
                               <h3><u>World Corona Pie Chart</u></h3>
                           </div>
                       </div>
                       
                       <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <select class="form-control my-2" id="case_select"  style="width: 100%;height: 40px;border-radius: 10px;font-size: 20px;">
                                    <option value="All Cases">All Cases</option>
                                    <option value="All Recovery">All Recovery</option>
                                    <option value="All Deaths">All Deaths</option>
                                    <option value="New Cases">New Cases</option>
                                    <option value="New Recovery">New Recovery</option>
                                    <option value="New Deaths">New Deaths</option>
                                    
                                </select>
                            </div>
                            <div class="col-sm-3 col-lg-2">
                                <button class="btn btn-outline-primary my-2" style="width: 100%;height: 40px;border-radius: 10px;font-size: 20px;"id="case_get">Get</button>
                            </div>
                          </div>
                        </div>
                            

                       <div class="row">
                        <div class="col-12" >

                             <div id="regions_div" style="width: 100%; height: 500px;"></div>
                        </div>
                           
                       </div>

                </div>
              </div>
{{csrf_field()}}
@endsection

@section('scripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

                   

                $(document).ready(function(){
                  $(document).on('click','#case_get',function(){
                      var select_case=$('#case_select').val();
                      console.log(select_case);

               
                      if(select_case=='All Cases')
                      {
                             allcases();
                      }

                      else if(select_case=='All Recovery')
                      {
                                recovery() ;
                      }
                      else if(select_case=='All Deaths')
                      {
                          deaths();
                      }
                      else if(select_case=='New Cases')
                      {
                          newcases();
                      }
                      else if(select_case=='New Recovery')
                      {
                           newrecovery();
                      }
                      else if(select_case=='New Deaths')
                      {
                          newdeaths();
                      }

                  });
                });



      totalcase()
      function totalcase() {
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {

              var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],

                <?php
                $x=$all_data['Global']['TotalConfirmed']-$all_data['Global']['TotalRecovered']-$all_data['Global']['TotalDeaths'];
                  echo "['Total Active Cases', ".$x."],";
                  echo "['Total Recoverey Cases', ".$all_data['Global']['TotalRecovered']."],";
                  echo "['Total Deaths Cases', ".$all_data['Global']['TotalDeaths']."],";
                ?>
              ]);

              var options = {
                 is3D: true,
                 backgroundColor: '#edf6f7',
                 slices: {
                  0: { color: '#e0ed28' },
                  1: { color: 'green' },
                  2: { color: 'red' }
                }
              };

              var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
              chart.draw(data, options);
            }

            $(document).ready(function(){
              $(window).resize(function(){
              drawChart();
              });
          });

      }

      function newworldcases() {
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {

              var data = google.visualization.arrayToDataTable([
                 ['Task', 'Hours per Day'],
                <?php
                  echo "['New Recoverey Cases', ".$all_data['Global']['NewRecovered']."],";
                  echo "['New Deaths Cases', ".$all_data['Global']['NewDeaths']."],";
                ?>
              ]);

              var options = {
                 is3D: true,
                 backgroundColor: '#edf6f7',
                 slices: {
                  0: { color: 'green' },
                  1: { color: 'red' }
                }
              };

              var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
              chart.draw(data, options);
            }

      }

      

    </script>

    <script type="text/javascript">
        allcases()
        function allcases() {
                  google.charts.load('current', {
              'packages':['geochart'],
              
              'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
            });
            google.charts.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {
              var data = google.visualization.arrayToDataTable([
                ['Country', 'All Case'],
                <?php

                      for ($i=0; $i<count($all_data['Countries']) ; $i++) { 
                          echo "['".$all_data['Countries'][$i]['CountryCode']."', ".$all_data['Countries'][$i]['TotalConfirmed']."],";
                      }
                ?>
              ]);

              var options = {
                   backgroundColor: '#edf6f7',
                   colorAxis: {colors: ['green','yellow','red']}
              };

              var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

              chart.draw(data, options);
            }


        }


      function newcases() {
          google.charts.load('current', {
            'packages':['geochart'],
            
            'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
          });
          google.charts.setOnLoadCallback(drawRegionsMap);

          function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
              ['Country', 'New Case'],
              <?php

                    for ($i=0; $i<count($all_data['Countries']) ; $i++) { 
                        echo "['".$all_data['Countries'][$i]['CountryCode']."', ".$all_data['Countries'][$i]['NewConfirmed']."],";
                    }
              ?>
            ]);

            var options = {
                 backgroundColor: '#edf6f7',
                 colorAxis: {colors: ['green','yellow','red']}
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chart.draw(data, options);
          }

      }


      function recovery() {
          google.charts.load('current', {
            'packages':['geochart'],
            
            'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
          });
          google.charts.setOnLoadCallback(drawRegionsMap);

          function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
              ['Country', 'Total Recovery'],
              <?php

                    for ($i=0; $i<count($all_data['Countries']) ; $i++) { 
                        echo "['".$all_data['Countries'][$i]['CountryCode']."', ".$all_data['Countries'][$i]['TotalRecovered']."],";
                    }
              ?>
            ]);

            var options = {
                 backgroundColor: '#edf6f7',
                 colorAxis: {colors: ['green','yellow','red']}
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chart.draw(data, options);
          }

      }


      function newrecovery() {
          google.charts.load('current', {
            'packages':['geochart'],
            
            'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
          });
          google.charts.setOnLoadCallback(drawRegionsMap);

          function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
              ['Country', 'New Recovery'],
              <?php

                    for ($i=0; $i<count($all_data['Countries']) ; $i++) { 
                        echo "['".$all_data['Countries'][$i]['CountryCode']."', ".$all_data['Countries'][$i]['NewRecovered']."],";
                    }
              ?>
            ]);

            var options = {
                 backgroundColor: '#edf6f7',
                 colorAxis: {colors: ['green','yellow','red']}
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chart.draw(data, options);
          }

      }


      function deaths() {
          google.charts.load('current', {
            'packages':['geochart'],
            
            'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
          });
          google.charts.setOnLoadCallback(drawRegionsMap);

          function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
              ['Country', 'Total Deaths'],
              <?php

                    for ($i=0; $i<count($all_data['Countries']) ; $i++) { 
                        echo "['".$all_data['Countries'][$i]['CountryCode']."', ".$all_data['Countries'][$i]['TotalDeaths']."],";
                    }
              ?>
            ]);

            var options = {
                 backgroundColor: '#edf6f7',
                 colorAxis: {colors: ['green','yellow','red']}
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chart.draw(data, options);
          }

      }

      function newdeaths() {
          google.charts.load('current', {
            'packages':['geochart'],
            
            'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
          });
          google.charts.setOnLoadCallback(drawRegionsMap);

          function drawRegionsMap() {
            var data = google.visualization.arrayToDataTable([
              ['Country', 'New Deaths'],
              <?php

                    for ($i=0; $i<count($all_data['Countries']) ; $i++) { 
                        echo "['".$all_data['Countries'][$i]['CountryCode']."', ".$all_data['Countries'][$i]['NewDeaths']."],";
                    }
              ?>
            ]);

            var options = {
                 backgroundColor: '#edf6f7',
                 colorAxis: {colors: ['green','yellow','red']}
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chart.draw(data, options);
          }
          $(document).ready(function(){
                $(window).resize(function(){
                drawRegionsMap();
                });
            });

      }

      
            
    </script>

   
@endsection