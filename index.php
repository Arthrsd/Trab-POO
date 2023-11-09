<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    include_once"class.cliente.php";
    include_once"class.pessoa.php";
    include_once"class.paciente.php";
    include_once"class.procedimento.php";
    include_once"class.orcamento.php";
    include_once"class.procedimentoEscolhido.php";
    include_once"class.dentista.php";
    include_once"class.clt.php";
    include_once"class.sistema.php";
    include_once"class.especialidade.php";
    include_once"cadastrar.php";
    $u=array();
    
  

    $p=new Cliente("123","joao",1234,"asd",1234,"1234");
    $u[0]= new Paciente("12345","Arthur Soares",123,"a@gmail",$date = date_create('2000-01-01'),$p);
    $p->adicionarPaciente($u[0]);
    $pr= new Procedimento("dente","tirar dente",12.34);
    $prr= new Procedimento("dente","tirar dente",14.34);
    $pe=new ProcedimentoEscolhido;
    $d= new Dentista("tomas","Tomas",123,"12345",112345,123,"24433",$es=new Especialidade("cirurgia","cirurgiao",$pr),$pe);
    $o=new Orcamento($u[0],$d,$date=date_create("2001-01-01"),$pe);
    $pe->adicionarProcedimento($pr);
    $pe->adicionarProcedimento($prr);
    $pe->adicionarProcedimento($pc=new Procedimento("cirugia","cirurgia",430.25));
    $o->adicionarProcedimentoEscolhido($pe);
    $clt=new CLT("123","dn",1234,"wer","wer",1234,"dfjfj",$es,$pe);
    print($d->realizarProcedimento($pe));
    $c=new Cadastrar;
    $c->cadastrar($d);
    $c->cadastrar($clt);
    $c->cadastrarProcedimento($pr);
    $t=$o->aprovarOrcamento();
    $t->realizarProcedimento($pe);
  
   
    
    ?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>