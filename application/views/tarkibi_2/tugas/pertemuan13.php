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
                
                <div class="col-12 p-0">
                    <div class="alert alert-info"><i class="fa fa-info-circle text-info"></i> Terjemahkan kalimat berikut ke dalam bahasa Arab</div>
                </div>
                
                <?php 
                    $data_soal = [
                        [
                            "no" => "1",
                            "soal" => "Saya akan pergi ke surabaya selama ayahku mengiziniku.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "2",
                            "soal" => "Ibrohim bukanlah anak kecil, dia sudah menjadi besar sekarang.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "3",
                            "soal" => "Fatimah pergi ke kalimantan dan dia menjadi guru yang terkenal disana.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "4",
                            "soal" => "Murid-murid masih bersungguh-sungguh dikelas ini.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "5",
                            "soal" => "Dokter itu masih memeriksa pasiennya.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "6",
                            "soal" => "Hasanah itu cantik, dan dia menjadi artis di kelas ini.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "7",
                            "soal" => "Saya bukanlah penakut, karena saya laki-laki",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "8",
                            "soal" => "Samiroh itu bukanlan perempuan yang lemah",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "9",
                            "soal" => "Saya masih bujang di kelas ini.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "10",
                            "soal" => "Mereka adalah para penumpang di bis ini.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "11",
                            "soal" => "Andaikan hari ini hari libur, aku akan pergi ke pantai bersama teman-temanku.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "12",
                            "soal" => "Amir itu pandai, akan tetapi dia sering telat",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "13",
                            "soal" => "Semoga ayahku datang dan memberikanku uang",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "14",
                            "soal" => "Sesungguhnya anak-anak itu, akan tetapi anak-anak itu malas dalam membaca.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "15",
                            "soal" => "Anak (lk) itu gendut, seakan-akan dia seperti bola.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "16",
                            "soal" => "Rumah-rumah itu besar seakan-akan seperti istana.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "17",
                            "soal" => "Kita tahu bahwa Amin pintar, akan tetapi dia suka tidur. ",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "18",
                            "soal" => "Muhammad seakan-akan seperti seperti matahari yang menyinari bumi.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "19",
                            "soal" => "Kita berfikir bahwa tim sepak bola ini kalah.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "20",
                            "soal" => "Bapak itu bukanlan pengemis, melainkan dia adalah pengusaha.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "21",
                            "soal" => "Saya mengira bahwa Laila itu perempuan.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "22",
                            "soal" => "Kita yakin bahwa mereka itu pencuri.",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "23",
                            "soal" => "Ahmad menduga bahwa bapak itu seorang dosen",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "24",
                            "soal" => "Zainab yakin bahwa sekolah ini baru",
                            "jawaban" => ""
                        ],
                        [
                            "no" => "25",
                            "soal" => "Kita menyangka bahwa bumi itu bulat.",
                            "jawaban" => ""
                        ],
                    ];
                ?>

                <div class="col-12 mb-3 bg-light" id="isiForm">
                    <?php 
                        $benar = 0;
                        foreach ($data_soal as $i => $soal) :
                            if($soal['jawaban'] == $data_latihan['jawaban'][$i]) $benar++;
                    ?>
                        <ul class="list-group soal" id="soal<?= $i+1?>">
                            <div class="form-group mt-3">
                                <label for=""><?= $soal['no'].". ".$soal['soal']?></label>
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
        } else {
            $('#allSoal').html("Sembunyikan Semua Soal")
            // $(".soal").addClass("mb-3");
            $(".soal").show();
            $(".left").hide()
            $(".right").hide()
            $(".angka").hide()
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
    })
    
    $(".left").click(function(){
        let id = $(this).data("id")
        id --;
        $(".soal").hide();
        $("#soal"+id).show()
        $("#angka").html(id)
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