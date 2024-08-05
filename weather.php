<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'; ?>
    <title>Weather Information</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <main class="untree_co--site-main">

        <div class="untree_co--site-hero inner-page" style="background-image: url('images/Weather.webp')">
        </div>

        <div class="untree_co--site-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="fade-up">
                        <?php
                        $city = "Freetown";
                        $apiKey = "16701454f199922676fe4f367baf6e93";
                        $apiURL = "https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=$apiKey";
                        $forecastURL = "https://api.openweathermap.org/data/2.5/forecast?q=$city&units=metric&appid=$apiKey";

                        // Fetch current weather data
                        $weatherData = json_decode(file_get_contents($apiURL), true);

                        // Fetch forecast data
                        $forecastData = json_decode(file_get_contents($forecastURL), true);

                        if ($weatherData['cod'] == 200) {
                            echo "<div class='weather-summary'>";
                            echo "<h2 class='whiteTxt'>Weather Information for " . $weatherData['name'] . ":</h2>";

                            echo "<div class='weather-main row'>";
                            echo "<div class='col text-center'>";
                            echo "<i class='fa-solid " . getWeatherIcon($weatherData['weather'][0]['icon']) . " ' style='font-size: 1rem;'></i>";
                            echo "<p class='' style='margin: 0; font-size: 1rem;'>" . round($weatherData['main']['temp']) . "°C</p>";
                            echo "</div>";

                            echo "<div class='col text-center'>";
                            echo "<i class='fa-solid " . getWeatherIcon($weatherData['weather'][0]['icon']) . " ' style='font-size: 1rem;'></i>";
                            echo "<p class='' style='margin: 0;'>" . ucfirst($weatherData['weather'][0]['description']) . "</p>";
                            echo "</div>";
                            echo "</div>";

                            echo "<div class='weather-details row mt-4'>";
                            echo "<div class='col-md-6 mb-3'>";
                            echo "<p class=''><i class='fa-solid fa-temperature-low' style='font-size: 1rem;'></i> Min: " . round($weatherData['main']['temp_min']) . "°C</p>";
                            echo "</div>";
                            echo "<div class='col-md-6 mb-3'>";
                            echo "<p class=''><i class='fa-solid fa-temperature-high' style='font-size: 1rem;'></i> Max: " . round($weatherData['main']['temp_max']) . "°C</p>";
                            echo "</div>";

                            echo "<div class='col-md-6 mb-3'>";
                            echo "<p class=''><i class='fa-solid fa-tint' style='font-size: 1rem;'></i> Humidity: " . $weatherData['main']['humidity'] . "%</p>";
                            echo "</div>";
                            echo "<div class='col-md-6 mb-3'>";
                            echo "<p class=''><i class='fa-solid fa-wind' style='font-size: 1rem;'></i> Wind: " . $weatherData['wind']['speed'] . " m/s</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";

                            // Display 7-day forecast
                            echo "<div class='weather-forecast mt-4'>";
                            echo "<h3 class=''>Weather Forecast</h3>";
                            echo "<div class='forecast-details row'>";

                            $dailyForecast = [];
                            foreach ($forecastData['list'] as $forecast) {
                                $date = date('Y-m-d', $forecast['dt']);
                                if (!isset($dailyForecast[$date])) {
                                    $dailyForecast[$date] = $forecast;
                                }
                            }

                            $days = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu'];
                            $displayedDays = 0;
                            foreach ($dailyForecast as $day => $data) {
                                if ($displayedDays < 6) {
                                    echo "<div class='col text-center mb-3'>";
                                    echo "<p class=''>" . $days[$displayedDays] . "</p>";
                                    echo "<i class='fa-solid " . getWeatherIcon($data['weather'][0]['icon']) . " ' style='font-size: 1rem;'></i>";
                                    echo "<p class=''>" . round($data['main']['temp']) . "°C</p>";
                                    echo "</div>";
                                    $displayedDays++;
                                }
                            }

                            // Add "Data not available" for any missing day
                            for ($i = $displayedDays; $i < 6; $i++) {
                                echo "<div class='col text-center mb-3'>";
                                echo "<p class=''>" . $days[$i] . "</p>";
                                echo "<p class=''>Data not available</p>";
                                echo "</div>";
                            }

                            echo "</div>";
                            echo "</div>";
                        } else {
                            echo "<p class='text-danger'>Error: Unable to fetch weather data.</p>";
                        }

                        function getWeatherIcon($iconCode)
                        {
                            $icons = [
                                '01d' => 'fa-sun',
                                '01n' => 'fa-moon',
                                '02d' => 'fa-cloud-sun',
                                '02n' => 'fa-cloud-moon',
                                '03d' => 'fa-cloud',
                                '03n' => 'fa-cloud',
                                '04d' => 'fa-cloud',
                                '04n' => 'fa-cloud',
                                '09d' => 'fa-cloud-showers-heavy',
                                '09n' => 'fa-cloud-showers-heavy',
                                '10d' => 'fa-cloud-sun-rain',
                                '10n' => 'fa-cloud-moon-rain',
                                '11d' => 'fa-bolt',
                                '11n' => 'fa-bolt',
                                '13d' => 'fa-snowflake',
                                '13n' => 'fa-snowflake',
                                '50d' => 'fa-smog',
                                '50n' => 'fa-smog'
                            ];
                            return $icons[$iconCode] ?? 'fa-question-circle';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'specialRequest.php'; ?>
        </div>
        <?php include 'footer.php'; ?>
        <?php include 'searchWrapper.php'; ?>
</body>

</html>