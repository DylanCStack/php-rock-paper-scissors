$(document).ready(function() {
    $(document).keydown(function(event){
        if(event.which === 49){
            $("input:nth-of-type(3)").attr("checked", false);
            $("input:nth-of-type(2)").attr("checked", false);
            $("input:nth-of-type(1)").attr("checked", true);
        } else if (event.which === 50){
            $("input:nth-of-type(3)").attr("checked", false);
            $("input:nth-of-type(1)").attr("checked", false);
            $("input:nth-of-type(2)").attr("checked", true);
        } else if (event.which === 51){
            $("input:nth-of-type(2)").attr("checked", false);
            $("input:nth-of-type(1)").attr("checked", false);
            $("input:nth-of-type(3)").attr("checked", true);
        }else if(event.which === 37){
            $("input:nth-of-type(6)").attr("checked", false);
            $("input:nth-of-type(5)").attr("checked", false);
            $("input:nth-of-type(4)").attr("checked", true);
            console.log($("input:nth-of-type(4)").val());
        } else if (event.which === 40){
            $("input:nth-of-type(6)").attr("checked", false);
            $("input:nth-of-type(4)").attr("checked", false);
            $("input:nth-of-type(5)").attr("checked", true);
            console.log($("input:nth-of-type(5)").val());
        } else if (event.which === 39){
            $("input:nth-of-type(5)").attr("checked", false);
            $("input:nth-of-type(4)").attr("checked", false);
            $("input:nth-of-type(6)").attr("checked", true);
            console.log($("input:nth-of-type(6)").val());
        }
    });

    $("button#start").click(function(){
        var countDown = 3;
        setInterval(function(){
            $("#timer").text(countDown);
            if(countDown <=0){
                $("#timer").text("SHOOT!");
            }
            countDown--;
        },1000);
        setTimeout(function(){
            $("form").submit();
        },4500);
    });
})
