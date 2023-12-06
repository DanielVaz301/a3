<?php
if (!empty($_GET)) {
    $evento = array();
    $int = 0;
    $txtfile = "eventos.txt";
    if (file_exists($txtfile) && filesize($txtfile) != 0) {
        $fgc = file_get_contents($txtfile);
        $evento = unserialize($fgc);
        $int = count($evento);
    }
    $evento[$int]['day'] = $_GET['day'];
    $evento[$int]['month'] = $_GET['month'];
    $evento[$int]['year'] = $_GET['year'];
    $evento[$int]['nome'] = $_GET['nome'];
    $evento[$int]['horario'] = $_GET['horario'];


    $serializedData = serialize($evento);

    file_put_contents($txtfile, $serializedData);


}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A3</title>
    <link rel="stylesheet" href="code.css" />

</head>

<body>

    <form action="" method="GET">
        <div class="event" >
            <label id="title">Planner</label><br>
        </div>

        <div class="calendario">  
        <label for="day" id="day">Dia: </label>
        <select name="day" id="day">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>

        </select>

        <label for="month" id="month">Mes:</label>
        <select name="month" id="mes">
            <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Marco">Marco</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Junho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
        </select>

        <label for="year" id="year">Ano: </label>
        <select name="year" id="year">
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
            <option value="2031">2031</option>
            <option value="2032">2032</option>
            <option value="2033">2033</option>
        </select>

        <br>

        <div id="container">
            <div id="week">
                <div class="poptrf">
                    <h1>Tarefa:</h1><input name="nome" id="nome">
                    <h2>Horario:</h2><input name="horario" id="horario">
                    <input type="submit" id="button" value="Adicione uma tarefa">
                </div>
            </div>
        </div>
        </div>
    </form>
   

    <?php
    $txtfile = "eventos.txt";
    if (file_exists($txtfile)) {
        $recoveredData = file_get_contents('eventos.txt');
        $recoveredArray = unserialize($recoveredData);
        print_r($recoveredArray);
    }
            $arrayEvento = $_GET["evento"];

        $todosEventos = file('eventos.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($todosEventos as $eventos) {
            // separar os eventos em um array
            list($evento) = explode(':', $eventos);
        }

        // printar os arrays
        echo '<pre>';
        print_r($eventos);
        echo '</pre>';
    ?>
</body>

</html>