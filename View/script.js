
function load() {
 
   function $s(id) { return document.getElementById(id); }
           //ПЕРЕМЕННЫЕ
            var submit = $s("submit");
            var sort = $s("sort");
            var username = $s("username");
            var email = $s("email");
            var comment = $s("comment");
            var close = $s("close");
            var open = $s("open");
            var prewiev = $s("prewiev");
            var form = $s("form");
            var username_prev = $s("username_prev");
            var email_prev = $s("email_prev");
            var comment_prev = $s("comment_prev");
            var submit_prev = $s("submit_prev");
            var login = $s("login");
            var password = $s("password");
            var enter = $s("enter");
            var checkbox = document.getElementsByClassName("checkbox");
            var exit = $s("exit");
            var textarea = document.getElementsByClassName("textarea");
            var body = $s("body");
             var exit = document.getElementsByClassName("exit");
             var option = $s("option");
             var edit = document.getElementsByClassName("edit");
             var file = $s("file");
             var file_prev = $s("file_prev");
            //ПЕРЕМЕННЫЕ

            //ОТПРАВКА ФОРМЫ

                submit.addEventListener("click",
                function () {
                username.setAttribute("required", "required");                    
                email.setAttribute("required", "required");  
                comment.setAttribute("required", "required");                  

                          },
            false);

              //ОТПРАВКА ФОРМЫ  

              //СОРТИРОВКА СООБЩЕНИЙ
            sort.addEventListener("click",
                function () {
                username.removeAttribute("required");                    
                email.removeAttribute("required");
                comment.removeAttribute("required");  
                username.value = "";         
                email.value = "";     
                comment.value = "";     
         
                          },
            false);
               //СОРТИРОВКА СООБЩЕНИЙ  

               //ПАНЕЛЬ ПРЕДВАРТИТЕЛЬНОГО ПРОСМОТРА
            file.addEventListener("change",
            function(e) {
                             
                 file_prev.value = this.files[0].name.replace(/\.\w+/,'');             
                          },
            );

             open.addEventListener("click",
                function () {
                
               prewiev.style.display = "block"; 
               form.style.display = "none";
               username_prev.value = username.value;
               email_prev.value = email.value;
               comment_prev.value = comment.value;
              
                          },
            false);



             close.addEventListener("click",
                function () {
                
                prewiev.style.display = "none";
                form.style.display = "block";
                          },
            false);

             submit_prev.addEventListener("click",
                function () {
                
               submit.click();
                          },
            false);
}
            //ПАНЕЛЬ ПРЕДВАРТИТЕЛЬНОГО ПРОСМОТРА
            //ВХОД В ПАНЕЛЬ АДМИНИСТРАТОРА
function on(){
              var textarea = document.getElementsByClassName("textarea");
              var edit = document.getElementsByClassName("edit");
              var panel = document.getElementsByClassName("panel");
            

              for (var i = 0; i < textarea.length; i++)
               {
                      textarea[i].removeAttribute("disabled");
                }
                                        
              for (var i =0; i < edit.length; i++){

                    edit[i].removeAttribute("disabled"); 

               }
               for (var i =0; i < panel.length; i++){

                    panel[i].style.display = "block"; 

               }
          
               login.style.display = "none";
               password.style.display = "none";
               enter.style.display = "none";
               exit.style.display = "block";


}
            //ВХОД В ПАНЕЛЬ АДМИНИСТРАТОРА
            //ВЫХОД ИЗ ПАНЕЛИ АДМИНИСТРАТОРА

function off(){
              var textarea = document.getElementsByClassName("textarea");
              var edit = document.getElementsByClassName("edit");
              var submit = document.getElementsByClassName("submit");

              for (var i =0; i < textarea.length; i++)
                    {
                      textarea[i].setAttribute("disabled", "disabled");
                    }
       
              for (var i =0; i < edit.length; i++)
              {
              edit[i].setAttribute("disabled", "disabled"); 
              }
              for (var i =0; i < submit.length; i++)
              {
              submit[i].style.display="none"; 
              }
              login.style.display = "block";
               password.style.display = "block";
               enter.style.display = "block";
               exit.style.display = "none";
}
           //ВЫХОД ИЗ ПАНЕЛИ АДМИНИСТРАТОРА