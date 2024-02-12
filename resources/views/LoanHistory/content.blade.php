<table class="table" id="all_applied_loans">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Loan Number</th>
      <th scope="col">Loan Type</th>
      <th scope="col">Status</th>
      <th scope="col">Duration</th>
      <th scope="col">Loan Amount</th>
      <th scope="col">Repayments</th>
      <th scope="col">EMI</th>     
      <th scope="col">Applied On</th> 
       
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<!--Datatables Buttons starts here-->    

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
     <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
     <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>

<!--Datatables Buttons ends here-->
<script type="text/javascript">
  $(function () {
   
    var table = $('#all_applied_loans').DataTable({
        processing: true,
        serverSide: true,
        "lengthChange": false,
        scrollX: true,
        dom:'lBfrtip',
        ajax: "{{ route('all_applied_loans') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'loan_number', name: 'loan_number'},
            {data: 'loan_type', name: 'loan_type'},
            {data: 'status', name: 'status'},
            {data: 'duration', name: 'duration'},
            {data: 'amount', name: 'amount'},           
            {data: 'loan_amount', name: 'loan_amount'},
            {data: 'emi', name: 'emi'},
            {data: 'created_at', name: 'created_at'},
           
            
           
        ],
        buttons: [
                   {
                       extend: 'pdf',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8] // Column index which needs to export
                       },
                      
        className: 'btn btn-success',
        text: '<i class="fa fa-file-pdf"></i> Export as PDF',
        titleAttr: 'Export as PDF',
        title: 'Loans Report',
                   
                   },
                   {
                       extend: 'csv',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8] // Column index which needs to export
                       },
                       className: 'btn btn-info',
        text: '<i class="fa fa-file-excel"></i> Export as CSV',
        titleAttr: 'Export as CSV',
        title: 'Loans Report',
                   },
                   {
                       extend: 'excel',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8] // Column index which needs to export
                       },
                       className: 'btn btn-primary',
        text: '<i class="fa fa-file-excel"></i> Export as EXCEL',
        titleAttr: 'Export as EXCEL',
        title: 'Loans Report',
                   },
                   {
                       extend: 'print',
                       exportOptions: {
                           columns: [0,1,2,3,4,5,6,7,8] // Column index which needs to export
                       },
                       className: 'btn btn-secondary',
        text: '<i class="fa fa-print"></i> Print',
        titleAttr: 'Print',
        title: 'Loans Report',
                   },
              ],
    });
    
  });
</script>