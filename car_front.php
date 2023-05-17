<?php

// Function to fetch all cars from the backend
function getAllCars()
{
    $url = 'http://backend.example.com/api/cars'; // Replace with your backend API endpoint
    $response = file_get_contents($url);
    $cars = json_decode($response, true);
    return $cars;
}

// Function to display all cars
function displayCars($cars)
{
    foreach ($cars as $car) {
        echo '<div>';
        echo '<h2>' . $car['make'] . ' ' . $car['model'] . '</h2>';
        echo '<p>Year: ' . $car['year'] . '</p>';
        echo '<p>Price: $' . $car['price'] . '</p>';
        echo '</div>';
    }
}

// Function to display a specific car
function displayCar($car)
{
    if ($car) {
        echo '<div>';
        echo '<h2>' . $car['make'] . ' ' . $car['model'] . '</h2>';
        echo '<p>Year: ' . $car['year'] . '</p>';
        echo '<p>Price: $' . $car['price'] . '</p>';
        echo '</div>';
    } else {
        echo 'Car not found.';
    }
}

// Example usage:

// Get all cars
$cars = getAllCars();
displayCars($cars);

// Get a specific car by ID
$carId = 1;
$car = getCarById($carId);
displayCar($car);
