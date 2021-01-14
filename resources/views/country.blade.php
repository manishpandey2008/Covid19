@extends('covid_common')
@section('styles')
<style type="text/css">
  
  #select_bar,#find_btn{
    width: 100%;border-radius: 40px;font-size: 20px;height: 70px;
  }
  @media only screen and (max-width: 600px) {
   #select_bar,#find_btn{
    height: 50px;
    font-size: 12px;
   }
  }
</style>

@endsection
@section('main_page')
<div class="dashboard-content-one" style="overflow-y: hidden;">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>World</h3>
                    <ul>
                        <li>Country</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->

                <div class="card height-auto" >
                    <div class="card-body" style="background-color: #edf6f7;">
                        <div class="row">
                            <div class="col-lg-9 col-sm-12 my-3">
                                <select class="form-control" style="" id="select_bar">
                                    <option value="">Select Country Name</option>
                                    @foreach($countries as $cou)

                                    <option value="{{$cou['ISO2']}} {{$cou['Country']}}">{{$cou['Country']}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 my-3">
                                <button class="btn btn-primary" id="find_btn" style="">Find Data</button>
                            </div>
                        </div>
                    </div>
                </div>


                <h1 class="text-center" ><span id="country_name">INDIA</span> <img src="https://www.countryflags.io/IN/flat/64.png" id="flag"></h1>


                <div class="row gutters-20">
                    <div class="col-xl-3 col-sm-6 col-12 rounded">
                        <div class="dashboard-summery-one mg-b-20 rounded" style="background-color: #edf6f7">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="item-icon">
                                        <i class="flaticon-multiple-users-silhouette text-blue"></i>
                                    </div>
                                </div>
                                <?php
                                    $x=count($country_india);
                                ?>
                                <div class="col-6">
                                    <div class="item-content">
                                        <div class="item-title">Total Cases</div>
                                        <div class="item-number" id="confirmed_case">
                                            <span class="counter" data-num="{{$country_india[$x-1]['Confirmed']}}" id="confirmed_case_span"></span>
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
                                        <div class="item-number" id="active_case"><span class="counter" data-num="{{$country_india[$x-1]['Confirmed']-$country_india[$x-1]['Recovered']-$country_india[$x-1]['Deaths']}}" id="active_case_span"></span>
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
                                        <div class="item-number" id="recovery_case"><span class="counter" data-num="{{$country_india[$x-1]['Recovered']}}" id="recovery_case_span"></span>
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
                                                data-num="{{$country_india[$x-1]['Deaths']}}" id="death_case_span"></span></div>
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
                    <div class="col-12" >
                        <div id="linechart_material" style="width:100%; height: 300px;"></div>
                    </div>
                </div>
                <div style="height: 100px;">
                    
                </div>


{{csrf_field()}}
@endsection

@section('scripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("click","#find_btn",function(){
            var x=$("#select_bar").val();
                if(x=="")
                {
                    alert("Pls Sectct Country");
                    return 0;
                }
            x=x.split(" ");
            y=x[0];
            var z="https://www.countryflags.io/"+y+"/flat/64.png";

            $("#flag").attr('src',z);
            $("#country_name").text(x[1]);



/////////////////////////////////////////////////////////////////////
            
           
             $.post('/countries',{'val':y,'_token':$('input[name=_token]').val()},function(country_data){
                       // console.log(country_data);
                        var l=country_data.length;
                        if (l==0) {
                           
                        $("#confirmed_case_span").hide();
                       $("#active_case_span").hide();
                       $("#recovery_case_span").hide();
                       $("#death_case_span").hide();
                        }
                       var z=country_data[l-1]['Confirmed']-country_data[l-1]['Recovered']-country_data[l-1]['Deaths'];


                       $("#confirmed_case_span").hide();
                       $("#active_case_span").hide();
                       $("#recovery_case_span").hide();
                       $("#death_case_span").hide();
                     

                       $("#confirmed_case").html('<span id="confirmed_case_span" class="counter" data-num="'+country_data[l-1]['Confirmed']+'">'+country_data[l-1]['Confirmed']+'</span>');
                       $("#active_case").html('<span id="active_case_span" class="counter" data-num="'+z+'">'+z+'</span>');
                       $("#recovery_case").html('<span id="recovery_case_span" class="counter" data-num="'+country_data[l-1]['Recovered']+'">'+country_data[l-1]['Recovered']+'</span>');
                       $("#death_case").html('<span id="death_case_span" class="counter" data-num="'+country_data[l-1]['Deaths']+'">'+country_data[l-1]['Deaths']+'</span>');


//////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////
                google.charts.load('current', {packages:["line","corechart"]});
                                  google.charts.setOnLoadCallback(drawChart);
                                function drawChart() {
                                  var data1 = new google.visualization.DataTable();
                                  data1.addColumn('date', 'Time of Day');
                                  data1.addColumn('number', 'Recovered');
                                  data1.addColumn('number', 'Deaths');
                                  data1.addColumn('number', 'Active');


                                    var x=country_data.length;
                                   
                                  
                              for (var i=0; i < x;i++) { 
                                   var date=country_data[i]['Date'];
                                   date=date.split("T") ;
                                   date=date[0].split("-");
                                   year=date[0];
                                   month=date[1]-1;
                                   day=date[2];

                                    data1.addRows([
                                       
                                        [new Date(year,month,day),country_data[i]['Recovered'],country_data[i]['Deaths'],country_data[i]['Active']],
                                        ]);
                                }
                                    var options = {
                                     backgroundColor: '#abcdef',
                                    height: 500,
                                    
                                  };

                                  var chart1 = new google.charts.Line(document.getElementById('linechart_material'));
                                   chart1.draw(data1, google.charts.Line.convertOptions(options));
                                   //chart1.draw(data1, options);
                                

                               }
/////////////////////////////////////////////////////////////////
                   
                    google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {

                        var y=country_data[l-1]['Confirmed']-country_data[l-1]['Recovered']-country_data[l-1]['Deaths'];

                      var data = google.visualization.arrayToDataTable([
                                 ['Task', 'Hours per Day'],
                                ['Total Active Cases', y],
                                ['Total Recoverey Cases',country_data[l-1]['Recovered']],
                                ['Total Deaths Cases',country_data[l-1]['Deaths']]
                              
                            ]);

                      var options = {
                               is3D: true,
                               backgroundColor: '#abcdef',
                               slices: {
                                0: { color: '#e0ed28' },
                                1: { color: 'green' },
                                2: { color: 'red' }
                              }
                            };

                      var chart2 = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                      chart2.draw(data, options);
                    
                    }
                });
        });
    });
