$('.add-department-modal').on('click',function(){
    var url = $(this).data('url');
    $.get(url, function(res){
        $('#modal').html(res).modal();    
    });
});

$('body').on('click', '.add-department', function(event){
    var url = $(this).data('url');
    var data = $('form').serialize();
    $.post(url, data, function(){
        location.reload();
    });
});

$('.del-department').on('click', function(){
    var url = $(this).data('url');
    if (confirm('确认删除')) {
    $.post(url, function() {
        location.reload();
    });
    }
});

$('.edit-department-modal').on('click',function(res){
    var url = $(this).data('url');
    $.get(url, function(res){
        $('#modal').html(res).modal();
    });
});

$('body').on('click', '.edit-department', function(res){
    var url = $(this).data('url');
    var data = $('form').serialize();
    $.post(url,data,function(res){
        location.reload();
    });
});
