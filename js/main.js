  $("document").ready(function(){
    /*========LOGIN=======*/
    $("button[name='entrar_login']").click(function(){
      var email=$("input[name='email_login']").val()
      var senha=$("input[name='senha_login']").val()
      if(email=="" || email.test()!="@"){
        $("input[name='email_login']").css("border","1px solid rgb(233, 38, 38)")
      }else{
        $("input[name='email_login']").css("border","none")
      }
      if(senha==""){
        $("input[name='senha_login']").css("border","1px solid rgb(233, 38, 38)")
      }else{
        $("input[name='senha_login']").css("border","none")
      }
      return false;
    })
  /*===================*/

  /*=====CADASTRO======*/
    
  /*===================*/
  })
