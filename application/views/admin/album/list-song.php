<?php
/**
 * Created by dinhty.luu@gmail.com
 * Date: 24/05/2017
 * Time: 17:06
 */

/**
 * @var $listSinger array
 */
?>
<link href="<?= base_url('resource/backend/html/dataTable/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url('resource/backend/html/dataTable/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">

<div class="row bg-title">
    <div class="col-md-12">
        <a href="/admin/album" class="btn btn-primary">Trở lại Album</a>
        <br/>
        <br/>
        <div class="table-responsive tblmanager">
            <table id="listSinger-dataTable" class="table table-striped table-bordered table-hover"
                   cellspacing="0" width="100%">
            </table>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script src="<?= base_url('resource/backend/html/dataTable/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('resource/backend/html/dataTable/js/dataTables.tableTools.js'); ?>"></script>
<script src="<?= base_url('resource/backend/html/dataTable/js/dataTables.bootstrap.js'); ?>"></script>
<script>
    var dataSet = [], dataTable;
    var idAlbum = <?= $idAlbum;?>;
    function getAndSetData() {
        dataSet = [];
        var baseUrl = "<?=base_url();?>";
        var data = <?=json_encode($listSong);?>;
        var artist = <?=json_encode($listArtist);?>;
        var singer = <?=json_encode($listSinger);?>;
        var songType = <?=json_encode($listSongType);?>;
        var songList = <?=json_encode($listSongList);?>;
        var songListAlbum = [];
        Object.keys(songList).map(function (k) {
            songListAlbum[k] = songList[k];
        });
        console.log(songListAlbum[0]);
        for (var index = 0; index < data.length; index++) {
            var tempObject = [];
            tempObject.push(data[index].id);
            if (songListAlbum.length == 0) {
                tempObject.push(0);
            } else {
                for (var i = 0; i < songListAlbum.length; i++) {
                    if (songListAlbum[i] !== undefined && songListAlbum[i].song_id == data[index].id){
                        tempObject.push(songListAlbum[i].id);
                        break;
                    }else {
                        if (i == songListAlbum.length-1){
                            tempObject.push(0);
                            break;
                        }
                    }
                }
            }
            tempObject.push(data[index].name);
            var imageSource = '<a href="' + baseUrl + data[index].file_media + '">' + data[index].name + '</a>';
            tempObject.push(imageSource);
            var des = data[index].description;
            if (des.length > 100) {
                des = des.slice(0, 100) + ' ....';
            }
            tempObject.push(des);
            Object.keys(artist).map(function (k) {
                if (data[index].artist_id == k) {
                    tempObject.push(artist[k]);
                }
            });
            Object.keys(singer).map(function (k) {
                if (data[index].singer_id == k) {
                    tempObject.push(singer[k]);
                }
            });
            Object.keys(songType).map(function (k) {
                if (data[index].type_id == k) {
                    tempObject.push(songType[k]);
                }
            });
            dataSet.push(tempObject);
        }
        var table = $('#listSinger-dataTable');
        table.dataTable().fnClearTable();
        table.dataTable().fnAddData(dataSet);
    }
    if (dataSet.length >= 0) {
        $('#listSinger-dataTable').DataTable({
            initComplete: function () {
                getAndSetData();
            },
            "iDisplayLength": 100,
            "bFilter": true,
            "data": dataSet,
            "ordering": true,
            "paging": true,
            "columns": [
                {"title": "ID"},
                {
                    "title": "IsChoose",
                    "visible": false
                },
                {"title": "Name"},
                {"title": "File Mp3"},
                {"title": "Description"},
                {"title": "Artist"},
                {"title": "Singer"},
                {"title": "Song Type"},
                {"title": "Công cụ"}

            ],
            "aoColumnDefs": [
                {
                    "aTargets": [8],
                    "mData": null,
                    "mRender": function (data, type, full) {
                        if (data[1] > 0) {
                            return '<a type="button" id="delCmt" action="update" class="btn btn-danger" href="/album/songRemove?albumId=' + idAlbum + '&idSongList=' + data[1] + '">Xóa</a>'
                        }
                        return '<a type="button" id="editCmt" action="update" class="btn btn-primary" href="/album/songAdd?album_id=' + idAlbum + '&song_id=' + data[0] + '">Thêm</a>'
                        // '<button type="button" id="accessPost" action="update" class="btn btn-success">Truy cập bài viết</button>'
                    }
                }
            ]
        });
    }

</script>

