$("document").ready(function(){
  //NOME
  $("p[class='msg']").hide()
  $("input[name='nome']").blur(function(){
    if($("input[name='nome']").val()==""){
      // $("div:eq(3)").prepend("<p class='msg' style='color:rgb(219, 41, 41);'>Preencha o campo Nome</p>")
      // $("body").css("background-color","#000")
      $("p[class='msg']:eq(0)").show()
    }else($("p[class='msg']:eq(0)").hide())
  })
//========
//RG
  $("input[name='rg']").blur(function(){
    if($("input[name='rg']").val()==""){
      $("p[class='msg']:eq(1)").show()
    }else($("p[class='msg']:eq(1)").hide())
  })
//=======
//CPF
  $("input[name='cpf']").blur(function(){
    if($("input[name='cpf']").val()==""){
      $("p[class='msg']:eq(2)").show()
    }else($("p[class='msg']:eq(2)").hide())
  })
//=========
//IDENTIDADE
$("input[name='enviar']").click(function(){
  if($("input[name='identidade']").val()==""){
    $("p[class='msg']:eq(3)").show()
    return false;
  }else($("p[class='msg']:eq(3)").hide())
})
//==========
//SELFIE COM A IDENTIDADE
$("input[name='enviar']").click(function(){
  if($("input[name='selfie_identidade']").val()==""){
    $("p[class='msg']:eq(4)").show()
    return false;
  }else($("p[class='msg']:eq(4)").hide())
})
//==========
//ENDEREÇO
$("input[name='endereco']").blur(function(){
  if($("input[name='endereco']").val()==""){
    $("p[class='msg']:eq(5)").show()
    return false;
  }else($("p[class='msg']:eq(5)").hide())
})
//==========
//COMPROVANTE DE RESIDÊNCIA
$("input[name='enviar']").click(function(){
  if($("input[name='comprovante_residencia']").val()==""){
    $("p[class='msg']:eq(6)").show()
    return false;
  }else($("p[class='msg']:eq(6)").hide())
})
//==========
//E-MAIL
$("input[name='email']").blur(function(){
  var email=$("input[name='email']").val()
  if(email=="" || email.test()!="@"){
    $("p[class='msg']:eq(7)").show()
    return false;
  }else($("p[class='msg']:eq(7)").hide())
})
//==========
//SENHA
$("input[name='senha']").blur(function(){
  var senha=$("input[name='senha']").val()
  if(senha==""){
    $("p[class='msg']:eq(8)").show()
    return false;
  }else($("p[class='msg']:eq(8)").hide())
})
//==========
//CONFIRMAR SENHA
$("input[name='conf_senha']").blur(function(){
  var conf_senha=$("input[name='conf_senha']").val()
  var senha=$("input[name='senha']").val()
  if(conf_senha=="" || conf_senha!=senha){
    $("p[class='msg']:eq(9)").show()
  }else($("p[class='msg']:eq(9)").hide())
})
//==========
})
