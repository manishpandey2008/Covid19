@extends('covid_common')
@section('main_page')
<div class="dashboard-content-one" style="overflow-y: hidden;">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>World</h3>
                    <ul>
                        <li>From----To</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->

                <div class="card height-auto" >
                    <div class="card-body" style="background-color: #edf6f7;">
                      
                        <div class="row">
                            @csrf
                            <div class="col-12 my-3">
                                <select class="form-control" style="width: 100%;border-radius: 40px;font-size: 20px;height: 70px;" id="select_bar">
                                    <option value="">Select Country Name</option>
                                    @foreach($countries as $cou)

                                    <option value="{{$cou['ISO2']}} {{$cou['Country']}}">{{$cou['Country']}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-12 mt-3 ">
                                <p class="text-center">Enter From to To Date</p>
                            </div>
                            <div class="col-lg-4 col-sm-12 my-3 ">
                                <input type="date" id="from_date" class="form-control" style="width: 100%;border-radius: 40px;font-size: 20px;height: 70px;" required="" min="2020-02-20">
                            </div>
                            <div class="col-lg-4 col-sm-12 my-3">
                                <input type="date" id="to_date"  class="form-control" style="width: 100%;border-radius: 40px;font-size: 20px;height: 70px;" required="">
                            </div>
                            <div class="col-lg-4 col-sm-12 my-3">
                                <button type="submit" class="btn btn-primary" id="find_btn" style="width: 100%;height: 70px;border-radius: 40px;font-size: 20px;">Find Data</button>
                            </div>
                        </div>
                        
                    </div>
                </div>


               <h1 class="text-center" ><span id="country_name">INDIA</span> <img src="https://www.countryflags.io/IN/flat/64.png" id="flag"></h1>
               
               <h1>Case At : <span id="from_date_span">{{$from_date}}</span></h1>
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
                                        <div class="item-title">Total Cases</div>
                                        <div class="item-number" id="from_confirmed_case">
                                            <span class="counter" data-num="{{$country_india[0]['Confirmed']}}" id="from_confirmed_case_span"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mx-auto">
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
                                        <div class="item-number" id="from_recovery_case"><span class="counter" data-num="{{$country_india[0]['Recovered']}}" id="from_recovery_case_span"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mx-auto">
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
                                        <div class="item-number" id="from_death_case"><span class="counter"
                                                data-num="{{$country_india[0]['Deaths']}}" id="from_death_case_span"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


    <h1>Case At : <span id="to_date_span">{{$to_date}}</span></h1>
               <div class="row gutters-20">
                    <div class="col-xl-3 col-sm-6 col-12 rounded mx-auto">
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
                                        <div class="item-number" id="to_confirmed_case">
                                            <span class="counter" data-num="{{$country_india[$x-1]['Confirmed']}}" id="to_confirmed_case_span"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mx-auto">
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
                                        <div class="item-number" id="to_recovery_case"><span class="counter" data-num="{{$country_india[$x-1]['Recovered']}}" id="to_recovery_case_span"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mx-auto">
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
                                        <div class="item-number" id="to_death_case"><span class="counter"
                                                data-num="{{$country_india[$x-1]['Deaths']}}" id="to_death_case_span"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

      
                <div class="row">
                 <div class="col-12" >
                     <h2 class="my-4"><strong>Line Graph Of All Cases</strong></h2>
                      <div id="linechart_material" style="width: 100%; height: 500px;"></div>
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
            var from_date=$('#from_date').val();
            var to_date=$('#to_date').val();

             $('#from_date_span').text(from_date);
              $('#to_date_span').text(to_date);

           
           var val=[y,from_date,to_date];

             $.post('/country/from/to',{'val':val,'_token':$('input[name=_token]').val()},function(country_data){
                    
                        var l=country_data['country_india'].length;

                        if (l==0) {
                           
                              $("#from_confirmed_case_span").hide();
                               $("#from_recovery_case_span").hide();
                               $("#from_death_case_span").hide();

                               $("#to_confirmed_case_span").hide();
                               $("#to_recovery_case_span").hide();
                               $("#to_death_case_span").hide();

                               $("#from_date_span").hide();
                               $("#to_date_span").hide();
                               return 0;
                        }


                       $("#from_confirmed_case_span").hide();
                       $("#from_recovery_case_span").hide();
                       $("#from_death_case_span").hide();

                       $("#to_confirmed_case_span").hide();
                       $("#to_recovery_case_span").hide();
                       $("#to_death_case_span").hide();
                     

                       $("#from_confirmed_case").html('<span id="from_confirmed_case_span" class="counter" data-num="'+country_data['country_india'][0]['Confirmed']+'">'+country_data['country_india'][0]['Confirmed']+'</span>');
                       $("#from_recovery_case").html('<span id="from_recovery_case_span" class="counter" data-num="'+country_data['country_india'][0]['Recovered']+'">'+country_data['country_india'][0]['Recovered']+'</span>');
                       $("#from_death_case").html('<span id="from_death_case_span" class="counter" data-num="'+country_data['country_india'][0]['Deaths']+'">'+country_data['country_india'][0]['Deaths']+'</span>');


                       $("#to_confirmed_case").html('<span id="to_confirmed_case_span" class="counter" data-num="'+country_data['country_india'][l-1]['Confirmed']+'">'+country_data['country_india'][l-1]['Confirmed']+'</span>');
                       $("#to_recovery_case").html('<span id="to_recovery_case_span" class="counter" data-num="'+country_data['country_india'][l-1]['Recovered']+'">'+country_data['country_india'][l-1]['Recovered']+'</span>');
                       $("#to_death_case").html('<span id="to_death_case_span" class="counter" data-num="'+country_data['country_india'][l-1]['Deaths']+'">'+country_data['country_india'][l-1]['Deaths']+'</span>');


                      
//////////////////////////////////////////////////////////////////////////////////////
          google.charts.load('current', {'packages':['line']});
            google.charts.setOnLoadCallback(drawChart);


          function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Time of Day');
            data.addColumn('number', 'Recovered');
            data.addColumn('number', 'Deaths');
            data.addColumn('number', 'Active');
             
             x=country_data['country_india'].length;
                 for (var i=0; i < x; i++) { 
                  var date=country_data['country_india'][i]['Date'];
                        date=date.split("T") ;
                        date=date[0].split("-");
                        year=date[0];
                        month=date[1]-1;
                        day=date[2];


            data.addRows([

                [new Date(year,month,day),country_data['country_india'][i]['Recovered'],country_data['country_india'][i]['Deaths'],country_data['country_india'][i]['Active']],
                  
            ]);

          }
            var options = {
               backgroundColor: '#abcdef',
              height: 500,
              
            };

            var chart = new google.charts.Line(document.getElementById('linechart_material'));

            chart.draw(data, google.charts.Line.convertOptions(options));


          }

                   
                    
                });
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


      $(document).ready(function(){
              $(window).resize(function(){
              drawChart();
              });
    });
    }
  </script>
@endsection