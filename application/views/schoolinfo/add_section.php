

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
                    <h3>Class / Section </h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Class Name</th>
                            <th>Section</th>
                            <th class="text-center">New Section</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=0;
                        $myData= $myModel->select_class($this->getSession('userid'));
                        foreach($myData as $user):
                            $i++;
                        ?>
                        <tr>
                            <td class="align-middle"><?php echo $i;?></td>
                            <td class="align-middle"><?php echo $user->name; ?></td>
                            <td id="<?php echo 'data'.$i?>" class="align-middle">
                            <?php
                               $this->view2("ajax/allsubjects",$myModel,['classid'=>$user->id,'wid'=>"3",'pos'=>$i]);
                            ?>
                            </td>
                            <td class="align-middle text-center">
                                <i onclick="addsection('<?php echo $user->id ?>','<?php echo $user->section ?>','<?php echo $i; ?>')" class="fas fa-plus-circle text-light-sea-green"></i>
                                <i onclick="closesection('<?php echo $user->id ?>','<?php echo $i; ?>')" class="fas fa-times-circle text-orange-red"></i>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    
    
    <!-- Footer Area Start Here -->
    <?php include "components/copyright.php"; ?>
    <!-- Footer Area End Here -->

</div>

<?php include "components/footer.php"; ?>

<script>
function addsection($classid,$sectiontype,$pos){
    $count=$("#datacnt"+$pos).val();
    if($count==11){
        alert("You can't create more than 10 section.");
    }
    else{
        $.ajax({
            url: "<?php echo BASEURL.'/schoolinfo/insert_section/'  ?>", 
            type: "POST",
            beforeSend:function(){$("#loadingProgressG").show();},
            data: {classid:$classid,sectiontype:$sectiontype,datacnt:$count,pos:$pos},
            success: function(result){
                $("#data"+$pos).html(result);
                $("#loadingProgressG").hide();
            }
        });
    }
}
function closesection($classid,$pos){
    $.ajax({
        url: "<?php echo BASEURL.'/schoolinfo/delete_section/'?>",
        type: "POST",
        beforeSend:function(){$("#loadingProgressG").show();},
        data: {classid:$classid,pos:$pos},
        success: function(result){
            $("#data"+$pos).html(result);
            $("#loadingProgressG").hide();
        }
    });
}
</script>