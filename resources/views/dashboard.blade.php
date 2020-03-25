@extends('layouts/master')

@section('content')

@javascript(compact('pusherKey', 'clientConnectionPath', 'environment', 'openWeatherMapKey'))
<div id="dashboard">
    <dashboard class="font-sans">
        <time-weather position="a1:a6" date-format="ddd DD/MM" time-zone="Europe/Brussels" weather-city="Antwerp"></time-weather>
        <internet-connection position="a1:a5"></internet-connection>
        <statistics region="Bamako" position="b1:b5"></statistics>
        <statistics region="Kayes" position="c1:c5"></statistics>
        <statistics region="Koulikoro" position="d1:d5"></statistics>
        <statistics region="Ségou" position="e1:e5"></statistics>
        <statistics region="Mopti" position="a6:a10"></statistics>
        <statistics region="Sikasso" position="b6:b10"></statistics>
        <statistics region="Tombouctou" position="c6:c10"></statistics>
        <statistics region="Gao" position="d6:d10"></statistics>
        <statistics region="Kidal" position="e6:e10"></statistics>
    </dashboard>
</div>

@endsection
