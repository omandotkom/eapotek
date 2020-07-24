<?php

use App\Medicine;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        //looping pengisian data
    
        //cabang 1
        //12 bulan
        for ($bulan = 1;$bulan<=12;$bulan++){
            //dalam bulan terdapat 28 hari
            for ($hari = 1;$hari<=28;$hari++){
                //dalam sehari terdapat beberapa transaksi berbeda
                //di cabang ini
                $jumlahTransaksi = $faker->numberBetween($min = 30, $max = 50);
                for ($tr = 1; $tr <= $jumlahTransaksi;$tr++){
                    //dalam 1 dari setiap transaksi, terdapat hash tersendiri
                    //1 transaksi ditandai dengan 1 hash
                    $hash = $faker->unique()->uuid;
                    //1 hash memiliki 1 sampai 4 item berbeda
                    for ($item = 1; $item <= $faker->numberBetween($min = 2, $max = 3); $item++){
                        $medicine = Medicine::inRandomOrder()->first();
                        DB::table('transactions')->insert([
                            'branch_id' => $medicine->branch_id,
                            'hash' => $hash,
                            'medicine_id' => $medicine->id,
                            'quantity' => $faker->numberBetween($min = 1, $max = 4),
                            'totalbiaya' => $faker->numberBetween($min = 16000, $max = 30000),
                            'tanggal' => Carbon::createFromDate(2020,$bulan,$hari)->toDateString(),
                        ]);
                    }                   
                }
            }
        }
/*
        //cabang 2
        //12 bulan
        for ($bulan = 1;$bulan<=12;$bulan++){
            //dalam bulan terdapat 28 hari
            for ($hari = 1;$hari<=28;$hari++){
                //dalam sehari terdapat beberapa transaksi berbeda
                //di cabang ini
                $jumlahTransaksi = $faker->numberBetween($min = 30, $max = 50);
                for ($tr = 1; $tr <= $jumlahTransaksi;$tr++){
                    //dalam 1 dari setiap transaksi, terdapat hash tersendiri
                    //1 transaksi ditandai dengan 1 hash
                    $hash = $faker->unique()->uuid;
                    //1 hash memiliki 1 sampai 4 item berbeda
                    for ($item = 1; $item <= $faker->numberBetween($min = 2, $max = 3); $item++){
                        DB::table('transactions')->insert([
                            'branch_id' => 2,
                            'hash' => $hash,
                            'medicine_id' => 'Mdc 824sdb',
                            'quantity' => $faker->numberBetween($min = 1, $max = 6),
                            'totalbiaya' => $faker->numberBetween($min = 16000, $max = 30000),
                            'tanggal' => Carbon::createFromDate(2020,$bulan,$hari)->toDateString(),
                        ]);
                    }                   
                }
            }
        }

           //cabang 3
        //12 bulan
        for ($bulan = 1;$bulan<=12;$bulan++){
            //dalam bulan terdapat 28 hari
            for ($hari = 1;$hari<=28;$hari++){
                //dalam sehari terdapat beberapa transaksi berbeda
                //di cabang ini
                $jumlahTransaksi = $faker->numberBetween($min = 30, $max = 50);
                for ($tr = 1; $tr <= $jumlahTransaksi;$tr++){
                    //dalam 1 dari setiap transaksi, terdapat hash tersendiri
                    //1 transaksi ditandai dengan 1 hash
                    $hash = $faker->unique()->uuid;
                    //1 hash memiliki 1 sampai 4 item berbeda
                    for ($item = 1; $item <= $faker->numberBetween($min = 2, $max = 3); $item++){
                        DB::table('transactions')->insert([
                            'branch_id' => 3,
                            'hash' => $hash,
                            'medicine_id' => 'Mdc 531zno',
                            'quantity' => $faker->numberBetween($min = 1, $max = 3),
                            'totalbiaya' => $faker->numberBetween($min = 16000, $max = 30000),
                            'tanggal' => Carbon::createFromDate(2019,$bulan,$hari)->toDateString(),
                        ]);
                    }                   
                }
            }
        }

                 //cabang 4
        //12 bulan
        for ($bulan = 1;$bulan<=12;$bulan++){
            //dalam bulan terdapat 28 hari
            for ($hari = 1;$hari<=28;$hari++){
                //dalam sehari terdapat beberapa transaksi berbeda
                //di cabang ini
                $jumlahTransaksi = $faker->numberBetween($min = 30, $max = 50);
                for ($tr = 1; $tr <= $jumlahTransaksi;$tr++){
                    //dalam 1 dari setiap transaksi, terdapat hash tersendiri
                    //1 transaksi ditandai dengan 1 hash
                    $hash = $faker->unique()->uuid;
                    //1 hash memiliki 1 sampai 4 item berbeda
                    for ($item = 1; $item <= $faker->numberBetween($min = 2, $max = 3); $item++){
                        DB::table('transactions')->insert([
                            'branch_id' => 4,
                            'hash' => $hash,
                            'medicine_id' => 'Mdc 421wxd',
                            'quantity' => $faker->numberBetween($min = 1, $max = 9),
                            'totalbiaya' => $faker->numberBetween($min = 16000, $max = 30000),
                            'tanggal' => Carbon::createFromDate(2019,$bulan,$hari)->toDateString(),
                        ]);
                    }                   
                }
            }
        }
        */
    }
}

