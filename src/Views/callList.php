<?php
    require_once("Components/layout.php")
?>
    <body>
        <?php
            require_once("Components/header.php");
        ?>
        <main>
            
            <div>
                <a href="./src/Views/createCall.php">
                    <button>New Call</button>
                </a>
            </div>
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Room</th>
                        <th>Issue</th>
                        <th>Id</th>
                    </tr>
                    
                    <?php
                    
                        foreach($data["call"] as $call){
                        echo "
                        <tr>
                            <td>{$call->dateTime}</td>
                            <td>{$call->room}</td>
                            <td>{$call->issue}</td>
                            <td>{$call->id}</td>
                            <td>
                                <a href='?action=delete&id={$call->id}'>❌</a>                            
                            </td>
                        </tr>";
                    };
                    ?>
                </table>
        </main>
        <?php
            require_once("Components/footer.php");
        ?>
    </body>
</html>