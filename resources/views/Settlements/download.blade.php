@include('top_menu')


<table class="table" id="settlements">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Loan Number</th>
      <th scope="col">File</th>
      <th scope="col">Generated On</th>
        
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
   
    var table = $('#settlements').DataTable({
        processing: true,
        serverSide: true,
        "lengthChange": false,
        scrollX: true,
        dom:'lBfrtip',
        ajax: "{{ route('settlements_forms_downloads') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'loan_number', name: 'loan_number'},
            {data: 'settlement_file', name: 'settlement_file'},
            {data: 'created_at', name: 'created_at'},
            
           
                   ],
        buttons: [
                   {
        extend: 'pdf',
        className: 'btn btn-success',
        text: '<i class="fa fa-file-pdf"></i> Export as PDF',
        titleAttr: 'Export as PDF',
        title: 'Settlements Report',
        exportOptions: {
            columns: ':visible'
        }
                   },
                   {
        extend: 'csv',
        className: 'btn btn-info',
        text: '<i class="fa fa-file-excel"></i> Export as CSV',
        titleAttr: 'Export as PDF',
        title: 'Settlements Report',
        exportOptions: {
        columns: ':visible'
        }
                     
                   },
                   {
                    extend: 'excel',
        className: 'btn btn-primary',
        text: '<i class="fa fa-file-excel"></i> Export as Excel',
        titleAttr: 'Export as PDF',
        title: 'Settlements Report',
        exportOptions: {
        columns: ':visible'
        }
                     
                   },
                   {
                    extend: 'print',
        className: 'btn btn-info',
        text: '<i class="fa fa-print"></i> Print',
        titleAttr: 'Export as PDF',
        title: 'Settlements Report',
        exportOptions: {
        columns: ':visible'
        }
                       
                   },
              ],
    });
    
  });
</script>




@include('bottom_menu')