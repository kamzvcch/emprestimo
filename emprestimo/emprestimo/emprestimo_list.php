<?php error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<div id='controles'>
  <a href="?op=i" type="button" class="btn btn-outline-secondary">Incluir</a>
</div>

<table class='table'> 
                <tr> 
                    <th >Objeto</th>  
                    <th >Pessoa</th>  
                    <th >Data Empréstimo</th>  
                    <th >Data Devolução</th>  
                    <th >Telefone</th>  
                </tr>  
                
           <?php
           
           foreach ($emprestimos as $emprestimo){
           echo "<tr>".
           "<td> <a href='?id=".$emprestimo->__get('id')." '>Alterar</a> </td>".
           "<td>".$emprestimo->__get('descricao')."</td>"
           ."<td>".$emprestimo->__get('estacom')."</td>"
           ."<td>".$emprestimo->__get('dtaemprestimo')."</td>"
           ."<td>".$emprestimo->__get('dtadevolucao')."</td>"
           ."<td>".$emprestimo->__get('telefone')."</td>"
           ."</tr>";
           }
?>

</table>

<script type="text/javascript">
    document.querySelectorAll(".excluir").forEach ( (botao)=> {
        botao.addEventListener('click',(e)=>{
            
            confirm("Confirma a exclusão do empréstimo?");
        
        });
    });
