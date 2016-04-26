
$(function () {
    $(".navbar-toggle, .sidebar, #sidebar").click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);
    });

    //Stop clicking glyphicon on panel-title
    $(".panel-title span").click(function(e) {
        e.stopPropagation();
    });


    // Remove menu for searching
    $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');
        setTimeout(function() { $('input[name="search"]').focus() }, 200);
    });


    //
    $(".glyphicon-star-empty , .glyphicon-star").click(function(e) {
        
        $(this).toggleClass('glyphicon-star-empty glyphicon-star');
        var classList = this.className.split(/\s+/);
        var clas = classList[1];
        var num = $(this).parent().attr('id');
        if ($.trim(clas) === 'glyphicon-star') {
            var req = 'data='+num;
            var ref = $(this);
            $.ajax({
                    url: '/set_bookmark.php',
                    data: req,
                    type: 'POST',
                    success: function(data){
                            if($.trim(data).indexOf("login")==0){
                                setTimeout(function() {
                                  ref.toggleClass('glyphicon-star glyphicon-star-empty');
                                }, 200);
                                setTimeout(function() {
                                  var r = confirm("Please Login to Bookmark a link\nGo to Login Page?");
                                  if(r)
                                  {
                                    window.location = '/login/';
                                  }
                                }, 700);  
                            }
                    },
                    error:function(){
                        $(this).toggleClass('glyphicon-star-empty glyphicon-star');
                    },
            });
        }
        else
        {
            var req = 'del='+num;
            var z = window.location.href;
            if(z.indexOf("account") >= 26 && z.indexOf("history") < 0)
            {
                $(this).parents().eq(4).hide();
            }
            $.ajax({
                    url: '/set_bookmark.php',
                    data: req,
                    type: 'POST',
                    success: function(data){},
                    error:function(){
                        $(this).toggleClass('glyphicon-star-empty glyphicon-star');
                    },
            });
        }
    });
    

    $(".glyphicon-thumbs-up").click(function(e) {
        $(this).toggleClass('th-up');
        var classList = this.className.split(/\s+/);
        var clas = classList[2];
        var num = $(this).parent().attr('id');
        var up = parseInt($("#"+num).children("sub").html().slice(7));
        var vote_up = up+1;
        var vote_down = up-1;
        var ref = $(this);      


        if ($.trim(clas) === 'th-up') {
            $("#"+num).children("sub").html("votes: "+vote_up);
            var req = 'data='+num;
            $.ajax({
                    url: '/set_thumb.php',
                    data: req,
                    type: 'POST',
                    success: function(data){
                            if($.trim(data).indexOf("login")==0){
                                setTimeout(function() {
                                  ref.toggleClass('th-up');
                                  $("#"+num).children("sub").html("votes: "+up);
                                }, 200);
                                setTimeout(function() {
                                  var r = confirm("Please Login to Vote\nGo to Login Page?");
                                  if(r)
                                  {
                                    window.location = '/login/';
                                  }
                                }, 700);  
                            }
                    },
                    error:function(){
                        ref.toggleClass('th-up');
                        $("#"+num).children("sub").html("votes: "+up);
                    },
            });
        }
        else
        {

            $("#"+num).children("sub").html("votes: "+vote_down);
            var req = 'del='+num;
            var z = window.location.href;
            $.ajax({
                    url: '/set_thumb.php',
                    data: req,
                    type: 'POST',
                    success: function(data){},
                    error:function(){
                        ref.toggleClass('th-up');
                        $("#"+num).children("sub").html("votes: "+up);
                    },
            });
        }
    });


});

function hide_bar(id)
{
    $('html, body').animate({
        scrollTop: $("#"+id).offset().top
    }, 1200);
}


function goTo(num){
    var req = 'data='+num;
    $.ajax({
            url: '/get_data.php',
            data: req,
            type: 'POST',
            success: function(data)
            {
                window.location= data;
               // window.location.assign(data);
               //window.open(data,'_blank');
            },
            error:function(){},
         });
}
