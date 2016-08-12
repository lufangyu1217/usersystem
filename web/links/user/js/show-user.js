$('body').on('click', '.show-inuser', function(){
    $.get($(this).data('url'),function(res){
        $('#modal').html(res).modal();
    });
});

$('body').on('click', '.show-outuser', function(){
    $.get($(this).data('url'),function(res){
        $('#modal').html(res).modal();
    });
});

$('body').on('click','.show-basic-info',function(){
    $.get($(this).data('url'),function(res){
        $('#modal').html(res).modal();
    });
});

$('body').on('click','.show-family-info',function(){
    $.get($(this).data('url'),function(res){
        $('#modal').html(res).modal();
    });
});

$('body').on('click','.show-learn-info',function(){
    $.get($(this).data('url'),function(res){
        $('#modal').html(res).modal();
    });
});

$('body').on('click','.show-work-info',function(){
    $.get($(this).data('url'),function(res){
        $('#modal').html(res).modal();
    });
});

$('body').on('click','.show-other-info',function(){
    $.get($(this).data('url'),function(res){
        $('#modal').html(res).modal();
    });
});