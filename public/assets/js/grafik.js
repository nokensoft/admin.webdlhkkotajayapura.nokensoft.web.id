// VISITOR COUNTER
let totalVisitor = document.getElementById('totalVisitor').value;
let visitorHariIni = document.getElementById('visitorHariIni').value;
let visitorMingguIni = document.getElementById('visitorMingguIni').value;
let visitorBulanIni = document.getElementById('visitorBulanIni').value;
let visitorTahunIni = document.getElementById('visitorTahunIni').value;
var chart = c3.generate({
    bindto: '#chartVisitor',
    data: {
        columns: [
            ['Hari Ini', visitorHariIni],
            ['Minggu Ini', visitorMingguIni],
            ['Bulan Ini', visitorBulanIni],
            ['Tahun Ini', visitorTahunIni],
            ['Total semua', totalVisitor]
        ],
        type: 'bar'
    },
    chart: {
        width: {
            ratio: 1 // this makes bar width 50% of length between ticks
        }
        // or
        //width: 100 // this makes bar width 100px
    }
});


// BERITA COUNTER
let dasbor_jml_berita = document.getElementById('dasbor_jml_berita').value;
let dasbor_jml_berita_draft = document.getElementById('dasbor_jml_berita_draft').value;
let dasbor_jml_berita_semua = document.getElementById('dasbor_jml_berita_semua').value;
var chart = c3.generate({
    bindto: '#chartBerita',
    data: {
        columns: [
            ['Publish', dasbor_jml_berita],
            ['Draft', dasbor_jml_berita_draft],
            ['Total semua', dasbor_jml_berita_semua]
        ],
        type: 'bar'
    },
    chart: {
        width: {
            ratio: 1 // this makes bar width 50% of length between ticks
        }
        // or
        //width: 100 // this makes bar width 100px
    }
});

// HALAMAN COUNTER
let dasbor_jml_halaman = document.getElementById('dasbor_jml_halaman').value;
let dasbor_jml_halaman_draft = document.getElementById('dasbor_jml_halaman_draft').value;
let dasbor_jml_halaman_semua = document.getElementById('dasbor_jml_halaman_semua').value;
var chart = c3.generate({
    bindto: '#chartHalaman',
    data: {
        columns: [
            ['Publish', dasbor_jml_halaman],
            ['Draft', dasbor_jml_halaman_draft],
            ['Total semua', dasbor_jml_halaman_semua]
        ],
        type: 'bar'
    },
    chart: {
        width: {
            ratio: 1 // this makes bar width 50% of length between ticks
        }
        // or
        //width: 100 // this makes bar width 100px
    }
});
