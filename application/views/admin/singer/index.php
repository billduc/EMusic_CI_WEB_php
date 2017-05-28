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
        <a href="singer/create" class="btn btn-primary">Create Singer</a>
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
        var data = <?=json_encode($listSinger);?>;
        for (var index = 0; index < data.length; index++) {
            var tempObject = [];
            tempObject.push(data[index].id);
            tempObject.push(data[index].name);
            var imageSource = '<img alt=""  src=' + baseUrl + data[index].avatar + ' style="height:100px;width:100px" />';
            tempObject.push(imageSource);
            var des = data[index].description;
            if (des.length > 100) {
                des = des.slice(0, 100) + ' ....';
            }
            tempObject.push(des);

            dataSet.push(tempObject);
        }
        var table = $('#listSinger-dataTable');
        table.dataTable().fnClearTable();
        table.dataTable().fnAddData(dataSet);
    }
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
            {"title": "Avatar"},
            {"title": "Description"},
            {"title": "Công cụ"}
        ],
        "aoColumnDefs": [
            {
                "aTargets": [4],
                "mData": null,
                "mRender": function (data, type, full) {
                    return '<a type="button" id="editCmt" action="update" class="btn btn-warning" href="/singer/update?id=' + data[0] + '">Sửa</a>' +
                        '<a type="button" id="delCmt" action="update" class="btn btn-danger" href="/singer/delete?id=' + data[0] + '">Xóa</a>'
                    // '<button type="button" id="accessPost" action="update" class="btn btn-success">Truy cập bài viết</button>'
                }
            }
        ]
    });

</script>