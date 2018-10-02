<br><br>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th> <?php echo $curControllerName ?> name</th>
        <th>delete <?php echo $curControllerName ?></th>
        <th>change <?php echo $curControllerName ?></th>
    </tr>
    </thead>
    <tbody>

    <?php
    //   print_r($data);
    foreach ($tableValues as $elem) {
        $id = $elem[$tableRowId];
        $name = $elem[$tableRowFields[0]];
        ?>
        <tr>
            <th scope='row'><?php echo $id ?></th>
            <td>
                <?php echo $name ?>
            </td>
            <td>
                <button type='button' class='btn btn-warning'>
                    Change
                </button>
            </td>
            <td>
                <button type='button' class='btn btn-danger'>
                    Delete
                </button>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>
<script type="text/javascript">
    $(function () {
        $(".btn-warning").click(function () {
            var author = this.parentNode.parentNode;
            var id = author.children[0].innerText;
            var name = author.children[1].innerText;
            formPost("<?php echo URL . $curControllerName; ?>/change/",
                {
                    "<?php echo $tableRowId; ?>": id,
                    "<?php echo $tableRowFields[0]; ?>": name
                }, "post");
        });

        $(".btn-danger").click(function () {
            var author = this.parentNode.parentNode;
            var id = author.children[0].innerText;
            var conf = confirm("Are you sure want delete this?");
            if (conf) {
                $.post("<?php echo URL . $curControllerName; ?>/delete/", {"<?php echo$tableRowId?>": id}, function () {
                    author.innerHTML = "";
                });
            }

        });
    });
</script>

