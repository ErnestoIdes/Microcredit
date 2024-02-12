
<h3>Give Permissions to Roles </h3>
<br>
<!-- Create form with Bootstrap styling -->
<div class="container">
  <form class="form-horizontal" action="{{route('roles_permissions.store')}}" method="post">
    @csrf
  <div class="form-group">
      <label for="roles" class="col-sm-2 control-label">Select Role:</label>
      <div class="col-sm-10">
        <select class="form-control" name="role">
            @forelse ($roles as $role)
          <option value="{{$role->id}}">{{$role->name}}</option>
          @empty
          You have not not added any roles yet 
          @endforelse
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="dropdown" class="col-sm-2 control-label">Assign Permission(s)</label>
      <div class="col-sm-10">
        <select id="dropdown" class="form-control" name="permissions">
        @foreach ($permissions as $permission)
          <option value="{{$permission->name}}">{{$permission->name}}</option>
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
