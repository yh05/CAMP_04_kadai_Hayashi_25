// ・div#exの最初の表示時にフェードインから表示　※4秒
$(document).ready(function(){
         $('#ex').fadeIn(4000);
        })
    
// ・div#exを作成、文字列”<p>かきくけこ</p>”を挿入     
$(document).ready(function(){
    $("#second").on("click",function(){
    $("#check1").html("かきくけこ");
    
})
})

// ・div#exの背景を黒、文字色を白に変更
$(document).ready(function(){
    $("#third").on("click",function(){
    $("#ex").css('background-color','black');
    $("#check2").css("color","red");

    
})
})

// ・div#exの中、行頭に”<p>あいうえお</p>”を挿入
$(document).ready(function(){
    $("#four").on("click",function(){
$('#ex').prepend('<p>あいうえお</p>');

})
})

// ・div#exの中、末尾に”<p>さしすせそ</p>”を挿入
$(document).ready(function(){
    $("#five").on("click",function(){
$('#ex').append('<p>さしすせそ</p>');

})
})


// ・難問)div#ex内の偶数行だけ背景白にする


$(document).ready(function(){
    $("#six").on("click",function(){
$('#ex>li:even').css('background-color','white');
        
})
})
