$(document).on('click', '.btn-addcategory', function (e) {
    $(".modal-body").empty().load(url + "/viewAddCategory");
});
$(document).on('click', '.btn-sortcategory', function (e) {
    $(".modal-body").empty().load(url + "/viewsort");
});
$(document).on('click', '.btn-editcategory', function (e) {
    var task_id = $(this).attr('att');
    $(".modal-body").empty().load(url + "/" + task_id + "/vieweditcategory");
});
$(document).on('click', '.btn-edithomework', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/homework/edit");
});
$(document).on('click', '.btn-addhomework', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/homework/add");
});
$(document).on('click', '.btn-addgroups', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/groups/add");
});
$(document).on('click', '.btn-editgroups', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/groups/edit");
});

$(document).on('click', '.btn-addclass', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/classes/add");
});
$(document).on('click', '.btn-editclass', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/classes/edit");
});
$(document).on('click', '.btn-addbadges', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/badges/add");
});
$(document).on('click', '.btn-editbadges', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/badges/edit");
});
$(document).on('click', '.btn-send-message', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/students/sendmessage");
});
$(document).on('click', '.btn-send-message-groups', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/groups/sendmessage");
});

$(document).on('click', '.btn-saveeaddcategory', function (e) {
    var search='';
    if(getUrlParameter('search')!=undefined){
        search=getUrlParameter('search');
    }
    $.ajax({
        url: url + '/addcategory/',
        type: 'POST',
        data: {_token: _token, 'title_ar': $("#title_ar").val(), 'title_en': $("#title_en").val(),'search':search},
        dataType: 'html',
        success: function (data) {
            $("#super_content").html(data)
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('error')
        }
    });
});
$(document).on('click', '.btn-saveeditcategory', function (e) {
    var task_id = $(this).attr('att');
    var search='';
    if(getUrlParameter('search')!=undefined){
        search=getUrlParameter('search');
    }
    $.ajax({
        url: url + '/editcategory/',
        type: 'GET',
        data: {_token: _token, 'id': task_id, 'title_ar': $("#title_ar").val(), 'title_en': $("#title_en").val(),'search':search},
        dataType: 'html',
        success: function (data) {
            $("#super_content").html(data);
            $("input[name='search']").val(search);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('error')
        }
    });
});
 $(document).on('click', '.btn-deletecategory', function (e) {
        e.preventDefault();
        var id = $(this).attr('att');
        var __url = url + '/delete?id=' + id+'v='+Math.random();
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false,
            dangerMode: true,

        }, function (value) {
            if (value == true) {
                var search='';
                if(getUrlParameter('search')!=undefined){
                    search=getUrlParameter('search');
                }
                $.ajax({
                    url: url + '/delete',
                    type: 'GET',
                    data: {_token: _token, 'id': id,'search':search},
                    dataType: 'html',
                    success: function (data) {
                        $("#super_content").html(data);
                        swal.close();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log('error')
                    }
                });
            }
        });

    });
