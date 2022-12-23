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

    <h2>Soal 1</h2>

    <table>
        <tr>
            <th>Nama</th>
            <th>Total</th>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td>{{$data->first_name}} {{$data->last_name}}</td>
            <td>0</td>
        </tr>
        @endforeach
    </table>

</body>

</html>