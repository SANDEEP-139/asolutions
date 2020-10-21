

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
                    <h3>Stream & Group </h3>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table display data-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Stream</th>
                            <th>Group Name</th>
                            <th style="width:200px;">New Group</th>
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
                            <td class="align-middle"><?php echo $user->stream_eng; ?></td>
                            <td class="align-middle">
                               No any Geoup
                            </td>
                            <td class="align-middle">
                            <button type="button" class="btn-fill-lmd radius-4 text-light bg-red">Add Group</button>
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

