<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuestionSeeder extends Seeder
{
    protected $faker;
    protected $questionCountPerCategory = 50;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'Relasi adalah ?',
            'multiple_choice' => [
                'A' => 'Istilah dalam matematika untuk menggambarkan Suatu hubungan antara dua buah himpunan',
                'B' => 'Istilah dalam matematika untuk menghitung Suatu hubungan antara dua buah himpunan',
                'C' => 'Istilah dalam matematika untuk menggambarkan Suatu himpunan',
                'D' => 'benar semua'
            ],
            'answer' => 'A',
            'index'  => 1
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'Istilah dalam matematika untuk menggambarkan Suatu hubungan antara dua buah himpunan adalah ?',
            'multiple_choice' => [
                'A' => 'fungsi',
                'B' => 'relasi',
                'C' => 'himpunan',
                'D' => 'diagram'
            ],
            'answer' => 'B',
            'index'  => 2
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'fungsi adalah ?',
            'multiple_choice' => [
                'A' => 'aturan komposisi himpunan',
                'B' => 'aturan dalam membuat sebuah diagram',
                'C' => 'aturan yang menghubungkan setiap elemen dalam sebuah himpunan',
                'D' => 'semua salah'
            ],
            'answer' => 'C',
            'index'  => 3
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'aturan yang menghubungkan setiap elemen dalam sebuah himpunan adalah ?',
            'multiple_choice' => [
                'A' => 'fungsi',
                'B' => 'relasi',
                'C' => 'himpunan',
                'D' => 'diagram'
            ],
            'answer' => 'A',
            'index'  => 4
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'istilah daerah asal pada materi fungsi dan relasi adalah ?',
            'multiple_choice' => [
                'A' => 'Domain',
                'B' => 'Kodomain',
                'C' => 'Relasi',
                'D' => 'Fungsi'
            ],
            'answer' => 'A',
            'index'  => 5
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'istilah daerah tujuan pada materi fungsi dan relasi adalah ?',
            'multiple_choice' => [
                'A' => 'Domain',
                'B' => 'Kodomain',
                'C' => 'Relasi',
                'D' => 'Fungsi'
            ],
            'answer' => 'B',
            'index'  => 6
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'f(x) = X^2 + 3X + 5, ubahlah dalam bentuk penulisan notasi',
            'multiple_choice' => [
                'A' => 'f(x) = X^3 + 2X^2 + 5X',
                'B' => 'f:x -> 3X + 5',
                'C' => 'f:x -> X^2 + 3X + 5',
                'D' => 'f:x -> 3X',
            ],
            'answer' => 'C',
            'index'  => 7
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'f(x) = 2X + 7, ubahlah dalam bentuk penulisan notasi',
            'multiple_choice' => [
                'A' => 'f(x) = 2X^2 + 7X',
                'B' => 'f:x -> 2X + 7',
                'C' => 'f:x -> X^3 + 2X + 7',
                'D' => 'f:x -> 2X',
            ],
            'answer' => 'B',
            'index'  => 8
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'mana dari pernyataan ini yang benar ?',
            'multiple_choice' => [
                'A' => 'fungsi adalah bukan bagian khusus dalam relasi',
                'B' => 'fungsi adalah bagian khusus dalam relasi',
                'C' => 'fungsi adalah kebalikan dari relasi',
                'D' => 'fungsi adalah nama lain dari relasi',
            ],
            'answer' => 'D',
            'index'  => 9
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'Tidak semua relasi itu fungsi, bagaimana pendapatmu ?',
            'multiple_choice' => [
                'A' => 'benar',
                'B' => 'salah',
                'C' => '',
                'D' => '',
            ],
            'answer' => 'A',
            'index'  => 10
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'berikut adalah bentuk fungsi yang benar, kecuali',
            'multiple_choice' => [
                'A' => 'diagram panah',
                'B' => 'koordinat kartesius',
                'C' => 'himpunan pasangan berurutan',
                'D' => 'fungsi kolom',
            ],
            'answer' => 'D',
            'index'  => 11
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'aturan pemetaan fungsi relasi yang sesuai adalah ?',
            'multiple_choice' => [
                'A' => 'setiap kodomain hanya memiliki relasi terhadap 1 domain',
                'B' => 'setiap domain hanya memiliki relasi terhadap 1 kodomain',
                'C' => 'setiap domain tidak harus memiliki hanya relasi terhadap 1 kodomain',
                'D' => 'setiap kodomain tidak harus memiliki hanya relasi terhadap 1 domain',
            ],
            'answer' => 'B',
            'index'  => 12
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'rumus jumlah fungsi yang benar adalah ?',
            'multiple_choice' => [
                'A' => 'n(kodomain) ^ n(domain)',
                'B' => 'n(domain) ^ n(kodomain)',
                'C' => 'n(kodomain) ^ n(kodomain)',
                'D' => 'n(kodomain) ^ n(kodomain)',
            ],
            'answer' => 'A',
            'index'  => 13
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { A, B, C} dan kodomain = {1, 2}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '2^2 = 4',
                'B' => '3^3 = 27',
                'C' => '3^2 = 9',
                'D' => '2^3 = 8',
            ],
            'answer' => 'D',
            'index'  => 14
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { Jeruk, Mangga, Apel, Susu, Brokoli} dan kodomain = {Buah, Sayuran, Minuman}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '5^3 = 125',
                'B' => '3^5 = 243',
                'C' => '5^5 = 3.125',
                'D' => '3^3 = 27',
            ],
            'answer' => 'B',
            'index'  => 15
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { Avanza, Xenia, Beat, Mega-pro} dan kodomain = {Mobil, Motor}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '2^4 = 16',
                'B' => '2^2 = 4',
                'C' => '4^2 = 16',
                'D' => '4^4 = 256',
            ],
            'answer' => 'A',
            'index'  => 16
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { Kendaraan, Hewan} dan kodomain = {Mobil, Motor, Kambing, Sapi}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '2^4 = 16',
                'B' => '2^2 = 4',
                'C' => '4^2 = 16',
                'D' => '4^4 = 256',
            ],
            'answer' => 'C',
            'index'  => 17
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { Kendaraan, Hewan, Minuman, Makanan } dan kodomain = {Mobil, Susu, Kambing, Sate}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '2^4 = 16',
                'B' => '2^2 = 4',
                'C' => '4^2 = 16',
                'D' => '4^4 = 256',
            ],
            'answer' => 'D',
            'index'  => 18
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'Diberikan suatu fungsi f:x -> 6x-7 dan g(x) = 3-5x, hitung nilai x jika f(2) + g(5)',
            'multiple_choice' => [
                'A' => '-17',
                'B' => '17',
                'C' => '-16',
                'D' => '16',
            ],
            'answer' => 'A',
            'index'  => 19
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'Diberikan suatu fungsi f:x -> 6x-7 dan g(x) = 3-5x, hitung nilai x jika f(5) + g(4)',
            'multiple_choice' => [
                'A' => '7',
                'B' => '-7',
                'C' => '6',
                'D' => '-6',
            ],
            'answer' => 'C',
            'index'  => 20
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Diberikan suatu fungsi f:x -> 6x-7 dan g(x) = 3-5x, hitung nilai x jika f(7) + g(3)',
            'multiple_choice' => [
                'A' => '21',
                'B' => '22',
                'C' => '23',
                'D' => '24',
            ],
            'answer' => 'C',
            'index'  => 21
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Diberikan suatu fungsi f:x -> 5x-2 dan g(x) = 6-5x, hitung nilai x jika f(2) - g(3)',
            'multiple_choice' => [
                'A' => '14',
                'B' => '15',
                'C' => '16',
                'D' => '17',
            ],
            'answer' => 'C',
            'index'  => 22
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Jika f:x -> ax+b. Jika f(1) = 7 dan f(-3) = -9 maka tentukan nilai a dan b nya',
            'multiple_choice' => [
                'A' => '3 dan 2',
                'B' => '4 dan 3',
                'C' => '5 dan 4',
                'D' => '6 dan 5',
            ],
            'answer' => 'B',
            'index'  => 23
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Jika f:x -> ax+b. Jika f(1) = 7 dan f(-3) = -9 maka tentukan nilai a + 2b',
            'multiple_choice' => [
                'A' => '9',
                'B' => '10',
                'C' => '11',
                'D' => '12',
            ],
            'answer' => 'B',
            'index'  => 24
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Jika f:x -> ax+b. Jika f(1) = 7 dan f(-3) = -9 maka tentukan nilai 3a x b',
            'multiple_choice' => [
                'A' => '32',
                'B' => '34',
                'C' => '36',
                'D' => '38',
            ],
            'answer' => 'C',
            'index'  => 25
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Jika f:x -> ax+b. Jika f(1) = 7 dan f(-3) = -9 maka tentukan nilai (a - b) / b',
            'multiple_choice' => [
                'A' => '1',
                'B' => '1/2',
                'C' => '1/3',
                'D' => '1/4',
            ],
            'answer' => 'C',
            'index'  => 26
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'Relasi adalah ?',
            'multiple_choice' => [
                'A' => 'Istilah dalam matematika untuk menggambarkan Suatu hubungan antara dua buah himpunan',
                'B' => 'Istilah dalam matematika untuk menghitung Suatu hubungan antara dua buah himpunan',
                'C' => 'Istilah dalam matematika untuk menggambarkan Suatu himpunan',
                'D' => 'benar semua'
            ],
            'answer' => 'A',
            'index'  => 27
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'Istilah dalam matematika untuk menggambarkan Suatu hubungan antara dua buah himpunan adalah ?',
            'multiple_choice' => [
                'A' => 'fungsi',
                'B' => 'relasi',
                'C' => 'himpunan',
                'D' => 'diagram'
            ],
            'answer' => 'B',
            'index'  => 28
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'fungsi adalah ?',
            'multiple_choice' => [
                'A' => 'aturan komposisi himpunan',
                'B' => 'aturan dalam membuat sebuah diagram',
                'C' => 'aturan yang menghubungkan setiap elemen dalam sebuah himpunan',
                'D' => 'semua salah'
            ],
            'answer' => 'C',
            'index'  => 29
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'aturan yang menghubungkan setiap elemen dalam sebuah himpunan adalah ?',
            'multiple_choice' => [
                'A' => 'fungsi',
                'B' => 'relasi',
                'C' => 'himpunan',
                'D' => 'diagram'
            ],
            'answer' => 'A',
            'index'  => 30
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'istilah daerah asal pada materi fungsi dan relasi adalah ?',
            'multiple_choice' => [
                'A' => 'Domain',
                'B' => 'Kodomain',
                'C' => 'Relasi',
                'D' => 'Fungsi'
            ],
            'answer' => 'A',
            'index'  => 31
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'istilah daerah tujuan pada materi fungsi dan relasi adalah ?',
            'multiple_choice' => [
                'A' => 'Domain',
                'B' => 'Kodomain',
                'C' => 'Relasi',
                'D' => 'Fungsi'
            ],
            'answer' => 'B',
            'index'  => 32
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'f(x) = X^2 + 3X + 5, ubahlah dalam bentuk penulisan notasi',
            'multiple_choice' => [
                'A' => 'f(x) = X^3 + 2X^2 + 5X',
                'B' => 'f:x -> 3X + 5',
                'C' => 'f:x -> X^2 + 3X + 5',
                'D' => 'f:x -> 3X',
            ],
            'answer' => 'C',
            'index'  => 33
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'f(x) = 2X + 7, ubahlah dalam bentuk penulisan notasi',
            'multiple_choice' => [
                'A' => 'f(x) = 2X^2 + 7X',
                'B' => 'f:x -> 2X + 7',
                'C' => 'f:x -> X^3 + 2X + 7',
                'D' => 'f:x -> 2X',
            ],
            'answer' => 'B',
            'index'  => 34
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'mana dari pernyataan ini yang benar ?',
            'multiple_choice' => [
                'A' => 'fungsi adalah bukan bagian khusus dalam relasi',
                'B' => 'fungsi adalah bagian khusus dalam relasi',
                'C' => 'fungsi adalah kebalikan dari relasi',
                'D' => 'fungsi adalah nama lain dari relasi',
            ],
            'answer' => 'D',
            'index'  => 35
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Mudah',
            'question' => 'Tidak semua relasi itu fungsi, bagaimana pendapatmu ?',
            'multiple_choice' => [
                'A' => 'benar',
                'B' => 'salah',
                'C' => '',
                'D' => '',
            ],
            'answer' => 'A',
            'index'  => 36
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'berikut adalah bentuk fungsi yang benar, kecuali',
            'multiple_choice' => [
                'A' => 'diagram panah',
                'B' => 'koordinat kartesius',
                'C' => 'himpunan pasangan berurutan',
                'D' => 'fungsi kolom',
            ],
            'answer' => 'D',
            'index'  => 37
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'aturan pemetaan fungsi relasi yang sesuai adalah ?',
            'multiple_choice' => [
                'A' => 'setiap kodomain hanya memiliki relasi terhadap 1 domain',
                'B' => 'setiap domain hanya memiliki relasi terhadap 1 kodomain',
                'C' => 'setiap domain tidak harus memiliki hanya relasi terhadap 1 kodomain',
                'D' => 'setiap kodomain tidak harus memiliki hanya relasi terhadap 1 domain',
            ],
            'answer' => 'B',
            'index'  => 38
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'rumus jumlah fungsi yang benar adalah ?',
            'multiple_choice' => [
                'A' => 'n(kodomain) ^ n(domain)',
                'B' => 'n(domain) ^ n(kodomain)',
                'C' => 'n(kodomain) ^ n(kodomain)',
                'D' => 'n(kodomain) ^ n(kodomain)',
            ],
            'answer' => 'A',
            'index'  => 39
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { A, B, C} dan kodomain = {1, 2}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '2^2 = 4',
                'B' => '3^3 = 27',
                'C' => '3^2 = 9',
                'D' => '2^3 = 8',
            ],
            'answer' => 'D',
            'index'  => 40
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { Jeruk, Mangga, Apel, Susu, Brokoli} dan kodomain = {Buah, Sayuran, Minuman}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '5^3 = 125',
                'B' => '3^5 = 243',
                'C' => '5^5 = 3.125',
                'D' => '3^3 = 27',
            ],
            'answer' => 'B',
            'index'  => 41
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { Avanza, Xenia, Beat, Mega-pro} dan kodomain = {Mobil, Motor}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '2^4 = 16',
                'B' => '2^2 = 4',
                'C' => '4^2 = 16',
                'D' => '4^4 = 256',
            ],
            'answer' => 'A',
            'index'  => 42
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { Kendaraan, Hewan} dan kodomain = {Mobil, Motor, Kambing, Sapi}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '2^4 = 16',
                'B' => '2^2 = 4',
                'C' => '4^2 = 16',
                'D' => '4^4 = 256',
            ],
            'answer' => 'C',
            'index'  => 43
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'diketahui sebuah fungsi relasi memiliki domain = { Kendaraan, Hewan, Minuman, Makanan } dan kodomain = {Mobil, Susu, Kambing, Sate}, berapakah jumlah fungsi yang dapat dibuat ?',
            'multiple_choice' => [
                'A' => '2^4 = 16',
                'B' => '2^2 = 4',
                'C' => '4^2 = 16',
                'D' => '4^4 = 256',
            ],
            'answer' => 'D',
            'index'  => 44
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'Diberikan suatu fungsi f:x -> 6x-7 dan g(x) = 3-5x, hitung nilai x jika f(2) + g(5)',
            'multiple_choice' => [
                'A' => '-17',
                'B' => '17',
                'C' => '-16',
                'D' => '16',
            ],
            'answer' => 'A',
            'index'  => 45
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sedang',
            'question' => 'Diberikan suatu fungsi f:x -> 6x-7 dan g(x) = 3-5x, hitung nilai x jika f(5) + g(4)',
            'multiple_choice' => [
                'A' => '7',
                'B' => '-7',
                'C' => '6',
                'D' => '-6',
            ],
            'answer' => 'C',
            'index'  => 46
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Diberikan suatu fungsi f:x -> 6x-7 dan g(x) = 3-5x, hitung nilai x jika f(7) + g(3)',
            'multiple_choice' => [
                'A' => '21',
                'B' => '22',
                'C' => '23',
                'D' => '24',
            ],
            'answer' => 'C',
            'index'  => 47
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Diberikan suatu fungsi f:x -> 5x-2 dan g(x) = 6-5x, hitung nilai x jika f(2) - g(3)',
            'multiple_choice' => [
                'A' => '14',
                'B' => '15',
                'C' => '16',
                'D' => '17',
            ],
            'answer' => 'C',
            'index'  => 48
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Jika f:x -> ax+b. Jika f(1) = 7 dan f(-3) = -9 maka tentukan nilai a dan b nya',
            'multiple_choice' => [
                'A' => '3 dan 2',
                'B' => '4 dan 3',
                'C' => '5 dan 4',
                'D' => '6 dan 5',
            ],
            'answer' => 'B',
            'index'  => 49
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Jika f:x -> ax+b. Jika f(1) = 7 dan f(-3) = -9 maka tentukan nilai a + 2b',
            'multiple_choice' => [
                'A' => '9',
                'B' => '10',
                'C' => '11',
                'D' => '12',
            ],
            'answer' => 'B',
            'index'  => 50
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Jika f:x -> ax+b. Jika f(1) = 7 dan f(-3) = -9 maka tentukan nilai 3a x b',
            'multiple_choice' => [
                'A' => '32',
                'B' => '34',
                'C' => '36',
                'D' => '38',
            ],
            'answer' => 'C',
            'index'  => 51
        ]);
        Question::create([
            'bab_id'   => '1',
            'category' => 'Sulit',
            'question' => 'Jika f:x -> ax+b. Jika f(1) = 7 dan f(-3) = -9 maka tentukan nilai (a - b) / b',
            'multiple_choice' => [
                'A' => '1',
                'B' => '1/2',
                'C' => '1/3',
                'D' => '1/4',
            ],
            'answer' => 'C',
            'index'  => 52
        ]);



        // $this->faker = Faker::create("id_ID");
        // $faker = $this->faker;

        // $categories = ['Mudah', 'Menengah', 'Sulit'];
        // for ($i=0; $i < $this->questionCountPerCategory; $i++) {
        //     foreach ($categories as $row) {
        //         Question::create([
        //             'category' => $row,
        //             'question' => $faker->sentence(),
        //             'multiple_choice' => [
        //                 'A' => $faker->text(20),
        //                 'B' => $faker->text(20),
        //                 'C' => $faker->text(20),
        //                 'D' => $faker->text(20)
        //             ],
        //             'answer' => 'A',
        //             'value' => $this->getValueByCategory($row)
        //         ]);
        //     }
        // }
    }

    // private function getValueByCategory($category){
    //     $lowerLimit = [
    //         'Mudah' => 0.1,
    //         'Menengah' => 0.26,
    //         'Sulit' => 0.51,
    //     ];
    //     $upperLimit = [
    //         'Mudah' => 0.25,
    //         'Menengah' => 0.50,
    //         'Sulit' => 1,
    //     ];
    //     return $this->faker->randomFloat(1, $lowerLimit[$category], $upperLimit[$category]);
    // }
}
