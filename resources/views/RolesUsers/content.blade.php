
<h3>Give Roles to Users </h3>
<br>
<!-- Create form with Bootstrap styling -->
<div class="container">
  <form class="form-horizontal" action="{{route('roles_users.store')}}" method="post">
    @csrf
  <div class="form-group">
      <label for="users" class="col-sm-2 control-label">Select User:</label>
      <div class="col-sm-10">
        <select class="form-control" name="user">
            @forelse ($users as $user)
          <option value="{{$user->employee_id}}">{{$user->firstname. " ". $user->lastname}}</option>
          @empty
          You currently have no users yet 
          @endforelse
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="dropdown" class="col-sm-2 control-label">Assign Role(s):</label>
      <div class="col-sm-10">
        <select id="dropdown" class="form-control" name="roles">
        @foreach ($roles as $role)
          <option value="{{$role->name}}">{{$role->name}}</option>
         @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-primary" onclick="addData()">Add Data</button>
      </div>
    </div>
    <div class="form-group">
      <label for="dataField" class="col-sm-2 control-label">Selected Data:</label>
      <div class="col-sm-10">
        <input type="text" name="dataField" id="dataField" class="form-control" readonly>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" onclick="submitData()">Submit</button>
      </div>
    </div>
  </form>
</div>

<!-- Include Bootstrap JS -->

<script>
var dataArr = [];

function addData() {
  var dropdown = document.getElementById("dropdown");
  var data = dropdown.value;
  if (data) {
    dataArr.push(data);
    updateDataField();
  }
}

function updateDataField() {
  var dataField = document.getElementById("dataField");
  dataField.value = dataArr.join(",");
}

function submitData() {
  var dataField = document.getElementById("dataField");
  dataField.value = dataArr.join(",");
}
</script>
