<?php
include 'head.php'; ?>
<div class="container">
    <?php

    include 'headerbackoffice1.php';

    ?>


    <?php

    include 'footer.php';

    ?>
</div>

</body>

</html>

<script>
    $(function() {
        $('.menu').hide("");
        $('.burger').click(function() {
            $('.menu').slideToggle('slow');
        });
    });
</script>