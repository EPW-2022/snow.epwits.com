<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Leader;
use App\Models\Member;
use App\Models\Member2;
use App\Models\Abstrak;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "namatim" => "Halilintar",
            "username" => "gilangakbar",
            "email" => "atta@gmail.com",
            "password" => bcrypt("gilangakbar")
        ]);
        User::create([
            "namatim" => "nagafisika",
            "username" => "fisikadragon",
            "email" => "fisikadragon@gmail.com",
            "password" => bcrypt("fisikadragon1234")
        ]);
        User::create([
            "namatim" => "halophysics",
            "username" => "halophysics",
            "email" => "halophysics@gmail.com",
            "password" => bcrypt("halophysics1234")
        ]);
        User::create([
            "namatim" => "bismillahteknikfisika",
            "username" => "bismillahteknikfisika",
            "email" => "bismillahteknikfisika@gmail.com",
            "password" => bcrypt("bismillahteknikfisika1234")
        ]);
        User::create([
            "namatim" => "dramaqueen",
            "username" => "dramaqueen",
            "email" => "dramaqueen@gmail.com",
            "password" => bcrypt("dramaqueen1234")
        ]);
        User::create([
            "namatim" => "farhanally",
            "username" => "farhanally",
            "email" => "farhanally@gmail.com",
            "password" => bcrypt("farhanally1234")
        ]);
        User::create([
            "namatim" => "bambangfisikawan",
            "username" => "bambangfisikawan",
            "email" => "bambangfisikawan@gmail.com",
            "password" => bcrypt("bambangfisikawan1234")
        ]);
        User::create([
            "namatim" => "fastlearnphysics",
            "username" => "fastlearnphysics",
            "email" => "fastlearnphysics@gmail.com",
            "password" => bcrypt("fastlearnphysics1234")
        ]);
        User::create([
            "namatim" => "fisikavskimia",
            "username" => "fisikavskimia",
            "email" => "fisikavskimia@gmail.com",
            "password" => bcrypt("fisikavskimia1234")
        ]);
        User::create([
            "namatim" => "pecintafisika2",
            "username" => "pecintafisika2",
            "email" => "pecintafisika2@gmail.com",
            "password" => bcrypt("pecintafisika21234")
        ]);

        Leader::create([
            "user_id" => 1,
            "asalsekolah" => "SMAN Banyuwangi",
            "kota" => "Banyuwangi",
            "namaketua" => "Irvan",
            "alamat" => "Banyuwangi",
            "nomorhp" => "082531572917",
            "nisn" => "600023165",
            "tempatlahir" => "Banyuwangi",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty2",
            "kartupel" => "beauty2",
            "twibbon" => "beauty2",
            "is_verified" => true
        ]);
        Leader::create([
            "user_id" => 2,
            "asalsekolah" => "SMAN Bojonegoro",
            "kota" => "Bojonegoro",
            "namaketua" => "Suparno",
            "alamat" => "Bojonegoro",
            "nomorhp" => "082515572917",
            "nisn" => "500023165",
            "tempatlahir" => "Bojonegoro",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty3",
            "kartupel" => "beauty3",
            "twibbon" => "beauty3",
            "is_verified" => true
        ]);
        Leader::create([
            "user_id" => 3,
            "asalsekolah" => "SMAN Denpasar",
            "kota" => "Denpasar",
            "namaketua" => "Intan",
            "alamat" => "Denpasar",
            "nomorhp" => "082838572917",
            "nisn" => "500023165",
            "tempatlahir" => "Denpasar",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty4",
            "kartupel" => "beauty4",
            "twibbon" => "beauty4",
            "is_verified" => true
        ]);
        Leader::create([
            "user_id" => 4,
            "asalsekolah" => "SMAN Malang",
            "kota" => "Malang",
            "namaketua" => "Junima",
            "alamat" => "Malang",
            "nomorhp" => "082838572917",
            "nisn" => "500023165",
            "tempatlahir" => "Malang",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty5",
            "kartupel" => "beauty5",
            "twibbon" => "beauty5",
            "is_verified" => true
        ]);
        Leader::create([
            "user_id" => 5,
            "asalsekolah" => "SMAN Jakarta",
            "kota" => "Jakarta",
            "namaketua" => "Dedi",
            "alamat" => "Jakarta",
            "nomorhp" => "082789572917",
            "nisn" => "50011023165",
            "tempatlahir" => "Jakarta",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty6",
            "kartupel" => "beauty6",
            "twibbon" => "beauty6",
            "is_verified" => true
        ]);
        Leader::create([
            "user_id" => 6,
            "asalsekolah" => "SMAN Lamongan",
            "kota" => "Lamongan",
            "namaketua" => "Fakihatu",
            "alamat" => "Lamongan",
            "nomorhp" => "0823215572917",
            "nisn" => "565423165",
            "tempatlahir" => "Lamongan",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty7",
            "kartupel" => "beauty7",
            "twibbon" => "beauty7",
            "is_verified" => false
        ]);
        Leader::create([
            "user_id" => 7,
            "asalsekolah" => "SMAN Sidoarjo",
            "kota" => "Sidoarjo",
            "namaketua" => "Rihana",
            "alamat" => "Sidoarjo",
            "nomorhp" => "081538572917",
            "nisn" => "5546023165",
            "tempatlahir" => "Sidoarjo",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty8",
            "kartupel" => "beauty8",
            "twibbon" => "beauty8",
            "is_verified" => false
        ]);
        Leader::create([
            "user_id" => 8,
            "asalsekolah" => "SMAN Lumajang",
            "kota" => "Lumajang",
            "namaketua" => "Hamzahskuy",
            "alamat" => "Lumajang",
            "nomorhp" => "082821672917",
            "nisn" => "5006546165",
            "tempatlahir" => "Lumajang",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty9",
            "kartupel" => "beauty9",
            "twibbon" => "beauty9",
            "is_verified" => false
        ]);
        Leader::create([
            "user_id" => 9,
            "asalsekolah" => "SMAN Surabaya",
            "kota" => "Surabaya",
            "namaketua" => "Kiki",
            "alamat" => "Surabaya",
            "nomorhp" => "082838572917",
            "nisn" => "500023165",
            "tempatlahir" => "Surabaya",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty10",
            "kartupel" => "beauty10",
            "twibbon" => "beauty10",
            "is_verified" => false
        ]);
        Leader::create([
            "user_id" => 10,
            "asalsekolah" => "SMAN Depok",
            "kota" => "Depok",
            "namaketua" => "Munawar",
            "alamat" => "Depok",
            "nomorhp" => "082855572917",
            "nisn" => "507773165",
            "tempatlahir" => "Depok",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty11",
            "kartupel" => "beauty11",
            "twibbon" => "beauty11",
            "is_verified" => false
        ]);

        Member::create([
            "user_id" => 1,
            "namaanggota1" => "Sudirman",
            "nisn1" => "2131565",
            "tempatlahir1" => "Depok",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan1",
            "kartupel1" => "memberan1",
            "twibbon1" => "memberan1"
        ]);
        Member::create([
            "user_id" => 2,
            "namaanggota1" => "Pujianto",
            "nisn1" => "2131565",
            "tempatlahir1" => "Bali",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan2",
            "kartupel1" => "memberan2",
            "twibbon1" => "memberan2"
        ]);
        Member::create([
            "user_id" => 3,
            "namaanggota1" => "Denika",
            "nisn1" => "2131565",
            "tempatlahir1" => "Lumajang",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan2",
            "kartupel1" => "memberan2",
            "twibbon1" => "memberan2"
        ]);
        Member::create([
            "user_id" => 4,
            "namaanggota1" => "Safitra",
            "nisn1" => "2131565",
            "tempatlahir1" => "Garut",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan3",
            "kartupel1" => "memberan3",
            "twibbon1" => "memberan3"
        ]);
        Member::create([
            "user_id" => 5,
            "namaanggota1" => "Dunn",
            "nisn1" => "2131565",
            "tempatlahir1" => "Fakfak",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan4",
            "kartupel1" => "memberan4",
            "twibbon1" => "memberan4"
        ]);
        Member::create([
            "user_id" => 6,
            "namaanggota1" => "Fraith",
            "nisn1" => "2131565",
            "tempatlahir1" => "Trenggalek",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan5",
            "kartupel1" => "memberan5",
            "twibbon1" => "memberan5"
        ]);
        Member::create([
            "user_id" => 7,
            "namaanggota1" => "Gilangg",
            "nisn1" => "2131565",
            "tempatlahir1" => "Singapura",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan6",
            "kartupel1" => "memberan6",
            "twibbon1" => "memberan6"
        ]);
        Member::create([
            "user_id" => 8,
            "namaanggota1" => "Fiska",
            "nisn1" => "2131565",
            "tempatlahir1" => "Rembang",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan7",
            "kartupel1" => "memberan7",
            "twibbon1" => "memberan7"
        ]);
        Member::create([
            "user_id" => 9,
            "namaanggota1" => "Senda",
            "nisn1" => "2131565",
            "tempatlahir1" => "Semarang",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan8",
            "kartupel1" => "memberan8",
            "twibbon1" => "memberan8"
        ]);
        Member::create([
            "user_id" => 10,
            "namaanggota1" => "Kuychen",
            "nisn1" => "2131565",
            "tempatlahir1" => "Tulungagung",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan9",
            "kartupel1" => "memberan9",
            "twibbon1" => "memberan9"
        ]);

        Member2::create([
            "user_id" => 1,
            "namaanggota2" => "Fani",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota1",
            "kartupel2" => "keanggota1",
            "twibbon2" => "keanggota1"
        ]);
        Member2::create([
            "user_id" => 2,
            "namaanggota2" => "Ryan",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota2",
            "kartupel2" => "keanggota2",
            "twibbon2" => "keanggota2"
        ]);
        Member2::create([
            "user_id" => 3,
            "namaanggota2" => "Demian",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota3",
            "kartupel2" => "keanggota3",
            "twibbon2" => "keanggota3"
        ]);
        Member2::create([
            "user_id" => 4,
            "namaanggota2" => "Jordan",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota4",
            "kartupel2" => "keanggota4",
            "twibbon2" => "keanggota4"
        ]);
        Member2::create([
            "user_id" => 5,
            "namaanggota2" => "Galang",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota5",
            "kartupel2" => "keanggota5",
            "twibbon2" => "keanggota5"
        ]);
        Member2::create([
            "user_id" => 6,
            "namaanggota2" => "Heri",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota6",
            "kartupel2" => "keanggota6",
            "twibbon2" => "keanggota6"
        ]);
        Member2::create([
            "user_id" => 7,
            "namaanggota2" => "Visma",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota7",
            "kartupel2" => "keanggota7",
            "twibbon2" => "keanggota7"
        ]);
        Member2::create([
            "user_id" => 8,
            "namaanggota2" => "Firan",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota8",
            "kartupel2" => "keanggota8",
            "twibbon2" => "keanggota8"
        ]);
        Member2::create([
            "user_id" => 9,
            "namaanggota2" => "Shania",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota9",
            "kartupel2" => "keanggota9",
            "twibbon2" => "keanggota9"
        ]);
        Member2::create([
            "user_id" => 10,
            "namaanggota2" => "Aghisna",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota10",
            "kartupel2" => "keanggota10",
            "twibbon2" => "keanggota10"
        ]);

        // Abstrak::create([
        //     "user_id" => 1,
        //     "filename" => "Judul ke 1"
        // ]);
        // Abstrak::create([
        //     "user_id" => 2,
        //     "filename" => "Judul ke 2"
        // ]);
        // Abstrak::create([
        //     "user_id" => 3,
        //     "filename" => "Judul ke 3"
        // ]);
        // Abstrak::create([
        //     "user_id" => 4,
        //     "filename" => "Judul ke 4"
        // ]);
        // Abstrak::create([
        //     "user_id" => 5,
        //     "filename" => "Judul ke 5"
        // ]);
        // Abstrak::create([
        //     "user_id" => 6,
        //     "filename" => "Judul ke 6"
        // ]);
        // Abstrak::create([
        //     "user_id" => 7,
        //     "filename" => "Judul ke 7"
        // ]);
        // Abstrak::create([
        //     "user_id" => 8,
        //     "filename" => "Judul ke 8"
        // ]);
        // Abstrak::create([
        //     "user_id" => 9,
        //     "filename" => "Judul ke 9"
        // ]);
        // Abstrak::create([
        //     "user_id" => 10,
        //     "filename" => "Judul ke 10"
        // ]);


        Leader::create([
            "user_id" => 1,
            "asalsekolah" => "SMAN Banyuwangi",
            "kota" => "Banyuwangi",
            "namaketua" => "Irvan",
            "alamat" => "Banyuwangi",
            "nomorhp" => "082531572917",
            "nisn" => "600023165",
            "tempatlahir" => "Banyuwangi",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty2",
            "kartupel" => "beauty2",
            "twibbon" => "beauty2"
        ]);
        Leader::create([
            "user_id" => 2,
            "asalsekolah" => "SMAN Bojonegoro",
            "kota" => "Bojonegoro",
            "namaketua" => "Suparno",
            "alamat" => "Bojonegoro",
            "nomorhp" => "082515572917",
            "nisn" => "500023165",
            "tempatlahir" => "Bojonegoro",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty3",
            "kartupel" => "beauty3",
            "twibbon" => "beauty3"
        ]);
        Leader::create([
            "user_id" => 3,
            "asalsekolah" => "SMAN Denpasar",
            "kota" => "Denpasar",
            "namaketua" => "Intan",
            "alamat" => "Denpasar",
            "nomorhp" => "082838572917",
            "nisn" => "500023165",
            "tempatlahir" => "Denpasar",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty4",
            "kartupel" => "beauty4",
            "twibbon" => "beauty4"
        ]);
        Leader::create([
            "user_id" => 4,
            "asalsekolah" => "SMAN Malang",
            "kota" => "Malang",
            "namaketua" => "Junima",
            "alamat" => "Malang",
            "nomorhp" => "082838572917",
            "nisn" => "500023165",
            "tempatlahir" => "Malang",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty5",
            "kartupel" => "beauty5",
            "twibbon" => "beauty5"
        ]);
        Leader::create([
            "user_id" => 5,
            "asalsekolah" => "SMAN Jakarta",
            "kota" => "Jakarta",
            "namaketua" => "Dedi",
            "alamat" => "Jakarta",
            "nomorhp" => "082789572917",
            "nisn" => "50011023165",
            "tempatlahir" => "Jakarta",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty6",
            "kartupel" => "beauty6",
            "twibbon" => "beauty6"
        ]);
        Leader::create([
            "user_id" => 6,
            "asalsekolah" => "SMAN Lamongan",
            "kota" => "Lamongan",
            "namaketua" => "Fakihatu",
            "alamat" => "Lamongan",
            "nomorhp" => "0823215572917",
            "nisn" => "565423165",
            "tempatlahir" => "Lamongan",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty7",
            "kartupel" => "beauty7",
            "twibbon" => "beauty7"
        ]);
        Leader::create([
            "user_id" => 7,
            "asalsekolah" => "SMAN Sidoarjo",
            "kota" => "Sidoarjo",
            "namaketua" => "Rihana",
            "alamat" => "Sidoarjo",
            "nomorhp" => "081538572917",
            "nisn" => "5546023165",
            "tempatlahir" => "Sidoarjo",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty8",
            "kartupel" => "beauty8",
            "twibbon" => "beauty8"
        ]);
        Leader::create([
            "user_id" => 8,
            "asalsekolah" => "SMAN Lumajang",
            "kota" => "Lumajang",
            "namaketua" => "Hamzahskuy",
            "alamat" => "Lumajang",
            "nomorhp" => "082821672917",
            "nisn" => "5006546165",
            "tempatlahir" => "Lumajang",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty9",
            "kartupel" => "beauty9",
            "twibbon" => "beauty9"
        ]);
        Leader::create([
            "user_id" => 9,
            "asalsekolah" => "SMAN Surabaya",
            "kota" => "Surabaya",
            "namaketua" => "Kiki",
            "alamat" => "Surabaya",
            "nomorhp" => "082838572917",
            "nisn" => "500023165",
            "tempatlahir" => "Surabaya",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty10",
            "kartupel" => "beauty10",
            "twibbon" => "beauty10"
        ]);
        Leader::create([
            "user_id" => 10,
            "asalsekolah" => "SMAN Depok",
            "kota" => "Depok",
            "namaketua" => "Munawar",
            "alamat" => "Depok",
            "nomorhp" => "082855572917",
            "nisn" => "507773165",
            "tempatlahir" => "Depok",
            "tanggallahir" => "2021-10-10",
            "foto" => "beauty11",
            "kartupel" => "beauty11",
            "twibbon" => "beauty11"
        ]);

        Member::create([
            "user_id" => 1,
            "namaanggota1" => "Sudirman",
            "nisn1" => "2131565",
            "tempatlahir1" => "Depok",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan1",
            "kartupel1" => "memberan1",
            "twibbon1" => "memberan1"
        ]);
        Member::create([
            "user_id" => 2,
            "namaanggota1" => "Pujianto",
            "nisn1" => "2131565",
            "tempatlahir1" => "Bali",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan2",
            "kartupel1" => "memberan2",
            "twibbon1" => "memberan2"
        ]);
        Member::create([
            "user_id" => 3,
            "namaanggota1" => "Denika",
            "nisn1" => "2131565",
            "tempatlahir1" => "Lumajang",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan2",
            "kartupel1" => "memberan2",
            "twibbon1" => "memberan2"
        ]);
        Member::create([
            "user_id" => 4,
            "namaanggota1" => "Safitra",
            "nisn1" => "2131565",
            "tempatlahir1" => "Garut",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan3",
            "kartupel1" => "memberan3",
            "twibbon1" => "memberan3"
        ]);
        Member::create([
            "user_id" => 5,
            "namaanggota1" => "Dunn",
            "nisn1" => "2131565",
            "tempatlahir1" => "Fakfak",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan4",
            "kartupel1" => "memberan4",
            "twibbon1" => "memberan4"
        ]);
        Member::create([
            "user_id" => 6,
            "namaanggota1" => "Fraith",
            "nisn1" => "2131565",
            "tempatlahir1" => "Trenggalek",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan5",
            "kartupel1" => "memberan5",
            "twibbon1" => "memberan5"
        ]);
        Member::create([
            "user_id" => 7,
            "namaanggota1" => "Gilangg",
            "nisn1" => "2131565",
            "tempatlahir1" => "Singapura",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan6",
            "kartupel1" => "memberan6",
            "twibbon1" => "memberan6"
        ]);
        Member::create([
            "user_id" => 8,
            "namaanggota1" => "Fiska",
            "nisn1" => "2131565",
            "tempatlahir1" => "Rembang",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan7",
            "kartupel1" => "memberan7",
            "twibbon1" => "memberan7"
        ]);
        Member::create([
            "user_id" => 9,
            "namaanggota1" => "Senda",
            "nisn1" => "2131565",
            "tempatlahir1" => "Semarang",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan8",
            "kartupel1" => "memberan8",
            "twibbon1" => "memberan8"
        ]);
        Member::create([
            "user_id" => 10,
            "namaanggota1" => "Kuychen",
            "nisn1" => "2131565",
            "tempatlahir1" => "Tulungagung",
            "tanggallahir1" => "2021-10-10",
            "foto1" => "memberan9",
            "kartupel1" => "memberan9",
            "twibbon1" => "memberan9"
        ]);

        Member2::create([
            "user_id" => 1,
            "namaanggota2" => "Fani",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota1",
            "kartupel2" => "keanggota1",
            "twibbon2" => "keanggota1"
        ]);
        Member2::create([
            "user_id" => 2,
            "namaanggota2" => "Ryan",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota2",
            "kartupel2" => "keanggota2",
            "twibbon2" => "keanggota2"
        ]);
        Member2::create([
            "user_id" => 3,
            "namaanggota2" => "Demian",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota3",
            "kartupel2" => "keanggota3",
            "twibbon2" => "keanggota3"
        ]);
        Member2::create([
            "user_id" => 4,
            "namaanggota2" => "Jordan",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota4",
            "kartupel2" => "keanggota4",
            "twibbon2" => "keanggota4"
        ]);
        Member2::create([
            "user_id" => 5,
            "namaanggota2" => "Galang",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota5",
            "kartupel2" => "keanggota5",
            "twibbon2" => "keanggota5"
        ]);
        Member2::create([
            "user_id" => 6,
            "namaanggota2" => "Heri",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota6",
            "kartupel2" => "keanggota6",
            "twibbon2" => "keanggota6"
        ]);
        Member2::create([
            "user_id" => 7,
            "namaanggota2" => "Visma",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota7",
            "kartupel2" => "keanggota7",
            "twibbon2" => "keanggota7"
        ]);
        Member2::create([
            "user_id" => 8,
            "namaanggota2" => "Firan",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota8",
            "kartupel2" => "keanggota8",
            "twibbon2" => "keanggota8"
        ]);
        Member2::create([
            "user_id" => 9,
            "namaanggota2" => "Shania",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota9",
            "kartupel2" => "keanggota9",
            "twibbon2" => "keanggota9"
        ]);
        Member2::create([
            "user_id" => 10,
            "namaanggota2" => "Aghisna",
            "nisn2" => "2131565",
            "tempatlahir2" => "Depok",
            "tanggallahir2" => "2021-10-10",
            "foto2" => "keanggota10",
            "kartupel2" => "keanggota10",
            "twibbon2" => "keanggota10"
        ]);

        Abstrak::create([
            "user_id" => 1,
            "filename" => "Judul ke 1"
        ]);
        Abstrak::create([
            "user_id" => 2,
            "filename" => "Judul ke 2"
        ]);
        Abstrak::create([
            "user_id" => 3,
            "filename" => "Judul ke 3"
        ]);
        Abstrak::create([
            "user_id" => 4,
            "filename" => "Judul ke 4"
        ]);
        Abstrak::create([
            "user_id" => 5,
            "filename" => "Judul ke 5"
        ]);
        Abstrak::create([
            "user_id" => 6,
            "filename" => "Judul ke 6"
        ]);
        Abstrak::create([
            "user_id" => 7,
            "filename" => "Judul ke 7"
        ]);
        Abstrak::create([
            "user_id" => 8,
            "filename" => "Judul ke 8"
        ]);
        Abstrak::create([
            "user_id" => 9,
            "filename" => "Judul ke 9"
        ]);
        Abstrak::create([
            "user_id" => 10,
            "filename" => "Judul ke 10"
        ]);
    }
}
