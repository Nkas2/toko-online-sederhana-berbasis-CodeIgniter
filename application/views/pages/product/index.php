<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Product</span>
                    <a href="<?= base_url('product/create') ?>" class="btn btn-sm btn-secondary">Tambah</a>
                    <div class="float-right">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm text-center"
                                    placeholder="Cari" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eraser"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stock</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0 ; foreach($content as $row) : $no++; ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td>
                                    <p>
                                        <img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.jpg") ?>"
                                            alt="" height="50" />
                                        <?= $row->product_title ?>
                                    </p>
                                </td>
                                <td>
                                    <span class="badge badge-primary"><i class="fas fa-tags"></i>
                                        <?= $row->category_title ?></span>
                                </td>
                                <td>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
                                <td><?= $row->is_avaiable ? 'Tersedia' : 'Kosong' ?></td>
                                <td>
                                    <form action="#">
                                        <a href="#">
                                            <button class="btn btn-sm">
                                                <i class="fas fa-edit text-info"></i>
                                            </button>
                                        </a>
                                        <button class="btn btn-sm" type="submit"
                                            onclick="return confirm('Apakah Kamu Yakin?')">
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <?= $pagination ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>