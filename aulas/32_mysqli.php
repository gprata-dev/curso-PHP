<?php 
    $host = "localhost:3307";
    $user = "root";
    $pass = "";
    $db = "phpmyadmin";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_errno) {
        echo "Erro na conexão! <br>";
        echo "Erro: " . mysqli_connect_error() . "<br>"; //ou $conn->connect_error
    }

    $query = "SELECT * FROM pma__bookmark";
    $result = $conn->query($query);
    print_r($result);
    echo "<br>";

    // 1 resultado
    // $dado = $result->fetch_assoc();
    // print_r($dado);

    echo "<br>";
    // todos os resultados
    $dados = $result->fetch_all();
    print_r($dados);


    //método seguro: prepared statements
    $stmt = $conn->prepare("INSERT INTO pma__bookmark (dbase, user, label, query) VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $db, $user, $host, $query); //s = string, i = int...
    $stmt->execute();

    echo "<br><br>";

    $id = 3;

    $stmt_sel1 = $conn->prepare("SELECT * FROM pma__bookmark WHERE id > ?");
    $stmt_sel1->bind_param("i", $id);
    $stmt_sel1->execute();
    $result_sel1 = $stmt_sel1->get_result();
    $data = $result_sel1->fetch_all();
    print_r($data);

    
    echo "<br><br>";

    $stmt_sel2 = $conn->prepare("SELECT * FROM pma__bookmark WHERE id = ?");
    $stmt_sel2->bind_param("i", $id);
    $stmt_sel2->execute();
    $result_sel2 = $stmt_sel2->get_result();
    $data = $result_sel2->fetch_row();
    print_r($data);


    echo "<br><br>";

    $db = "teste";
    $stmt_update = $conn->prepare("UPDATE pma__bookmark SET dbase = ? WHERE id = ?");
    //delete semelhante - $stmt_delete = $conn->prepare("DELETE FROM pma__bookmark WHERE id = ?");
    $stmt_update->bind_param("si", $db, $id);
    // $stmt_delete->bind_param("i", $id);
    $stmt_update->execute();

    if ($stmt_update->error) {
        echo "Erro ao atualizar! <br>";
        echo "Erro: " . $stmt_update->error . "<br>";
    }

    $conn->close();

?>