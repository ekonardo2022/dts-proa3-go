<div class="col-md-12">
   <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Semua Berkas</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="/pages/widgets.html" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
                <!-- /.card-tools -->
   </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Berkas</th>
                    <th>Nama Paket</th>
                    <th>Tgl. Upload</th>
                    <th>Status</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($dokumen as $key => $value) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $value['no_arsip']; ?></td>
                      <td><?= $value['nama']; ?></td>
                      <td><?= $value['tgl_upload']; ?></td>
                      <td><?= $value['ket']; ?></td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihat">Berkas</button>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihat">Edit</button>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihat">Hapus</button>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    <!-- Modal Lihat -->
      <div class="modal fade" id="lihat">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><?= $value['nama']; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <table class="table table-bordered table-striped" >
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Nama Berkas</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Surat Tugas Pokja</td>
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Berita Acara Review</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Jadwal Pelaksanaan Tender</td>
                   
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Berita Acara Penjelasan</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Berita Acara</td>
                   
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Berita Acara Hasil Evaluasi</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Berita Acara Pembuktian</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Berita Acara Negosiasi</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Berita Acara Hasil Pemilihan</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Berita Acara Penetapan Pemenang</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Berita Acara Masa Sanggah</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Nota Dinas Pokja ke Kabag</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr><tr>
                    <td>13</td>
                    <td>Surat Kabag ke Pokja</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                  </tr><tr>
                    <td>14</td>
                    <td>Berita Acara Pengumuman</td>
                    
                    <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Pilihan</button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                       <span class="sr-only">Toggle Dropdown</span>
                       <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Print</a>
                         <a class="dropdown-item" href="#">View</a>
                         <a class="dropdown-item" href="#">Download</a>
                        </div>
                     </button>
                    </div>
                    </td>
                </tbody>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Close</button> -->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
