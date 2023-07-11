<?php

namespace Database\Seeders;

use App\Models\Berita\Berita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'user_id'           => 1,
            'category_id'       => 6,

            'judul'             => 'Untuk mendukung kehidupan lingkungan di laut, diperlukan upaya kolaboratif dari berbagai pihak',
            'slug'              => 'untuk-mendukung-kehidupan-lingkungan-di-laut-diperlukan-upaya-kolaboratif-dari-berbagai-pihak',
            'gambar'            => '08.jpg',
            'konten'            => '<p>Untuk mendukung kehidupan lingkungan di laut, diperlukan upaya kolaboratif dari berbagai pihak. Berikut adalah enam langkah yang dapat diambil untuk mendukung kehidupan lingkungan di laut:</p>
            <ol>
                <li>Mencegah polusi: Salah satu langkah penting adalah mencegah polusi di perairan laut. Hindari pembuangan limbah industri dan domestik langsung ke laut. Buang sampah pada tempatnya dan pastikan limbah terkelola dengan baik, terutama bahan-bahan berbahaya seperti minyak, pestisida, dan bahan kimia beracun.</li>
                <li>Konservasi terumbu karang: Terumbu karang merupakan ekosistem yang sangat penting bagi kehidupan laut. Dukung upaya konservasi terumbu karang dengan tidak merusak atau mengambil organisme hidup dari terumbu karang. Hindari penggunaan bahan kimia yang berpotensi merusak terumbu karang, seperti tabir surya yang tidak ramah terumbu karang.</li>
                <li>Mengurangi konsumsi ikan yang tidak berkelanjutan: Memperhatikan pilihan makanan laut kita juga penting untuk mendukung kehidupan di laut. Hindari makan ikan yang dieksploitasi secara berlebihan atau yang ditangkap dengan cara yang merusak lingkungan, seperti metode penangkapan yang merusak dasar laut. Pilihlah ikan yang ditangkap secara berkelanjutan dan ramah lingkungan.</li>
                <li>Mengurangi penggunaan plastik: Plastik adalah masalah besar di laut. Kurangi penggunaan plastik sekali pakai dan gantilah dengan alternatif yang ramah lingkungan. Daur ulang plastik sebanyak mungkin dan pastikan limbah plastik dibuang dengan benar agar tidak sampai ke laut.</li>
                <li>Mendukung kawasan konservasi laut: Aktif dalam mendukung dan berpartisipasi dalam upaya kawasan konservasi laut. Dukung pembentukan taman laut dan wilayah perlindungan laut. Ikuti aturan dan peraturan yang berlaku di kawasan konservasi, seperti melarang penangkapan ikan di daerah yang ditetapkan.</li>
                <li>Mengedukasi diri dan orang lain: Penting untuk terus meningkatkan pemahaman tentang kehidupan di laut dan pentingnya menjaga ekosistemnya. Dapatkan informasi tentang spesies yang terancam punah atau terancam habitatnya dan bagaimana kita dapat membantu. Bagikan pengetahuan dan kesadaran Anda kepada orang lain untuk meningkatkan kepedulian dan tindakan kolektif.</li>
            </ol>
                <p>Melalui langkah-langkah tersebut, kita dapat berkontribusi dalam mendukung kehidupan lingkungan di laut. Kesadaran dan tindakan kita memiliki dampak yang signifikan terhadap kelestarian ekosistem laut yang berharga ini.</p>',

            'konten_singkat'    => 'Untuk mendukung kehidupan lingkungan di laut, diperlukan upaya kolaboratif dari berbagai pihak. Berikut adalah enam langkah yang dapat diambil untuk mendukung kehidupan lingkungan di laut...',

            'status'            => 'Draft',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 7,

            'judul'             => 'Menanam pohon adalah salah satu cara yang efektif untuk mendukung lingkungan',
            'slug'              => 'menanam-pohon-adalah-salah-satu-cara-yang-efektif-untuk-mendukung-lingkungan',
            'gambar'            => '07.jpg',
            'konten'            => '<p>Pohon-pohon memberikan manfaat yang besar bagi alam dan manusia. Berikut adalah enam langkah untuk mendukung lingkungan melalui penanaman pohon.</p>

            <p>Pertama, pilihlah spesies pohon yang cocok untuk tumbuh di daerah tempat Anda tinggal. Pastikan untuk memilih pohon yang sesuai dengan iklim dan kondisi tanah di sekitar Anda. Hal ini akan memastikan bahwa pohon-pohon tersebut dapat tumbuh dengan baik dan memberikan manfaat yang maksimal bagi lingkungan.</p>

            <p>Kedua, pilihlah lokasi yang tepat untuk menanam pohon. Pastikan area tersebut memiliki cukup ruang bagi pohon untuk tumbuh dengan baik. Hindari menanam pohon terlalu dekat dengan bangunan atau infrastruktur lainnya, karena akar pohon dapat merusak struktur tersebut. Selain itu, pilihlah area yang memiliki kebutuhan akan penanaman pohon, seperti area yang kekurangan pepohonan atau daerah yang mengalami erosi.</p>

            <p> Langkah ketiga adalah melakukan penanaman dengan benar. Gali lubang yang cukup besar dan dalam untuk menampung akar pohon dengan baik. Setelah menempatkan pohon di dalam lubang, pastikan untuk mengisi lubang dengan tanah yang cukup subur dan memberikan air yang cukup untuk membantu pohon tumbuh.</p>

            <p>Selanjutnya, lakukan pemeliharaan yang rutin pada pohon yang telah ditanam. Pastikan untuk memberikan air yang cukup, memangkas cabang yang rusak, dan memberikan nutrisi yang diperlukan agar pohon tetap sehat. Jaga pula agar pohon tidak terkena hama atau penyakit yang dapat merusak pertumbuhan pohon.</p>

            <p>Kelima, ajak masyarakat sekitar untuk ikut serta dalam program penanaman pohon. Buatlah kegiatan sosialisasi dan penggalangan dana untuk mengajak orang lain berpartisipasi dalam menanam pohon. Melibatkan masyarakat akan meningkatkan kesadaran tentang pentingnya menjaga lingkungan dan dapat membantu memperluas area pepohonan.</p>

            <p>Terakhir, jaga dan rawat pohon-pohon yang telah ditanam. Ketika pohon telah tumbuh besar, berikan perlindungan dan perawatan yang diperlukan untuk memastikan kelangsungan hidupnya. Selain itu, pantau pertumbuhan pohon dan berikan pemangkasan yang diperlukan agar pohon tetap sehat dan rapi.</p>

            <p>Dengan melakukan langkah-langkah ini, kita dapat mendukung lingkungan melalui penanaman pohon. Pohon-pohon yang kita tanam akan memberikan manfaat jangka panjang, seperti mengurangi polusi udara, menyediakan tempat berlindung bagi hewan, dan menjaga kualitas tanah. Melalui upaya kolektif kita, kita dapat memperbaiki lingkungan hidup dan mewariskannya kepada generasi mendatang yang lebih baik.</p>',

            'konten_singkat'    => 'Pohon-pohon memberikan manfaat yang besar bagi alam dan manusia. Berikut adalah enam langkah untuk mendukung lingkungan melalui penanaman pohon.',

            'status'            => 'Draft',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 5,

            'judul'             => 'Serah Terima Jabatan dan Purna Tugas Penjabat Struktural',
            'slug'              => 'serah-terima-jabatan-dan-purna-tugas-penjabat-struktural',
            'gambar'            => '09-720X480.jpg',
            'konten'            => '<p>Telah dilaksanakan serah terim jabatan pada lingkungan Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura. Pada kegiatan ini, pejabat yang lema telah diganti dengan pejabat yang baru.</p>',

            'konten_singkat'    => 'Telah dilaksanakan serah terim jabatan pada lingkungan Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura.',

            'status'            => 'Publish',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 5,

            'judul'             => 'Foto Bersama Pada Kegiatan Serah Terima Jabatan',
            'slug'              => 'foto-bersama-pada-kegiatan-serah-terima-jabatan',
            'gambar'            => '10-720X480.jpg',
            'konten'            => '<p>The Environmental Agency of Jayapura City is a governmental organization responsible for managing and preserving the environment in the city. Its primary objective is to promote sustainable development while ensuring the protection of natural resources, biodiversity, and the overall well-being of the community. The agency works towards achieving this goal through various activities such as implementing environmental regulations, conducting environmental assessments, raising awareness about environmental issues, and collaborating with other stakeholders to develop and implement effective environmental policies and programs. By actively engaging with the public and stakeholders, the Environmental Agency of Jayapura City strives to create a clean and healthy environment for its residents, promoting a sustainable and livable city for present and future generations.</p>

            <p>In addition to environmental management, the agency also focuses on waste management and pollution control. It coordinates waste collection and disposal systems, aiming to minimize the environmental impact of waste generation and promote recycling and proper waste disposal practices. The agency also monitors air and water quality, implementing measures to reduce pollution levels and protect the health of the population. Through its dedicated efforts, the Environmental Agency of Jayapura City plays a crucial role in safeguarding the environment and enhancing the quality of life for the residents of the city.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Publish',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 11,

            'judul'             => 'SIPAKOT (Sistem Informasi Pajak Air Tanah)',
            'slug'              => 'sipakot-sistem-informasi-pajak-air-tanah',
            'gambar'            => '12-720X480.jpg',
            'konten'            => '<p>The Environmental Agency of Jayapura City is a governmental organization responsible for managing and preserving the environment in the city. Its primary objective is to promote sustainable development while ensuring the protection of natural resources, biodiversity, and the overall well-being of the community. The agency works towards achieving this goal through various activities such as implementing environmental regulations, conducting environmental assessments, raising awareness about environmental issues, and collaborating with other stakeholders to develop and implement effective environmental policies and programs. By actively engaging with the public and stakeholders, the Environmental Agency of Jayapura City strives to create a clean and healthy environment for its residents, promoting a sustainable and livable city for present and future generations.</p>

            <p>In addition to environmental management, the agency also focuses on waste management and pollution control. It coordinates waste collection and disposal systems, aiming to minimize the environmental impact of waste generation and promote recycling and proper waste disposal practices. The agency also monitors air and water quality, implementing measures to reduce pollution levels and protect the health of the population. Through its dedicated efforts, the Environmental Agency of Jayapura City plays a crucial role in safeguarding the environment and enhancing the quality of life for the residents of the city.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Publish',
        ]);

        Berita::create([
            'user_id'           => 1,
            'category_id'       => 11,

            'judul'             => 'Peluncuran Portal Web DLHK Kota Jayapura',
            'slug'              => 'peluncuran-portal-web-dlhk-kota-jayapura',
            'gambar'            => '11-720X480.jpg',
            'konten'            => '<p>The Environmental Agency of Jayapura City is a governmental organization responsible for managing and preserving the environment in the city. Its primary objective is to promote sustainable development while ensuring the protection of natural resources, biodiversity, and the overall well-being of the community. The agency works towards achieving this goal through various activities such as implementing environmental regulations, conducting environmental assessments, raising awareness about environmental issues, and collaborating with other stakeholders to develop and implement effective environmental policies and programs. By actively engaging with the public and stakeholders, the Environmental Agency of Jayapura City strives to create a clean and healthy environment for its residents, promoting a sustainable and livable city for present and future generations.</p>

            <p>In addition to environmental management, the agency also focuses on waste management and pollution control. It coordinates waste collection and disposal systems, aiming to minimize the environmental impact of waste generation and promote recycling and proper waste disposal practices. The agency also monitors air and water quality, implementing measures to reduce pollution levels and protect the health of the population. Through its dedicated efforts, the Environmental Agency of Jayapura City plays a crucial role in safeguarding the environment and enhancing the quality of life for the residents of the city.</p>',

            'konten_singkat'    => 'Berikut adalah enam langkah yang dapat diikuti untuk mengadakan acara penanaman pohon yang sukses',

            'status'            => 'Publish',
        ]);


    }
}
