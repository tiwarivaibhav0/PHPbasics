<style>
    table{
        width:400px;
        border:1px solid black;
        text-align:center;
    }
    td{
        height:30px;
        width:30px;
    }
    .black{
        height:100%;
        width:100%;
        background-color:black;
        margin:auto;
    }
    .white{
        height:100%;
        width:100%;
        background-color:gray;
        margin:auto;
    }
    



</style>


<table>
<?php
  for($row=0;$row<8;$row++){ ?>
      <tr>
      <?php
        for($cell=0;$cell<8;$cell++){ ?>
        <?php 
           if(($row-$cell)%2==0) {
        ?>
          <td><div class="black"></div></td>
          <?php }
          else {
        ?>
           <td><div class="white"></div></td>
          
         
        

        <?php } } } ?>


   





</table>