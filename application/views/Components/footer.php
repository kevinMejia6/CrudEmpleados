</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
     // Obtener el ID de la sucursal original desde el campo oculto
    var idSucursalOriginal = $('#id_sucursal_original').val();

    // Iterar sobre las opciones del campo de selección y preseleccionar la sucursal original
    $('#id_sucursal option').each(function() {
        if ($(this).val() == idSucursalOriginal) {
            $(this).prop('selected', true);
            return false; // Salir del bucle cuando se encuentra la opción
        }
    });

</script>
</html>