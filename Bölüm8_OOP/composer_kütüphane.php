<?php

require __DIR__ .'/vendor/autoload.php';
use Carbon\Carbon;

$now=Carbon::now();
echo "Şimdiki Tarih ve Saat:".$now->toDateTimeString;

$start=Carbon::CreateFromDate(2000,1,1);
$end=Carbon::createFromDate(2025,1,1);

$diffInDays=$start->diffInDays($end);
echo "200 ve 2025 tarihler arasındaki gün sayısı".$diffInDays;
