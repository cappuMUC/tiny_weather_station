# tiny_weather_station

collect temperature data and display it with a wordpress widget

# Temperature Database  REST API

## GET

### /temperature
Gibt alle messungen der Datenbank im JSON Format zurück.

### /temperature/current
Gibt die letzte Messung zurück.

## PUT
Benötigt die Messdaten im Format `time=$TIME&t1=$SENSOR1&t2=$SENSOR2`

## Testen der API mit CURL

### Schreiben von Messwerten
> curl --data="time=$(date +'%s')&t1=123.3&t2=234.5" $URL/wwt.php

### Lesen von Messwerten
> curl -X GET $URL/wwt.php/temperature
> curl -X GET $URL/wwt.php/temperature/current
