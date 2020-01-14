<?php

class m191202_040805_create_hak_akses_config_belumada extends CDbMigration
{

    public function safeUp()
    {

        $sql = "INSERT IGNORE INTO `AuthItem` (name, type, description) VALUES (:nama, :tipe, :deskripsi)";

        $params = [
            [':nama' => 'configTagBarang', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Tag Barang'],
            [':nama' => 'configDiskon', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Diskon Barang'],
            [':nama' => 'configKasBank', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Kas/Bank'],
            [':nama' => 'configJenisTransaksi', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Jenis Transaksi'],
            [':nama' => 'configKategoriPengeluaran', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Kategori Pengeluaran'],
            [':nama' => 'configKategoriPenerimaan', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Kategori Penerimaan'],
            [':nama' => 'configItemPengeluaran', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Item Pengeluaran'],
            [':nama' => 'configItemPenerimaan', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Item Penerimaan'],
            [':nama' => 'configUser', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Pengguna Aplikasi'],
            [':nama' => 'configUserAssignment', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Hak Akses User'],
            [':nama' => 'configApp', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Aplikasi'],
            [':nama' => 'configMember', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Membership'],
            [':nama' => 'configProfil', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Profil'],
            [':nama' => 'configDevice', ':tipe' => 1, ':deskripsi' => 'Konfigurasi Device'],
            [':nama' => 'transaksiSalesOrder', ':tipe' => 1, ':deskripsi' => 'Transaksi Pesanan Penjualan'],
            [':nama' => 'kasirAdmin', ':tipe' => 1, ':deskripsi' => 'Transaksi Admin Kasir'],
            [':nama' => 'transaksiPengeluaran', ':tipe' => 1, ':deskripsi' => 'Transaksi Kas Keluar'],
            [':nama' => 'transaksiPenerimaan', ':tipe' => 1, ':deskripsi' => 'Transaksi Kas Masuk'],
            [':nama' => 'transaksiDataHarian', ':tipe' => 1, ':deskripsi' => 'Input Saldo Akhir Harian'],
            [':nama' => 'laporanSemua', ':tipe' => 1, ':deskripsi' => 'Semua Laporan'],
            [':nama' => 'toolsSemua', ':tipe' => 1, ':deskripsi' => 'Semua Tools'],
        ];
        foreach ($params as $param) {
            $this->execute($sql, $param);
        }

        $sql    = "INSERT IGNORE INTO `AuthItemChild` (parent, child) VALUES (:parent, :child)";
        $params = [
            [':parent' => 'configBarang', ':child' => 'barang.assigndefaultsup'],
            [':parent' => 'configBarang', ':child' => 'barang.hapus'],
            [':parent' => 'configBarang', ':child' => 'barang.index'],
            [':parent' => 'configBarang', ':child' => 'barang.listbukansupplier'],
            [':parent' => 'configBarang', ':child' => 'barang.listhargajualmulti'],
            [':parent' => 'configBarang', ':child' => 'barang.removesupplier'],
            [':parent' => 'configBarang', ':child' => 'barang.tambah'],
            [':parent' => 'configBarang', ':child' => 'barang.tambahsupplier'],
            [':parent' => 'configBarang', ':child' => 'barang.ubah'],
            [':parent' => 'configBarang', ':child' => 'barang.updatehargajual'],
            [':parent' => 'configBarang', ':child' => 'barang.updatehargajualmulti'],
            [':parent' => 'configBarang', ':child' => 'barang.updaterrp'],
            [':parent' => 'configBarang', ':child' => 'barang.updatetags'],
            [':parent' => 'configBarang', ':child' => 'barang.view'],
            [':parent' => 'configTagBarang', ':child' => 'tag.hapus'],
            [':parent' => 'configTagBarang', ':child' => 'tag.index'],
            [':parent' => 'configTagBarang', ':child' => 'tag.tambah'],
            [':parent' => 'configTagBarang', ':child' => 'tag.ubah'],
            [':parent' => 'configTagBarang', ':child' => 'tag.view'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.autoexpire'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.caribarang'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.getdatabarang'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.hapus'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.index'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.tambah'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.ubah'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.updatestatus'],
            [':parent' => 'configDiskon', ':child' => 'diskonbarang.view'],
            [':parent' => 'configKasBank', ':child' => 'kasbank.hapus'],
            [':parent' => 'configKasBank', ':child' => 'kasbank.index'],
            [':parent' => 'configKasBank', ':child' => 'kasbank.tambah'],
            [':parent' => 'configKasBank', ':child' => 'kasbank.ubah'],
            [':parent' => 'configKasBank', ':child' => 'kasbank.view'],
            [':parent' => 'configJenisTransaksi', ':child' => 'jenistransaksi.hapus'],
            [':parent' => 'configJenisTransaksi', ':child' => 'jenistransaksi.index'],
            [':parent' => 'configJenisTransaksi', ':child' => 'jenistransaksi.tambah'],
            [':parent' => 'configJenisTransaksi', ':child' => 'jenistransaksi.ubah'],
            [':parent' => 'configJenisTransaksi', ':child' => 'jenistransaksi.view'],
            [':parent' => 'configKategoriPengeluaran', ':child' => 'kategoripengeluaran.hapus'],
            [':parent' => 'configKategoriPengeluaran', ':child' => 'kategoripengeluaran.index'],
            [':parent' => 'configKategoriPengeluaran', ':child' => 'kategoripengeluaran.tambah'],
            [':parent' => 'configKategoriPengeluaran', ':child' => 'kategoripengeluaran.ubah'],
            [':parent' => 'configKategoriPengeluaran', ':child' => 'kategoripengeluaran.view'],
            [':parent' => 'configKategoriPenerimaan', ':child' => 'kategoripenerimaan.hapus'],
            [':parent' => 'configKategoriPenerimaan', ':child' => 'kategoripenerimaan.index'],
            [':parent' => 'configKategoriPenerimaan', ':child' => 'kategoripenerimaan.tambah'],
            [':parent' => 'configKategoriPenerimaan', ':child' => 'kategoripenerimaan.ubah'],
            [':parent' => 'configKategoriPenerimaan', ':child' => 'kategoripenerimaan.view'],
            [':parent' => 'configItemPengeluaran', ':child' => 'itempengeluaran.hapus'],
            [':parent' => 'configItemPengeluaran', ':child' => 'itempengeluaran.index'],
            [':parent' => 'configItemPengeluaran', ':child' => 'itempengeluaran.tambah'],
            [':parent' => 'configItemPengeluaran', ':child' => 'itempengeluaran.ubah'],
            [':parent' => 'configItemPengeluaran', ':child' => 'itempengeluaran.view'],
            [':parent' => 'configItemPenerimaan', ':child' => 'itempenerimaan.hapus'],
            [':parent' => 'configItemPenerimaan', ':child' => 'itempenerimaan.index'],
            [':parent' => 'configItemPenerimaan', ':child' => 'itempenerimaan.tambah'],
            [':parent' => 'configItemPenerimaan', ':child' => 'itempenerimaan.ubah'],
            [':parent' => 'configItemPenerimaan', ':child' => 'itempenerimaan.view'],
            [':parent' => 'configUser', ':child' => 'user.hapus'],
            [':parent' => 'configUser', ':child' => 'user.index'],
            [':parent' => 'configUser', ':child' => 'user.tambah'],
            [':parent' => 'configUser', ':child' => 'user.ubah'],
            [':parent' => 'configUser', ':child' => 'user.view'],
            [':parent' => 'configUserAssignment', ':child' => 'user.assign'],
            [':parent' => 'configUserAssignment', ':child' => 'user.assignment'],
            [':parent' => 'configUserAssignment', ':child' => 'user.revoke'],
            [':parent' => 'configApp', ':child' => 'config.hapus'],
            [':parent' => 'configApp', ':child' => 'config.index'],
            [':parent' => 'configApp', ':child' => 'config.tambah'],
            [':parent' => 'configApp', ':child' => 'config.ubah'],
            [':parent' => 'configApp', ':child' => 'config.updatenilai'],
            [':parent' => 'configApp', ':child' => 'config.view'],
            [':parent' => 'configMember', ':child' => 'member.hapus'],
            [':parent' => 'configMember', ':child' => 'member.index'],
            [':parent' => 'configMember', ':child' => 'member.tambah'],
            [':parent' => 'configMember', ':child' => 'member.ubah'],
            [':parent' => 'configMember', ':child' => 'member.view'],
            [':parent' => 'configProfil', ':child' => 'profil.hapus'],
            [':parent' => 'configProfil', ':child' => 'profil.index'],
            [':parent' => 'configProfil', ':child' => 'profil.tambah'],
            [':parent' => 'configProfil', ':child' => 'profil.ubah'],
            [':parent' => 'configProfil', ':child' => 'profil.view'],
            [':parent' => 'configDevice', ':child' => 'device.hapus'],
            [':parent' => 'configDevice', ':child' => 'device.index'],
            [':parent' => 'configDevice', ':child' => 'device.tambah'],
            [':parent' => 'configDevice', ':child' => 'device.ubah'],
            [':parent' => 'configDevice', ':child' => 'device.view'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.ambilprofil'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.batal'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.hapusdetail'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.index'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.pesan'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.printstruk'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.tambah'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.tambahdetail'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.total'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.ubah'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.updatestatus'],
            [':parent' => 'transaksiSalesOrder', ':child' => 'salesorder.view'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.ambilprofil'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.caribarang'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.caribyref'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.getbarang'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.hapus'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.hapusdetail'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.import'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.index'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.printpembelian'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.retur'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.simpanpembelian'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.tambah'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.tambahbarang'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.tambahbarangbaru'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.total'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.ubah'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.updatehjmulti'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.updateqty'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.updaterak'],
            [':parent' => 'transaksiPembelian', ':child' => 'pembelian.view'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.ambilprofil'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.exportcsv'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.hapus'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.hapusdetail'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.import'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.index'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.poin'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.printdraftinvoice'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.printinvoice'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.printnota'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.printstruk'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.simpanpenjualan'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.tambah'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.tambahdetail'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.total'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.ubah'],
            [':parent' => 'transaksiPenjualan', ':child' => 'penjualan.view'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.ambilprofil'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.caribyref'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.hapus'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.hapusdetail'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.import'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.index'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.printreturpenjualan'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.simpan'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.tambah'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.tambahdetail'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.total'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.ubah'],
            [':parent' => 'transaksiReturPenjualan', ':child' => 'returpenjualan.view'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.gantiinput'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.gantirak'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.hapus'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.hapusdetail'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.index'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.inputqtymanual'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.scanbarcode'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.setinaktif'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.setinaktifall'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.setnol'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.setnolall'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.simpanso'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.tambah'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.tambahdetail'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.ubah'],
            [':parent' => 'transaksiSO', ':child' => 'stockopname.view'],
            [':parent' => 'kasirAdmin', ':child' => 'kasir.buka'],
            [':parent' => 'kasirAdmin', ':child' => 'kasir.cetak'],
            [':parent' => 'kasirAdmin', ':child' => 'kasir.hapus'],
            [':parent' => 'kasirAdmin', ':child' => 'kasir.index'],
            [':parent' => 'kasirAdmin', ':child' => 'kasir.opencashdrawer'],
            [':parent' => 'kasirAdmin', ':child' => 'kasir.rekap'],
            [':parent' => 'kasirAdmin', ':child' => 'kasir.tutup'],
            [':parent' => 'kasirAdmin', ':child' => 'kasir.view'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.hapus'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.hapusdetail'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.index'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.pilihdokumen'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.pilihitem'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.pilihprofil'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.proses'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.tambah'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.tambahdetail'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.ubah'],
            [':parent' => 'transaksiPengeluaran', ':child' => 'pengeluaran.view'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.caridokprofil'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.hapus'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.hapusdetail'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.index'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.pilihdokumen'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.pilihitem'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.pilihprofil'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.proses'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.tambah'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.tambahdetail'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.ubah'],
            [':parent' => 'transaksiPenerimaan', ':child' => 'penerimaan.view'],
            [':parent' => 'transaksiDataHarian', ':child' => 'laporanharian.cari'],
            [':parent' => 'transaksiDataHarian', ':child' => 'laporanharian.index'],
            [':parent' => 'laporanSemua', ':child' => 'report.caribarang'],
            [':parent' => 'laporanSemua', ':child' => 'report.daftarbarang'],
            [':parent' => 'laporanSemua', ':child' => 'report.diskon'],
            [':parent' => 'laporanSemua', ':child' => 'report.hariandetail'],
            [':parent' => 'laporanSemua', ':child' => 'report.hariandetail2'],
            [':parent' => 'laporanSemua', ':child' => 'report.harianrekap'],
            [':parent' => 'laporanSemua', ':child' => 'report.hutangpiutang'],
            [':parent' => 'laporanSemua', ':child' => 'report.index'],
            [':parent' => 'laporanSemua', ':child' => 'report.kartustok'],
            [':parent' => 'laporanSemua', ':child' => 'report.pembelian'],
            [':parent' => 'laporanSemua', ':child' => 'report.pengeluaranpenerimaan'],
            [':parent' => 'laporanSemua', ':child' => 'report.penjualan'],
            [':parent' => 'laporanSemua', ':child' => 'report.penjualanperkategori'],
            [':parent' => 'laporanSemua', ':child' => 'report.penjualanperkategoricsv'],
            [':parent' => 'laporanSemua', ':child' => 'report.penjualansalesorder'],
            [':parent' => 'laporanSemua', ':child' => 'report.pilihitemkeu'],
            [':parent' => 'laporanSemua', ':child' => 'report.pilihprofil'],
            [':parent' => 'laporanSemua', ':child' => 'report.pilihuser'],
            [':parent' => 'laporanSemua', ':child' => 'report.pls'],
            [':parent' => 'laporanSemua', ':child' => 'report.poinmember'],
            [':parent' => 'laporanSemua', ':child' => 'report.poinmemberpdf'],
            [':parent' => 'laporanSemua', ':child' => 'report.printdaftarbarang'],
            [':parent' => 'laporanSemua', ':child' => 'report.printharian'],
            [':parent' => 'laporanSemua', ':child' => 'report.printharian2'],
            [':parent' => 'laporanSemua', ':child' => 'report.printhutangpiutang'],
            [':parent' => 'laporanSemua', ':child' => 'report.printpengeluaranpenerimaan'],
            [':parent' => 'laporanSemua', ':child' => 'report.printpenjualan'],
            [':parent' => 'laporanSemua', ':child' => 'report.printpenjualanso'],
            [':parent' => 'laporanSemua', ':child' => 'report.printpls'],
            [':parent' => 'laporanSemua', ':child' => 'report.printumurbarang'],
            [':parent' => 'laporanSemua', ':child' => 'report.rekapdiskon'],
            [':parent' => 'laporanSemua', ':child' => 'report.rekaphutangpiutang'],
            [':parent' => 'laporanSemua', ':child' => 'report.rekappenjualan'],
            [':parent' => 'laporanSemua', ':child' => 'report.returpembelian'],
            [':parent' => 'laporanSemua', ':child' => 'report.toprank'],
            [':parent' => 'laporanSemua', ':child' => 'report.toprankpdf'],
            [':parent' => 'laporanSemua', ':child' => 'report.totalstok'],
            [':parent' => 'laporanSemua', ':child' => 'report.umurbarang'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cekharga.caribarang'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cekharga.cekbarcode'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cekharga.index'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetakformso.getkategoriopt'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetakformso.index'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetakformso.pilihrak'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetaklabelrak.hapus'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetaklabelrak.hapussemua'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetaklabelrak.index'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetaklabelrak.pilihprofil'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetaklabelrak.pilihrak'],
            [':parent' => 'toolsSemua', ':child' => 'tools/cetaklabelrak.tambahkanbarang'],
            [':parent' => 'toolsSemua', ':child' => 'tools/customerdisplay.getinfo'],
            [':parent' => 'toolsSemua', ':child' => 'tools/customerdisplay.index'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.formeditsup'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.formgantikat'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.formgantirak'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.gantisup'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.index'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.seta'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.setkat'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.setna'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.setrak'],
            [':parent' => 'toolsSemua', ':child' => 'tools/editbarang.tambahsup'],
            [':parent' => 'toolsSemua', ':child' => 'tools/panelmultihj.formupdatemultihj'],
            [':parent' => 'toolsSemua', ':child' => 'tools/panelmultihj.index'],
        ];
        foreach ($params as $param) {
            $this->execute($sql, $param);
        }
    }

    public function safeDown()
    {
        echo "m191202_040805_create_hak_akses_config_belumada does not support migration down.\n";
        return false;
    }

}