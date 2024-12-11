<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add New Car</title>
    </head>
    <body>
        <h1>Add New Car</h1>
        <form action="{{route('newCar.store')}}" method="post">
            @csrf 
            <label for="Plate">Plate</label>
            <input type="number" name="Plate" id="Plate" placeholder="Plate" value="">
            <label for="Brand">Brand</label>
            <input type="text" name="Brand" id="Brand" placeholder="Brand" value="">
            <label for="Model">Model</label>
            <input type="text" name="Model" id="Model" placeholder="Model" value="">
            <label for="Horsepower">Horsepower</label>
            <input type="text" name="Horsepower" id="Horsepower" placeholder="Horsepower" value="">
            <label for="Fuel">Fuel</label>
            <input type="text" name="Fuel" id="Fuel" placeholder="Fuel" value="">
            <label for="Color">Color</label>
            <input type="text" name="Color" id="Color" placeholder="Color" value="">
            <label for="Gearbox">Gearbox</label>
            <input type="text" name="Gearbox" id="Gearbox" placeholder="Gearbox" value="">
            <label for="Engine">Engine</label>
            <input type="text" name="Engine" id="Engine" placeholder="Engine" value="">
            <label for="No_Doors">No_Doors</label>
            <input type="text" name="No_Doors" id="No_Doors" placeholder="No_Doors" value="">
            <label for="Year">Year</label>
            <input type="text" name="Year" id="Year" placeholder="Year" value="">
            <button type="submit">Add New Car</button>
        </form>    
    </body>
</html>
