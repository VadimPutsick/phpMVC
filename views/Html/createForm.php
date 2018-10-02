
<form action="<?php echo URL . $data['curControllerName']; ?>/index/" method="post">
    <div class="form-group">
        <?php foreach ($data['tableRowFields'] as $elem) {   ?>
            <label for="authorsNameLabel"> <?php echo $elem ?></label>
            <input required type="text" class="form-control" name= <?php echo $elem ?>
            placeholder="Enter name">
            <small class="form-text text-muted">Input table field <?php echo $elem ?></small>
        <?php } ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>