<?php
   require_once '../model/emprestimo.php';
   

   $emprestimo =  new Emprestimo(0,null,date("Y-m-d"),null,null,null); // cria um objeto de emprestimo com a data de empréstimo preenchida
   $emprestimos = []; // vetor com a lista de objetos emprestados
   $op = 'l'; // armazena a opção do usuário;
   if (isset($_REQUEST['op'])) { //usuario optou por incluir ou alterar usuario
      $op = $_REQUEST['op']; // obtem o valor do parametro op da requisição
      $emprestimo =  new Emprestimo(@$_REQUEST['id'],
                                    @$_REQUEST['descricao'],
                                    @$_REQUEST['dtaemprestimo'],
                                    null,
                                    @$_REQUEST['estacom'],
                                    @$_REQUEST['telefone']); // cria um novo objeto de empréstimo a partir dados dados da requisição
      if ($emprestimo->id > 0)     // caso o id do objeto emprestimo for maior que 1 o objeto já foi salvo anteriormente e pode ser alterado                                
         $emprestimo->alterar(); // altera no banco de dados
      else
         $emprestimo->incluir(); // incluir no banco de dados
      

   } if (isset($_REQUEST["id"])) {
      
      $id = $_REQUEST["id"];
      


   }  else {    
                        // usuário optou por listar os empréstimos
      $emprestimos = Emprestimo::listar();
      /*[
         new Emprestimo(1,
         "Pendrive azul",
         "23/08/2021",  
         null,
         'Andrea',
         '16-99992323')
      ];
      */
  }



   
?>