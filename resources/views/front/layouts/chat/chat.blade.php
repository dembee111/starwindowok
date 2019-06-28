<script type="text/javascript">
    (function () {
        var options = {
            facebook: "328678640908015", // Facebook page ID
            whatsapp: "99134731", // WhatsApp number
            company_logo_url: "/website/img/d002.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Сайн байна уу? Манай цахим хуудсанд зочилсонд баярлалаа", // Text of greeting message
            call_to_action: "Холбогдсонд баярлалаа", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();


</script>