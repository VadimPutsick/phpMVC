<?php
include "/../../libs/Html/unpackData.php";
?>
<form action="<?php echo URL . $curControllerName; ?>/index/" method="post">
    <div class="form-group">
        <?php foreach ($tableRowFields as $elem) { ?>
            <label for="authorsNameLabel">
                <?php echo $elem ?>
            </label>
              <?php if(isset($tableRowId)){ ?>
                 <input hidden name="<?php echo $tableRowId;?>"
               value="<?php echo $RowIdValue; ?>"/>
                <?php }?>

            <input required type="text" class="form-control"
            <?php
            if(isset($data['tableRowId'])){
             echo "value=".$RowFields;;

            }?>
                   name=<?php echo $elem ?>
            <small class="form-text text-muted">
                Input table field <?php echo $elem ?>
            </small>
        <?php } ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>