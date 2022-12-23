<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>Soal 2 Filter</h2>

    <table>
        <tr>
            <th>Nama</th>
            <th>Customer ID</th>
        </tr>
        @foreach ($hasils as $data)
        <tr>
            <td>{{$data->date}} </td>
            <td>{{$data->customer}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>