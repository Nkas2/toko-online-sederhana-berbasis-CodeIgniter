<!-- main -->
<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <!-- pencarian dan -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            Kategori: <strong>Semua Kategori</strong>
                            <span class="float-right"> Urutkan Harga: <a href="#"
                                    class="badge badge-primary">Termurah</a> | <a href="#"
                                    class="badge badge-primary">Termahal</a> </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product -->
            <div class="row">
                <?php foreach($content as $row) :?>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="<?= $row->image? base_url("images/product/$row->image") : base_url("images/product/default.jpg") ?>"
                            alt="" class="card-image-top" height="300" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row->product_title ?></h5>
                            <p class="card-text"><strong>Rp<?= number_format($row->price, 0, ',', '.')?></strong></p>
                            <p class="card-text"><?= $row->description ?></p>
                            <a href="#" class="badge badge-primary"><i class="fas fa-tags"></i> Kategori</a>
                        </div>
                        <div class="card-footer">
                            <form action="">
                                <div class="input-group">
                                    <input type="number" class="form-control" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary">Add to cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <!-- Kateori -->
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">Pencarian</div>
                        <div class="card-body">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary">cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">Kategori</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Semua Kategori</li>
                            <li class="list-group-item">Kategori 1</li>
                            <li class="list-group-item">Kategori 2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>