</script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],

                <?php
                 $x=count($country_india);

                $y=$country_india[$x-1]['Confirmed']-$country_india[$x-1]['Recovered']-$country_india[$x-1]['Deaths'];
                  echo "['Total Active Cases', ".$y."],";
                  echo "['Total Recoverey Cases', ".$country_india[$x-1]['Recovered']."],";
                  echo "['Total Deaths Cases', ".$country_india[$x-1]['Deaths']."],";
                ?>
              ]);

        var options = {
                 is3D: true,
                 backgroundColor: '#abcdef',
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
    google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);


    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Time of Day');
      data.addColumn('number', 'Recovered');
      data.addColumn('number', 'Deaths');
      data.addColumn('number', 'Active');
       
      data.addRows([
        <?php
            $x=count($country_india);
           for ($i=0; $i < $x; $i++) { 
            $date=$country_india[$i]['Date'];
            $date=explode("T",$date);
            $date=explode("-",$date[0]);
            $year=$date[0];
            $month=$date[1]-1;
            $day=$date[2];


            echo "[new Date(".$year.",".$month.",". $day."),".$country_india[$i]['Recovered'].",".$country_india[$i]['Deaths'].",".$country_india[$i]['Active']."],";



           }
            
            
        ?>
      ]);

      var options = {
         backgroundColor: '#abcdef',
        height: 500,
        
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>

  <script type="text/javascript">
      

  </script>
@endsection