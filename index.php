<?php
require_once "classes/classes.php"; 
require_once "settings/settings.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        td{
            border: 1px solid #747474;
            padding: 5px;
        }
    </style>
</head>
<body>
    <a href="users_add.php">Добавить</a><br><br>
    <table>
        <tr>
            <td>id</td>
            <td>Логин</td>
            <td>Роль</td>
        </tr>
        <?php
        //формируем и отправляеым запрос: выбрать все данные из таблицы users
        $result = $mysqli->query("SELECT * FROM users");

        //если кол-во записей больше 0 - выводим их
        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row["id"]}</td>";
                echo "<td>{$row["login"]}</td>";
                // echo "<td>{$row["type"]}</td>";
                if($row['type'] == 'backender'){
                    echo "<td>Бэкэнд разработчик</td>";
                }
                if($row['type'] == 'client'){
                    echo "<td>Клиент</td>";
                }
                if($row['type'] == 'frontender'){
                    echo "<td>Фронтэнд разработчик</td>";
                }
                echo "</tr>";
                echo "</pre>";
            }
        } else{
            echo "Нет данных в базе.";
        }
        ?>
    </table>
</body>
</html>