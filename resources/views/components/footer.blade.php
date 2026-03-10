</html>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.6/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#tablausuarios').DataTable({
            columns: [
                { data: 'name' },
                { data: 'email' },
                { data: 'telefono' },
                { data: 'calle' },
                { data: 'acciones'}
            ]
        });
    });
 
    function carga_modal(id, nombre){
      $('#id').val(id);
      $('#name').val(nombre);
      $("#editForm").attr('action','/actualizar-dato/'+id);
      $('#myModal').modal('show');
    }
 
    $("#editForm").on('submit',function(e){
      e.preventDefault();
      alert($(this).serialize());
      $.ajax({
        url:$(this).attr('action'),
        type:'POST',
        method:'PUT',
        data:$(this).serialize(),
        success: function(response){
          //console.log(response);
          $("#myModal").modal('hide');
          location.reload();
        },
        error:function(xhr){
          console.log(xhr.responseText);
        }
      })
    })
</script>
<script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>