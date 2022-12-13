$(document).ready(function(){
    //show/hide menu subject
    $(".sj").click(function(){
        $(this).children("ul").toggle();
        // $(".sj").children("div").removeClass("active");
        // $(this).children("div").addClass("active");

    });
    $(".subject-item").hide();
    $(".sj .sj-list a").click(function(){
        $(".sj .sj-list a").removeClass("active");
        $(this).addClass("active");
        let location = $(this).attr("href");
        $(".subject-item").hide(); 
        $(".subject-content h1").hide();
        $(location).show();
        return false;
    });
    $(".subject-item .sj-lesson p").click(function(){
        $(this).children("embed").toggle();
        return false;
    });
})