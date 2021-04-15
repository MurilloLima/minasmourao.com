@extends('panel.admin.layouts.app', ['activePage' => 'panel.admin.index'])
@section('title', 'Painel')

@section('content')
<div class="content-wrapper" style="min-height: 255px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Painel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Painel v.1</li>
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
                            <h3>{{count($slider)}}</h3>

                            <p>Slider</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fa fa-sliders-h"></i>

                        </div>
                        <a href="{{ route('admin.slider.index') }}" class="small-box-footer">Mais info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{count($produtos)}}</h3>

                            <p>Produtos</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-list"></i>
                        </div>
                        <a href="{{ route('admin.produtos.index') }}" class="small-box-footer">Mais info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{count($orcamentos)}}</h3>
                            <p>Orçamentos</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon far fa-newspaper"></i>
                        </div>
                        <a href="{{ route('admin.orcamentos.index') }}" class="small-box-footer">Mais info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{count($noticias)}}</h3>
                            <p>Notícias</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-directions"></i>
                        </div>
                        <a href="{{ route('admin.noticias.index') }}" class="small-box-footer">Mais info. <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ asset('assets/portal/images/logo.png') }}" width="440" alt="">
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection