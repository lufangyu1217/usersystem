    var familyId = 2;
    var learnId = 2;
    var workId = 2;

    $('.family').append($('.family-modal').html());
    $('.family').find('#delete-family-info').removeClass('hidden');
    $('.learn').append($('.learn-modal').html());
    $('.learn').find('#delete-learn-info').removeClass('hidden');
    $('.work').append($('.work-modal').html());
    $('.work').find('#delete-work-info').removeClass('hidden');

    $('.add-family-info').on('click', function(){
        $('#member').attr('name', 'family['+familyId+'][member]');
        $('#familyName').attr('name', 'family['+familyId+'][trueName]');
        $('#age').attr('name', 'family['+familyId+'][age]');
        $('#job').attr('name', 'family['+familyId+'][job]');
        $('#phone').attr('name', 'family['+familyId+'][phone]');
        $('.familyphone').append($('.family-modal').html());
        familyId++;
    });

    $('body').on('click', '.delete-family-info', function(){
        $(this).parent().remove();
    })

    $('.add-learn-info').on('click', function(){
        $('#learnStartTime').attr('name', 'eduction['+learnId+'][startTime]');
        $('#learnEndTime').attr('name', 'eduction['+learnId+'][endTime]');
        $('#learnSchoolName').attr('name', 'eduction['+learnId+'][schoolName]');
        $('#learnProfession').attr('name', 'eduction['+learnId+'][profession]');
        $('#learnPosition').attr('name', 'eduction['+learnId+'][position]');
        $('.learn').append($('.learn-modal').html());
        learnId++;
    })

    $('body').on('click', '.delete-learn-info', function(){
        $(this).parent().remove();
    })

    $('.add-work-info').on('click', function(){
        $('#workStartTime').attr('name', 'work['+workId+'][startTime]');
        $('#workEndTime').attr('name', 'work['+workId+'][endTime]');
        $('#workUnit').attr('name', 'work['+workId+'][company]');
        $('#workPosition').attr('name', 'work['+workId+'][position]');
        $('#leaveReason').attr('name', 'work['+workId+'][leaveReason]');
        $('.work').append($('.work-modal').html());
        workId++;
    })

    $('body').on('click', '.delete-work-info', function(){
        $(this).parent().remove();
    });

    $("#add-user-form").validate({
        rules: {
            'basic[number]': {
                required: true,
                number: true,
                checkNumber: true,
                remote: {
                    url: "/admin/user/number/check",     //后台处理程序
                    type: "get",               //数据发送方式
                    dataType: "json",
                    data: {                     //要传递的数据
                        number: function() {
                            return $("#number").val();
                        }
                    }
                }
            },
            'basic[trueName]': "required",
            'basic[department]': {
                required: true
            },
            'basic[rank]': {
                required: true
            },
            'basic[phone]': {
                required:true,
                mobile:true
            },
            'basic[email]': {
                required: true,
                email:true
            },
            'basic[professionTitle]': {
                required: true
            },
            'basic[joinTime]': {
                required: true
                }
        },
        messages: {
            'basic[number]': {
                required: "请输入员工工号",
                remote: "该员工工号已存在"
            },
            'basic[trueName]': "请输入姓名",
            'basic[department]': {
                required: "请输入所属部门"
            },
            'basic[rank]': {
                required: "请输入职级"
            },
            'basic[phone]': {
                required: "请输入手机号码"
            },
            'basic[email]': {
                required: "请输入邮箱"
            },
            'basic[professionTitle]': {
                required: "职称不能为空"
            },
            'basic[joinTime]': {
                required: "入职时间不能为空"
            }
        }
    });
    jQuery.validator.addMethod("mobile", function(value, element) {    
        var length = value.length;    
        return this.optional(element) || (length == 11 && /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/.test(value));    
    }, "请正确填写您的手机号码");

    jQuery.validator.addMethod("checkNumber", function(value, element) { 
        return this.optional(element) || (/^\d{4}$/.test(value));    
    }, "请输入四位工号数");
