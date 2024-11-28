# Repository Algoritma PHP

Repository ini berisi tiga skrip PHP yang menyelesaikan berbagai masalah algoritmik. Setiap file difokuskan pada tugas tertentu dan menunjukkan pendekatan untuk tantangan algoritma yang umum.

## Deskripsi File

### 1. `generate_oeis.php`
Skrip ini menghasilkan deret bilangan berdasarkan rumus OEIS:

a(n) = n(n+1)/2 + 1 

referensi: [OEIS A000124](https://oeis.org/A000124)

#### Fitur:
- Menghasilkan deret bilangan untuk input `n` tertentu.
- Output berupa deret angka yang dipisahkan dengan tanda hubung.

#### Contoh Penggunaan:
```php
$test_cases = [7, 10, 15];
foreach ($test_cases as $test_case) {
    echo "Input: $test_case" . " || " . "Output: " . generateOEIS($test_case) . "\n";
}
```
ScreenShot Output:
![ScreenShot](./1_generate_oeis_result.png)

### 2. `dense_ranking.php`
Skrip ini menghitung peringkat dense untuk daftar skor. Peringkat dense memberikan peringkat yang sama untuk skor yang sama.

#### Fitur:
- Menangani skor duplikat dengan benar untuk memberikan peringkat yang sama.
- Menghitung peringkat untuk skor baru berdasarkan daftar skor yang ada.

#### Contoh Penggunaan:
```php
$scores = [100, 100, 50, 40, 40, 20, 10];
$gitsScores = [5, 25, 50, 120];
$ranks = dense_ranking($scores, $gitsScores);

echo "Scores: " . implode(' ', $scores) . "\n";
echo "GITS's Scores: " . implode(' ', $gitsScores) . "\n";
echo "====================\n";
echo "Ranks: " . implode(' ', $ranks) . "\n";
```
ScreenShot Output:
![ScreenShot](./2_dense_ranking_result.png)

### 3. `balanced_bracket.php`
Skrip ini memeriksa apakah sebuah string yang berisi tanda kurung seimbang. Sebuah string dianggap seimbang jika setiap tanda kurung buka memiliki tanda kurung tutup yang sesuai dan berada dalam urutan yang benar.

#### Fitur:
- Mendukung tanda kurung kurawal {}, siku [], dan bulat ().
- Mengembalikan YES jika string seimbang dan NO jika tidak.

#### Contoh Penggunaan:
```php
$test_cases = ['{[()]}', '{[(])}', '{{[[(())]]}}'];
foreach ($test_cases as $test_case) {
    echo "Input: $test_case || Output: " . isBalanced($test_case) . "\n";
}

// Output: YES NO YES
```
### ScreenShot Output:
![ScreenShot](./3_balanced_bracket_result.png)

### Kompleksitas:
#### Kompleksitas Waktu:

1. Iterasi melalui string:
foreach (str_split($string) as $char) digunakan untuk memproses setiap karakter dalam string.
Panjang string adalah n, sehingga iterasi ini berjalan O(n).

2. Operasi pada stack:
array_push(stack, char) untuk menambahkan elemen ke stack dan array_pop(stack) untuk menghapus elemen terakhir adalah operasi dengan waktu konstan O(1).
Karena setiap operasi push atau pop dilakukan untuk setiap karakter dalam string, total waktu untuk operasi ini adalah O(n).

3. Pengecekan array_key_exists(char, bracket_map):
Operasi pencarian dalam array asosiatif (bracket_map) memiliki kompleksitas O(1) karena jumlah pasangan tanda kurung tetap (konstan).
Operasi ini dilakukan untuk setiap karakter dalam string, tetapi karena waktunya tetap O(1), ini tidak menambah kompleksitas total.

Total kompleksitas waktu: Semua operasi utama berjalan dalam skala n, sehingga total kompleksitas waktu adalah O(n).

#### Kompleksitas Ruang:

1. Stack untuk menyimpan tanda kurung:
Stack digunakan untuk menyimpan tanda kurung buka saat iterasi string. Dalam kasus terburuk, string seperti "({[]})" akan menyebabkan semua karakter dimasukkan ke stack.

Ruang yang digunakan stack dalam kasus ini adalah O(n), di mana n adalah panjang string.

2. Map pasangan tanda kurung (bracket_map):
bracket_map adalah array asosiatif dengan jumlah pasangan tanda kurung tetap ({}, (), []). Ukurannya konstan, sehingga memakan ruang O(1).

Total kompleksitas ruang: Dominasi berasal dari penggunaan stack, sehingga total kompleksitas ruang adalah O(n).