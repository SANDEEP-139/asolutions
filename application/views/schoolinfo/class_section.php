

<?php include "components/header.php"; ?>

<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area aeroheader2">
        <h3>School Information Management</h3>
    </div>
    <!-- Breadcubs Area End Here -->

   

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Class / Section </h3><em class="clstcr4 text-red"></em>
                </div>
                <div class="dropdown">
                    <button type="button" onclick="update()" class="btn-fill-lmd radius-4 text-light bg-light-sea-green">UPDATE</button>
                </div>
            </div>
            <div class="table-responsive">
                <form id="form1">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Class Name</th>
                            <th>Section Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=0;
                        foreach($data as $user):
                            $i++;
                        ?>
                        <tr>
                            <td class="align-middle"><?php echo $i;?></td>
                            <td class="align-middle"><?php echo $user->name; ?>
                             <input type="hidden" name="<?php echo 'classid'.$i?>" value="<?php echo $user->id;; ?>"/></td>
                            <td>
                                <select class="select2" name="<?php echo 'section'.$i?>">
                                    <option value="1" <?php if($user->section=="1"){echo "selected";} ?>>A,B,C,D,E,F..,etc</option>
                                    <option value="2" <?php if($user->section=="2"){echo "selected";} ?>>A1,A2,A3,A4,..,etc</option>
                                    <option value="3"<?php if($user->section=="3"){echo "selected";} ?>>A1,B1,C1,D1,..,etc</option>
                                </select>
                            </td>
                            <td class="align-middle">
                                <div class="form-check" style="height:30px !important;">
                                    <input type="checkbox" name="<?php echo 'statu'.$i?>" class="form-check-input" <?php if($user->status=="Active"){echo 'checked';}?>>
                                    <label class="form-check-label <?php if($user->status=="Active"){echo 'artextgreen';}else{echo 'artextread';}?>"><?php echo $user->status; ?></label>
                                </div>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                    ?>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>


</div>

<?php include "components/footer.php"; ?>

<script>
function update(){
    $.ajax({
        url: "<?php echo BASEURL.'/schoolinfo/update_section/'.$i  ?>", 
        type: "POST",
        beforeSend:function(){$("#loadingProgressG").show();},
        data: $("#form1").serialize(),
        success: function(result){
            $(".clstcr4").html(result);
            $("#loadingProgressG").hide();
        }
    });
}
</script>