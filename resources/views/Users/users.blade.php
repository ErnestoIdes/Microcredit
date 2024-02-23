@include('admin_top_menu')


<div class="container">
    <table id="users-table" class="table table-bordered">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Created At</th>
                <th>State</th>
                 <th>Action</th>
            </tr>
        </thead>
    </table>
</div>




<style> 

.modal-backdrop {
  display: none;
}


</style>
   


<!--  DELETE MODAL -->
<div class="modal" id="confirmationModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this user?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmButton">Confirm</button>
            </div>
        </div>
    </div>
</div>
 <!-- DELETE MODAL -->

<script>
// DELETE MODAL
$(document).ready(function() {
    // Handle confirmation modal
    $('#confirmationModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var targetUrl = button.data('url'); // Extract url from data-url attribute
        $('#confirmButton').on('click', function() {
            window.location.href = targetUrl; // Redirect to the URL
        });
    });
});
// END DELETE MODAL

</script>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<!--Datatables Buttons starts here-->    

<!-- <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script> -->

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>


<script>



$(document).ready(function () {

    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        paging: true,
        ajax: "{{ route('users.list') }}",
        columns: [
            { data: 'code', name: 'code' },
            { data: 'firstname', name: 'firstname',orderable: true },
            { data: 'lastname', name: 'lastname' ,orderable: true},
            { data: 'email', name: 'email' ,orderable: true},
            { data: 'created_at', name: 'created_at' ,orderable: true},
            { data: 'is_deleted', name: 'is_deleted' },
            { data: 'action', name: 'action', orderable: false, searchable: false },
        ],

    });
});
</script>

<!--Datatables Buttons ends here-->
<!-- <script type="text/javascript">
  $(function () {
   
    var table = $('#users').DataTable({
        processing: true,
        serverSide: true,
        "lengthChange": false,
        scrollX: true,
        dom:'lBfrtip',
        ajax: "{{ route('users.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'mannumber', name: 'mannumber'},
            {data: 'nrc', name: 'nrc'},

            {data: 'dob', name: 'dob'},
            {data: 'gender', name: 'gender'},
            {data: 'marital_status', name: 'marital_status'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},

            {data: 'net_salary', name: 'net_salary'},
            {data: 'company_id', name: 'company_id'},
            {data: 'bank_id', name: 'bank_id'},
            {data: 'bank_branch_id', name: 'bank_branch_id'},
            {data: 'bank_account_number', name: 'bank_account_number'},
            {data: 'bank_account_name', name: 'bank_account_name'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action'},
           
        ],
        buttons: [
                   {
                       extend: 'pdf',
                      
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,4,15,16] // Column index which needs to export
                       },
                       customize: function (doc) {
            doc.defaultStyle.fontSize = 10;
            doc.pageMargins = [22, 22, 22, 22];
            doc.pageOrientation = 'landscape';
            doc.pageSize = 'A4';
        },
        className: 'btn btn-success',
        text: '<i class="fa fa-file-pdf"></i> Export as PDF',
        titleAttr: 'Export as PDF',
        title: 'Registered Users Report',
                   },
                   {
                       extend: 'csv',
                       
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,4,15,16] // Column index which needs to export
                       },
                       className: 'btn btn-info',
        text: '<i class="fa fa-file-excel"></i> Export as CSV',
        titleAttr: 'Export as CSV',
        title: 'Registered Users Report',
                   },


                   {
                       extend: 'excel',
                      
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,4,15,16] // Column index which needs to export
                       },
                       className: 'btn btn-primary',
        text: '<i class="fa fa-file-excel"></i> Export as EXCEL',
        titleAttr: 'Export as EXCEL',
        title: 'Registered Users Report',
                   },
                   {
                       extend: 'print',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,4,15,16] // Column index which needs to export
                       },
                       className: 'btn btn-secondary',
        text: '<i class="fa fa-print"></i> Print',
        titleAttr: 'Print',
        title: 'Print Registered Users',
                   },
              ],
    });
    
  });
</script>
 -->

@include('admin_bottom_menu')