
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>
    <body>

        <main>

        <div class="card" style="width: 18rem;">
  <div class="card-header">
    Students class reservations

      <a href="?action=create"  class="btn btn-primary btn-sm">Add reservations</a>

</div>

  </div>
  <table class="card-table table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Student</th>
        <th scope="col">Message</th>
        <th scope="col">Datatime</th>
      </tr>
    </thead>
    <tbody>
      <tr>


      <?php
                foreach ($data["student"] as $student) {
                  
                    echo "
                    <tr>    
                            <td>{$student->getId()}</td>
                            <td>{$student->getStudent()}</td>
                            <td>{$student->getMessage()}</td>
                            <td>{$student->getDateTime()}</td>
                            <td>
                            <a href='?action=edit&id={$student->getId()}'><i class='btn  btn-warning btn-sm lnr lnr-pencil'></i></a>
                            <a href='?action=delete&id={$student->getId()}'><i class='btn  btn-danger btn-sm lnr lnr-trash'></i></a>
                            </td>
                        </tr>
                        ";
                    }?>

      </tr>

    </tbody>

  </table>
</div>
        
            
        </main>


    <?php require_once("Components/footer.php");?>    
    </body>


</html>