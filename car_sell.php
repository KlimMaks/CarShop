<?php

// Database connection
$host = 'localhost';
$db   = 'car_selling_db';
$user = 'root';
$pass = 'root';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Function to get all cars from the database
function getAllCars()
{
    global $conn;
    $stmt = $conn->query("SELECT * FROM cars");
    $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $cars;
}

// Function to get a specific car by ID
function getCarById($carId)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM cars WHERE id = :id");
    $stmt->bindParam(':id', $carId);
    $stmt->execute();
    $car = $stmt->fetch(PDO::FETCH_ASSOC);
    return $car;
}

// Function to add a new car
function addCar($carData)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO cars (make, model, year, price) VALUES (:make, :model, :year, :price)");
    $stmt->bindParam(':make', $carData['make']);
    $stmt->bindParam(':model', $carData['model']);
    $stmt->bindParam(':year', $carData['year']);
    $stmt->bindParam(':price', $carData['price']);
    $stmt->execute();
}

// Function to update an existing car
function updateCar($carId, $carData)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE cars SET make = :make, model = :model, year = :year, price = :price WHERE id = :id");
    $stmt->bindParam(':make', $carData['make']);
    $stmt->bindParam(':model', $carData['model']);
    $stmt->bindParam(':year', $carData['year']);
    $stmt->bindParam(':price', $carData['price']);
    $stmt->bindParam(':id', $carId);
    $stmt->execute();
}

// Function to delete a car
function deleteCar($carId)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM cars WHERE id = :id");
    $stmt->bindParam(':id', $carId);
    $stmt->execute();
}


$cars = getAllCars();
foreach ($cars as $car) {
    echo $car['make'] . ' ' . $car['model'] . ', ' . $car['year'] . ', $' . $car['price'] . '<br>';
}

// Get a specific car by ID
$carId = 1;
$car = getCarById($carId);
if ($car) {
    echo $car['make'] . ' ' . $car['model'] . ', ' . $car['year'] . ', $' . $car['price'] . '<br>';
} else {
    echo 'Car not found.';
}

// Add a new car
$newCarData = array(
    'make' => 'Ford',
    'model' => 'Mustang',
    'year' => 2022,
    'price' => 35000
);
addCar($newCarData);

// Update an existing car
$carId = 2;
$updatedCarData = array(
    'make' => 'Chevrolet',
    'model' => '
