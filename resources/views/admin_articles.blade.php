<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FEATURES AND ARTICLES</title>
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/dashboard/dashboard.css"> -->
    <!--[if lt IE 9]
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="http://cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#nav').load('elements/nav.html');
    });
    </script>
  </head>
  <body>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<div class="grey-bg container-fluid">
  <section id="minimal-statistics">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Payments Analytics</h4>
        <p>Statistics on incoming payments, today's payments and missed payments.</p>
      </div>
    </div>

@php 

$currentDate = \Carbon\Carbon::now();
$tenDaysFromNow = $currentDate->addDays(10);
$incoming_payments = \App\Models\Parcel::where('paid',0 )->where('updated_at', '<=', $tenDaysFromNow)->count();


$today = \Carbon\Carbon::today();
$thirtyDaysAgo = $today->subDays(30);
$todays_payments = \App\Models\Parcel::where('paid',0 )->where('updated_at', '=', $thirtyDaysAgo)->count();


$tenDaysAgo = $currentDate->subDays(10);
$missed_payments = \App\Models\Parcel::where('paid',0 )->where('updated_at', '>=', $tenDaysFromNow)->count();


@endphp






    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-money-bill-wave primary font-large-2 float-left"></i>
                </div>

                <div class="media-body text-right">
                  <h3><a href="{{route('incoming_payments')}}">{{$incoming_payments}}</a></h3>
                  <span>Incoming payments</span>
                </div>
               

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="far fa-money-bill warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right no-permission">
                  <h3><a href="{{route('todays_payments')}}">{{$todays_payments}}</a></h3>
                  <span>Todays Payments</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-money-check-alt success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right no-permission">
                  <h3> <h3><a href="{{route('missed_payments')}}">{{$missed_payments}}</a></h3></h3>
                  <span>Missed Payments</span>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>





    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-tachometer primary font-large-2 float-left"></i>
                </div>               
                <div class="media-body text-right">
                  <h3><a href="{{route('users.index')}}">{{\App\Models\User::count()}}</a></h3>
                  <span>Users</span>
                </div>             
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-speech warning font-large-2 float-left"></i>
                </div>           
                <div class="media-body text-right no-permission">
                  <h3><a href="{{route('messages')}}">{{\App\Models\message::count()}}</a></h3>
                  <span>Messages</span>
                </div>           
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="fas fa-envelope success font-large-2 float-left"></i>
                </div>               
                <div class="media-body text-right no-permission">
                  <h3> <h3><a href="{{route('emailsub')}}">{{\App\Models\emailsubscription::count()}}</a></h3></h3>
                  <span>Emails</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>

 
     
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">              
                <div class="media-body text-left">
                <h3><a href="{{route('loans.approved')}}">{{\App\Models\Loan::where('state','approved')->count()}}</a></h3>
                  <span>Active Loans</span>
                </div> 
                <div class="align-self-center">
                  <i class="fas fa-money font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">

                <div class="media-body text-left">
                <h3><a href="{{route('loans.awaiting')}}">{{\App\Models\Loan::where('state','Under Review')->count()}}</a></h3>
                  <span>Pending Loans</span>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-dollar-sign success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                <h3><a href="{{route('loans.rejected')}}">{{\App\Models\Loan::where('state','Rejected')->count()}}</a></h3>
                  <span>Denied Loans</span>
                </div>

                <div class="align-self-center">
                  <i class="fas fa-ban warning font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>     
    </div>
  
  
  </section>
  




</div>
<!--Charts For Total Funds Disbursed-->
@can('can-view-charts')
<div class="row">
  <div class="col-xl-6">
    <div class="">
        {!! $chart->container() !!}
    </div>
    </div>

    <div class="col-xl-6">
    <div class="">
        {!! $chart_collections->container() !!}
    </div>
    </div>



  <div class="row">
  <div class="col-12">
    <div class="">
        {!! $registered_users->container() !!}
    </div>
    </div>
  </div>
  @else


  

  <div class="row no-permission">
  <div class="col-xl-6">
    <div class="">
        {!! $chart->container() !!}
    </div>
    </div>

    <div class="col-xl-6">
    <div class="">
        {!! $chart_collections->container() !!}
    </div>
    </div>



  <div class="row no-permission">
  <div class="col-12">
    <div class="">
        {!! $registered_users->container() !!}
    </div>
    </div>
  </div>

  @endcan


  <script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}

<script src="{{ $chart_collections->cdn() }}"></script>

{{ $chart_collections->script() }}

<script src="{{ $registered_users->cdn() }}"></script>

{{ $registered_users->script() }}


  </body>
</html>
