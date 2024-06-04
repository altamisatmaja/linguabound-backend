<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('bagian')->insert([
            ['nama_bagian' => 'Pemula'],
            ['nama_bagian' => 'Pejuang'],
            ['nama_bagian' => 'Petualang'],
            ['nama_bagian' => 'Legenda'],
        ]);

        DB::table('sub_bagian')->insert([

            /**
             *Level 1
             */

            // Sub bagian 1
            ['nama_sub_bagian' => 'Level 1', 'nilai_maks' => 100, 'bagian_id' => 1],
            // Sub bagian 2
            ['nama_sub_bagian' => 'Level 2', 'nilai_maks' => 100, 'bagian_id' => 1],
            // Sub bagian 3
            ['nama_sub_bagian' => 'Level 3', 'nilai_maks' => 100, 'bagian_id' => 1],
            // Sub bagian 4
            ['nama_sub_bagian' => 'Level 4', 'nilai_maks' => 100, 'bagian_id' => 1],

            /**
             *Level 2
             */

            // Sub bagian 5
            ['nama_sub_bagian' => 'Level 1', 'nilai_maks' => 100, 'bagian_id' => 2],
            // Sub bagian 6
            ['nama_sub_bagian' => 'Level 2', 'nilai_maks' => 100, 'bagian_id' => 2],
            // Sub bagian 7
            ['nama_sub_bagian' => 'Level 3', 'nilai_maks' => 100, 'bagian_id' => 2],
            // Sub bagian 8
            ['nama_sub_bagian' => 'Level 4', 'nilai_maks' => 100, 'bagian_id' => 2],

            /**
             *Level 3
             */

            // Sub bagian 9
            ['nama_sub_bagian' => 'Level 1', 'nilai_maks' => 100, 'bagian_id' => 3],
            // Sub bagian 10
            ['nama_sub_bagian' => 'Level 2', 'nilai_maks' => 100, 'bagian_id' => 3],
            // Sub bagian 11
            ['nama_sub_bagian' => 'Level 3', 'nilai_maks' => 100, 'bagian_id' => 3],
            // Sub bagian 12
            ['nama_sub_bagian' => 'Level 4', 'nilai_maks' => 100, 'bagian_id' => 3],

            /**
             *Level 4
             */

            // Sub bagian 13
            ['nama_sub_bagian' => 'Level 1', 'nilai_maks' => 100, 'bagian_id' => 4],
            // Sub bagian 14
            ['nama_sub_bagian' => 'Level 2', 'nilai_maks' => 100, 'bagian_id' => 4],
            // Sub bagian 15
            ['nama_sub_bagian' => 'Level 3', 'nilai_maks' => 100, 'bagian_id' => 4],
            // Sub bagian 16
            ['nama_sub_bagian' => 'Level 4', 'nilai_maks' => 100, 'bagian_id' => 4],
        ]);

        $soalBagian1Level1 = [
            // Pertanyaan 1
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 1],

            // Pertanyaan 2
            ['pertanyaan' => 'Which word means the opposite of "small"?', 'sub_bagian_id' => 1],

            // Pertanyaan 3
            ['pertanyaan' => 'What is the correct spelling of the color that starts with "bl" and ends with "ue"?', 'sub_bagian_id' => 1],

            // Pertanyaan 4
            ['pertanyaan' => 'What do you call a place where you can borrow books?', 'sub_bagian_id' => 1],

            // Pertanyaan 5
            ['pertanyaan' => 'Which of these is a vegetable?', 'sub_bagian_id' => 1],

            // Pertanyaan 6
            ['pertanyaan' => 'Which word means the opposite of "sad"?', 'sub_bagian_id' => 1],

            // Pertanyaan 7
            ['pertanyaan' => 'What is the past tense of "go"?', 'sub_bagian_id' => 1],

            // Pertanyaan 8
            ['pertanyaan' => 'Which of these animals can fly?', 'sub_bagian_id' => 1],

            // Pertanyaan 9
            ['pertanyaan' => 'How many days are there in a week?', 'sub_bagian_id' => 1],

            // Pertanyaan 10
            ['pertanyaan' => 'What do we call the study of numbers?', 'sub_bagian_id' => 1],
        ];

        $soalBagian1Level2 = [
            // Pertanyaan 11
            ['pertanyaan' => 'Which of these is not a fruit?', 'sub_bagian_id' => 2],

            // Pertanyaan 12
            ['pertanyaan' => 'What do we call a person who flies an airplane?', 'sub_bagian_id' => 2],

            // Pertanyaan 13
            ['pertanyaan' => 'Which of these is a type of clothing?', 'sub_bagian_id' => 2],

            // Pertanyaan 14
            ['pertanyaan' => 'What is the opposite of "day"?', 'sub_bagian_id' => 2],

            // Pertanyaan 15
            ['pertanyaan' => 'What is the capital of France?', 'sub_bagian_id' => 2],

            // Pertanyaan 16
            ['pertanyaan' => 'Which of these is not a color?', 'sub_bagian_id' => 2],

            // Pertanyaan 17
            ['pertanyaan' => 'How many legs does a spider have?', 'sub_bagian_id' => 2],

            // Pertanyaan 18
            ['pertanyaan' => 'What is the opposite of "wet"?', 'sub_bagian_id' => 2],

            // Pertanyaan 19
            ['pertanyaan' => 'Which word means the opposite of "fast"?', 'sub_bagian_id' => 2],

            // Pertanyaan 20
            ['pertanyaan' => 'What do you use to write on paper?', 'sub_bagian_id' => 2],
        ];

        $soalBagian1Level3 = [
            // Pertanyaan 21
            ['pertanyaan' => 'What is the opposite of "young"?', 'sub_bagian_id' => 3],

            // Pertanyaan 22
            ['pertanyaan' => 'What is the name of the biggest ocean on Earth?', 'sub_bagian_id' => 3],

            // Pertanyaan 23
            ['pertanyaan' => 'Which of these is not a shape?', 'sub_bagian_id' => 3],

            // Pertanyaan 24
            ['pertanyaan' => 'What is the main ingredient in bread?', 'sub_bagian_id' => 3],

            // Pertanyaan 25
            ['pertanyaan' => 'What is the opposite of "dark"?', 'sub_bagian_id' => 3],

            // Pertanyaan 26
            ['pertanyaan' => 'Which of these is a reptile?', 'sub_bagian_id' => 3],

            // Pertanyaan 27
            ['pertanyaan' => 'What is the opposite of "near"?', 'sub_bagian_id' => 3],

            // Pertanyaan 28
            ['pertanyaan' => 'Which of these is a musical instrument?', 'sub_bagian_id' => 3],

            // Pertanyaan 29
            ['pertanyaan' => 'What is the name of the closest star to Earth?', 'sub_bagian_id' => 3],

            // Pertanyaan 30
            ['pertanyaan' => 'What do we call a person who makes bread?', 'sub_bagian_id' => 3],
        ];

        $soalBagian1Level4 = [
            // Pertanyaan 31
            ['pertanyaan' => 'What is the opposite of "heavy"?', 'sub_bagian_id' => 4],

            // Pertanyaan 32
            ['pertanyaan' => 'Which of these is a type of flower?', 'sub_bagian_id' => 4],

            // Pertanyaan 33
            ['pertanyaan' => 'What do we call the study of living organisms?', 'sub_bagian_id' => 4],

            // Pertanyaan 34
            ['pertanyaan' => 'What is the opposite of "loud"?', 'sub_bagian_id' => 4],

            // Pertanyaan 35
            ['pertanyaan' => 'What is the capital of the United States?', 'sub_bagian_id' => 4],

            // Pertanyaan 36
            ['pertanyaan' => 'Which of these is a mode of transportation?', 'sub_bagian_id' => 4],

            // Pertanyaan 37
            ['pertanyaan' => 'What is the opposite of "full"?', 'sub_bagian_id' => 4],

            // Pertanyaan 38
            ['pertanyaan' => 'What is the name of the longest river in the world?', 'sub_bagian_id' => 4],

            // Pertanyaan 39
            ['pertanyaan' => 'Which of these is a type of sport?', 'sub_bagian_id' => 4],

            // Pertanyaan 40
            ['pertanyaan' => 'What is the opposite of "dark"?', 'sub_bagian_id' => 4],
        ];

        DB::table('soal')->insert(array_merge($soalBagian1Level1, $soalBagian1Level2, $soalBagian1Level3, $soalBagian1Level4));

        $pilihanBagian1Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 1],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 1],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 1],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 1],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 2],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 2],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 2],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 2],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 3],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 3],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 3],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 3],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 4],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 4],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 4],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 4],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 5],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 5],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 5],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 5],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 6],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 6],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 6],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 6],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 7],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 7],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 7],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 7],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 8],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 8],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 8],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 8],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 9],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 9],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 9],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 9],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 10],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 10],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 10],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 10],
        ];

        $pilihanBagian1Level2 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 11],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 11],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 11],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 11],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 12],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 12],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 12],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 12],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 13],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 13],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 13],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 13],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 14],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 14],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 14],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 14],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 15],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 15],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 15],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 15],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 16],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 16],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 16],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 16],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 17],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 17],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 17],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 17],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 18],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 18],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 18],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 18],
            // Pertanyaan 19
            ['pilihan' => 'Quick', 'skor' => 0, 'benar' => false, 'soal_id' => 19],
            ['pilihan' => 'Slow', 'skor' => 20, 'benar' => true, 'soal_id' => 19],
            ['pilihan' => 'Rapid', 'skor' => 0, 'benar' => false, 'soal_id' => 19],
            ['pilihan' => 'Swift', 'skor' => 0, 'benar' => false, 'soal_id' => 19],
            // Pertanyaan 20
            ['pilihan' => 'Pencil', 'skor' => 20, 'benar' => true, 'soal_id' => 20],
            ['pilihan' => 'Eraser', 'skor' => 0, 'benar' => false, 'soal_id' => 20],
            ['pilihan' => 'Sharpener', 'skor' => 0, 'benar' => false, 'soal_id' => 20],
            ['pilihan' => 'Ruler', 'skor' => 0, 'benar' => false, 'soal_id' => 20],
        ];

        $pilihanBagian1Level3 = [
            // Pertanyaan 21
            ['pilihan' => 'Old', 'skor' => 20, 'benar' => false, 'soal_id' => 21],
            ['pilihan' => 'Baby', 'skor' => 0, 'benar' => false, 'soal_id' => 21],
            ['pilihan' => 'Teen', 'skor' => 0, 'benar' => false, 'soal_id' => 21],
            ['pilihan' => 'Infant', 'skor' => 0, 'benar' => true, 'soal_id' => 21],
            // Pertanyaan 22
            ['pilihan' => 'Atlantic', 'skor' => 0, 'benar' => false, 'soal_id' => 22],
            ['pilihan' => 'Indian', 'skor' => 20, 'benar' => true, 'soal_id' => 22],
            ['pilihan' => 'Pacific', 'skor' => 0, 'benar' => false, 'soal_id' => 22],
            ['pilihan' => 'Arctic', 'skor' => 0, 'benar' => false, 'soal_id' => 22],
            // Pertanyaan 23
            ['pilihan' => 'Circle', 'skor' => 0, 'benar' => false, 'soal_id' => 23],
            ['pilihan' => 'Square', 'skor' => 0, 'benar' => true, 'soal_id' => 23],
            ['pilihan' => 'Tree', 'skor' => 20, 'benar' => false, 'soal_id' => 23],
            ['pilihan' => 'Triangle', 'skor' => 0, 'benar' => false, 'soal_id' => 23],
            // Pertanyaan 24
            ['pilihan' => 'Flour', 'skor' => 20, 'benar' => true, 'soal_id' => 24],
            ['pilihan' => 'Sugar', 'skor' => 0, 'benar' => false, 'soal_id' => 24],
            ['pilihan' => 'Milk', 'skor' => 0, 'benar' => false, 'soal_id' => 24],
            ['pilihan' => 'Butter', 'skor' => 0, 'benar' => false, 'soal_id' => 24],
            // Pertanyaan 25
            ['pilihan' => 'Light', 'skor' => 20, 'benar' => false, 'soal_id' => 25],
            ['pilihan' => 'Shadow', 'skor' => 0, 'benar' => true, 'soal_id' => 25],
            ['pilihan' => 'Dim', 'skor' => 0, 'benar' => false, 'soal_id' => 25],
            ['pilihan' => 'Gloomy', 'skor' => 0, 'benar' => false, 'soal_id' => 25],
            // Pertanyaan 26
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 26],
            ['pilihan' => 'Snake', 'skor' => 20, 'benar' => true, 'soal_id' => 26],
            ['pilihan' => 'Hamster', 'skor' => 0, 'benar' => false, 'soal_id' => 26],
            ['pilihan' => 'Rabbit', 'skor' => 0, 'benar' => false, 'soal_id' => 26],
            // Pertanyaan 27
            ['pilihan' => 'Close', 'skor' => 0, 'benar' => false, 'soal_id' => 27],
            ['pilihan' => 'Far', 'skor' => 20, 'benar' => true, 'soal_id' => 27],
            ['pilihan' => 'Distance', 'skor' => 0, 'benar' => false, 'soal_id' => 27],
            ['pilihan' => 'Apart', 'skor' => 0, 'benar' => false, 'soal_id' => 27],
            // Pertanyaan 28
            ['pilihan' => 'Book', 'skor' => 0, 'benar' => true, 'soal_id' => 28],
            ['pilihan' => 'Piano', 'skor' => 20, 'benar' => false, 'soal_id' => 28],
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 28],
            ['pilihan' => 'Cup', 'skor' => 0, 'benar' => false, 'soal_id' => 28],
            // Pertanyaan 29
            ['pilihan' => 'Venus', 'skor' => 0, 'benar' => false, 'soal_id' => 29],
            ['pilihan' => 'Mars', 'skor' => 0, 'benar' => true, 'soal_id' => 29],
            ['pilihan' => 'Sun', 'skor' => 20, 'benar' => false, 'soal_id' => 29],
            ['pilihan' => 'Moon', 'skor' => 0, 'benar' => false, 'soal_id' => 29],
            // Pertanyaan 30
            ['pilihan' => 'Chef', 'skor' => 0, 'benar' => true, 'soal_id' => 30],
            ['pilihan' => 'Baker', 'skor' => 20, 'benar' => false, 'soal_id' => 30],
            ['pilihan' => 'Cook', 'skor' => 0, 'benar' => false, 'soal_id' => 30],
            ['pilihan' => 'Waiter', 'skor' => 0, 'benar' => false, 'soal_id' => 30],
        ];

        $pilihanBagian1Level4 = [
            // Pertanyaan 31
            ['pilihan' => 'Light', 'skor' => 20, 'benar' => false, 'soal_id' => 31],
            ['pilihan' => 'Dense', 'skor' => 0, 'benar' => false, 'soal_id' => 31],
            ['pilihan' => 'Solid', 'skor' => 0, 'benar' => false, 'soal_id' => 31],
            ['pilihan' => 'Thick', 'skor' => 0, 'benar' => true, 'soal_id' => 31],
            // Pertanyaan 32
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 32],
            ['pilihan' => 'Tulip', 'skor' => 20, 'benar' => true, 'soal_id' => 32],
            ['pilihan' => 'Potato', 'skor' => 0, 'benar' => false, 'soal_id' => 32],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 32],
            // Pertanyaan 33
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 33],
            ['pilihan' => 'Biology', 'skor' => 20, 'benar' => true, 'soal_id' => 33],
            ['pilihan' => 'Physics', 'skor' => 0, 'benar' => false, 'soal_id' => 33],
            ['pilihan' => 'Astronomy', 'skor' => 0, 'benar' => false, 'soal_id' => 33],
            // Pertanyaan 34
            ['pilihan' => 'Quiet', 'skor' => 20, 'benar' => true, 'soal_id' => 34],
            ['pilihan' => 'Noisy', 'skor' => 0, 'benar' => false, 'soal_id' => 34],
            ['pilihan' => 'Silent', 'skor' => 0, 'benar' => false, 'soal_id' => 34],
            ['pilihan' => 'Peaceful', 'skor' => 0, 'benar' => false, 'soal_id' => 34],
            // Pertanyaan 35
            ['pilihan' => 'New York City', 'skor' => 0, 'benar' => false, 'soal_id' => 35],
            ['pilihan' => 'Washington D.C.', 'skor' => 20, 'benar' => true, 'soal_id' => 35],
            ['pilihan' => 'Los Angeles', 'skor' => 0, 'benar' => false, 'soal_id' => 35],
            ['pilihan' => 'Chicago', 'skor' => 0, 'benar' => false, 'soal_id' => 35],
            // Pertanyaan 36
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 36],
            ['pilihan' => 'Desk', 'skor' => 0, 'benar' => true, 'soal_id' => 36],
            ['pilihan' => 'Car', 'skor' => 20, 'benar' => false, 'soal_id' => 36],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 36],
            // Pertanyaan 37
            ['pilihan' => 'Empty', 'skor' => 20, 'benar' => false, 'soal_id' => 37],
            ['pilihan' => 'Overflowing', 'skor' => 0, 'benar' => true, 'soal_id' => 37],
            ['pilihan' => 'Packed', 'skor' => 0, 'benar' => false, 'soal_id' => 37],
            ['pilihan' => 'Stuffed', 'skor' => 0, 'benar' => false, 'soal_id' => 37],
            // Pertanyaan 38
            ['pilihan' => 'Nile', 'skor' => 20, 'benar' => true, 'soal_id' => 38],
            ['pilihan' => 'Amazon', 'skor' => 0, 'benar' => false, 'soal_id' => 38],
            ['pilihan' => 'Mississippi', 'skor' => 0, 'benar' => false, 'soal_id' => 38],
            ['pilihan' => 'Yangtze', 'skor' => 0, 'benar' => false, 'soal_id' => 38],
            // Pertanyaan 39
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 39],
            ['pilihan' => 'Football', 'skor' => 20, 'benar' => true, 'soal_id' => 39],
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 39],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 39],
            // Pertanyaan 40
            ['pilihan' => 'Bright', 'skor' => 20, 'benar' => true, 'soal_id' => 40],
            ['pilihan' => 'Dull', 'skor' => 0, 'benar' => false, 'soal_id' => 40],
            ['pilihan' => 'Obscure', 'skor' => 0, 'benar' => false, 'soal_id' => 40],
            ['pilihan' => 'Shadowy', 'skor' => 0, 'benar' => false, 'soal_id' => 40],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian1Level1, $pilihanBagian1Level2, $pilihanBagian1Level3, $pilihanBagian1Level4));

        $soalBagian2Level1 = [
            // Pertanyaan 41
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 5],

            // Pertanyaan 42
            ['pertanyaan' => 'Which word means the opposite of "small"?', 'sub_bagian_id' => 5],

            // Pertanyaan 43
            ['pertanyaan' => 'What is the correct spelling of the color that starts with "bl" and ends with "ue"?', 'sub_bagian_id' => 5],

            // Pertanyaan 44
            ['pertanyaan' => 'What do you call a place where you can borrow books?', 'sub_bagian_id' => 5],

            // Pertanyaan 45
            ['pertanyaan' => 'Which of these is a vegetable?', 'sub_bagian_id' => 5],

            // Pertanyaan 46
            ['pertanyaan' => 'Which word means the opposite of "sad"?', 'sub_bagian_id' => 5],

            // Pertanyaan 47
            ['pertanyaan' => 'What is the past tense of "go"?', 'sub_bagian_id' => 5],

            // Pertanyaan 48
            ['pertanyaan' => 'Which of these animals can fly?', 'sub_bagian_id' => 5],

            // Pertanyaan 49
            ['pertanyaan' => 'How many days are there in a week?', 'sub_bagian_id' => 5],

            // Pertanyaan 50
            ['pertanyaan' => 'What do we call the study of numbers?', 'sub_bagian_id' => 5],
        ];

        $soalBagian2Level2 = [
            // Pertanyaan 51
            ['pertanyaan' => 'Which of these is not a fruit?', 'sub_bagian_id' => 6],

            // Pertanyaan 52
            ['pertanyaan' => 'What do we call a person who flies an airplane?', 'sub_bagian_id' => 6],

            // Pertanyaan 53
            ['pertanyaan' => 'Which of these is a type of clothing?', 'sub_bagian_id' => 6],

            // Pertanyaan 54
            ['pertanyaan' => 'What is the opposite of "day"?', 'sub_bagian_id' => 6],

            // Pertanyaan 55
            ['pertanyaan' => 'What is the capital of France?', 'sub_bagian_id' => 6],

            // Pertanyaan 56
            ['pertanyaan' => 'Which of these is not a color?', 'sub_bagian_id' => 6],

            // Pertanyaan 57
            ['pertanyaan' => 'How many legs does a spider have?', 'sub_bagian_id' => 6],

            // Pertanyaan 58
            ['pertanyaan' => 'What is the opposite of "wet"?', 'sub_bagian_id' => 6],

            // Pertanyaan 59
            ['pertanyaan' => 'Which word means the opposite of "fast"?', 'sub_bagian_id' => 6],

            // Pertanyaan 60
            ['pertanyaan' => 'What do you use to write on paper?', 'sub_bagian_id' => 6],
        ];

        $soalBagian2Level3 = [
            // Pertanyaan 61
            ['pertanyaan' => 'What is the opposite of "young"?', 'sub_bagian_id' => 7],

            // Pertanyaan 62
            ['pertanyaan' => 'What is the name of the biggest ocean on Earth?', 'sub_bagian_id' => 7],

            // Pertanyaan 63
            ['pertanyaan' => 'Which of these is not a shape?', 'sub_bagian_id' => 7],

            // Pertanyaan 64
            ['pertanyaan' => 'What is the main ingredient in bread?', 'sub_bagian_id' => 7],

            // Pertanyaan 65
            ['pertanyaan' => 'What is the opposite of "dark"?', 'sub_bagian_id' => 7],

            // Pertanyaan 66
            ['pertanyaan' => 'Which of these is a reptile?', 'sub_bagian_id' => 7],

            // Pertanyaan 67
            ['pertanyaan' => 'What is the opposite of "near"?', 'sub_bagian_id' => 7],

            // Pertanyaan 68
            ['pertanyaan' => 'Which of these is a musical instrument?', 'sub_bagian_id' => 7],

            // Pertanyaan 69
            ['pertanyaan' => 'What is the name of the closest star to Earth?', 'sub_bagian_id' => 7],

            // Pertanyaan 70
            ['pertanyaan' => 'What do we call a person who makes bread?', 'sub_bagian_id' => 7],
        ];

        $soalBagian2Level4 = [
            // Pertanyaan 71
            ['pertanyaan' => 'What is the opposite of "heavy"?', 'sub_bagian_id' => 8],

            // Pertanyaan 72
            ['pertanyaan' => 'Which of these is a type of flower?', 'sub_bagian_id' => 8],

            // Pertanyaan 73
            ['pertanyaan' => 'What do we call the study of living organisms?', 'sub_bagian_id' => 8],

            // Pertanyaan 74
            ['pertanyaan' => 'What is the opposite of "loud"?', 'sub_bagian_id' => 8],

            // Pertanyaan 75
            ['pertanyaan' => 'What is the capital of the United States?', 'sub_bagian_id' => 8],

            // Pertanyaan 76
            ['pertanyaan' => 'Which of these is a mode of transportation?', 'sub_bagian_id' => 8],

            // Pertanyaan 77
            ['pertanyaan' => 'What is the opposite of "full"?', 'sub_bagian_id' => 8],

            // Pertanyaan 78
            ['pertanyaan' => 'What is the name of the longest river in the world?', 'sub_bagian_id' => 8],

            // Pertanyaan 79
            ['pertanyaan' => 'Which of these is a type of sport?', 'sub_bagian_id' => 8],

            // Pertanyaan 80
            ['pertanyaan' => 'What is the opposite of "dark"?', 'sub_bagian_id' => 8],
        ];

        DB::table('soal')->insert(array_merge($soalBagian2Level1, $soalBagian2Level2, $soalBagian2Level3, $soalBagian2Level4));

        $pilihanBagian2Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 41],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 41],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 41],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 41],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 42],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 42],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 42],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 42],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 43],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 43],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 43],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 43],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 44],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 44],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 44],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 44],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 45],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 45],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 45],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 45],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 46],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 46],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 46],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 46],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 47],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 47],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 47],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 47],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 48],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 48],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 48],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 48],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 49],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 49],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 49],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 49],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 50],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 50],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 50],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 50],
        ];

        $pilihanBagian2Level2 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 51],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 51],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 51],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 51],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 52],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 52],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 52],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 52],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 53],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 53],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 53],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 53],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 54],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 54],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 54],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 54],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 55],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 55],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 55],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 55],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 56],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 56],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 56],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 56],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 57],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 57],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 57],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 57],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 58],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 58],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 58],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 58],
            // Pertanyaan 19
            ['pilihan' => 'Quick', 'skor' => 0, 'benar' => false, 'soal_id' => 59],
            ['pilihan' => 'Slow', 'skor' => 20, 'benar' => true, 'soal_id' => 59],
            ['pilihan' => 'Rapid', 'skor' => 0, 'benar' => false, 'soal_id' => 59],
            ['pilihan' => 'Swift', 'skor' => 0, 'benar' => false, 'soal_id' => 59],
            // Pertanyaan 20
            ['pilihan' => 'Pencil', 'skor' => 20, 'benar' => true, 'soal_id' => 60],
            ['pilihan' => 'Eraser', 'skor' => 0, 'benar' => false, 'soal_id' => 60],
            ['pilihan' => 'Sharpener', 'skor' => 0, 'benar' => false, 'soal_id' => 60],
            ['pilihan' => 'Ruler', 'skor' => 0, 'benar' => false, 'soal_id' => 60],
        ];

        $pilihanBagian2Level3 = [
            // Pertanyaan 21
            ['pilihan' => 'Old', 'skor' => 20, 'benar' => false, 'soal_id' => 61],
            ['pilihan' => 'Baby', 'skor' => 0, 'benar' => false, 'soal_id' => 61],
            ['pilihan' => 'Teen', 'skor' => 0, 'benar' => false, 'soal_id' => 61],
            ['pilihan' => 'Infant', 'skor' => 0, 'benar' => true, 'soal_id' => 61],
            // Pertanyaan 22
            ['pilihan' => 'Atlantic', 'skor' => 0, 'benar' => false, 'soal_id' => 62],
            ['pilihan' => 'Indian', 'skor' => 20, 'benar' => true, 'soal_id' => 62],
            ['pilihan' => 'Pacific', 'skor' => 0, 'benar' => false, 'soal_id' => 62],
            ['pilihan' => 'Arctic', 'skor' => 0, 'benar' => false, 'soal_id' => 62],
            // Pertanyaan 23
            ['pilihan' => 'Circle', 'skor' => 0, 'benar' => false, 'soal_id' => 63],
            ['pilihan' => 'Square', 'skor' => 0, 'benar' => true, 'soal_id' => 63],
            ['pilihan' => 'Tree', 'skor' => 20, 'benar' => false, 'soal_id' => 63],
            ['pilihan' => 'Triangle', 'skor' => 0, 'benar' => false, 'soal_id' => 63],
            // Pertanyaan 24
            ['pilihan' => 'Flour', 'skor' => 20, 'benar' => true, 'soal_id' => 64],
            ['pilihan' => 'Sugar', 'skor' => 0, 'benar' => false, 'soal_id' => 64],
            ['pilihan' => 'Milk', 'skor' => 0, 'benar' => false, 'soal_id' => 64],
            ['pilihan' => 'Butter', 'skor' => 0, 'benar' => false, 'soal_id' => 64],
            // Pertanyaan 25
            ['pilihan' => 'Light', 'skor' => 20, 'benar' => false, 'soal_id' => 65],
            ['pilihan' => 'Shadow', 'skor' => 0, 'benar' => true, 'soal_id' => 65],
            ['pilihan' => 'Dim', 'skor' => 0, 'benar' => false, 'soal_id' => 65],
            ['pilihan' => 'Gloomy', 'skor' => 0, 'benar' => false, 'soal_id' => 65],
            // Pertanyaan 26
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 66],
            ['pilihan' => 'Snake', 'skor' => 20, 'benar' => true, 'soal_id' => 66],
            ['pilihan' => 'Hamster', 'skor' => 0, 'benar' => false, 'soal_id' => 66],
            ['pilihan' => 'Rabbit', 'skor' => 0, 'benar' => false, 'soal_id' => 66],
            // Pertanyaan 27
            ['pilihan' => 'Close', 'skor' => 0, 'benar' => false, 'soal_id' => 67],
            ['pilihan' => 'Far', 'skor' => 20, 'benar' => true, 'soal_id' => 67],
            ['pilihan' => 'Distance', 'skor' => 0, 'benar' => false, 'soal_id' => 67],
            ['pilihan' => 'Apart', 'skor' => 0, 'benar' => false, 'soal_id' => 67],
            // Pertanyaan 28
            ['pilihan' => 'Book', 'skor' => 0, 'benar' => true, 'soal_id' => 68],
            ['pilihan' => 'Piano', 'skor' => 20, 'benar' => false, 'soal_id' => 68],
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 68],
            ['pilihan' => 'Cup', 'skor' => 0, 'benar' => false, 'soal_id' => 68],
            // Pertanyaan 29
            ['pilihan' => 'Venus', 'skor' => 0, 'benar' => false, 'soal_id' => 69],
            ['pilihan' => 'Mars', 'skor' => 0, 'benar' => true, 'soal_id' => 69],
            ['pilihan' => 'Sun', 'skor' => 20, 'benar' => false, 'soal_id' => 69],
            ['pilihan' => 'Moon', 'skor' => 0, 'benar' => false, 'soal_id' => 69],
            // Pertanyaan 30
            ['pilihan' => 'Chef', 'skor' => 0, 'benar' => true, 'soal_id' => 70],
            ['pilihan' => 'Baker', 'skor' => 20, 'benar' => false, 'soal_id' => 70],
            ['pilihan' => 'Cook', 'skor' => 0, 'benar' => false, 'soal_id' => 70],
            ['pilihan' => 'Waiter', 'skor' => 0, 'benar' => false, 'soal_id' => 70],
        ];

        $pilihanBagian2Level4 = [
            // Pertanyaan 31
            ['pilihan' => 'Light', 'skor' => 20, 'benar' => false, 'soal_id' => 71],
            ['pilihan' => 'Dense', 'skor' => 0, 'benar' => false, 'soal_id' => 71],
            ['pilihan' => 'Solid', 'skor' => 0, 'benar' => false, 'soal_id' => 71],
            ['pilihan' => 'Thick', 'skor' => 0, 'benar' => true, 'soal_id' => 71],
            // Pertanyaan 32
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 72],
            ['pilihan' => 'Tulip', 'skor' => 20, 'benar' => true, 'soal_id' => 72],
            ['pilihan' => 'Potato', 'skor' => 0, 'benar' => false, 'soal_id' => 72],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 72],
            // Pertanyaan 33
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 73],
            ['pilihan' => 'Biology', 'skor' => 20, 'benar' => true, 'soal_id' => 73],
            ['pilihan' => 'Physics', 'skor' => 0, 'benar' => false, 'soal_id' => 73],
            ['pilihan' => 'Astronomy', 'skor' => 0, 'benar' => false, 'soal_id' => 73],
            // Pertanyaan 34
            ['pilihan' => 'Quiet', 'skor' => 20, 'benar' => true, 'soal_id' => 74],
            ['pilihan' => 'Noisy', 'skor' => 0, 'benar' => false, 'soal_id' => 74],
            ['pilihan' => 'Silent', 'skor' => 0, 'benar' => false, 'soal_id' => 74],
            ['pilihan' => 'Peaceful', 'skor' => 0, 'benar' => false, 'soal_id' => 74],
            // Pertanyaan 35
            ['pilihan' => 'New York City', 'skor' => 0, 'benar' => false, 'soal_id' => 75],
            ['pilihan' => 'Washington D.C.', 'skor' => 20, 'benar' => true, 'soal_id' => 75],
            ['pilihan' => 'Los Angeles', 'skor' => 0, 'benar' => false, 'soal_id' => 75],
            ['pilihan' => 'Chicago', 'skor' => 0, 'benar' => false, 'soal_id' => 75],
            // Pertanyaan 36
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 76],
            ['pilihan' => 'Desk', 'skor' => 0, 'benar' => true, 'soal_id' => 76],
            ['pilihan' => 'Car', 'skor' => 20, 'benar' => false, 'soal_id' => 76],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 76],
            // Pertanyaan 37
            ['pilihan' => 'Empty', 'skor' => 20, 'benar' => false, 'soal_id' => 77],
            ['pilihan' => 'Overflowing', 'skor' => 0, 'benar' => true, 'soal_id' => 77],
            ['pilihan' => 'Packed', 'skor' => 0, 'benar' => false, 'soal_id' => 77],
            ['pilihan' => 'Stuffed', 'skor' => 0, 'benar' => false, 'soal_id' => 77],
            // Pertanyaan 38
            ['pilihan' => 'Nile', 'skor' => 20, 'benar' => true, 'soal_id' => 78],
            ['pilihan' => 'Amazon', 'skor' => 0, 'benar' => false, 'soal_id' => 78],
            ['pilihan' => 'Mississippi', 'skor' => 0, 'benar' => false, 'soal_id' => 78],
            ['pilihan' => 'Yangtze', 'skor' => 0, 'benar' => false, 'soal_id' => 78],
            // Pertanyaan 39
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 79],
            ['pilihan' => 'Football', 'skor' => 20, 'benar' => true, 'soal_id' => 79],
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 79],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 79],
            // Pertanyaan 40
            ['pilihan' => 'Bright', 'skor' => 20, 'benar' => true, 'soal_id' => 80],
            ['pilihan' => 'Dull', 'skor' => 0, 'benar' => false, 'soal_id' => 80],
            ['pilihan' => 'Obscure', 'skor' => 0, 'benar' => false, 'soal_id' => 80],
            ['pilihan' => 'Shadowy', 'skor' => 0, 'benar' => false, 'soal_id' => 80],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian2Level1, $pilihanBagian2Level2, $pilihanBagian2Level3, $pilihanBagian2Level4));

        /**
         * Bagian 3
         */
         $soalBagian3Level1 = [
            // Pertanyaan 81
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 9],

            // Pertanyaan 82
            ['pertanyaan' => 'Which word means the opposite of "small"?', 'sub_bagian_id' => 9],

            // Pertanyaan 83
            ['pertanyaan' => 'What is the correct spelling of the color that starts with "bl" and ends with "ue"?', 'sub_bagian_id' => 9],

            // Pertanyaan 84
            ['pertanyaan' => 'What do you call a place where you can borrow books?', 'sub_bagian_id' => 9],

            // Pertanyaan 85
            ['pertanyaan' => 'Which of these is a vegetable?', 'sub_bagian_id' => 9],

            // Pertanyaan 86
            ['pertanyaan' => 'Which word means the opposite of "sad"?', 'sub_bagian_id' => 9],

            // Pertanyaan 87
            ['pertanyaan' => 'What is the past tense of "go"?', 'sub_bagian_id' => 9],

            // Pertanyaan 88
            ['pertanyaan' => 'Which of these animals can fly?', 'sub_bagian_id' => 9],

            // Pertanyaan 89
            ['pertanyaan' => 'How many days are there in a week?', 'sub_bagian_id' => 9],

            // Pertanyaan 90
            ['pertanyaan' => 'What do we call the study of numbers?', 'sub_bagian_id' => 9],
        ];

        $soalBagian3Level2 = [
            // Pertanyaan 91
            ['pertanyaan' => 'Which of these is not a fruit?', 'sub_bagian_id' => 10],

            // Pertanyaan 92
            ['pertanyaan' => 'What do we call a person who flies an airplane?', 'sub_bagian_id' => 10],

            // Pertanyaan 93
            ['pertanyaan' => 'Which of these is a type of clothing?', 'sub_bagian_id' => 10],

            // Pertanyaan 94
            ['pertanyaan' => 'What is the opposite of "day"?', 'sub_bagian_id' => 10],

            // Pertanyaan 95
            ['pertanyaan' => 'What is the capital of France?', 'sub_bagian_id' => 10],

            // Pertanyaan 96
            ['pertanyaan' => 'Which of these is not a color?', 'sub_bagian_id' => 10],

            // Pertanyaan 97
            ['pertanyaan' => 'How many legs does a spider have?', 'sub_bagian_id' => 10],

            // Pertanyaan 98
            ['pertanyaan' => 'What is the opposite of "wet"?', 'sub_bagian_id' => 10],

            // Pertanyaan 99
            ['pertanyaan' => 'Which word means the opposite of "fast"?', 'sub_bagian_id' => 10],

            // Pertanyaan 100
            ['pertanyaan' => 'What do you use to write on paper?', 'sub_bagian_id' => 10],
        ];

        $soalBagian3Level3 = [
            // Pertanyaan 101
            ['pertanyaan' => 'What is the opposite of "young"?', 'sub_bagian_id' => 11],

            // Pertanyaan 102
            ['pertanyaan' => 'What is the name of the biggest ocean on Earth?', 'sub_bagian_id' => 11],

            // Pertanyaan 103
            ['pertanyaan' => 'Which of these is not a shape?', 'sub_bagian_id' => 11],

            // Pertanyaan 104
            ['pertanyaan' => 'What is the main ingredient in bread?', 'sub_bagian_id' => 11],

            // Pertanyaan 105
            ['pertanyaan' => 'What is the opposite of "dark"?', 'sub_bagian_id' => 11],

            // Pertanyaan 106
            ['pertanyaan' => 'Which of these is a reptile?', 'sub_bagian_id' => 11],

            // Pertanyaan 107
            ['pertanyaan' => 'What is the opposite of "near"?', 'sub_bagian_id' => 11],

            // Pertanyaan 108
            ['pertanyaan' => 'Which of these is a musical instrument?', 'sub_bagian_id' => 11],

            // Pertanyaan 109
            ['pertanyaan' => 'What is the name of the closest star to Earth?', 'sub_bagian_id' => 11],

            // Pertanyaan 110
            ['pertanyaan' => 'What do we call a person who makes bread?', 'sub_bagian_id' => 11],
        ];

        $soalBagian3Level4 = [
            // Pertanyaan 111
            ['pertanyaan' => 'What is the opposite of "heavy"?', 'sub_bagian_id' => 12],

            // Pertanyaan 112
            ['pertanyaan' => 'Which of these is a type of flower?', 'sub_bagian_id' => 12],

            // Pertanyaan 113
            ['pertanyaan' => 'What do we call the study of living organisms?', 'sub_bagian_id' => 12],

            // Pertanyaan 114
            ['pertanyaan' => 'What is the opposite of "loud"?', 'sub_bagian_id' => 12],

            // Pertanyaan 115
            ['pertanyaan' => 'What is the capital of the United States?', 'sub_bagian_id' => 12],

            // Pertanyaan 116
            ['pertanyaan' => 'Which of these is a mode of transportation?', 'sub_bagian_id' => 12],

            // Pertanyaan 117
            ['pertanyaan' => 'What is the opposite of "full"?', 'sub_bagian_id' => 12],

            // Pertanyaan 118
            ['pertanyaan' => 'What is the name of the longest river in the world?', 'sub_bagian_id' => 12],

            // Pertanyaan 119
            ['pertanyaan' => 'Which of these is a type of sport?', 'sub_bagian_id' => 12],

            // Pertanyaan 120
            ['pertanyaan' => 'What is the opposite of "dark"?', 'sub_bagian_id' => 12],
        ];

        DB::table('soal')->insert(array_merge($soalBagian3Level1, $soalBagian3Level2, $soalBagian3Level3, $soalBagian3Level4));

        $pilihanBagian3Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 81],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 81],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 81],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 81],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 82],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 82],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 82],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 82],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 83],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 83],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 83],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 83],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 84],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 84],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 84],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 84],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 85],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 85],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 85],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 85],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 86],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 86],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 86],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 86],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 87],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 87],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 87],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 87],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 88],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 88],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 88],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 88],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 89],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 89],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 89],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 89],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 90],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 90],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 90],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 90],
        ];

        $pilihanBagian3Level2 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 91],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 91],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 91],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 91],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 92],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 92],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 92],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 92],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 93],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 93],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 93],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 93],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 94],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 94],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 94],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 94],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 95],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 95],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 95],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 95],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 96],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 96],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 96],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 96],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 97],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 97],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 97],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 97],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 98],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 98],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 98],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 98],
            // Pertanyaan 19
            ['pilihan' => 'Quick', 'skor' => 0, 'benar' => false, 'soal_id' => 99],
            ['pilihan' => 'Slow', 'skor' => 20, 'benar' => true, 'soal_id' => 99],
            ['pilihan' => 'Rapid', 'skor' => 0, 'benar' => false, 'soal_id' => 99],
            ['pilihan' => 'Swift', 'skor' => 0, 'benar' => false, 'soal_id' => 99],
            // Pertanyaan 20
            ['pilihan' => 'Pencil', 'skor' => 20, 'benar' => true, 'soal_id' => 100],
            ['pilihan' => 'Eraser', 'skor' => 0, 'benar' => false, 'soal_id' => 100],
            ['pilihan' => 'Sharpener', 'skor' => 0, 'benar' => false, 'soal_id' => 100],
            ['pilihan' => 'Ruler', 'skor' => 0, 'benar' => false, 'soal_id' => 100],
        ];

        $pilihanBagian3Level3 = [
            // Pertanyaan 21
            ['pilihan' => 'Old', 'skor' => 20, 'benar' => false, 'soal_id' => 101],
            ['pilihan' => 'Baby', 'skor' => 0, 'benar' => false, 'soal_id' => 101],
            ['pilihan' => 'Teen', 'skor' => 0, 'benar' => false, 'soal_id' => 101],
            ['pilihan' => 'Infant', 'skor' => 0, 'benar' => true, 'soal_id' => 101],
            // Pertanyaan 22
            ['pilihan' => 'Atlantic', 'skor' => 0, 'benar' => false, 'soal_id' => 102],
            ['pilihan' => 'Indian', 'skor' => 20, 'benar' => true, 'soal_id' => 102],
            ['pilihan' => 'Pacific', 'skor' => 0, 'benar' => false, 'soal_id' => 102],
            ['pilihan' => 'Arctic', 'skor' => 0, 'benar' => false, 'soal_id' => 102],
            // Pertanyaan 23
            ['pilihan' => 'Circle', 'skor' => 0, 'benar' => false, 'soal_id' => 103],
            ['pilihan' => 'Square', 'skor' => 0, 'benar' => true, 'soal_id' => 103],
            ['pilihan' => 'Tree', 'skor' => 20, 'benar' => false, 'soal_id' => 103],
            ['pilihan' => 'Triangle', 'skor' => 0, 'benar' => false, 'soal_id' => 103],
            // Pertanyaan 24
            ['pilihan' => 'Flour', 'skor' => 20, 'benar' => true, 'soal_id' => 104],
            ['pilihan' => 'Sugar', 'skor' => 0, 'benar' => false, 'soal_id' => 104],
            ['pilihan' => 'Milk', 'skor' => 0, 'benar' => false, 'soal_id' => 104],
            ['pilihan' => 'Butter', 'skor' => 0, 'benar' => false, 'soal_id' => 104],
            // Pertanyaan 25
            ['pilihan' => 'Light', 'skor' => 20, 'benar' => false, 'soal_id' => 105],
            ['pilihan' => 'Shadow', 'skor' => 0, 'benar' => true, 'soal_id' => 105],
            ['pilihan' => 'Dim', 'skor' => 0, 'benar' => false, 'soal_id' => 105],
            ['pilihan' => 'Gloomy', 'skor' => 0, 'benar' => false, 'soal_id' => 105],
            // Pertanyaan 26
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 106],
            ['pilihan' => 'Snake', 'skor' => 20, 'benar' => true, 'soal_id' => 106],
            ['pilihan' => 'Hamster', 'skor' => 0, 'benar' => false, 'soal_id' => 106],
            ['pilihan' => 'Rabbit', 'skor' => 0, 'benar' => false, 'soal_id' => 106],
            // Pertanyaan 27
            ['pilihan' => 'Close', 'skor' => 0, 'benar' => false, 'soal_id' => 107],
            ['pilihan' => 'Far', 'skor' => 20, 'benar' => true, 'soal_id' => 107],
            ['pilihan' => 'Distance', 'skor' => 0, 'benar' => false, 'soal_id' => 107],
            ['pilihan' => 'Apart', 'skor' => 0, 'benar' => false, 'soal_id' => 107],
            // Pertanyaan 28
            ['pilihan' => 'Book', 'skor' => 0, 'benar' => true, 'soal_id' => 108],
            ['pilihan' => 'Piano', 'skor' => 20, 'benar' => false, 'soal_id' => 108],
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 108],
            ['pilihan' => 'Cup', 'skor' => 0, 'benar' => false, 'soal_id' => 108],
            // Pertanyaan 29
            ['pilihan' => 'Venus', 'skor' => 0, 'benar' => false, 'soal_id' => 109],
            ['pilihan' => 'Mars', 'skor' => 0, 'benar' => true, 'soal_id' => 109],
            ['pilihan' => 'Sun', 'skor' => 20, 'benar' => false, 'soal_id' => 109],
            ['pilihan' => 'Moon', 'skor' => 0, 'benar' => false, 'soal_id' => 109],
            // Pertanyaan 30
            ['pilihan' => 'Chef', 'skor' => 0, 'benar' => true, 'soal_id' => 110],
            ['pilihan' => 'Baker', 'skor' => 20, 'benar' => false, 'soal_id' => 110],
            ['pilihan' => 'Cook', 'skor' => 0, 'benar' => false, 'soal_id' => 110],
            ['pilihan' => 'Waiter', 'skor' => 0, 'benar' => false, 'soal_id' => 110],
        ];

        $pilihanBagian3Level4 = [
            // Pertanyaan 31
            ['pilihan' => 'Light', 'skor' => 20, 'benar' => false, 'soal_id' => 111],
            ['pilihan' => 'Dense', 'skor' => 0, 'benar' => false, 'soal_id' => 111],
            ['pilihan' => 'Solid', 'skor' => 0, 'benar' => false, 'soal_id' => 111],
            ['pilihan' => 'Thick', 'skor' => 0, 'benar' => true, 'soal_id' => 111],
            // Pertanyaan 32
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 112],
            ['pilihan' => 'Tulip', 'skor' => 20, 'benar' => true, 'soal_id' => 112],
            ['pilihan' => 'Potato', 'skor' => 0, 'benar' => false, 'soal_id' => 112],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 112],
            // Pertanyaan 33
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 113],
            ['pilihan' => 'Biology', 'skor' => 20, 'benar' => true, 'soal_id' => 113],
            ['pilihan' => 'Physics', 'skor' => 0, 'benar' => false, 'soal_id' => 113],
            ['pilihan' => 'Astronomy', 'skor' => 0, 'benar' => false, 'soal_id' => 113],
            // Pertanyaan 34
            ['pilihan' => 'Quiet', 'skor' => 20, 'benar' => true, 'soal_id' => 114],
            ['pilihan' => 'Noisy', 'skor' => 0, 'benar' => false, 'soal_id' => 114],
            ['pilihan' => 'Silent', 'skor' => 0, 'benar' => false, 'soal_id' => 114],
            ['pilihan' => 'Peaceful', 'skor' => 0, 'benar' => false, 'soal_id' => 114],
            // Pertanyaan 35
            ['pilihan' => 'New York City', 'skor' => 0, 'benar' => false, 'soal_id' => 115],
            ['pilihan' => 'Washington D.C.', 'skor' => 20, 'benar' => true, 'soal_id' => 115],
            ['pilihan' => 'Los Angeles', 'skor' => 0, 'benar' => false, 'soal_id' => 115],
            ['pilihan' => 'Chicago', 'skor' => 0, 'benar' => false, 'soal_id' => 115],
            // Pertanyaan 36
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 116],
            ['pilihan' => 'Desk', 'skor' => 0, 'benar' => true, 'soal_id' => 116],
            ['pilihan' => 'Car', 'skor' => 20, 'benar' => false, 'soal_id' => 116],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 116],
            // Pertanyaan 37
            ['pilihan' => 'Empty', 'skor' => 20, 'benar' => false, 'soal_id' => 117],
            ['pilihan' => 'Overflowing', 'skor' => 0, 'benar' => true, 'soal_id' => 117],
            ['pilihan' => 'Packed', 'skor' => 0, 'benar' => false, 'soal_id' => 117],
            ['pilihan' => 'Stuffed', 'skor' => 0, 'benar' => false, 'soal_id' => 117],
            // Pertanyaan 38
            ['pilihan' => 'Nile', 'skor' => 20, 'benar' => true, 'soal_id' => 118],
            ['pilihan' => 'Amazon', 'skor' => 0, 'benar' => false, 'soal_id' => 118],
            ['pilihan' => 'Mississippi', 'skor' => 0, 'benar' => false, 'soal_id' => 118],
            ['pilihan' => 'Yangtze', 'skor' => 0, 'benar' => false, 'soal_id' => 118],
            // Pertanyaan 39
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 119],
            ['pilihan' => 'Football', 'skor' => 20, 'benar' => true, 'soal_id' => 119],
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 119],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 119],
            // Pertanyaan 40
            ['pilihan' => 'Bright', 'skor' => 20, 'benar' => true, 'soal_id' => 120],
            ['pilihan' => 'Dull', 'skor' => 0, 'benar' => false, 'soal_id' => 120],
            ['pilihan' => 'Obscure', 'skor' => 0, 'benar' => false, 'soal_id' => 120],
            ['pilihan' => 'Shadowy', 'skor' => 0, 'benar' => false, 'soal_id' => 120],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian3Level1, $pilihanBagian3Level2, $pilihanBagian3Level3, $pilihanBagian3Level4));

        /**
         * Bagian 4
         */
        $soalBagian4Level1 = [
            // Pertanyaan 121
            ['pertanyaan' => 'What is the opposite of "hot"?', 'sub_bagian_id' => 13],

            // Pertanyaan 122
            ['pertanyaan' => 'Which word means the opposite of "small"?', 'sub_bagian_id' => 13],

            // Pertanyaan 123
            ['pertanyaan' => 'What is the correct spelling of the color that starts with "bl" and ends with "ue"?', 'sub_bagian_id' => 13],

            // Pertanyaan 124
            ['pertanyaan' => 'What do you call a place where you can borrow books?', 'sub_bagian_id' => 13],

            // Pertanyaan 125
            ['pertanyaan' => 'Which of these is a vegetable?', 'sub_bagian_id' => 13],

            // Pertanyaan 126
            ['pertanyaan' => 'Which word means the opposite of "sad"?', 'sub_bagian_id' => 13],

            // Pertanyaan 127
            ['pertanyaan' => 'What is the past tense of "go"?', 'sub_bagian_id' => 13],

            // Pertanyaan 128
            ['pertanyaan' => 'Which of these animals can fly?', 'sub_bagian_id' => 13],

            // Pertanyaan 129
            ['pertanyaan' => 'How many days are there in a week?', 'sub_bagian_id' => 13],

            // Pertanyaan 130
            ['pertanyaan' => 'What do we call the study of numbers?', 'sub_bagian_id' => 13],
        ];

        $soalBagian4Level2 = [
            // Pertanyaan 131
            ['pertanyaan' => 'Which of these is not a fruit?', 'sub_bagian_id' => 14],

            // Pertanyaan 132
            ['pertanyaan' => 'What do we call a person who flies an airplane?', 'sub_bagian_id' => 14],

            // Pertanyaan 133
            ['pertanyaan' => 'Which of these is a type of clothing?', 'sub_bagian_id' => 14],

            // Pertanyaan 134
            ['pertanyaan' => 'What is the opposite of "day"?', 'sub_bagian_id' => 14],

            // Pertanyaan 135
            ['pertanyaan' => 'What is the capital of France?', 'sub_bagian_id' => 14],

            // Pertanyaan 136
            ['pertanyaan' => 'Which of these is not a color?', 'sub_bagian_id' => 14],

            // Pertanyaan 137
            ['pertanyaan' => 'How many legs does a spider have?', 'sub_bagian_id' => 14],

            // Pertanyaan 138
            ['pertanyaan' => 'What is the opposite of "wet"?', 'sub_bagian_id' => 14],

            // Pertanyaan 139
            ['pertanyaan' => 'Which word means the opposite of "fast"?', 'sub_bagian_id' => 14],

            // Pertanyaan 140
            ['pertanyaan' => 'What do you use to write on paper?', 'sub_bagian_id' => 14],
        ];

        $soalBagian4Level3 = [
            // Pertanyaan 141
            ['pertanyaan' => 'What is the opposite of "young"?', 'sub_bagian_id' => 15],

            // Pertanyaan 142
            ['pertanyaan' => 'What is the name of the biggest ocean on Earth?', 'sub_bagian_id' => 15],

            // Pertanyaan 143
            ['pertanyaan' => 'Which of these is not a shape?', 'sub_bagian_id' => 15],

            // Pertanyaan 144
            ['pertanyaan' => 'What is the main ingredient in bread?', 'sub_bagian_id' => 15],

            // Pertanyaan 145
            ['pertanyaan' => 'What is the opposite of "dark"?', 'sub_bagian_id' => 15],

            // Pertanyaan 146
            ['pertanyaan' => 'Which of these is a reptile?', 'sub_bagian_id' => 15],

            // Pertanyaan 147
            ['pertanyaan' => 'What is the opposite of "near"?', 'sub_bagian_id' => 15],

            // Pertanyaan 148
            ['pertanyaan' => 'Which of these is a musical instrument?', 'sub_bagian_id' => 15],

            // Pertanyaan 149
            ['pertanyaan' => 'What is the name of the closest star to Earth?', 'sub_bagian_id' => 15],

            // Pertanyaan 150
            ['pertanyaan' => 'What do we call a person who makes bread?', 'sub_bagian_id' => 15],
        ];

        $soalBagian4Level4 = [
            // Pertanyaan 151
            ['pertanyaan' => 'What is the opposite of "heavy"?', 'sub_bagian_id' => 16],

            // Pertanyaan 152
            ['pertanyaan' => 'Which of these is a type of flower?', 'sub_bagian_id' => 16],

            // Pertanyaan 153
            ['pertanyaan' => 'What do we call the study of living organisms?', 'sub_bagian_id' => 16],

            // Pertanyaan 154
            ['pertanyaan' => 'What is the opposite of "loud"?', 'sub_bagian_id' => 16],

            // Pertanyaan 155
            ['pertanyaan' => 'What is the capital of the United States?', 'sub_bagian_id' => 16],

            // Pertanyaan 156
            ['pertanyaan' => 'Which of these is a mode of transportation?', 'sub_bagian_id' => 16],

            // Pertanyaan 157
            ['pertanyaan' => 'What is the opposite of "full"?', 'sub_bagian_id' => 16],

            // Pertanyaan 158
            ['pertanyaan' => 'What is the name of the longest river in the world?', 'sub_bagian_id' => 16],

            // Pertanyaan 159
            ['pertanyaan' => 'Which of these is a type of sport?', 'sub_bagian_id' => 16],

            // Pertanyaan 160
            ['pertanyaan' => 'What is the opposite of "dark"?', 'sub_bagian_id' => 16],
        ];

        DB::table('soal')->insert(array_merge($soalBagian4Level1, $soalBagian4Level2, $soalBagian4Level3, $soalBagian4Level4));

        $pilihanBagian4Level1 = [
            // Pertanyaan 1
            ['pilihan' => 'Cold', 'skor' => 20, 'benar' => true, 'soal_id' => 121],
            ['pilihan' => 'Warm', 'skor' => 0, 'benar' => false, 'soal_id' => 121],
            ['pilihan' => 'Cool', 'skor' => 0, 'benar' => false, 'soal_id' => 121],
            ['pilihan' => 'Icy', 'skor' => 0, 'benar' => false, 'soal_id' => 121],
            // Pertanyaan 2
            ['pilihan' => 'Large', 'skor' => 20, 'benar' => true, 'soal_id' => 122],
            ['pilihan' => 'Little', 'skor' => 0, 'benar' => false, 'soal_id' => 122],
            ['pilihan' => 'Tiny', 'skor' => 0, 'benar' => false, 'soal_id' => 122],
            ['pilihan' => 'Miniature', 'skor' => 0, 'benar' => false, 'soal_id' => 122],
            // Pertanyaan 3
            ['pilihan' => 'Bluee', 'skor' => 0, 'benar' => false, 'soal_id' => 123],
            ['pilihan' => 'Bloue', 'skor' => 0, 'benar' => false, 'soal_id' => 123],
            ['pilihan' => 'Blue', 'skor' => 20, 'benar' => true, 'soal_id' => 123],
            ['pilihan' => 'Blhue', 'skor' => 0, 'benar' => false, 'soal_id' => 123],
            // Pertanyaan 4
            ['pilihan' => 'Bank', 'skor' => 0, 'benar' => false, 'soal_id' => 124],
            ['pilihan' => 'School', 'skor' => 0, 'benar' => false, 'soal_id' => 124],
            ['pilihan' => 'Library', 'skor' => 20, 'benar' => true, 'soal_id' => 124],
            ['pilihan' => 'Mall', 'skor' => 0, 'benar' => false, 'soal_id' => 124],
            // Pertanyaan 5
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 125],
            ['pilihan' => 'Carrot', 'skor' => 20, 'benar' => true, 'soal_id' => 125],
            ['pilihan' => 'Orange', 'skor' => 0, 'benar' => false, 'soal_id' => 125],
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 125],
            // Pertanyaan 6
            ['pilihan' => 'Angry', 'skor' => 0, 'benar' => false, 'soal_id' => 126],
            ['pilihan' => 'Happy', 'skor' => 20, 'benar' => true, 'soal_id' => 126],
            ['pilihan' => 'Tired', 'skor' => 0, 'benar' => false, 'soal_id' => 126],
            ['pilihan' => 'Sleepy', 'skor' => 0, 'benar' => false, 'soal_id' => 126],
            // Pertanyaan 7
            ['pilihan' => 'Goed', 'skor' => 0, 'benar' => false, 'soal_id' => 127],
            ['pilihan' => 'Went', 'skor' => 20, 'benar' => true, 'soal_id' => 127],
            ['pilihan' => 'Gone', 'skor' => 0, 'benar' => false, 'soal_id' => 127],
            ['pilihan' => 'Going', 'skor' => 0, 'benar' => false, 'soal_id' => 127],
            // Pertanyaan 8
            ['pilihan' => 'Dog', 'skor' => 0, 'benar' => false, 'soal_id' => 128],
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 128],
            ['pilihan' => 'Bird', 'skor' => 20, 'benar' => true, 'soal_id' => 128],
            ['pilihan' => 'Fish', 'skor' => 0, 'benar' => false, 'soal_id' => 128],
            // Pertanyaan 9
            ['pilihan' => '5', 'skor' => 0, 'benar' => false, 'soal_id' => 129],
            ['pilihan' => '6', 'skor' => 0, 'benar' => false, 'soal_id' => 129],
            ['pilihan' => '7', 'skor' => 20, 'benar' => true, 'soal_id' => 129],
            ['pilihan' => '8', 'skor' => 0, 'benar' => false, 'soal_id' => 129],
            // Pertanyaan 10
            ['pilihan' => 'Biology', 'skor' => 0, 'benar' => false, 'soal_id' => 130],
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 130],
            ['pilihan' => 'Mathematics', 'skor' => 20, 'benar' => true, 'soal_id' => 130],
            ['pilihan' => 'Geography', 'skor' => 0, 'benar' => false, 'soal_id' => 130],
        ];

        $pilihanBagian4Level2 = [
            // Pertanyaan 11
            ['pilihan' => 'Mango', 'skor' => 0, 'benar' => false, 'soal_id' => 131],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 131],
            ['pilihan' => 'Apple', 'skor' => 0, 'benar' => false, 'soal_id' => 131],
            ['pilihan' => 'Potato', 'skor' => 20, 'benar' => true, 'soal_id' => 131],
            // Pertanyaan 12
            ['pilihan' => 'Sailor', 'skor' => 0, 'benar' => false, 'soal_id' => 132],
            ['pilihan' => 'Pilot', 'skor' => 20, 'benar' => true, 'soal_id' => 132],
            ['pilihan' => 'Driver', 'skor' => 0, 'benar' => false, 'soal_id' => 132],
            ['pilihan' => 'Conductor', 'skor' => 0, 'benar' => false, 'soal_id' => 132],
            // Pertanyaan 13
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 133],
            ['pilihan' => 'Shirt', 'skor' => 20, 'benar' => true, 'soal_id' => 133],
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 133],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 133],
            // Pertanyaan 14
            ['pilihan' => 'Night', 'skor' => 20, 'benar' => true, 'soal_id' => 134],
            ['pilihan' => 'Sun', 'skor' => 0, 'benar' => false, 'soal_id' => 134],
            ['pilihan' => 'Morning', 'skor' => 0, 'benar' => false, 'soal_id' => 134],
            ['pilihan' => 'Noon', 'skor' => 0, 'benar' => false, 'soal_id' => 134],
            // Pertanyaan 15
            ['pilihan' => 'London', 'skor' => 0, 'benar' => false, 'soal_id' => 135],
            ['pilihan' => 'Paris', 'skor' => 20, 'benar' => true, 'soal_id' => 135],
            ['pilihan' => 'Berlin', 'skor' => 0, 'benar' => false, 'soal_id' => 135],
            ['pilihan' => 'Rome', 'skor' => 0, 'benar' => false, 'soal_id' => 135],
            // Pertanyaan 16
            ['pilihan' => 'Yellow', 'skor' => 0, 'benar' => false, 'soal_id' => 136],
            ['pilihan' => 'Square', 'skor' => 20, 'benar' => true, 'soal_id' => 136],
            ['pilihan' => 'Green', 'skor' => 0, 'benar' => false, 'soal_id' => 136],
            ['pilihan' => 'Purple', 'skor' => 0, 'benar' => false, 'soal_id' => 136],
            // Pertanyaan 17
            ['pilihan' => 'Four', 'skor' => 0, 'benar' => false, 'soal_id' => 137],
            ['pilihan' => 'Eight', 'skor' => 20, 'benar' => true, 'soal_id' => 137],
            ['pilihan' => 'Six', 'skor' => 0, 'benar' => false, 'soal_id' => 137],
            ['pilihan' => 'Ten', 'skor' => 0, 'benar' => false, 'soal_id' => 137],
            // Pertanyaan 18
            ['pilihan' => 'Dry', 'skor' => 20, 'benar' => true, 'soal_id' => 138],
            ['pilihan' => 'Cold', 'skor' => 0, 'benar' => false, 'soal_id' => 138],
            ['pilihan' => 'Damp', 'skor' => 0, 'benar' => false, 'soal_id' => 138],
            ['pilihan' => 'Moist', 'skor' => 0, 'benar' => false, 'soal_id' => 138],
            // Pertanyaan 19
            ['pilihan' => 'Quick', 'skor' => 0, 'benar' => false, 'soal_id' => 139],
            ['pilihan' => 'Slow', 'skor' => 20, 'benar' => true, 'soal_id' => 139],
            ['pilihan' => 'Rapid', 'skor' => 0, 'benar' => false, 'soal_id' => 139],
            ['pilihan' => 'Swift', 'skor' => 0, 'benar' => false, 'soal_id' => 139],
            // Pertanyaan 20
            ['pilihan' => 'Pencil', 'skor' => 20, 'benar' => true, 'soal_id' => 140],
            ['pilihan' => 'Eraser', 'skor' => 0, 'benar' => false, 'soal_id' => 140],
            ['pilihan' => 'Sharpener', 'skor' => 0, 'benar' => false, 'soal_id' => 140],
            ['pilihan' => 'Ruler', 'skor' => 0, 'benar' => false, 'soal_id' => 140],
        ];

        $pilihanBagian4Level3 = [
            // Pertanyaan 21
            ['pilihan' => 'Old', 'skor' => 20, 'benar' => false, 'soal_id' => 141],
            ['pilihan' => 'Baby', 'skor' => 0, 'benar' => false, 'soal_id' => 141],
            ['pilihan' => 'Teen', 'skor' => 0, 'benar' => false, 'soal_id' => 141],
            ['pilihan' => 'Infant', 'skor' => 0, 'benar' => true, 'soal_id' => 141],
            // Pertanyaan 22
            ['pilihan' => 'Atlantic', 'skor' => 0, 'benar' => false, 'soal_id' => 142],
            ['pilihan' => 'Indian', 'skor' => 20, 'benar' => true, 'soal_id' => 142],
            ['pilihan' => 'Pacific', 'skor' => 0, 'benar' => false, 'soal_id' => 142],
            ['pilihan' => 'Arctic', 'skor' => 0, 'benar' => false, 'soal_id' => 142],
            // Pertanyaan 23
            ['pilihan' => 'Circle', 'skor' => 0, 'benar' => false, 'soal_id' => 143],
            ['pilihan' => 'Square', 'skor' => 0, 'benar' => true, 'soal_id' => 143],
            ['pilihan' => 'Tree', 'skor' => 20, 'benar' => false, 'soal_id' => 143],
            ['pilihan' => 'Triangle', 'skor' => 0, 'benar' => false, 'soal_id' => 143],
            // Pertanyaan 24
            ['pilihan' => 'Flour', 'skor' => 20, 'benar' => true, 'soal_id' => 144],
            ['pilihan' => 'Sugar', 'skor' => 0, 'benar' => false, 'soal_id' => 144],
            ['pilihan' => 'Milk', 'skor' => 0, 'benar' => false, 'soal_id' => 144],
            ['pilihan' => 'Butter', 'skor' => 0, 'benar' => false, 'soal_id' => 144],
            // Pertanyaan 25
            ['pilihan' => 'Light', 'skor' => 20, 'benar' => false, 'soal_id' => 145],
            ['pilihan' => 'Shadow', 'skor' => 0, 'benar' => true, 'soal_id' => 145],
            ['pilihan' => 'Dim', 'skor' => 0, 'benar' => false, 'soal_id' => 145],
            ['pilihan' => 'Gloomy', 'skor' => 0, 'benar' => false, 'soal_id' => 145],
            // Pertanyaan 26
            ['pilihan' => 'Cat', 'skor' => 0, 'benar' => false, 'soal_id' => 146],
            ['pilihan' => 'Snake', 'skor' => 20, 'benar' => true, 'soal_id' => 146],
            ['pilihan' => 'Hamster', 'skor' => 0, 'benar' => false, 'soal_id' => 146],
            ['pilihan' => 'Rabbit', 'skor' => 0, 'benar' => false, 'soal_id' => 146],
            // Pertanyaan 27
            ['pilihan' => 'Close', 'skor' => 0, 'benar' => false, 'soal_id' => 147],
            ['pilihan' => 'Far', 'skor' => 20, 'benar' => true, 'soal_id' => 147],
            ['pilihan' => 'Distance', 'skor' => 0, 'benar' => false, 'soal_id' => 147],
            ['pilihan' => 'Apart', 'skor' => 0, 'benar' => false, 'soal_id' => 147],
            // Pertanyaan 28
            ['pilihan' => 'Book', 'skor' => 0, 'benar' => true, 'soal_id' => 148],
            ['pilihan' => 'Piano', 'skor' => 20, 'benar' => false, 'soal_id' => 148],
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 148],
            ['pilihan' => 'Cup', 'skor' => 0, 'benar' => false, 'soal_id' => 148],
            // Pertanyaan 29
            ['pilihan' => 'Venus', 'skor' => 0, 'benar' => false, 'soal_id' => 149],
            ['pilihan' => 'Mars', 'skor' => 0, 'benar' => true, 'soal_id' => 149],
            ['pilihan' => 'Sun', 'skor' => 20, 'benar' => false, 'soal_id' => 149],
            ['pilihan' => 'Moon', 'skor' => 0, 'benar' => false, 'soal_id' => 149],
            // Pertanyaan 30
            ['pilihan' => 'Chef', 'skor' => 0, 'benar' => true, 'soal_id' => 150],
            ['pilihan' => 'Baker', 'skor' => 20, 'benar' => false, 'soal_id' => 150],
            ['pilihan' => 'Cook', 'skor' => 0, 'benar' => false, 'soal_id' => 150],
            ['pilihan' => 'Waiter', 'skor' => 0, 'benar' => false, 'soal_id' => 150],
        ];

        $pilihanBagian4Level4 = [
            // Pertanyaan 31
            ['pilihan' => 'Light', 'skor' => 20, 'benar' => false, 'soal_id' => 151],
            ['pilihan' => 'Dense', 'skor' => 0, 'benar' => false, 'soal_id' => 151],
            ['pilihan' => 'Solid', 'skor' => 0, 'benar' => false, 'soal_id' => 151],
            ['pilihan' => 'Thick', 'skor' => 0, 'benar' => true, 'soal_id' => 151],
            // Pertanyaan 32
            ['pilihan' => 'Banana', 'skor' => 0, 'benar' => false, 'soal_id' => 152],
            ['pilihan' => 'Tulip', 'skor' => 20, 'benar' => true, 'soal_id' => 152],
            ['pilihan' => 'Potato', 'skor' => 0, 'benar' => false, 'soal_id' => 152],
            ['pilihan' => 'Tomato', 'skor' => 0, 'benar' => false, 'soal_id' => 152],
            // Pertanyaan 33
            ['pilihan' => 'Chemistry', 'skor' => 0, 'benar' => false, 'soal_id' => 153],
            ['pilihan' => 'Biology', 'skor' => 20, 'benar' => true, 'soal_id' => 153],
            ['pilihan' => 'Physics', 'skor' => 0, 'benar' => false, 'soal_id' => 153],
            ['pilihan' => 'Astronomy', 'skor' => 0, 'benar' => false, 'soal_id' => 153],
            // Pertanyaan 34
            ['pilihan' => 'Quiet', 'skor' => 20, 'benar' => true, 'soal_id' => 154],
            ['pilihan' => 'Noisy', 'skor' => 0, 'benar' => false, 'soal_id' => 154],
            ['pilihan' => 'Silent', 'skor' => 0, 'benar' => false, 'soal_id' => 154],
            ['pilihan' => 'Peaceful', 'skor' => 0, 'benar' => false, 'soal_id' => 154],
            // Pertanyaan 35
            ['pilihan' => 'New York City', 'skor' => 0, 'benar' => false, 'soal_id' => 155],
            ['pilihan' => 'Washington D.C.', 'skor' => 20, 'benar' => true, 'soal_id' => 155],
            ['pilihan' => 'Los Angeles', 'skor' => 0, 'benar' => false, 'soal_id' => 155],
            ['pilihan' => 'Chicago', 'skor' => 0, 'benar' => false, 'soal_id' => 155],
            // Pertanyaan 36
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 156],
            ['pilihan' => 'Desk', 'skor' => 0, 'benar' => true, 'soal_id' => 156],
            ['pilihan' => 'Car', 'skor' => 20, 'benar' => false, 'soal_id' => 156],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 156],
            // Pertanyaan 37
            ['pilihan' => 'Empty', 'skor' => 20, 'benar' => false, 'soal_id' => 157],
            ['pilihan' => 'Overflowing', 'skor' => 0, 'benar' => true, 'soal_id' => 157],
            ['pilihan' => 'Packed', 'skor' => 0, 'benar' => false, 'soal_id' => 157],
            ['pilihan' => 'Stuffed', 'skor' => 0, 'benar' => false, 'soal_id' => 157],
            // Pertanyaan 38
            ['pilihan' => 'Nile', 'skor' => 20, 'benar' => true, 'soal_id' => 158],
            ['pilihan' => 'Amazon', 'skor' => 0, 'benar' => false, 'soal_id' => 158],
            ['pilihan' => 'Mississippi', 'skor' => 0, 'benar' => false, 'soal_id' => 158],
            ['pilihan' => 'Yangtze', 'skor' => 0, 'benar' => false, 'soal_id' => 158],
            // Pertanyaan 39
            ['pilihan' => 'Table', 'skor' => 0, 'benar' => false, 'soal_id' => 159],
            ['pilihan' => 'Football', 'skor' => 20, 'benar' => true, 'soal_id' => 159],
            ['pilihan' => 'Chair', 'skor' => 0, 'benar' => false, 'soal_id' => 159],
            ['pilihan' => 'Lamp', 'skor' => 0, 'benar' => false, 'soal_id' => 159],
            // Pertanyaan 40
            ['pilihan' => 'Bright', 'skor' => 20, 'benar' => true, 'soal_id' => 160],
            ['pilihan' => 'Dull', 'skor' => 0, 'benar' => false, 'soal_id' => 160],
            ['pilihan' => 'Obscure', 'skor' => 0, 'benar' => false, 'soal_id' => 160],
            ['pilihan' => 'Shadowy', 'skor' => 0, 'benar' => false, 'soal_id' => 160],
        ];

        DB::table('pilihan')->insert(array_merge($pilihanBagian4Level1, $pilihanBagian4Level2, $pilihanBagian4Level3, $pilihanBagian4Level4));
    }
}