$(document).on('click', '.btn-savesortcategory', function (e) {
    e.preventDefault();
    var sort_array = [];
    var search='';
    if(getUrlParameter('search')!=undefined){
        search=getUrlParameter('search');
    }
    $("#sortable").children().each(function () {
        sort_array.push($(this).attr('data-id'))
    });
    $.ajax({
        url: url + '/savesort/',
        type: 'POST',
        data: {_token: _token, 'sort': sort_array,'search':search},
        dataType: 'html',
        success: function (data) {
            $("#super_content").html(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('error')
        }
    });
});
$(document).on('keypress', '.CategoryKeywords', function (e) {
    if (e.which == 13) {
        if(getUrlParameter('search')==undefined&&$(".CategoryKeywords").val()!='' &&$(".CategoryKeywords").val()!=' '){
            $('<input>').attr({
                type: 'hidden',
                id: 'search',
                name: 'search',
                value:$(".CategoryKeywords").val()
            }).appendTo('#Category');
        }else if($(".CategoryKeywords").val()=='' ||$(".CategoryKeywords").val()==' '){
        $("input[name='search']").remove();
        }
        SubmitFormCategory();
        e.preventDefault();
    }
});
$(document).on('click','.CategorySortingName_Ar,.CategorySortingName_En,.CategorySortingName_order,.CategorySortingName_Date',function(e){
    e.preventDefault();
    var sorting=getUrlParameter('descask');
    if(sorting=='ASC') {
        sorting = 'DESC';
    }else if(sorting=='DESC'){
        sorting = 'ASC';
    }else{
        sorting = 'ASC';
    }
    var _type='';

    if($(this).hasClass('CategorySortingName_Ar')){
        _type='title_ar';
    }else if($(this).hasClass('CategorySortingName_En')){
        _type='title_en';
    }else if($(this).hasClass('CategorySortingName_order')){
        _type='order';
    }else if($(this).hasClass('CategorySortingName_Date')){
        _type='updated_at';
    }
    $('<input>').attr({
        type: 'hidden',
        id: 'sorting',
        name: 'sorting',
        value:_type
    }).appendTo('#Category');
    $('<input>').attr({
        type: 'hidden',
        id: 'descask',
        name: 'descask',
        value:sorting
    }).appendTo('#Category');
    SubmitFormCategory();
});
$(document).on('click', '.btn-addlevel', function (e) {
    $(".modal-body").empty().load(url + "/viewAddLevel");
});
$(document).on('click', '.btn-editlevels', function (e) {
    var task_id = $(this).attr('att');
    $(".modal-body").empty().load(url + "/" + task_id + "/vieweditlevels");
});
$(document).on('click', '.btn-addlevels', function (e) {
    $(".modal-body").empty().load(url + "/add");
});
$(document).on('click', '.btn-saveeaddlevels', function (e) {
    var search='';
    var sorting='';
    var descask='';
    var page='';
    if(getUrlParameter('search')!=undefined){
        search=getUrlParameter('search');
    }
    if(getUrlParameter('sorting')!=undefined){
        sorting=getUrlParameter('sorting');
    }
    if(getUrlParameter('descask')!=undefined){
        descask=getUrlParameter('descask');
    }
    $.ajax({
        url: url + '/addlevels',
        type: 'GET',
        data: {_token: _token,'school':1,'search':search,'ltitle_ar': $("#title_ar").val(),'ltitle_en': $("#title_en").val(),'sorting':sorting,'descask':descask},
        dataType: 'html',
        success: function (data) {
            var text = data.split('levels/addlevels').join( 'levels/');
            $("#super_content").html(text)
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('error')
        }
    });
});
$(document).on('click', '.btn-saveeditlevels', function (e) {
    var task_id = $(this).attr('att');
    $.ajax({
        url: url + '/editlevels/',
        type: 'POST',
        data: {_token: _token, 'id': task_id, 'title_ar': $("#title_ar").val(), 'title_en': $("#title_en").val()},
        dataType: 'html',
        success: function (data) {
            var text = data.split('levels/editlevels').join( 'levels/');
            $("#super_content").html(text);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('error')
        }
    });
});
$(document).on('click', '.btn-deletelevels', function (e) {
    e.preventDefault();
    var id = $(this).attr('att');
    var __url = url + '/delete?id=' + id
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function (value) {
        if (value == true) {
           // $("#Deletelevels" + id).attr('action', __url);
           // $("#Deletelevels" + id).submit();
            var search='';
            var sorting='';
            var descask='';
            var page='';
            if(getUrlParameter('search')!=undefined){
                search=getUrlParameter('search');
            }
            if(getUrlParameter('sorting')!=undefined){
                sorting=getUrlParameter('sorting');
            }
            if(getUrlParameter('descask')!=undefined){
                descask=getUrlParameter('descask');
            }
            $.ajax({
                url: url + '/delete',
                type: 'GET',
                data: {_token: _token,'id':id,'search':search,'sorting':sorting,'descask':descask},
                dataType: 'html',
                success: function (data) {
                    var text = data.split('levels/delete').join( 'levels/');
                    $("#super_content").html(text);
                    swal.close();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log('error')
                }
            });
            return;
        }
    });

});
$(document).on('click','.LevelSortingName_Ar,.LevelSortingName_En,.LevelSortingName_order,.LevelSortingName_Date',function(e){
    e.preventDefault();
    var sorting=getUrlParameter('descask');
    if(sorting=='ASC') {
        sorting = 'DESC';
    }else if(sorting=='DESC'){
        sorting = 'ASC';
    }else{
        sorting = 'ASC';
    }
    var _type='';

    if($(this).hasClass('LevelSortingName_Ar')){
        _type='ltitle_ar';
    }else if($(this).hasClass('LevelSortingName_En')){
        _type='ltitle_en';
    }else if($(this).hasClass('LevelSortingName_order')){
        _type='level_number';
    }else if($(this).hasClass('LevelSortingName_Date')){
        _type='updated_at';
    }
    $('<input>').attr({
        type: 'hidden',
        id: 'sorting',
        name: 'sorting',
        value:_type
    }).appendTo('#Levels');
    $('<input>').attr({
        type: 'hidden',
        id: 'descask',
        name: 'descask',
        value:sorting
    }).appendTo('#Levels');
    SubmitFormLevels();
});
$(document).on('keypress', '.LevelKeywords', function (e) {
    if (e.which == 13) {
        if((getUrlParameter('search')==undefined||getUrlParameter('search')=='')&&$(".LevelKeywords").val()!='' &&$(".LevelKeywords").val()!=' '){
            $('<input>').attr({
                type: 'hidden',
                id: 'search',
                name: 'search',
                value:$(".LevelKeywords").val()
            }).appendTo('#Levels');
        }else if($(".LevelKeywords").val()=='' ||$(".LevelKeywords").val()==' '){
            $("input[name='search']").remove();
        }
        SubmitFormLevels();
        e.preventDefault();
    }
});
function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
function SubmitFormCategory(){
    $(".CategoryKeywords").val($.trim($(".CategoryKeywords").val()))
    if($(".CategoryKeywords").val()!='' &&$(".CategoryKeywords").val()!=' '){
        $("input[name='search']").val($(".CategoryKeywords").val());
    }
    $("#Category").submit();
}
function SubmitFormLevels(){
    $(".LevelKeywords").val($.trim($(".LevelKeywords").val()))
    if($(".LevelKeywords").val()!='' &&$(".LevelKeywords").val()!=' '){
        $("input[name='search']").val($(".LevelKeywords").val());
    }
    $("#Levels").submit();
}
$(document).on('click', '.btn-saveschedule', function (e) {
    e.preventDefault();
    var sort_array = [];
alert('schedule')

    $("#sortable").children().each(function () {
        sort_array.push($(this).attr('data-id'))
    });
    $.ajax({
        url: url + '/saveschedule/',
        type: 'POST',
        data: {_token: _token, 'sort': sort_array,'search':''},
        dataType: 'html',
        success: function (data) {
            $("#super_content").html(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('error')
        }
    });
});
/*
$(document).on('click', '.btn-edithomework', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/homework/edit");
});
$(document).on('click', '.btn-addhomework', function (e) {
    $(".modal-body").empty().load("http://127.0.0.1:8000/en/homework/add");
});
*/
