
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>
    <main>
            <h1>Students class reservations</h1>
            <div class="addReservation">
                <a href="?action=create" class="actionCreate">Add reservation</a> 
                <div id="bars">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
            <table>
               
                    <tr>
                        <td class="col" scope="col">id</td>
                        <td class="col"  scope="col">Student</td>
                        <td class="col" scope="col">Message</td>
                        <td class="col" scope="col">Datatime</td>
                        <td class="col" class="borderActions" scope="col">Actions</td>
                    </tr>
               
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
                            <div class='actionButtons'>
                                <div class='boxActionDelete' onclick='executeExample('multipleInputs')'>
                                    <a href='?action=delete&id={$student->getId()}' class='actionDelete'> delete </a>
                                    <span class='iconDel'></span>
                                </div>
                                <div class='boxActionEdit'>
                                    <a href='?action=edit&id={$student->getId()}' class='actionEdit'> edit </a>
                                    <span class='iconEdit'></span>
                                </div>
                            </div>
                        </td>


                    </tr> 
                        ";
                    }
                ?>
                    </tr>
              
            </table>
            <div class="musicNotes">
                <div class="note-1">
                    &#9835; &#9833;
                </div>
                <div class="note-2">
                    &#9833;
                </div>
                <div class="note-3">
                    &#9839; &#9834;
                </div>
                <div class="note-4">
                    &#9834;
                </div>
            </div>
        </main>


    <?php require_once("Components/footer.php");?>  
    <!-- <script src="./js/main.js"></script> -->

    </body>


</html>