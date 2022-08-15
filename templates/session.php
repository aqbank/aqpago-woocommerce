<script>
window.addEventListener("load", function(){
    AQPAGOSECTION.setPublicToken('<?php echo esc_js($public_token) ?>');
});
</script>
<script defer="defer" src="https://cdn.aqbank.com.br/js/aqpago.min.js"></script>