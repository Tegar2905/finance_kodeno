@extends('layouts.main')
@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Header (Page header) -->
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                {{-- @include('layouts.dashboard') --}}
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $invc }}</h3>
                
                                    <p>Invoice</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                
                                    <p>BAST</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-archive"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-12">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $invcvol }}</h3>
                
                                    <p>Project</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                                <i class="fas fa-tasks"></i> Project
                        </div>
                        <div class="card-body">
                            tes
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
                
            </section>
            <!-- /.content -->
        </div>
        
        <!-- /.content-wrapper -->

        @endsection