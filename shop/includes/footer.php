</div><br><br>

<!--<footer class="text-center" id="footer">&copy Copyright 2019 essence</footer>-->
<div class="col-md-12 text-center">&copy; Copyright 2019 essence</div>


<script>
    jQuery(window).scroll(function () {
        var vscroll = jQuery(this).scrollTop();
        jQuery('#logotext').css({
            "transform": "translate(0px, " + vscroll / 2 + "px)"
        });

        var vscroll = jQuery(this).scrollTop();
        jQuery('#back-flower').css({
            "transform": "translate(" + vscroll / 5 + "px, -" + vscroll / 12 + "px)"
        });

        var vscroll = jQuery(this).scrollTop();
        jQuery('#fore-flower').css({
            "transform": "translate(0px, -" + vscroll / 2 + "px)"
        });
    });

    function detailsmodal(id) {
        var data = {"id" : id};
        jQuery.ajax({
            url: '/shop/includes/detailsmodal.php',
            method: "post",
            data: data,
            success: function (data) {
              jQuery('body').append(data);
              jQuery('#details-modal').modal('toggle');
            },
            error: function () {
                alert("Something went wrong with details");
            }
        });
    }
</script>

</body>
</html>