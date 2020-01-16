<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
    <link href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" rel="stylesheet">

    <script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>

</head>

<body>

<table id="table" data-toggle="table" data-height="460" data-ajax="ajaxRequest" data-search="true"
       data-side-pagination="server" data-pagination="true">
    <thead>
    <tr>
        <th data-field="name" data-sortable="true">name</th>
        <th data-field="date" data-sortable="true">date</th>
        <th data-field="weight" data-sortable="true">weight</th>
    </tr>
    </thead>
</table>

<script>
    // your custom ajax request here
    function ajaxRequest(params) {
        var url = 'http://localhost';
        $.get(url).then(function (res) {
            params.success(res.result)
        })
    }
</script>
</body>

</html>