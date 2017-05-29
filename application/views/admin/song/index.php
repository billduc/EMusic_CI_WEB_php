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
        <a href="song/create" class="btn btn-primary">Tạo Bài Hát</a>
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
    function getAndSetData() {
        dataSet = [];
        var baseUrl = "<?=base_url();?>";
        var data = <?=json_encode($listSong);?>;
        var artist = <?=json_encode($listArtist);?>;
        var singer = <?=json_encode($listSinger);?>;
        var songType = <?=json_encode($listSongType);?>;
        for (var index = 0; index < data.length; index++) {
            var tempObject = [];
            tempObject.push(data[index].id);
            tempObject.push(data[index].name);
            var imageSource = '<a href="' + baseUrl + data[index].file_media + '">' + data[index].name + '</a>';
            tempObject.push(imageSource);
            tempObject.push(data[index].view_num);
            var des = data[index].description;
            if (des.length > 100) {
                des = des.slice(0, 100) + ' ....';
            }
            tempObject.push(des);

            Object.keys(artist).map(function(k) {
                if (data[index].artist_id == k){
                    tempObject.push(artist[k]);
                }
            });
            Object.keys(singer).map(function(k) {
                if (data[index].singer_id == k){
                    tempObject.push(singer[k]);
                }
            });
            Object.keys(songType).map(function(k) {
                if (data[index].type_id == k){
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
                {"title": "Name"},
                {"title": "File Mp3"},
                {"title": "Lượt nghe"},
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
                        if (data.length >= 0) {
                            return '<a type="button" id="editCmt" action="update" class="btn btn-warning" href="/song/update?id=' + data[0] + '">Sửa</a>' +
                                '<a type="button" id="delCmt" action="update" class="btn btn-danger" href="/song/delete?id=' + data[0] + '">Xóa</a>'
                        }
                        // '<button type="button" id="accessPost" action="update" class="btn btn-success">Truy cập bài viết</button>'
                    }
                }
            ]
        });
    }

</script>

