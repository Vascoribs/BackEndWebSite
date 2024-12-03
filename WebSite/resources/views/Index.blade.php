<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car List</title>
</head>
<body>
    <h1>Cars Index</h1>
    <table>
        <tr>
            <th>Plate</th>
            <th>Brand</th>
            <th>Model</th>
        </tr>
        @foreach ($carList as $car)
        <tr>
            <td><a href="{{route('carsSpecs.show', $car->cars_specID)}}">{{$car->Plate}}</td>
            <td>{{$car->Brand}}</td>
            <td>{{$car->Model}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>


