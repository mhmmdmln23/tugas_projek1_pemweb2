<?php
function presentasi($Nilai_UTS, $Nilai_UAS, $Nilai_tugas){
    $result = (30 * (int)$Nilai_UTS / 100) + (30 * (int)$Nilai_UAS / 100) + (30 * (int)$Nilai_tugas / 100);
    return $result;
}

function kelulusan($_nilai){
    if($_nilai > 55){
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}

function gradenilai($_nilai){
    if($_nilai > 85){
        return "A";
    } else if ($_nilai > 70){
        return "B";
    } else if ($_nilai > 56){
        return "C";
    } else if ($_nilai > 36){
        return "D";
    } else if($_nilai > 0){
        return "E";
    } else {
        return "I";
    }
}

function predikat_nilai($_grade){
    switch($_grade){
        case "A":
            return "Sangat Memuaskan";
            break;
        case "B" :
            return "Memuaskan";
            break;
        case "C":
            return "Cukup";
            break;
        case "D":
            return "Kurang";
            break;
        case "E":
            return "Sangat Kurang";
            break;
        default:
            return "Predikat tidak terdefinisi";
    }
}