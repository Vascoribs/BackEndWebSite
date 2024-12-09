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
            <td><a href="{{route('carsSpecs.show', $car->cars_specID)}}">{{$car->Brand}}</td>
            <td><a href="{{route('carsSpecs.show', $car->cars_specID)}}">{{$car->Model}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('newCar.form')}}">Add New Car</a>
</body>
</html>


