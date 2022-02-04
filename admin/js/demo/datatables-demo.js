// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('.dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5', 'pdfHtml5', 'csvHtml5'
        ]
    });

    $('#categorydataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5', 'pdfHtml5', 'csvHtml5'
        ]
    });
    $('#stddataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5', 'pdfHtml5', 'csvHtml5'
        ]
    });

    $('#sandPaperClosingTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    $('#packingMaterialTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

});

$(document).ready(function() {
    $('#dataTable1').DataTable();
});