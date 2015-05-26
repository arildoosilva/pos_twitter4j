<!DOCTYPE html>
<head>
    <title>Twitter4j</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){ 
            $("#abas li:eq(1) a").tab('show');  // abas
            $('#resultado').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.7/i18n/Portuguese-Brasil.json",
                }
            });  // datatables
        });
    </script>

</head>