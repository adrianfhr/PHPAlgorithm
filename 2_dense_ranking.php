<?php
function dense_ranking($scores, $gits_scores) {
    // Buat daftar skor unik karena skor yang sama dinilai 1 peringkat
    $unique_scores = [];

    // Melakukan perulangan untuk mendapatkan skor unik dari skor yang ada
    foreach ($scores as $score) {
        if (empty($unique_scores) || $score !== end($unique_scores)) { // Jika skor unik kosong atau skor saat ini tidak sama dengan skor terakhir karena skor yang diinput sudah urut
            $unique_scores[] = $score;
        }
    }

    // Tentukan peringkat untuk setiap skor git
    $rankings = [];
    foreach ($gits_scores as $score) {
        $rank = 1;
        foreach ($unique_scores as $unique_score) {
            if ($score < $unique_score) {
                $rank++;
            } else {
                break;
            }
        }
        $rankings[] = $rank;
    }

    return $rankings;
}

?>