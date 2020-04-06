<?php
include 'head.php';
if (!isset($_SESSION["user"]) || $_SESSION["user"] == null) {
    header("location: index.php");
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
<div id="circle">
    <div class="loader">
        <div class="loader">
            <div class="loader">
                <div class="loader">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php

    include 'headerbackoffice.php';

    ?>


    <?php

    include 'footer.php';

    ?>
</div>


<script>
    $(function() {
        $('.menu').hide("");
        $('.burger').click(function() {
            $('.menu').slideToggle('slow');
        });
    });
</script>