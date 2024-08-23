@extends('template_admin.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Sekolah</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>320</h3>
                            <p>Siswa Terdaftar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lebih Banyak <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>45<sup style="font-size: 20px">%</sup></h3>
                            <p>Kehadiran</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calendar"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lebih Banyak <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>120</h3>
                            <p>Jumlah Kelas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-home"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lebih Banyak <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>78</h3>
                            <p>Guru</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="#" class="small-box-footer">Lebih Banyak <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Statistik
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#attendance-chart" data-toggle="tab">Kehadiran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#performance-chart" data-toggle="tab">Prestasi</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Attendance -->
                                <div class="chart tab-pane active" id="attendance-chart"
                                     style="position: relative; height: 300px;">
                                    <canvas id="attendance-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane" id="performance-chart" style="position: relative; height: 300px;">
                                    <canvas id="performance-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header">
                            <h3 class="card-title">Chat Langsung</h3>

                            <div class="card-tools">
                                <span title="3 Pesan Baru" class="badge badge-primary">3</span>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" title="Kontak" data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">Kepala Sekolah</span>
                                        <span class="direct-chat-timestamp float-right">24 Agustus 9:00 am</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        Selamat pagi, semua siap untuk kegiatan hari ini?
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">Guru Bahasa Inggris</span>
                                        <span class="direct-chat-timestamp float-left">24 Agustus 9:15 am</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        Ya, siap. Kegiatan hari ini sudah dipersiapkan dengan baik.
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- More messages -->
                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            <div class="direct-chat-contacts">
                                <ul class="contacts-list">
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
                                                    John Doe
                                                    <small class="contacts-list-date float-right">2/28/2025</small>
                                                </span>
                                                <span class="contacts-list-msg">Bagaimana dengan tugas minggu depan?</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <!-- More contacts -->
                                </ul>
                                <!-- /.contacts-list -->
                            </div>
                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" name="message" placeholder="Ketik Pesan ..." class="form-control">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-primary">Kirim</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->

                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                Daftar Tugas
                            </h3>

                            <div class="card-tools">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="todo-list" data-widget="todo-list">
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle">
                                      <i class="fas fa-ellipsis-v"></i>
                                      <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <!-- checkbox -->
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" id="todoCheck1">
                                        <label for="todoCheck1"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span class="text">Persiapkan materi pelajaran</span>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </li>
                                <!-- More tasks -->
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah Tugas</button>
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
                <!-- right col -->
                <section class="col-lg-5 connectedSortable">
                    <!-- Info Boxes Style 2 -->
                    <div class="info-boxes">
                        <!-- Info box 1 -->
                        <div class="info-box bg-primary">
                            <span class="info-box-icon"><i class="fas fa-school"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Sekolah</span>
                                <span class="info-box-number">20</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <!-- Info box 2 -->
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="fas fa-book"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Buku</span>
                                <span class="info-box-number">5000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <!-- Info box 3 -->
                        <div class="info-box bg-warning">
                            <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Siswa Baru</span>
                                <span class="info-box-number">150</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                        <!-- Info box 4 -->
                        <div class="info-box bg-danger">
                            <span class="info-box-icon"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Pengunjung Website</span>
                                <span class="info-box-number">1200</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.info-boxes -->

                    <!-- Calendar -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                Kalender
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="calendar"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection
