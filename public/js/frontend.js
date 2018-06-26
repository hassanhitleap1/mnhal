$(document).on('click', '.btn-addMedia', function() {
    $(".default").removeClass("slideInRight").addClass("animated slideOutRight").hide();
    $(".add-media-div").removeClass("slideOutRight").addClass("animated slideInLeft").fadeIn();
});
$(document).on('click', '.btn-backMedia', function() {
    $(".default").removeClass("slideOutRight").addClass("animated slideInRight").fadeIn();
    $(".add-media-div").removeClass("slideInLeft").addClass("animated slideOutRight").hide();
});
$(document).ready(function () {
    $('.column100').on('mouseover',function(){
        var table1 = $(this).parent().parent().parent();
        var table2 = $(this).parent().parent();
        var verTable = $(table1).data('vertable')+"";
        var column = $(this).data('column') + "";

        $(table2).find("."+column).addClass('hov-column-'+ verTable);
        $(table1).find(".row100.head ."+column).addClass('hov-column-head-'+ verTable);
    });

    $('.column100').on('mouseout',function(){
        var table1 = $(this).parent().parent().parent();
        var table2 = $(this).parent().parent();
        var verTable = $(table1).data('vertable')+"";
        var column = $(this).data('column') + "";

        $(table2).find("."+column).removeClass('hov-column-'+ verTable);
        $(table1).find(".row100.head ."+column).removeClass('hov-column-head-'+ verTable);
    });

    $(document).on('change', ':file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
    // We can watch for our custom `fileselect` event like this
    $(':file').on('fileselect', function(event, numFiles, label) {
        var input = $(this).parents('.form-line').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
            input.val(log);
        } else {
        }
    });
    $.AdminBSB.browser.activate();
    $.AdminBSB.leftSideBar.activate();
    $.AdminBSB.rightSideBar.activate();
    $.AdminBSB.navbar.activate();
    $.AdminBSB.dropdownMenu.activate();
    $.AdminBSB.input.activate();
    $.AdminBSB.select.activate();
    $.AdminBSB.search.activate();
    skinChanger();
    activateNotificationAndTasksScroll();
    setSkinListHeightAndScroll(true);
    setSettingListHeightAndScroll(true);
    $(window).resize(function () {
        setSkinListHeightAndScroll(false);
        setSettingListHeightAndScroll(false);
    });
    setTimeout(function () { $('.page-loader-wrapper').fadeOut(); }, 50);

    loadPicker();

    $('.js-sweetalert button').on('click', function () {
        var type = $(this).data('type');
        if (type === 'basic') {
            showBasicMessage();
        }
        else if (type === 'with-title') {
            showWithTitleMessage();
        }
        else if (type === 'success') {
            showSuccessMessage();
        }
        else if (type === 'confirm') {
            showConfirmMessage();
        }
        else if (type === 'cancel') {
            showCancelMessage();
        }
        else if (type === 'with-custom-icon') {
            showWithCustomIconMessage();
        }
        else if (type === 'html-message') {
            showHtmlMessage();
        }
        else if (type === 'autoclose-timer') {
            showAutoCloseTimerMessage();
        }
        else if (type === 'prompt') {
            showPromptMessage();
        }
        else if (type === 'ajax-loader') {
            showAjaxLoaderMessage();
        }
    });
});
function showpopup() {
    $('#popup-container').show();
    $('#popup-container').addClass('in');
}
function hidepopup() {
    $('#popup-container').hide();
    $('#popup-container').removeClass('in');
}
if (typeof jQuery === "undefined") {
    throw new Error("jQuery plugins need to be before this file");
}
$.AdminBSB = {};
$.AdminBSB.options = {
    colors: {
        red: '#F44336',
        pink: '#E91E63',
        purple: '#9C27B0',
        deepPurple: '#673AB7',
        indigo: '#3F51B5',
        blue: '#2196F3',
        lightBlue: '#03A9F4',
        cyan: '#00BCD4',
        teal: '#009688',
        green: '#4CAF50',
        lightGreen: '#8BC34A',
        lime: '#CDDC39',
        yellow: '#ffe821',
        amber: '#FFC107',
        orange: '#FF9800',
        deepOrange: '#FF5722',
        brown: '#795548',
        grey: '#9E9E9E',
        blueGrey: '#607D8B',
        black: '#000000',
        white: '#ffffff',
        manhalgreen: '#6ac13c'
    },
    leftSideBar: {
        scrollColor: 'rgba(0,0,0,0.5)',
        scrollWidth: '4px',
        scrollAlwaysVisible: false,
        scrollBorderRadius: '0',
        scrollRailBorderRadius: '0',
        scrollActiveItemWhenPageLoad: true,
        breakpointWidth: 1170
    },
    dropdownMenu: {
        effectIn: 'fadeIn',
        effectOut: 'fadeOut'
    }
}

/* Left Sidebar - Function =================================================================================================
*  You can manage the left sidebar menu options
*  
*/
$.AdminBSB.leftSideBar = {
    activate: function () {
        var _this = this;
        var $body = $('body');
        var $overlay = $('.overlay');

        //Close sidebar
        $(window).click(function (e) {
            var $target = $(e.target);
            if (e.target.nodeName.toLowerCase() === 'i') { $target = $(e.target).parent(); }

            if (!$target.hasClass('bars') && _this.isOpen() && $target.parents('#leftsidebar').length === 0) {
                if (!$target.hasClass('js-right-sidebar')) $overlay.fadeOut();
                // $body.removeClass('overlay-open');
            }
        });

        $.each($('.menu-toggle.toggled'), function (i, val) {
            $(val).next().slideToggle(0);
        });

        //When page load
        $.each($('.menu .list li.active'), function (i, val) {
            var $activeAnchors = $(val).find('a:eq(0)');

            $activeAnchors.addClass('toggled');
            $activeAnchors.next().show();
        });

        //Collapse or Expand Menu
        $('.menu-toggle').on('click', function (e) {
            var $this = $(this);
            var $content = $this.next();

            if ($($this.parents('ul')[0]).hasClass('list')) {
                var $not = $(e.target).hasClass('menu-toggle') ? e.target : $(e.target).parents('.menu-toggle');

                $.each($('.menu-toggle.toggled').not($not).next(), function (i, val) {
                    if ($(val).is(':visible')) {
                        $(val).prev().toggleClass('toggled');
                        $(val).slideUp();
                    }
                });
            }

            $this.toggleClass('toggled');
            $content.slideToggle(320);
        });

        //Set menu height
        _this.setMenuHeight();
        _this.checkStatuForResize(true);
        $(window).resize(function () {
            _this.setMenuHeight();
            _this.checkStatuForResize(false);
        });

        //Set Waves
        Waves.attach('.menu .list a', ['waves-block']);
        Waves.init();
    },
    setMenuHeight: function (isFirstTime) {
        if (typeof $.fn.slimScroll != 'undefined') {
            var configs = $.AdminBSB.options.leftSideBar;
            var height = ($(window).height() - ($('.legal').outerHeight() + $('.user-info').outerHeight() + $('.navbar').innerHeight()));
            var $el = $('.list');

            $el.slimscroll({
                height: height + "px",
                color: configs.scrollColor,
                size: configs.scrollWidth,
                alwaysVisible: configs.scrollAlwaysVisible,
                borderRadius: configs.scrollBorderRadius,
                railBorderRadius: configs.scrollRailBorderRadius
            });

            //Scroll active menu item when page load, if option set = true
            if ($.AdminBSB.options.leftSideBar.scrollActiveItemWhenPageLoad) {
                var activeItemOffsetTop = $('.menu .list li.active')[0].offsetTop
                if (activeItemOffsetTop > 150) $el.slimscroll({ scrollTo: activeItemOffsetTop + 'px' });
            }
        }
    },
    checkStatuForResize: function (firstTime) {
        var $body = $('body');
        var $openCloseBar = $('.navbar .navbar-header .bars');
        var width = $body.width();

        if (firstTime) {
            $body.find('.content, .sidebar').addClass('no-animate').delay(1000).queue(function () {
                $(this).removeClass('no-animate').dequeue();
            });
        }

        if (width > $.AdminBSB.options.leftSideBar.breakpointWidth) {
            $body.addClass('ls-closed');
           // $openCloseBar.fadeIn();
        }
        else {
            $body.removeClass('ls-closed');
           // $openCloseBar.fadeOut();
        }
    },
    isOpen: function () {
        return $('body').hasClass('overlay-open');
    }
};
//==========================================================================================================================

/* Right Sidebar - Function ================================================================================================
*  You can manage the right sidebar menu options
*  
*/
$.AdminBSB.rightSideBar = {
    activate: function () {
        var _this = this;
        var $sidebar = $('#rightsidebar');
        var $overlay = $('.overlay');

        //Close sidebar
        $(window).click(function (e) {
            var $target = $(e.target);
            if (e.target.nodeName.toLowerCase() === 'i') { $target = $(e.target).parent(); }

            if (!$target.hasClass('js-right-sidebar') && _this.isOpen() && $target.parents('#rightsidebar').length === 0) {
                if (!$target.hasClass('bars')) $overlay.fadeOut();
                $sidebar.removeClass('open');
            }
        });
        $('.js-right-sidebar').on('click', function () {
            $sidebar.toggleClass('open');
            if (_this.isOpen()) { $overlay.fadeIn(); } else { $overlay.fadeOut(); }
        });
    },
    isOpen: function () {
        return $('.right-sidebar').hasClass('open');
    }
}
//==========================================================================================================================
/* Searchbar - Function ================================================================================================
*  You can manage the search bar
*  
*/
$.AdminBSB.search = {
    activate: function () {

        var _this = this;
        //Search button click event
        $('.js-search').on('click', function () {

            _this.showSearchBar();
        });
        //Close search click event
        $('.search-bar').find('.close-search').on('click', function () {
            _this.hideSearchBar();
        });
        //ESC key on pressed
        $('.search-bar').find('input[type="text"]').on('keyup', function (e) {
            if (e.keyCode == 27) {
               _this.hideSearchBar();
            }
        });
    },
    showSearchBar: function () {
        $('.search-bar').addClass('open');
        $('.search-bar').find('input[type="text"]').focus();
    },
    hideSearchBar: function () {
        $('.search-bar').removeClass('open');
        $('.search-bar').find('input[type="text"]').val('');
    }
}
//==========================================================================================================================

/* Navbar - Function =======================================================================================================
*  You can manage the navbar
*  
*/
$.AdminBSB.navbar = {
    activate: function () {
        var $body = $('body');
        var $overlay = $('.overlay');

        //Open left sidebar panel
        $('.bars').on('click', function () {
            $body.toggleClass('overlay-open');
            $body.toggleClass('full-width-admin');
            //if ($body.hasClass('overlay-open')) { $overlay.fadeOut(); } else { $overlay.fadeOut(); }
        });

        //Close collapse bar on click event
        $('.nav [data-close="true"]').on('click', function () {
            var isVisible = $('.navbar-toggle').is(':visible');
            var $navbarCollapse = $('.navbar-collapse');

            if (isVisible) {
                $navbarCollapse.slideUp(function () {
                    $navbarCollapse.removeClass('in').removeAttr('style');
                });
            }
        });
    }
}
//==========================================================================================================================

/* Input - Function ========================================================================================================
*  You can manage the inputs(also textareas) with name of class 'form-control'
*  
*/
$.AdminBSB.input = {
    activate: function () {
        //On focus event
        $('.form-control').focus(function () {
            $(this).parent().addClass('focused');
        });

        //On focusout event
        $('.form-control').focusout(function () {
            var $this = $(this);
            if ($this.parents('.form-group').hasClass('form-float')) {
                if ($this.val() == '') { $this.parents('.form-line').removeClass('focused'); }
            }
            else {
                $this.parents('.form-line').removeClass('focused');
            }
        });

        //On label click
        $('body').on('click', '.form-float .form-line .form-label', function () {
            $(this).parent().find('input').focus();
        });

        //Not blank form
        $('.form-control').each(function () {
            if ($(this).val() !== '') {
                $(this).parents('.form-line').addClass('focused');
            }
        });
    }
}
//==========================================================================================================================

/* Form - Select - Function ================================================================================================
*  You can manage the 'select' of form elements
*  
*/
$.AdminBSB.select = {
    activate: function () {
        if ($.fn.selectpicker) { $('select:not(.ms)').selectpicker(); }
    }
}
//==========================================================================================================================

/* DropdownMenu - Function =================================================================================================
*  You can manage the dropdown menu
*  
*/

$.AdminBSB.dropdownMenu = {
    activate: function () {
        var _this = this;

        $('.dropdown, .dropup, .btn-group').on({
            "show.bs.dropdown": function () {
                var dropdown = _this.dropdownEffect(this);
                _this.dropdownEffectStart(dropdown, dropdown.effectIn);
            },
            "shown.bs.dropdown": function () {
                var dropdown = _this.dropdownEffect(this);
                if (dropdown.effectIn && dropdown.effectOut) {
                    _this.dropdownEffectEnd(dropdown, function () { });
                }
            },
            "hide.bs.dropdown": function (e) {
                var dropdown = _this.dropdownEffect(this);
                if (dropdown.effectOut) {
                    e.preventDefault();
                    _this.dropdownEffectStart(dropdown, dropdown.effectOut);
                    _this.dropdownEffectEnd(dropdown, function () {
                        dropdown.dropdown.removeClass('open');
                    });
                }
            }
        });

        //Set Waves
        Waves.attach('.dropdown-menu li a', ['waves-block']);
        Waves.init();
    },
    dropdownEffect: function (target) {
        var effectIn = $.AdminBSB.options.dropdownMenu.effectIn, effectOut = $.AdminBSB.options.dropdownMenu.effectOut;
        var dropdown = $(target), dropdownMenu = $('.dropdown-menu', target);

        if (dropdown.length > 0) {
            var udEffectIn = dropdown.data('effect-in');
            var udEffectOut = dropdown.data('effect-out');
            if (udEffectIn !== undefined) { effectIn = udEffectIn; }
            if (udEffectOut !== undefined) { effectOut = udEffectOut; }
        }

        return {
            target: target,
            dropdown: dropdown,
            dropdownMenu: dropdownMenu,
            effectIn: effectIn,
            effectOut: effectOut
        };
    },
    dropdownEffectStart: function (data, effectToStart) {
        if (effectToStart) {
            data.dropdown.addClass('dropdown-animating');
            data.dropdownMenu.addClass('animated dropdown-animated');
            data.dropdownMenu.addClass(effectToStart);
        }
    },
    dropdownEffectEnd: function (data, callback) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        data.dropdown.one(animationEnd, function () {
            data.dropdown.removeClass('dropdown-animating');
            data.dropdownMenu.removeClass('animated dropdown-animated');
            data.dropdownMenu.removeClass(data.effectIn);
            data.dropdownMenu.removeClass(data.effectOut);

            if (typeof callback == 'function') {
                callback();
            }
        });
    }
}
//==========================================================================================================================

/* Browser - Function ======================================================================================================
*  You can manage browser
*  
*/
var edge = 'Microsoft Edge';
var ie10 = 'Internet Explorer 10';
var ie11 = 'Internet Explorer 11';
var opera = 'Opera';
var firefox = 'Mozilla Firefox';
var chrome = 'Google Chrome';
var safari = 'Safari';

$.AdminBSB.browser = {
    activate: function () {
        var _this = this;
        var className = _this.getClassName();

        if (className !== '') $('html').addClass(_this.getClassName());
    },
    getBrowser: function () {
        var userAgent = navigator.userAgent.toLowerCase();

        if (/edge/i.test(userAgent)) {
            return edge;
        } else if (/rv:11/i.test(userAgent)) {
            return ie11;
        } else if (/msie 10/i.test(userAgent)) {
            return ie10;
        } else if (/opr/i.test(userAgent)) {
            return opera;
        } else if (/chrome/i.test(userAgent)) {
            return chrome;
        } else if (/firefox/i.test(userAgent)) {
            return firefox;
        } else if (!!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/)) {
            return safari;
        }

        return undefined;
    },
    getClassName: function () {
        var browser = this.getBrowser();

        if (browser === edge) {
            return 'edge';
        } else if (browser === ie11) {
            return 'ie11';
        } else if (browser === ie10) {
            return 'ie10';
        } else if (browser === opera) {
            return 'opera';
        } else if (browser === chrome) {
            return 'chrome';
        } else if (browser === firefox) {
            return 'firefox';
        } else if (browser === safari) {
            return 'safari';
        } else {
            return '';
        }
    }
}
//==========================================================================================================================

//Skin changer
function skinChanger() {
    $('.right-sidebar .demo-choose-skin li').on('click', function () {
        var $body = $('body');
        var $this = $(this);

        var existTheme = $('.right-sidebar .demo-choose-skin li.active').data('theme');
        $('.right-sidebar .demo-choose-skin li').removeClass('active');
        $body.removeClass('theme-' + existTheme);
        $this.addClass('active');
        $body.addClass('theme-' + $this.data('theme'));
    });
}

//Skin tab content set height and show scroll
function setSkinListHeightAndScroll(isFirstTime) {
    var height = $(window).height() - ($('.navbar').innerHeight() + $('.right-sidebar .nav-tabs').outerHeight());
    var $el = $('.demo-choose-skin');

    if (!isFirstTime){
        $el.slimScroll({ destroy: true }).height('auto');
        $el.parent().find('.slimScrollBar, .slimScrollRail').remove();
    }

    $el.slimscroll({
        height: height + 'px',
        color: 'rgba(0,0,0,0.5)',
        size: '6px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Setting tab content set height and show scroll
function setSettingListHeightAndScroll(isFirstTime) {
    var height = $(window).height() - ($('.navbar').innerHeight() + $('.right-sidebar .nav-tabs').outerHeight());
    var $el = $('.right-sidebar .demo-settings');

    if (!isFirstTime){
        $el.slimScroll({ destroy: true }).height('auto');
        $el.parent().find('.slimScrollBar, .slimScrollRail').remove();
    }

    $el.slimscroll({
        height: height + 'px',
        color: 'rgba(0,0,0,0.5)',
        size: '6px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Activate notification and task dropdown on top right menu
function activateNotificationAndTasksScroll() {
    $('.navbar-right .dropdown-menu .body .menu').slimscroll({
        height: '254px',
        color: 'rgba(0,0,0,0.5)',
        size: '4px',
        alwaysVisible: false,
        borderRadius: '0',
        railBorderRadius: '0'
    });
}

//Google Analiytics ======================================================================================
addLoadEvent(loadTracking);
var trackingId = 'UA-30038099-6';

function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function () {
            oldonload();
            func();
        }
    }
}

function loadTracking() {
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', trackingId, 'auto');
    ga('send', 'pageview');
}
//========================================================================================================


function loadPicker(){
    //Datetimepicker plugin
    $('.datetimepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1
    });

    $('.datepicker').bootstrapMaterialDatePicker({
        clearButton: true,
        weekStart: 1,
        time: false
    });

    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });
}
//These codes takes from http://t4t5.github.io/sweetalert/
function showBasicMessage() {
    swal("Here's a message!");
}

function showWithTitleMessage() {
    swal("Here's a message!", "It's pretty, isn't it?");
}

function showSuccessMessage() {
    swal("Good job!", "You clicked the button!", "success");
}

function showConfirmMessage() {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
    });
}

function showCancelMessage() {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
}

function showWithCustomIconMessage() {
    swal({
        title: "Sweet!",
        text: "Here's a custom image.",
        imageUrl: "../../images/thumbs-up.png"
    });
}

function showHtmlMessage() {
    swal({
        title: "HTML <small>Title</small>!",
        text: "A custom <span style=\"color: #CC0000\">html<span> message.",
        html: true
    });
}

function showAutoCloseTimerMessage() {
    swal({
        title: "Auto close alert!",
        text: "I will close in 2 seconds.",
        timer: 2000,
        showConfirmButton: false
    });
}

function showPromptMessage() {
    swal({
        title: "An input!",
        text: "Write something interesting:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Write something"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("You need to write something!"); return false
        }
        swal("Nice!", "You wrote: " + inputValue, "success");
    });
}

function showAjaxLoaderMessage() {
    swal({
        title: "Ajax request example",
        text: "Submit to run ajax request",
        type: "info",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
    }, function () {
        setTimeout(function () {
            swal("Ajax request finished!");
        }, 2000);
    });
}
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
    $(document).on("click","#update_group",function(){
        var formData = new FormData($("#edit-form")[0]);
        console.log();
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
    $(document).on("click","#popup_addgroup",function(){
        $("#popup_content").load(SITE_URL+Language+"/groups/new");
        console.log(1111 );
        showpopup();
    });
    $(document).on("click","#edit_teacher",function(){
        $("#popup_content").load(SITE_URL+Language+"/teachers/"+$(this).attr("data-id")+"/edit",function(){
            loadPicker();
        });
        $("#popup_header").html(" - "+$(this).closest("tr").find(".name").html());
        showpopup();
    });
    $(document).on("click","#edit_group",function(){

        $("#popup_content").load(SITE_URL+Language+"/groups/"+$(this).attr("data-id")+"/edit",function(){
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
