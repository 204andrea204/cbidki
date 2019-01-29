<<<<<<< HEAD
=======
@extends('layouts.layouts-admin')
@section('title')
Admin - Korwil Member
@endsection
@section('content')

  <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="adminpro-order-form" class="adminpro-form" method="POST" action="{{url('korwil2/save')}}" enctype="multipart/form-data">
                                @csrf
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Korwil Member<span class="table-project-n"></span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="No" style="text-align: center;">No</th>
                                                    <th data-field="nama" style="text-align: center;">Nama</th>
                                                    <th data-field="idkorwil" style="text-align: center;">ID Korwil</th>
                                                    <th data-field="kode" style="text-align: center;">Kode</th>
                                                    <th data-field="logo" style="text-align: center;">Logo</th>
                                                    <th colspan="2" style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $korwil2 = \App\Korwilmember::all();
                                                $korwil = \App\Korwil::all();  
                                                ?>
                                                @foreach ($korwil2 as $n)
                                                <tr>
                                                    <td style="text-align: center;">{{$i++}}</td>
                                                    <td style="text-align: center;">{{$n->nama}}</td>
                                                @foreach ($korwil as $d)
                                                    <td style="text-align: center;">{{$d->nama}}</td>
                                                @endforeach
                                                    <td style="text-align: center;">{{$n->kode}}</td>
                                                    <td class="datatable-ct"><img src="{{ url('images/'.$n->logo) }}" style="width: 70px; height: 70px"></td>
                                                    <td class="datatable-ct"><a href="{{url('korwil2/edit/'.$n->id)}}"><i class="fa fa-pen"></i></a>
                                                    </td>
                                                    <td class="datatable-ct"><a href="{{url('korwil2/delete/'.$n->id)}}"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-12">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                    <center>
                                        <label>Tambah Data</label>
                                        </center>
                                    <div class="row">
                                        <br>
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Pilih Korwil Disini</p>
                                            </div>
                                        </div>
                                        <?php
                                        $korwil = \App\Korwil::all();  
                                        ?>
                                        <div class="col-lg-8">
                                            <div class="login-select">
                                                <select class="form-control" name="idkorwil">
                                                   <option selected>Pilih</option>
                                                   @foreach($korwil as $n)
                                                   <option value="{{$n->id}}">{{$n->nama}}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Nama</p>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <input class="form-control" cols="30" rows="10" name="nama">
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Kode</p>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <input class="form-control" cols="30" rows="10" name="kode">
                                            </div>
                                    </div>
                                      <center>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <br>
                                          <img src="{{asset('images/no-image.png')}}" alt="Nature" class="responsive" id="blah1" style="width: 200px;height: 200px;">
                                          <center>
                                            <div class="login-input-head">
                                                <p>Logo</p>
                                            </div>
                                        </center>
                                    </div>
                                </center>
                            </div>
                            <center>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <input type="file" id="inputCity" name="logo" onchange="readURL1(this);">
                            </div>
                        </div>
                        </center>
                        <center>
                        <div class="form-row">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    </center>
                </form>
            </div>
        </div>
            <script type="text/javascript">
 function readURL1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah1')
      .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
@endsection
>>>>>>> 1da8b43911a06e64fcf09cac61aaf9a545f0ab5f
