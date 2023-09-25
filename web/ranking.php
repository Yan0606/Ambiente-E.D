<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking do Quiz</title>
    <link rel="stylesheet" href="./css/rank.css">
</head>
<body>
    <div class="ranking-container">
        <h2>Ranking do Quiz</h2>
        <table>
            <tr>
                <th>Nome de Usuário</th>
                <th>Pontuação</th>
            </tr>

            <?php
            // Dados de conexão com o banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "ambienteed";

            // Cria uma conexão com o banco de dados
            $conn = new mysqli($servername, $username, $password, $database);

            // Verifica a conexão
            if ($conn->connect_error) {
                die("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            // Consulta SQL para buscar nome de usuário e pontuação
            $sql = "SELECT u.nome, r.resultado FROM usuarios u JOIN resultados_quiz r ON u.id = r.usuario_id ORDER BY r.resultado DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["resultado"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Nenhum resultado encontrado.</td></tr>";
            }

            // Fecha a conexão com o banco de dados
            $conn->close();
            ?>
        </table>
        <a href="index.php"><button>Voltar</button></a>
    </div>
</body>
</html>
