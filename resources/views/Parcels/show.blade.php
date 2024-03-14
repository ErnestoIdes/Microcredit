@include('admin_top_menu')
<div class="row">
  <div class="card col-sm-3 text-white bg-primary" style="margin: 5px;">
    <div class="card-body">
      <div class="row">
        <div class="col mt-0">
          <h5 class="card-title">Loan Amount</h5>
        </div>

        <div class="col-auto">
          <div class="stat text-primary">
            <i class="fas fa-file"></i>

          </div>
        </div>
      </div>
      <h4 class="mt-1 mb-3" style="font-weight: bold;">
        <a style="color:black" >{{$loan->amount_to_pay}} Mt</a>  
      </h4>

    </div>
  </div>

  <div class="card col-sm-3 text-white bg-secondary" style="margin: 5px;">
    <div class="card-body">
      <div class="row">
        <div class="col mt-0">
          <h5 class="card-title">Amount Paid</h5>
        </div>

        <div class="col-auto">
          <div class="stat text-primary">
            <i class="fas fa-file"></i>

          </div>
        </div>
      </div>
      <h4 class="mt-1 mb-2" style="font-weight: bold;">
        <a style="color:black" >{{$loan->amount_paid}} Mt</a>  
      </h4>

    </div>
  </div>

   <div class="card col-sm-2 text-white bg-warning" style="margin: 5px;">
    <div class="card-body">
      <div class="row">
        <div class="col mt-0">
          <h5 class="card-title">Rate</h5>
        </div>

        <div class="col-auto">
          <div class="stat text-primary">
            <i class="fas fa-file"></i>

          </div>
        </div>
      </div>
      <h4 class="mt-1 mb-2" style="font-weight: bold;">
        <a style="color:black" >{{$loan->rate}} %</a>  
      </h4>

    </div>
  </div>

   <div class="card col-sm-3 text-white bg-danger" style="margin: 5px;">
    <div class="card-body">
      <div class="row">
        <div class="col mt-0">
          <h5 class="card-title">Missing</h5>
        </div>

        <div class="col-auto">
          <div class="stat text-primary">
            <i class="fas fa-file"></i>

          </div>
        </div>
      </div>
      <h4 class="mt-1 mb-3" style="font-weight: bold;">
        <a style="color:black" >{{(float)$loan->amount_to_pay-(float)$loan->amount_paid}} Mt</a>  
      </h4>

    </div>
  </div>
</div>

<br>


<div class="col-sm-12 row" >
  <?php $cont=0 ?>
  @foreach($parcels as $p)
  <?php $cont++; ?>

    <form method="POST" action="{{route('parcels.pay')}}"  enctype="multipart/form-data" class="card" style="box-shadow: 3px 10px 10px 5px lightblue;">
          @csrf
      <input name="loan_id" value="{{$loan->id}}" class="form-control"  id="loan_id" style="display: none;">
      <input name="parcel_id" value="{{$p->id}}" class="form-control"  id="parcel_id" style="display: none;">

      <div class="col-sm-12 row">
        
      <div class="col-sm-5">
        <div class="form-group">
          <label for="parcel_amount">Amount - Parcel {{$cont}} </label>
          <input type="number" name="parcel_amount" min="{{$p->amount_to_pay}}" max="{{(float)$loan->amount_to_pay-(float)$loan->amount_paid}}" value="{{$p->amount_to_pay}}" class="form-control"  id="parcel_amount" >
        </div>
      </div>

      <div class="col-sm-5">
        <div class="form-group">
          <label for="company_percentage">Due Date - Parcel {{$cont}} </label>
          <input type="date" name="parcel_date" value="{{$p->due_date}}" class="form-control"  id="parcel_date" readonly>
        </div>
      </div>

    @if($p->paid==false)
      <div class=" col-sm-2">
        <div class="form-group">
          <label for="company_percentage">Op</label><br>
          <button type="submit" class="btn btn-primary">Pay</button>
        </div>
      </div>
      @endif

      <!-- <div><hr style="box-shadow: 3px 10px 10px 5px lightblue;"></div> -->

      </div>
    </form>

  @endforeach

</div>
                          
@include('admin_bottom_menu')


