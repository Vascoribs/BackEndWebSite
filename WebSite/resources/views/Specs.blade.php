<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Specs</title>
</head>
<body>
    <h1>Car Specs</h1>
    <table>
        <tr>
            <th>HorsePower</th>
            <th>Fuel</th>
            <th>Color</th>
            <th>Gearbox</th>
            <th>Engine</th>
            <th>No.Doors</th>
            <th>Year</th>
        </tr>
        <tr>
            <td>{{$carSpecs->Horsepower}}</td>
            <td>{{$carSpecs->Fuel}}</td>
            <td>{{$carSpecs->Color}}</td>
            <td>{{$carSpecs->Gearbox}}</td>
            <td>{{$carSpecs->Engine}}</td>
            <td>{{$carSpecs->No_Doors}}</td>
            <td>{{$carSpecs->Year}}</td>
        </tr>
    </table>
</body>
</html>
