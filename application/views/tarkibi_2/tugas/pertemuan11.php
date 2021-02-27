        <div class="container">
            <div class="row">
                <div class="mb-3">
                    <a href="<?= base_url()?>tarkibi2/tugas/<?= md5($data_latihan['id_kelas'])?>" class="btn btn-md btn-danger text-light"><i class="fa fa-times mr-1"></i>keluar</a>
                </div>
                
                <div class="col-12 p-0 mb-3">
                    <a href="javascript:void(0)" class="btn btn-md btn-block btn-success" id="allSoal">Tampilkan Semua Soal</a>
                </div>

                <input type="hidden" name="id" id="id" value="<?= $data_latihan['id']?>">

                <div class="col-12 p-0 mb-3">
                    <ul class="list-group">
                        <li class="list-group-item">Nama : <?= $peserta['nama']?></li>
                    </ul>
                </div>
                
                
                <div class="col-12 p-0" id="msg-soal-1">
                    <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Terjemahkan kedalam bahasa arab! <b>BENTUK MAJHUL (PASIF)</b></div>
                </div>

                <div class="col-12 p-0" id="msg-soal-2">
                    <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Terjemahkan kedalam bahasa arab! <b>BENTUK MA’LUM (AKTIF)</b></div>
                </div>
                
                <?php 
                    $data_soal = [
                        [
                            "no" => "1",
                            "soal" => "Buku itu disimpan dalam almari",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "2",
                            "soal" => "Mobil itu dicuri dibelakang rumah",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "3",
                            "soal" => "Al-Qur’an itu dibaca dimasjid",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "4",
                            "soal" => "2 Murid (lk) itu di hukum di depan kelas",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "5",
                            "soal" => "Giginya ahmad dicopot karena sakit",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "1",
                            "soal" => "Buku itu dibaca oleh Fatimah",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "2",
                            "soal" => "Nasi itu dimakan oleh Muhammad",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "3",
                            "soal" => "Mobil itu dinaiki oleh Murid-murid (pr)",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "4",
                            "soal" => "Masjid itu dibangun oleh Penduduk",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "5",
                            "soal" => "Buku-buku itu dijual oleh Kepala Sekolah",
                            "jawaban" => ""
                        ],
                    ];
                ?>

                <div class="col-12 mb-3 bg-light" id="isiForm">
                    <?php 
                        $benar = 0;
                        foreach ($data_soal as $i => $soal) :
                            if($soal['jawaban'] == $data_latihan['jawaban'][$i]) $benar++;
                            if($i == 5) :
                    ?>
                                <div class="col-12 p-0" id="msg-soal-3">
                                    <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Terjemahkan kedalam bahasa arab! <b>BENTUK MA’LUM (AKTIF)</b></div>
                                </div>
                            <?php endif;?>
                            <ul class="list-group soal" id="soal<?= $i+1?>">
                                <div class="form-group mt-3">
                                    <label for="" ><?= $soal['no'].". ".$soal['soal']?></label>
                                    <div class="jawaban mb-3"><b>Jawaban :</b> <br><span style="font-size: 22px"><?= $data_latihan['jawaban'][$i]?></span></div>
                                    <label for=""><b>Pembahasan</b></label>

                                    <?php 
                                        if($data_latihan['pembahasan'][$i] == "" && $data_latihan['jawaban'][$i] != $soal['jawaban']):
                                    ?>
                                        <?php $pembahasan = $soal['jawaban']?>
                                    <?php else :?>
                                        <?php $pembahasan = $data_latihan['pembahasan'][$i]?>
                                    <?php endif;?>

                                    <textarea name="pembahasan[]" id="" cols="30" rows="5" class="form-control form-control-lg"><?= $pembahasan?></textarea>
                                    <small id="msg-empty-<?= $i?>" class="form-text text-danger">
                                        <?php 
                                            if($data_latihan['jawaban'][$i] != $soal['jawaban']):
                                        ?>
                                            *jika jawaban benar tidak perlu mengisi pembahasan
                                        <?php endif;?>
                                    </small>

                                </div>
                                <div class="d-flex justify-content-center mb-3">
                                    <span>
                                        <?php if($data_latihan['periksa'] == 0) :?>
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-primary mr-3 btnSimpan" data-id="1">simpan</a> -->
                                        <?php endif;?>
                                    </span>
                                    <span>
                                        <?php if($i != 0):?>
                                            <a data-id="<?= $i+1?>" class="btn btn-md btn-success text-light left mr-3"><i class="fa fa-angle-left"></i></a>
                                        <?php endif;?>
                                        <?php if($i != COUNT($data_soal)-1) :?>
                                            <a data-id="<?= $i+1?>" class="btn btn-md btn-success mr-3 text-light right"><i class="fa fa-angle-right"></i></a>
                                        <?php endif;?>
                                    </span>
                                </div>
                            </ul>
                    <?php endforeach;?>
                    
                    <div class="d-flex mb-3">
                        <a href="javascript:void(0)" class="btn btn-md btn-block btn-primary btnSimpan">simpan</a>
                    </div>
                    
                    <div class="col-12 col-md-12 mb-3 text-center angka">
                        <span class="btn btn-md btn-secondary"><span id="angka">1</span> / <?= COUNT($data_soal)?></span>
                    </div>

                </div>                

                <div class="col-12 mb-3 bg-light">
                    <ul class="list-group">
                        <form action="<?= base_url()?>tarkibi2/add_nilai_isian" method="POST" id="formInput">
                            <input type="hidden" name="id" value="<?= $data_latihan['id']?>">
                            <div class="form-group mt-3">
                                <!-- <label for="">Jumlah Jawaban Benar</label><br>
                                <span id="benar"><?= $benar?></span>/<?= COUNT($data_soal)?> -->
                            </div>
                            <div class="form-group">
                                <label for="">Nilai</label>
                                <input type="text" name="nilai" id="nilai" class="form-control form-control-md" value="<?= $data_latihan['nilai']?>" required>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button type="button" class="btn btn-md btn-primary" id="btnNilai">Simpan Nilai</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $(".soal").hide();
    $("#soal1").show();

    $("#msg-soal-1").show();
    $("#msg-soal-2").hide();
    $("#msg-soal-3").hide();

    $('#allSoal').on('click', function() {
        var click = $(this).data('clicks');

        if (click) {
            // $('.ure_billeder').show();
            $('#allSoal').html("Tampilkan Semua Soal")
            // $(".soal").removeClass("mb-3");
            $(".soal").hide();
            $("#soal1").show();
            $(".left").show()
            $(".right").show()
            $(".angka").show()
            $("#angka").html("1")
                    
            $("#msg-soal-1").show();
            $("#msg-soal-2").hide();
            $("#msg-soal-3").hide();
        } else {
            $('#allSoal').html("Sembunyikan Semua Soal")
            $(".soal").show();
            $(".left").hide()
            $(".right").hide()
            $(".angka").hide()
            
            $("#msg-soal-1").show();
            $("#msg-soal-2").hide();
            $("#msg-soal-3").show();
        };

        $(this).data('clicks', !click); // you have to set it

    });

    $("#btnNilai").click(function(){        
        Swal.fire({
            icon: 'question',
            text: 'Yakin akan menginputkan nilai?',
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then(function (result) {
            if (result.value) {
                $("#formInput").submit();
            }
        })

        return false;
    })

    $(".right").click(function(){
        let id = $(this).data("id")
        id ++;
        $(".soal").hide();
        $("#soal"+id).show()
        $("#angka").html(id)
        
        if(id >= 6){
            $("#msg-soal-1").hide();
            $("#msg-soal-2").show();
            $("#msg-soal-3").hide();
        }
    })
    
    $(".left").click(function(){
        let id = $(this).data("id")
        id --;
        $(".soal").hide();
        $("#soal"+id).show()
        $("#angka").html(id)

        if(id <= 5){
            $("#msg-soal-1").show();
            $("#msg-soal-2").hide();
            $("#msg-soal-3").hide();
        }
    })

    $(".btnSimpan").click(function(){
        let id = $(this).data("id");
        let id_latihan = $("#id").val()
        let id_kelas = "<?= $data_latihan['id_kelas']?>";
        let pertemuan = "<?= $data_latihan['pertemuan']?>";

        html = "";

        $("textarea").each(function(){
            let text = $(this).val();
            html += text+"###";
        });
        
        $.ajax({
            url: "<?= base_url()?>tarkibi2/add_latihan_pembahasan",
            data: {id_latihan:id_latihan, id_kelas:id_kelas, pertemuan:pertemuan, text:html},
            type: "POST",
            success: function(data){
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    text: 'berhasil menyimpan pembahasan',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        })
    })
</script>