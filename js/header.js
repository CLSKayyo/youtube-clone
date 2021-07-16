var toggled = true;
var is_on_watch = false;
var is_bar_openned = false;

function toogle_aside(){
    if((!is_on_watch) && $(window).width() > 1080){
        if(toggled){
            $('aside.desktop').hide();
            $('main').css('margin-left','0');
            toggled = false;
        } else{
            $('aside.desktop').show();
            $('main').css('margin-left','240px');
            toggled = true;
        }
    } else{
        if(toggled){
            $('aside.mobile').hide();
            toggled = false;
        } else{
            $('aside.mobile').show();
            toggled = true;
        }
    }
}

function toggle_description(){
    if($('div.descricao .mostrar-mais')){
        if($('div.descricao .mostrar-mais a').html() == 'mostrar mais'){
            $('div.descricao').css('max-height', 'none');
            $('div.descricao .mostrar-mais a').html('mostrar menos');
        } else{
            $('div.descricao').css('max-height', '100px');
            $('div.descricao .mostrar-mais a').html('mostrar mais');
        }
    }
}

function toggle_search_bar(){
    if(is_bar_openned){
        $('form.mobile').css('display', 'none');
    } else{
        $('form.mobile').css('display', 'flex');
    }

    is_bar_openned = !is_bar_openned;
}
