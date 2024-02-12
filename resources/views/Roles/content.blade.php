
<h3>Create Roles</h3>

<br>
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <div id="name-inputs">
        <div class="input-group mb-3">
            <input type="text" name="roles[]" class="form-control @error('roles') is-invalid @enderror" placeholder="Enter a role" required>
            @error('roles')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
            <button type="button" class="btn btn-success add-more"><i class="fas fa-plus-circle"></i></button>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Add Roles</button>
</form>

</div>



<script>
$(document).ready(function(){
    $(".add-more").click(function(){
        var html = '<div class="input-group mb-3"><input type="text" name="roles[]" class="form-control" placeholder="Enter role" required><button type="button" class="btn btn-danger remove"><i class="fas fa-minus"></i></button></div>';
        $("#name-inputs").append(html);
    });

    $(document).on("click", ".remove", function(){
        $(this).parent().remove();
    });
});
</script>
