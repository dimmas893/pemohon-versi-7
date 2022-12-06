@extends('layouts.admin.template_admin')
@section('content')

<div id="demo"></div>
    <div class="card" id="app">

<form action="/pemohon/store/akhir" method="post" enctype="multipart/form-data">
 @csrf
    <div class="tabControl">
        <div class="tab-content" id="pills-tabContent">


            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="my-2">
                    <div class="container">
                        <ul class="nav nav-pills nav-fill mb-2" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab">Pilih Layanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab">Persyaratan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab">Pratinjau</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-4 mb-4 mr-3 ml-3">
                        <select class="form-control js-example-basic-multiple" name="id_layanan" id="id_layanan">
                            @foreach($layanan as $p)
                                <option value="{{ $p->id }}"> {{ $p->nama_layanan }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-right mr-3">
                        <a class="btn btn-primary" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab">Selanjutnya</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade my-2" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container">
                    <ul class="nav nav-pills nav-fill mb-2" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab">Pilih Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab">Persyaratan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab">Pratinjau</a>
                        </li>
                    </ul>
                </div>

               <div class="card">
                    <div class="card-header text-center"><b>Isi Formulir</b></div>
                    <div class="card-body">
                        <div class="my-2">
                            <label for="nama_pemohon">Nama Pemohon</label>
                            <div class="">
                                <select class="form-control js-example-basic-multiple" width="100%" name="id_pemohon" id="pemohon_id">
                                    @foreach($pemohon as $p)
                                        <option value="{{ $p->id }}"> {{ $p->nama_pemohon }} </option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                        <div class="my-2">
                            <label for="nik">Nik</label>
                            {{-- <input type="hidden" name="" v-model="" /> --}}
                            <input type="text" name="nik" class="form-control" v-model="infoPemohon.nik" placeholder="Masukan NIK">
                        </div>
                        <div class="my-2">
                          <label for="no_kk">No KK</label>
                          <input type="text" name="no_kk" class="form-control" v-model="infoPemohon.no_kk" placeholder="Masukan No KK">
                      </div>

                        <div class="my-2">
                            <label for="alamat">Alamat</label>
                            <textarea type="text" name="alamat"class="form-control" v-model="infoPemohon.alamat" placeholder="Masukan Alamat"></textarea>
                        </div>
                        <div class="my-2">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" class="form-control" v-model="isinohp" placeholder="Masukan No HP">
                        </div>
                        <div class="my-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" v-model="isiemail" placeholder="Masukan Email">
                            </div>
                        </div>
                    <?php $p = 0 ?>

                        <div class="card-header text-center"><b>Persyaratan</b></div>
                            <div class="ml-1" v-for="item in infoLayanan">
                                <div class="row mt-4 ml-1">
                                    <b><h5>@{{ item.nama_persyaratan }}</h5></b>
                                    <input type="hidden" name="id_persyaratan{{ $p }}[]" v-model="item.id_persyaratan">
                                    <div class="col-6 my-2" v-if="item.entry_data === 1">
                                        <label class="mt-2" for="entry data">Entry Data </label>
                                        <input type="text" name="entry_data{{ $p }}[]" v-model="item.isiEntri" class="form-control"/>
                                    </div>

                                    <div class="col-6 my-2" v-if="item.upload_data === 1">
                                        <label class="mt-2" for="upload data">upload Data</label>
                                        <input type="file" name="upload_data{{ $p }}[]" v-model="item.upload" class="form-control"/>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <?php $p++ ?>
                    <div class="row">
                        <div class="col-6">
                            <div class="mt-2 ml-2">
                                <a class="btn btn-info" id="pills-profile-tab" data-toggle="pill" href="#pills-1" role="tab">Kembali</a>
                                <a class="btn btn-primary" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab">Pratinjau</a>
                            </div>
                        </div>
                    </div>
               </div>


            <div class="tab-pane fade my-2" id="pills-3" role="tabpanel" aria-labelledby="pills-contact-tab">
                {{-- <div class="card-header text-center">
                    Pilih Layanan
                </div> --}}
                <div class="container">
                    <ul class="nav nav-pills nav-fill mb-2" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab">Pilih Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab">Persyaratan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab">Pratinjau</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header text-center">
                            Pratinjau
                            {{-- <p id="demo"></p> --}}
                        </div>
                        {{-- <div class="ml-3 mt-3">
                            <label for="">Nama Layanan </label>
                        </div> --}}
                        <br>
                        <div class="ml-3 mt-3">
                            <label for="">Nama Pemohon : @{{ infoPemohon.nama_pemohon }} </label>
                        </div>
                        <div class="ml-3">
                            <label for="">Alamat : @{{ infoPemohon.alamat }} </label>
                        </div>
                        <div class="ml-3">
                            <label for="">Email :  @{{isiemail }}</label>
                        </div>
                        <div class="ml-3">
                            <label for="">No KK : @{{ infoPemohon.no_kk }} </label>
                        </div>
                        <div class="ml-3">
                            <label for="">NIK : @{{infoPemohon.nik}}</label>
                        </div>

                    </div>
                        <div class="card mt-3">
                            <div class="card-header text-center"> <b>Persyaratan</b></div>
                            <div class="card-body">
                                <div v-for="item in infoLayanan" class="row mt-4 ml-2">
                                    <div class="col-12 ml-2">
                                        <label for=""><h5>@{{ item.nama_persyaratan }}</h5></label>
                                    </div>

                                    <div class="col-6 my-2 ml-2" v-if="item.entry_data === 1">
                                        <label class="mt-2" for="entry data">Entry Data</label>
                                        <p> @{{ item.isiEntri }}</p>
                                        {{-- <input type="text" name="entry_data[]" v-model="item.isiEntri" class="form-control"/> --}}
                                    </div>

                                    <div class="col-6 my-2 ml-2" v-if="item.upload_data === 1">
                                        <label class="mt-2" for="upload data">Upload Data</label>
                                        <p> @{{ item.upload  }}</p>
                                        {{-- <p> @{{ getPotong(item.upload) }}</p> --}}
                                        {{-- <input type="file" name="upload_data[]" class="form-control"/> --}}
                                    </div>
                                    <div class="col-12">
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-6">
                            <div class="mt-2 ml-2">
                                <a class="btn btn-info" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab">Kembali</a>
                                <input type="submit" class="btn btn-primary" value="Simpans" />
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </div>



</form>

</div>
@endsection



@section('js')

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>
<script>

// let text = "Hello world!";
// let result = text.substring(2);

// document.getElementById("demo").innerHTML = result;
</script>
    <script>

        // $(document).ready(function() {
        //     $('.js-example-basic-multiple').select2();
        // });

        $(document).ready(function() {
    $('.js-example-basic-single').select2({ width: '100%' });
});

        (function ($) {
            $('.btnNext').click(function() {
        $('.nav-pills .active').parent().next('li').find('a').trigger('click');
    });

    $('.btnPrevious').click(function() {
        $('.nav-pills .active').parent().prev('li').find('a').trigger('click');
    });
            var _token = '<?php echo csrf_token() ?>';
            $(document).ready(function() {
                var app = new Vue({
                    el: '#app',
                    data: {
                        isinik:'',
                        isinokk:'',
                        isinamapemohon:'',
                        isialamat:'',
                        isinohp:'',
                        isiemail:'',
                        layanan: '',
                        nik: '',
                        nama_pemohon: '',
                        id_pemohon: '',
                        no_kk: '',
                        alamat: '',
                        infoLayanan: [],
                        namalayanan: [],
                            infoPemohon:{
                                id:'',
                                nik:'',
                                no_kk:'',
                                alamat:'',
                                nama_pemohon:'',
                            }
                    },
                    watch: {
                        'layanan': function() {
                            if(this.layanan) {
                                this.getInfoLayanan(),
                                this.getnamaLayanan()
                            }
                        },
                        'infoPemohon.id': function() {
                            if(this.infoPemohon){
                                this.getInfoPemohon()
                            }
                        },

                    },


                    // awal mounted
                    mounted:function(){
                        $('#id_layanan').select2({
                            witdh: '100%'
                        }).on('change' , () => {
                            this.layanan = $('#id_layanan').val();
                        });
                        $('#pemohon_id').select2({
                            witdh: '100%'
                        }).on('change' , () => {
                            this.infoPemohon.id = $('#pemohon_id').val();
                        });
                    },
                    // akhir mounted

                    //awal method
                    methods: {

                        getInfoLayanan() {
                            this.$http.get(`/infoLayanan/${this.layanan}`)
                                .then((response) =>{
                                    this.infoLayanan = response.data
                                })
                        },
                        getnamaLayanan() {
                            this.$http.get(`/namaLayanan/${this.layanan}`)
                                .then((response) => {
                                    this.namalayanan = response.data
                                })
                        },
                        getInfoPemohon() {
                            this.$http.get(`/infoPemohon/${this.infoPemohon.id}`)
                                .then((response) => {
                                    this.infoPemohon = response.data
                                })
                        },
                        getPotong(value) {
                            return value.substring(2)
                        },
                    },
                    //akhir method

                });
            });
        })(jQuery);
    </script>
    <style>
    .select2-container{
    width: 100%!important;
    }
    .select2-search--dropdown .select2-search__field {
    width: 98%;
    }
    </style>
@endsection
