
<h3>Create Reminders</h3>

<br>
<div class="shadow-sm p-3 mb-5 bg-white rounded">
<form action="{{ route('reminders.store') }}" method="POST">
    @csrf
    <div id="name-inputs">
        <div class="input-group mb-3">
            <input type="number" name="numbers[]" class="form-control @error('numbers') is-invalid @enderror" placeholder="Enter number" required>
            @error('numbers')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
            <button type="button" class="btn btn-success add-more"><i class="fas fa-plus-circle"></i></button>
        </div>
    </div>

    <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control @error('message') is-invalid @enderror" id="comment" name="message" maxlength="120" rows="5" placeholder="Enter your message in not more than 120 characters"></textarea>
    @error('message')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>


    <button type="submit" class="btn btn-primary">Send Message</button>
</form>

</div>



<script>
$(document).ready(function(){
    $(".add-more").click(function(){
        var html = '<div class="input-group mb-3"><input type="number" name="numbers[]" class="form-control" required><button type="button" class="btn btn-danger remove"><i class="fas fa-minus"></i></button></div>';
        $("#name-inputs").append(html);
    });

    $(document).on("click", ".remove", function(){
        $(this).parent().remove();
    });
});
</script>
