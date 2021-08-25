<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jurnal Pembelian</h1>
                    </div>
                </div>
                <!-- /.row -->
            </div>        
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 ">
                    <a href="<?= base_url('supervisor/cetakJurnalBeli'); ?>" target="_blank">
                        <button type="button" class="btn btn-block btn-success mt-1">
                            Cetak
                        </button>
                    </a>
                </div>
                <div class="col-md-4 ml-1 mt-1">
                    <form action="#" class="justify-content-end">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-md" placeholder="Cari" autofocus>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default mb-4">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <div class="card">
        <div class="card-body">
            <!-- TABEL -->
            <div class="row">
                <div class="col-lg">
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th width="400px">Barang</th>
                                    <th style="text-align: center;" width="100px">QTY</th>
                                    <th style="text-align: right;" width="100px">Harga Jual</th>
                                    <th style="text-align: center;" width="150px">Diskon</th>
                                    <th style="text-align: right;" width="100px">Subtotal</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Umbul-umbul PDIP Kemerdekaan</td>
                                    <td align="center">1</td>
                                    <td align="right">15000</td>
                                    <td align="center">-</td>
                                    <td align="right">15000</td>
                                </tr>
                                <tr>    
                                    <td>Umbul-umbul PDIP Kemerdekaan</td>
                                    <td align="center">1</td>
                                    <td align="right">15000</td>
                                    <td align="center">-</td>
                                    <td align="right">15000</td>
                                </tr>
                                <tr>
                                    <td>Umbul-umbul PDIP Kemerdekaan</td>
                                    <td align="center">1</td>
                                    <td align="right">15000</td>
                                    <td align="center">-</td>
                                    <td align="right">15000</td>
                                </tr>
                                <tr>    
                                    <td>Umbul-umbul PDIP Kemerdekaan</td>
                                    <td align="center">1</td>
                                    <td align="right">15000</td>
                                    <td align="center">-</td>
                                    <td align="right">15000</td>
                                </tr>
                                <tr>
                                    <td>Umbul-umbul PDIP Kemerdekaan</td>
                                    <td align="center">1</td>
                                    <td align="right">15000</td>
                                    <td align="center">-</td>
                                    <td align="right">15000</td>
                                </tr>
                                <tr>
                                    <td>Umbul-umbul PDIP Kemerdekaan</td>
                                    <td align="center">1</td>
                                    <td align="right">15000</td>
                                    <td align="center">-</td>
                                    <td align="right">15000</td>
                                </tr>
                                <tr>
                                    <td>Umbul-umbul PDIP Kemerdekaan</td>
                                    <td align="center">1</td>
                                    <td align="right">15000</td>
                                    <td align="center">-</td>
                                    <td align="right">15000</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END TABEL -->
        </div>    
    </div>
    <!-- END CARD -->
        
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="#">Dotcomp</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
    
</div>