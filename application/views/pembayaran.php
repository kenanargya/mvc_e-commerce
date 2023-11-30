<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="card border-0 shadow my-5">
        <div class="card-body">
          <div class="text-center mb-4">
            <h2 class="font-weight-bold">Konfirmasi Pembayaran</h2>
            <p class="lead">Lengkapi detail di bawah untuk melanjutkan.</p>
          </div>

          <!-- Total Belanja -->
          <?php
          $grand_total = 0;
          if ($keranjang = $this->cart->contents()) {
            foreach ($keranjang as $item) {
              $grand_total = $grand_total + $item['subtotal'];
            }
            echo "<h4 class='text-success'>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.') . "</h4>";
          ?>
          <hr>

          <!-- Form Pembayaran -->
          <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
            <!-- Nama Lengkap -->
            <div class="form-group">
              <label for="Nama Lengkap">Nama Lengkap</label>
              <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>

            <!-- Alamat Lengkap -->
            <div class="form-group">
              <label for="Alamat Lengkap">Alamat Lengkap</label>
              <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
            </div>

            <!-- Nomor Telepon -->
            <div class="form-group">
              <label for="No. Telepon">No. Telepon</label>
              <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
            </div>

            <!-- Jasa Pengiriman -->
            <div class="form-group">
              <label for="Jasa Pengiriman">Jasa Pengiriman</label>
              <select name="jasa" class="form-control">
                <option>JNE</option>
                <option>TIKI</option>
                <option>POS Indonesia</option>
                <option>GOJEK</option>
                <option>GRAB</option>
              </select>
            </div>

            <!-- Pilih Bank -->
            <div class="form-group">
              <label for="Pilih Bank">Pilih Bank</label>
              <select name="bank" class="form-control">
                <option>BCA - XXXXXXX</option>
                <option>BNI - XXXXXXX</option>
                <option>BRI - XXXXXXX</option>
                <option>MANDIRI - XXXXXXX</option>
              </select>
            </div>

            <!-- Tombol Pesan -->
            <button type="submit" class="btn btn-primary btn-block">Pesan Sekarang</button>
          </form>

          <?php
          } else {
            echo "<h4>Keranjang Belanja Anda masih kosong</h4>";
          }
          ?>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </
