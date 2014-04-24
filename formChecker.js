$(document).ready(function(){
    
    function checkedString(str){
        wordNeedToReplace = ["<",">","select","where"];
        wordNeedToReplace.forEach(function(word){
            str = str.replace(new RegExp(word,'g'),"\""+word+"\"");
        })
        console.log(str);
        return str;
    }

    $(".needChecking").submit(function(){
        values = $(".needChecking").serializeArray();
        for (var i = 0; i < values.length; i++) {
            values[i].value = checkedString(values[i].value);
        };
        $.ajax({
            url:$(this).attr("action"),
            type:$(this).attr("method"),
            data:values,
            success:function(){
                alert("提交完成");
            }
        });
        return false;
    });
});