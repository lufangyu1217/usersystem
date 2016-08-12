$('.change-role').on('click', function(){
    $.post($(this).data('url'), $('form').serialize(), function(res){
        if(res == true){
            alert('设置成功');
        }else{
            alert(res.info);
        }
    });
})