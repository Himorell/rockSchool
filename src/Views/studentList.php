
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>
    <body>

        <main>

        <div class="actionCreate">
          <h1>Students class reservations</h1>
          <a href="?action=create"  class="btn btn-primary btn-sm">Add reservations</a> 
        </div>
        <div class="containerTable">
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
                            <a href='?action=edit&id={$student->getId()}'> edit </a>
                            <a class=actionDelete href='?action=delete&id={$student->getId()}'> delete </a>
                            </td>
                        </tr> 
                        ";
                    }?>

                    </tr>


                  </tbody>


                </table>
        </div>
</div>
        
            
        </main>


    <?php require_once("Components/footer.php");?>  
    <!-- <script src="./js/main.js"></script> -->

    </body>


</html>