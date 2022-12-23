// SOAL
var items = [
    {
        kode: "BK-2134781",
        judul: "The Price of Salt",
        penulis: "Patricia Highsmith",
        tahun: "2011-03-15",
    },
    {
        kode: "MV-4633694",
        judul: "Spider-Man: Into the Spider-Verse",
        penulis: "Phil Lord",
        tahun: "2018-12-14",
    },
    {
        kode: "BK-07123121",
        judul: "Organizing For Dummies, Mini Edition",
        penulis: "Eileen Roth",
        tahun: "2010-12-08",
    },
    {
        kode: "BK-65992012",
        judul: "Mindset: The New Psychology of Success",
        penulis: "Carol S. Dweck",
        tahun: "2006-02-28",
    },
    {
        kode: "MV-3606756",
        judul: "Incredibles 2",
        penulis: "Brad Bird",
        tahun: "2018-06-14",
    },
];

var helper = {
    get_category: (kode) => {
        return kode.substr(0, 2) == "BK" ? "BUKU" : "FILM"
    },
    get_date_string: function (tahun) {
        var bulan = [
            "Januari", "Februari", "Maret", "April",
            "Mei", "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember"
        ];
        var split = tahun.split("-");
        return split[2] + " " + bulan[parseInt(split[1]) - 1] + " " + split[0];
    }
}




// JAWABAN
var hasil = {
    BUKU: [], FILM: []
};

// TULIS CODE PADA BAGIAN INI UNTUK MENGUBAH ARRAY items
// MENJADI ARRAY hasil YANG STRUKTURNYA SEPERTI CONTOH OUTPUT

console.log("HASIL", hasil);





// ---------- OUTPUTNYA HARUS SEPERTI INI ----------
// {
//     "BUKU":[
//         "The Price of Salt ditulis oleh Patricia Highsmith dan diterbitkan pada tanggal 15 Maret 2011",
//         "Organizing For Dummies, Mini Edition ditulis oleh Eileen Roth dan diterbitkan pada tanggal 08 Desember 2010",
//         "Mindset: The New Psychology of Success ditulis oleh Carol S. Dweck dan diterbitkan pada tanggal 28 Februari 2006"
//     ],
//     "FILM":[
//         "Spider-Man: Into the Spider-Verse ditulis oleh Phil Lord dan ditayangkan pada tanggal 14 Desember 2018",
//         "Incredibles 2 ditulis oleh Brad Bird dan ditayangkan pada tanggal 14 Juni 2018"
//     ]
// }