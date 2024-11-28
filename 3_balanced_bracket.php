<?php
function balanced_bracket($string) {
    // membuat map pasangan tanda kurung
    $bracket_map = [
        "{" => "}",
        "(" => ")",
        "[" => "]"
    ];

    $stack = []; // Stack untuk menyimpan tanda kurung

    // Iterasi setiap karakter dalam string
    foreach (str_split($string) as $char) {
        if (array_key_exists($char, $bracket_map)) {
            // Jika tanda kurung buka, masukkan ke stack
            array_push($stack, $char);
        } else {
            // Jika tanda kurung tutup dan stack kosong atau tanda kurung tidak cocok
            if (empty($stack) || $bracket_map[end($stack)] !== $char) {
                return "NO"; // Jika tidak cocok, return "NO"
            }
            // Pasangan cocok, hapus elemen terakhir
            array_pop($stack);
        }
    }

    // Jika stack kosong, tanda kurung seimbang return "YES", jika tidak return "NO"
    return empty($stack) ? "YES" : "NO";
}

?>