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
    <div>
        <a href="{{route('cars.index')}}" class="btn btn-primary">Voltar à Lista</a>
        <input type="button" id="showEmployees" value="Show Last Employees" class="btn btn-primary">
        <input type="button" id="insertEmployee" value="Insert Employee" class="btn btn-primary">
        <input type="hidden" id="plateValue" name="plateValue" value={{}}>
        <div id="showApiResults"></div>
        <div id="FormEmployee" class="d-none">
        <h2>Add New Employee</h2>
        <form>
            <div>
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" required>
            </div>
            <div>
                <label for="EmpID" class="form-label">EmpID</label>
                <input type="number" class="form-control" id="EmpID" name="EmpID" required>
            </div>
            <div>
                <label for="Age" class="form-label">Age</label>
                <input type="number" class="form-control" id="Age" name="Age" required>
            </div>
            <div>
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" id="Address" name="Address" required>
            </div>
            <div>
                <label for="Plate" class="form-label">Plate</label>
                <input type="text" class="form-control" id="Plate" name="Plate" value={{}}>
            </div>
            <div>
                <label for="StartDate" class="form-label">StartDate</label>
                <input type="text" class="form-control" id="StartDate" name="StartDate" required>
            </div>
            <div>
                <label for="EndDate" class="form-label">EndDate</label>
                <input type="text" class="form-control" id="EndDate" name="EndDate" required>
            </div>
            <div>
                <label for="Kms" class="form-label">Kms</label>
                <input type="text" class="form-control" id="Kms" name="Kms" required>
            </div>
            <button type="button">Add New Employee</button>
        </form>
    </div>
</body>
</html>
