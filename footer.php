    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?=$_dir?>/js/header.js"></script>
    <?php if(isset($is_on_watch)){ ?>
        <script>
            $(function() {
                $('aside.desktop').hide();
                $('main').css('margin-left','0');
                is_on_watch = true;
                toogle_aside();
            });
        </script>
    <?php } else{ ?>
        <script>
            $(function() {
                if($(window).width() <= 1080){
                    toogle_aside();
                }
            });
        </script>
    <?php } ?>
</body>
</html>