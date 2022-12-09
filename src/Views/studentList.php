
<?php
    require_once("Components/layout.php");
    require_once("Components/header.php");
?>
    <main>
            <h1>Students class reservations</h1>
            <div class="addReservation">
                <a href="?action=create" class="actionCreate" onclick="executeExample('multipleInputs')">Add reservation</a> 
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
                    }
                ?>
                    </tr>
                </tbody>
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