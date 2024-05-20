<?php

function formatRupiah($angka)
{
    return "Rp. " . number_format($angka, 0, ',', '.');
}


function tanggal2($tgl)
{
    $tg = explode('-', $tgl);
    return $tg[2] . '-' . $tg[1] . '-' . $tg[0];
}
