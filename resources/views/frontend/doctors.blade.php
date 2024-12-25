@extends('frontend.layout1.main')

@section('main-container')

@php
    // Fetch all records from the database
    use Illuminate\Support\Facades\DB;

    $doctors = DB::table('doctors')->get();
@endphp

<!DOCTYPE html>
<html>
<head>
    <title>Doctors List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #ddd;
        }

        p {
            text-align: center;
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Doctors List</h1>

        @if ($doctors->count() > 0)
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Contact</th>
                    <th>Email</th>
                </tr>
                @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->specialization }}</td>
                        <td>{{ $doctor->contact }}</td>
                        <td>{{ $doctor->email }}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>No records found.</p>
        @endif
    </div>
</body>
</html>

@endsection
