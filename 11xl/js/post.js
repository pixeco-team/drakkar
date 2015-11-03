         function send(url,form_id,result_div)
         {
               
                $.ajax({
                        type: "POST",
                        url:  url,
                        data: $("#"+form_id).serialize(),
                        
                        success: function(html)
                        {
                                $("#"+result_div).empty();
                                $("#"+result_div).append(html);
                        },
                        error: function()
                        {
                            $("#"+result_div).empty();
                            $("#"+result_div).append("Ошибка!");
                        }
                        });
 
         }