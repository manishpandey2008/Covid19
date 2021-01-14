@extends('covid_common')
@section('main_page')
<div class="dashboard-content-one" style="overflow-y: hidden;">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>India</h3>
                    <ul>
                        <li>States</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->

                <div class="card height-auto" >
                    <div class="card-body" style="background-color: #edf6f7;">
                       <form method="post" action="/india/states">
                        <div class="row">
                            @csrf
                            <div class="col-lg-9 col-sm-12 my-3">
                                <select class="form-control" style="width: 100%;border-radius: 40px;font-size: 20px;height: 70px;" id="select_bar" name="state_name" required="">
                                    <option value="">Select State Name</option>
                                    <option value="AP">Andhra Pradesh</option>
                                    <option value="AR">Arunachal Pradesh</option>
                                    <option value="AS">Assam</option>
                                    <option value="BR">Bihar</option>
                                    <option value="CT">Chattisgarh</option>
                                    <option value="DL" >Delhi</option>
                                     <option value="DN" >Daman and Diu</option>
                                     <option value="GA" >Goa</option>
                                     <option value="GJ" >Gujarat </option>
                                     <option value="HP" >Himachal Pradesh</option>
                                     <option value="HR" >Haryana</option>
                                     <option value="JH" >Jharkhand</option>
                                     <option value="JK" >Jammu and Kashmir</option>
                                     <option value="KA" >Karnataka</option>
                                     <option value="KL" >Kerala</option>
                                     <option value="LA" >Leh</option>
                                     <option value="MH" >Maharashtra</option>
                                     <option value="ML" >Meghalaya</option>
                                     <option value="MN" >Manipur</option>
                                     <option value="MP" >Madhya Pradesh</option>
                                     <option value="OR" >Odisha</option>
                                     <option value="PB" >Punjab</option>
                                     <option value="PY" >Puducherry</option>
                                     <option value="RJ" >Rajasthan</option>
                                     <option value="TN" >Tamil Nadu</option>
                                     <option value="TR" >Tripura</option>
                                     <option value="UP" >Uttar Pradesh</option>
                                     <option value="UT" >Uttarakhand</option>
                                     <option value="WB" >West Bengal</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 my-3">
                                <button type="submit" class="btn btn-primary" id="find_btn" style="width: 100%;height: 70px;border-radius: 40px;font-size: 20px;">Find Data</button>
                            </div>
                        
                        </div>
                          </form>
                    </div>
                </div>


                <h1 class="text-center"><span id="state_name">{{$state_name}}</span></h1>
                <div class="row gutters-20">
                  <div class="col-xl-3 col-sm-6 col-12 rounded mx-auto">
                      <div class="dashboard-summery-one mg-b-20 rounded" style="background-color: #edf6f7">
                          <div class="row align-items-center">
                              <div class="col-6">
                                  <div class="item-icon">
                                      <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                  </div>
                              </div>
                             
                              <div class="col-6">
                                  <div class="item-content">
                                      <div class="item-title">New Case</div>
                                      <div class="item-number" id="confirmed_case">
                                          <span class="counter" data-num="{{$current_state_status}}" id="confirmed_case_span"></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

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
                                        <div class="item-number" id="confirmed_case">
                                            <span class="counter" data-num="{{$state['confirmed']}}" id="confirmed_case_span"></span>
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
                                        <div class="item-number" id="active_case"><span class="counter" data-num="{{$state['confirmed']-$state['recovered']-$state['deceased']}}" id="active_case_span"></span>
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
                                        <div class="item-number" id="recovery_case"><span class="counter" data-num="{{$state['recovered']}}" id="recovery_case_span"></span>
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
                                        <div class="item-title">Daith Cases</div>
                                        <div class="item-number" id="death_case"><span class="counter"
                                                data-num="{{$state['deceased']}}" id="death_case_span"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="row">
                 <div class="col-12" >
                     <h2 class="my-4"><strong>Line Graph Of All Cases</strong></h2>
                     <div id="piechart_3d" style="height: 300px;"></div>
                 </div>
                
                </div>


                <h2 class="my-4"><strong>Line Graph Of All Cases</strong></h2>
                <div class="row">
                    <div class="col-12 mx-auto" >
                         <div id="columnchart_values" style="width: 100%; height: 500px;"></div>
                    </div>
                </div>
                <div style="height: 100px;">
                    
                </div>
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){
        var x=$("#state_name").text();
        $.post('/state/name',{'val':x,'_token':$('input[name=_token]').val()},function(state_name){

              $("#state_name").text(state_name['0']['State_name']);

             //console.log(state_name['0']['State_name']);
           
        });
    });
  </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
     
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {

              var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],

                <?php
                $x=$state['confirmed']-$state['recovered']-$state['deceased'];
                  echo "['Total Active Cases', ".$x."],";
                  echo "['Total Recoverey Cases', ".$state['recovered']."],";
                  echo "['Total Deaths Cases', ".$state['deceased']."],";
                ?>
              ]);

              var options = {
                 is3D: true,
                 backgroundColor:'#abcdef',
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

    </script>
 <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([


        ["Date", "Corona Case", { role: "style" } ],

<?php
      $x=count($state_daily['states_daily']);


      for($i=0;$i<$x;$i++)
      {
        echo "[".$i.",".$state_daily['states_daily'][$i][$state_name].", 'yellow'],";
      }
        

?>
      ]);

      var view = new google.visualization.DataView(data);
      // view.setColumns([0, 1,
      //                  { calc: "stringify",
      //                    sourceColumn: 1,
      //                    type: "string",
      //                    role: "annotation" },
      //                  2]);

      var options = {
       
        bar: {groupWidth: "70%"},
        legend: { position: "none" },
          backgroundColor:'#abcdef',
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

  
@endsection