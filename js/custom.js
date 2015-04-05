$(document).ready(function(){
    if($('#login').click(function(){

            var name = $('#name').val();
            var email = $('#email').val();
            var pass = $('#password').val();
            var sub =$('#login').val();
            // alert(sub);
            // exit();
            /*$.post('classes/getValues.php',{
                    name:uname,
                    email:uemail,
                    pass:upass,
                    sub:submit
                },
                function(result){
                    alert(result);

                });   classes/getValues.php*/ 

                $.post('action.php',{
                s:name,
                t:email,
                e:pass,
                sub:sub
            },
            function(result){
                // alert(name);
                // exit();
                alert(result);
                $('#name').val('');
                $('#email').val('');
                $('#password').val('');
                // $('#mepPrice').val('');


            })//ajax end
        }));
});