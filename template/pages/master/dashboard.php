<div class="container">
    <div class="jumbotron">
        <h1>Selamat Datang</h1>
        <p>Pengertian Logistik
            adalah serangkaian proses yang meliputi kegiatan perencanaan, pelaksanaan, hingga pengawasan terhadap suatu
            proses perpindahan baik barang/jasa, energi ataupun sumber daya yang lain dari tempat awal menuju tempat
            tujuan. Logistik juga merupakan seni mengirim barang secara modern, yang mana terdapat tahapan serta fungsi
            yang berguna untuk mencapai tujuan tertentu.
            Secara umum atau definisi logistik adalah sebuah ilmu yang mencakup beberapa hal seperti penyimpanan,
            pemeliharaan, penyaluran dan juga penghapusan pada laat dan barang tertentu. Selain itu juga terdapat juga
            penghapusan barang atau jasa yang sudah tidak layak guna. Secara umum logistik ini memiliki tujuan untuk
            membuat pengiriman barang menjadi lebih efektif.
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya</a></p>
    </div>
    <div class="col-sm-12 col-md-12 col-xs-12">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <fieldset>
                        <legend>Category Logistik</legend>
                        {% for gambar in daftar_gambar %}
                        <div class="col-xs-6 col-md-4">
                            <a href="#" class="thumbnail">
                                <img src="{{ gambar }}" alt="">
                            </a>
                        </div>
                        {% endfor %}
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>