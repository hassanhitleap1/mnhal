/**
 * Created by Dar Al-Manhal Publishers - Hussam Abu Khadijeh on 15/04/2018.
 */

SITE_URL="http://localhost:8000/";
Language="en";
$(document).ready(function(){
   console.log(window.Lang.lang.View_All_Messages);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $(document).on("click","#popup_addadmin",function(){
        $("#popup_content").load(SITE_URL+Language+"/admins/new");
        console.log()
        showpopup();
    });

    $(document).on("click",".edit_user",function(){
        $("#popup_content").load(SITE_URL+Language+"/admins/"+$(this).attr("data-id")+"/edit",function(){
            loadPicker();
        });
        $("#popup_header").html(" - "+$(this).closest("tr").find(".name").html());
        showpopup();
    });

    $(document).on("click","#update_admin",function(){
        var formData = new FormData($("#edit-form")[0]);
        console.log("form",formData);
        $.ajax({
            url: $("#edit-form").attr("action"),
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            datatype:"HTML",
            contentType: false,
            success: function (HTML) {
                if(HTML==0){
                    swal(window.Lang.lang.error, window.Lang.lang.UnexpectedError, "error", {
                        button: window.Lang.lang.OK
                    });
                }else{
                    $("#super_content").html(HTML);
                    hidepopup();
                }
            }
        });
    });
    $(document).on("click","#update_teacher",function(){
        var formData = new FormData($("#edit-form")[0]);
        $.ajax({
            url: $("#edit-form").attr("action"),
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            datatype:"HTML",
            contentType: false,
            success: function (HTML) {
                if(HTML==0){
                    swal(window.Lang.lang.error, window.Lang.lang.UnexpectedError, "error", {
                        button: window.Lang.lang.OK
                    });
                }else{
                    $("#super_content").html(HTML);
                    hidepopup();
                }
            }
        });
    });
    $(document).on("click","#update_student",function(){
        var formData = new FormData($("#edit-form")[0]);
        console.log(1111);
        $.ajax({
            url: $("#edit-form").attr("action"),
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            datatype:"HTML",
            contentType: false,
            success: function (HTML) {
                if(HTML==0){
                    swal(window.Lang.lang.error, window.Lang.lang.UnexpectedError, "error", {
                        button: window.Lang.lang.OK
                    });
                }else{
                    $("#super_content").html(HTML);
                    hidepopup();
                }
            }
        });
    });
    $(document).on("click","#searchstudent",function(){
        var formData = new FormData($("#edit-form")[0]);
        console.log("");
        $.ajax({
            url: $("#edit-form").attr("action"),
            type: 'POST',
            data: formData,
            cache: false,
            processData: false,
            datatype:"HTML",
            contentType: false,
            success: function (HTML) {
                if(HTML==0){
                    swal(window.Lang.lang.error, window.Lang.lang.UnexpectedError, "error", {
                        button: window.Lang.lang.OK
                    });
                }else{
                    $("#super_content").html(HTML);
                }
            }
        });
    });

    $(document).on("click",".jq_delete_user",function(){
       var data={};
        var action=$(this).attr("data-action");
        data["userid"]=$(this).attr("data-id");
        swal({
            title: window.Lang.lang.AreUSure,
            text: window.Lang.lang.DoUWDelThisUser,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: window.Lang.lang.Yes,
            cancelButtonText: window.Lang.lang.No,
            closeOnConfirm: false
        }, function () {
            showLoader();
            $.ajax({
                url: action,
                type: 'POST',
                data: data,
                cache: false,
                processData: false,
                datatype:"HTML",
                contentType: false,
                success: function (HTML) {
                    hideLoader();
                    if(HTML==0){
                        swal(window.Lang.lang.error, window.Lang.lang.UnexpectedError);
                    }else{
                        $("#super_content").html(HTML);
                        hidepopup();
                        swal(window.Lang.lang.UserHasBeenDelSuc);
                    }
                }
            });

        });
    });
    $(document).on("click","#popup_addteacher",function(){
        $("#popup_content").load(SITE_URL+Language+"/teachers/new");
        console.log();
        showpopup();
    });
    $(document).on("click","#popup_addstudent",function(){
        $("#popup_content").load(SITE_URL+Language+"/students/new");
        console.log();
        showpopup();
    });
    $(document).on("click","#edit_teacher",function(){
        $("#popup_content").load(SITE_URL+Language+"/teachers/"+$(this).attr("data-id")+"/edit",function(){
            loadPicker();
        });
        $("#popup_header").html(" - "+$(this).closest("tr").find(".name").html());
        showpopup();
    });
    $(document).on("click","#edit_student",function(){
        $("#popup_content").load(SITE_URL+Language+"/teachers/"+$(this).attr("data-id")+"/edit",function(){
            loadPicker();
        });
        $("#popup_header").html(" - "+$(this).closest("tr").find(".name").html());
        showpopup();
    })
});

function showLoader(){
    $(".page-loader-wrapper").show();
}
function hideLoader(){
    $(".page-loader-wrapper").hide();
}
