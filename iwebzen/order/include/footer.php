<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p>&copy; Copyright <?php echo date('Y'); ?> <?= SITE_NAME_TEXT?>. All Rights Reserved</p>
      </div>
      <div class="col-md-6">
        <p class="text-right">
          <a href="privacy" target="_blank">Privacy Policy</a> | <a href="terms"
            target="_blank">Terms &
          Conditions</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<script src="js/lib.js"></script>
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="js/functions.js"></script>

<script type="text/javascript">

    var logoField = "";
    var categ = Array();
    var i = 0;
    $(".bordr").click(function () {
        var selct = $(this).attr('selected');
        console.log();
        var trys = 0;
        for (var j = 0; j < categ.length; j++) {

            if ($(this).attr("src") == categ[j]) {
                var abc = $($(this).parents('li')).find('p').html();
                logoField = logoField.replace(abc, '');
                $(this).css("border", "3px solid #777");
                categ[j] = "";
                trys = 1;
            }

        }
        if (trys == 0) {

            var abc = $($(this).parents('li')).find('p').html();
            logoField += " " + abc;
            $(this).css("border", "3px solid #97C03E");
            categ[i] = $(this).attr("src");
            i++;

        }
        newAr = Array();
        var l = 0;

        for (var k = 0; k < categ.length; k++) {

            if (categ[k] != "") {
                newAr[l] = categ[k];
                l++;
            }

        }

        $('#logoSelect').val(logoField);

    });

</script>

<?php include __DIR__ . "../../crm_inc/assets.php"; ?>

</body>
</html>