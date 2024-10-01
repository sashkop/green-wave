<?php
include __DIR__ . '/src/PhysicsUtils.php';
include __DIR__ . '/src/TrafficLight.php';
include __DIR__ . '/src/CruiseControl.php';

$cruiseControl = new CruiseControl();

// The village traffic light
$speed = 50;
$lightCount = 1;
$lightsInput = json_decode('[[200,15]]', true);

// correct answer = 50
echo $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput);

// The village traffic light 2
$speed = 50;
$lightCount = 1;
$lightsInput = json_decode('[[200,10]]', true);
// correct answer = 36
echo PHP_EOL . $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput);

$speed = 90;
$lightCount = 3;
$lightsInput = json_decode('[[300,30],[1500,30],[3000,30]]', true);
// correct answer = 90
echo PHP_EOL . $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput);

// Less quiet country road
$speed = 90;
$lightCount = 3;
$lightsInput = json_decode('[[300,10],[1500,10],[3000,10]]',true);
// correct answer = 54
echo PHP_EOL . $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput);

// Unsettled country road
$speed = 90;
$lightCount = 3;
$lightsInput = json_decode('[[300,30],[1500,20],[3000,10]]',true);
// correct answer = 67
echo PHP_EOL . $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput);

// Country road with no median strip
$speed = 80;
$lightCount = 4;
$lightsInput = json_decode('[[700,25],[2200,15],[3000,10],[4000,28]]',true);
// correct answer = 49
echo PHP_EOL . $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput);

// German Highway
$speed = 200;
$lightCount = 6;
$lightsInput = json_decode('[[1000,15],[3000,10],[4000,30],[5000,30],[6000,5],[7000,10]]',true);
// correct answer = 60
echo PHP_EOL . $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput);

// Rain of Traffic Lights
$speed = 130;
$lightCount = 100;
$lightsInput = json_decode('[[500,15],[1000,15],[1500,15],[2000,15],[2500,15],[3000,15],[3500,15],[4000,15],[4500,15],[5000,15],[5500,15],[6000,15],[6500,15],[7000,15],[7500,15],[8000,15],[8500,15],[9000,15],[9500,15],[10000,15],[10500,15],[11000,15],[11500,15],[12000,15],[12500,15],[13000,15],[13500,15],[14000,15],[14500,15],[15000,15],[15500,15],[16000,15],[16500,15],[17000,15],[17500,15],[18000,15],[18500,15],[19000,15],[19500,15],[20000,15],[20500,15],[21000,15],[21500,15],[22000,15],[22500,15],[23000,15],[23500,15],[24000,15],[24500,15],[25000,15],[25500,15],[26000,15],[26500,15],[27000,15],[27500,15],[28000,15],[28500,15],[29000,15],[29500,15],[30000,15],[30500,15],[31000,15],[31500,15],[32000,15],[32500,15],[33000,15],[33500,15],[34000,15],[34500,15],[35000,15],[35500,15],[36000,15],[36500,15],[37000,15],[37500,15],[38000,15],[38500,15],[39000,15],[39500,15],[40000,15],[40500,15],[41000,15],[41500,15],[42000,15],[42500,15],[43000,15],[43500,15],[44000,15],[44500,15],[45000,15],[45500,15],[46000,15],[46500,15],[47000,15],[47500,15],[48000,15],[48500,15],[49000,15],[49500,15],[50000,15]]',true);
// correct answer = 60
echo PHP_EOL . $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput);

// Light string
$speed = 130;
$lightCount = 100;
$lightsInput = json_decode(
    '[[1100,10],[1150,15],[1200,20],[1250,25],[1300,30],[2100,10],[2150,15],[2200,20],[2250,25],[2300,30],[3100,10],[3150,15],[3200,20],[3250,25],[3300,30],[4100,10],[4150,15],[4200,20],[4250,25],[4300,30],[5100,10],[5150,15],[5200,20],[5250,25],[5300,30],[6100,10],[6150,15],[6200,20],[6250,25],[6300,30],[7100,10],[7150,15],[7200,20],[7250,25],[7300,30],[8100,10],[8150,15],[8200,20],[8250,25],[8300,30],[9100,10],[9150,15],[9200,20],[9250,25],[9300,30],[10100,10],[10150,15],[10200,20],[10250,25],[10300,30],[11100,10],[11150,15],[11200,20],[11250,25],[11300,30],[12100,10],[12150,15],[12200,20],[12250,25],[12300,30],[13100,10],[13150,15],[13200,20],[13250,25],[13300,30],[14100,10],[14150,15],[14200,20],[14250,25],[14300,30],[15100,10],[15150,15],[15200,20],[15250,25],[15300,30],[16100,10],[16150,15],[16200,20],[16250,25],[16300,30],[17100,10],[17150,15],[17200,20],[17250,25],[17300,30],[18100,10],[18150,15],[18200,20],[18250,25],[18300,30],[19100,10],[19150,15],[19200,20],[19250,25],[19300,30],[20100,10],[20150,15],[20200,20],[20250,25],[20300,30]]',
    true);
// correct answer = 6
echo PHP_EOL . $cruiseControl->findMaxGreenWaveSpeed($speed, $lightsInput) . PHP_EOL;





