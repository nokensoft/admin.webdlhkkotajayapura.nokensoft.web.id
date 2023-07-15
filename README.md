# admin.webdlhkkotajayapura.nokensoft.web.id
Admin Website Dinas Lingkungan Hidup Kota Jayapura


## Whimsical

https://whimsical.com/website-dlhk-SDNZ9SKhoZtAjwBVR3quWJ

## Faker docs

https://github.com/fzaninotto/Faker

## Artisan Commands

Buat model dengan controller, resources, factory, seeder, migration

```
    php artisan make:model NamaModel -crfsm
```

## HAK AKSES

ADMIN
Email       : admin.dlhk@jayapurakota.go.id
Password    : admin.dlhk@jayapurakota.go.id

AUTHOR
Email       : editor.dlhk@jayapurakota.go.id
Password    : editor.dlhk@jayapurakota.go.id

EDITOR
Email       : author.dlhk@jayapurakota.go.id
Password    : author.dlhk@jayapurakota.go.id

SUPERVISOR
Email       : supervisor.dlhk@jayapurakota.go.id
Password    : supervisor.dlhk@jayapurakota.go.id

LOGIN PAGE : https://dlhk.jayapurakota.go.id/login

MAIN PAGE : https://dlhk.jayapurakota.go.id/


## NOTES for Johan
- [x]  🏷️ dasbor > informasi lingkungan > tambahkan author / penulis :white_check_mark: 

- [x] 🏷️ dasbor > informasi lingkungan > buat slug jadi unique :white_check_mark: 
- [x] 🏷️ dasbor > pindahkan controller BeritaController dan KategoriController ke dalam folder 'dasbor' dan hapus folder 'author' :white_check_mark: 

- [x] 🏷️ dasbor > pengguna > buat slug pengguna unique :white_check_mark: 
- [x] 🏷️ dasbor > pengguna > bisa ubah data sendiri, jika email / username / kata sandi diubah : pada saat proses update redirect logout/keluar ke halaman login

- [x] 🏷️ dasbor > link terkait > ubah gambar ada error :white_check_mark: 
- [ ] 🏷️ dasbor > ...
- [ ] 🏷️ dasbor > ...

## NOTES for SAMUEL
🏷️ visitor > berita > saat pencarian berita tidak ditemukan, tampilkan alert/teks berita tidak ditemukan
🏷️ visitor > berita > kategori : munculkan berita per kategori pada link 'berita/kategori'


## API FORMAT
```
[
    {
        "berita" : {
            "jumlah" : {
                "all" : 17,
                "publish" : 12,
                "draft" : 3,
                "trash" : 2,
            }
        }
    },
    {
        "halaman" : {
            "jumlah" : {
                "all" : 17,
                "publish" : 12,
                "draft" : 3,
                "trash" : 2,
            }
        }
    }
]
```