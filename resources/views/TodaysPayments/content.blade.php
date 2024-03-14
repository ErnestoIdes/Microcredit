<table class="table" id="todays_payments">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Amount</th>
      <th scope="col">Last Payment</th>
      <!-- <th scope="col">Balance Due</th> -->
     
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
   
    var table = $('#todays_payments').DataTable({
        processing: true,
        serverSide: true,
        "lengthChange": false,
        scrollX: true,
        dom:'lBfrtip',
        ajax: "{{ route('all_todays_payments') }}",
        columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'phone', name: 'phone'},
            {data: 'email', name: 'email'},
            {data: 'amount_to_pay', name: 'amount_to_pay'},
            {data: 'last_payment_date', name: 'last_payment_date'},
            // {data: 'balance_due', name: 'balance_due'},
                       
           
                   ],
        buttons: [
                   {
                    extend: 'pdf',
        className: 'btn btn-success',
        text: '<i class="fa fa-file-pdf"></i> Export as PDF',
        titleAttr: 'Export as PDF',
        title: 'Todays Payments Report',
        exportOptions: {
            columns: ':visible'
        }
                      
                     
                   },
                   {
                    extend: 'csv',
        className: 'btn btn-info',
        text: '<i class="fa fa-file-excel"></i> Export as CSV',
        titleAttr: 'Export as CSV',
        title: 'Todays Payments Report',
        exportOptions: {
        columns: ':visible'
        }
                     
                   },
                   {
                    extend: 'excel',
        className: 'btn btn-primary',
        text: '<i class="fa fa-file-excel"></i> Export as Excel',
        titleAttr: 'Export as EXCEL',
        title: 'Todays Payments',
        exportOptions: {
        columns: ':visible'
        }
                     
                   },
                   {
                    extend: 'print',
        className: 'btn btn-info',
        text: '<i class="fa fa-print"></i> Print',
        titleAttr: 'Print',
        title: 'Todays Payments',
        exportOptions: {
        columns: ':visible'
        }
                       
                   },
              ],
    });
    
  });
</script>