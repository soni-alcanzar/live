<?php 
    echo $this->Html->script('datatable');
    echo $this->Html->script('jquery-1.12.0.min');
    echo $this->Html->script('jquery.dataTables.min');
    echo $this->Html->script('dataTables.buttons.min');
    echo $this->Html->script('buttons.flash.min');
    echo $this->Html->script('jszip.min');
    echo $this->Html->script('pdfmake.min');
    echo $this->Html->script('vfs_fonts');
    echo $this->Html->script('buttons.html5.min');
    echo $this->Html->script('buttons.print.min');
    echo $this->Html->css('datatable');
    echo $this->Html->css('jquery.dataTables.min');
    echo $this->Html->css('buttons.dataTables.min');




?>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers",
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]

    } );
} );
</script>

