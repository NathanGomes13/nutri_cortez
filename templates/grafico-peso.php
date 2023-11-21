<canvas id="graficoPesoSemanal"></canvas>
<script>
    // Função para obter o primeiro dia da semana atual
    function getFirstDayOfCurrentWeek() {
        const today = new Date();
        const dayOfWeek = today.getDay();
        const firstDayOfWeek = new Date(today);
        firstDayOfWeek.setDate(today.getDate() - dayOfWeek);

        // Formatar a data no formato "yyyy-MM-dd"
        const formattedDate = `${firstDayOfWeek.getFullYear()}-${String(firstDayOfWeek.getMonth() + 1).padStart(2, '0')}-${String(firstDayOfWeek.getDate()).padStart(2, '0')}`;

        return formattedDate; // Formato yyyy-MM-dd
    }

    function generatePastWeeksDates() {
        const pastWeeksDates = [];
        const today = new Date();
        const dayOfWeek = today.getDay(); // Dia da semana atual (0 = Domingo, 1 = Segunda, ..., 6 = Sábado)

        for (let i = 0; i < 7; i++) {
            const weekStartDate = new Date(today); // Crie uma nova data com a data atual
            weekStartDate.setDate(today.getDate() - (dayOfWeek + 7 * i));

            // Formatar a data no formato "yyyy-MM-dd"
            const formattedDate = `${weekStartDate.getFullYear()}-${String(weekStartDate.getMonth() + 1).padStart(2, '0')}-${String(weekStartDate.getDate()).padStart(2, '0')}`;

            pastWeeksDates.push(formattedDate);
        }
        
        return pastWeeksDates;
    }

    // Preencher automaticamente o campo de data com o primeiro dia da semana atual
    const dataSemanalInput = document.getElementById('semana_peso');
    dataSemanalInput.value = getFirstDayOfCurrentWeek();

</script>
<script>
    <?php
        $semanas = [];
        $pesos = [];
        $sql = "SELECT * FROM peso_semanal WHERE id_usuario = $id ORDER BY semana_peso ASC";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $semana_peso = $row['semana_peso'];
                $peso_semanal = $row['peso'];

                $semanas[] = $semana_peso;
                $pesos[] = $peso_semanal;
            };
        };
    ?>
    let datas_semanas = <?php echo json_encode($semanas); ?>;
    let pesos_semanais = <?php echo json_encode($pesos); ?>;
    
    let pastWeeksDates = generatePastWeeksDates();
    pastWeeksDates.reverse();

    //mapear o 'pastWeeksDates' para comparar com as datas presentes no db
    const pesoDataCorreta = pastWeeksDates.map((data) => {
        const i = datas_semanas.indexOf(data); //quantidade de datas_semanas no 'i'
        return i !== -1 ? pesos_semanais[i] : null; //caso não seja -1, foi encontrado 'pastWeeksDates' no 'datas_semanas'
    });

    //formatar data
    function formatarData(data) {
        const partes = data.split("-");
        if (partes.length === 3) {
            return partes[2] + "/" + partes[1];
        }
        return data; // Caso a data não esteja no formato esperado
    }

    // Formatar as datas em pastWeeksDates
    const datasFormatadas = pastWeeksDates.map(formatarData);
    const ctx = document.getElementById('graficoPesoSemanal');
    new Chart(ctx, {
    type: 'line',
    data: {
        labels: datasFormatadas,
        datasets: [{
            label: 'Peso semanal',
            data: pesoDataCorreta,
            backgroundColor: [
                'rgb(204, 236, 221)',
                'rgb(127, 208, 169)',
            ],
            pointBackgroundColor: [
                'rgb(204, 236, 221)',
                'rgb(127, 208, 169)',
            ],
            borderColor: [
                'rgb(1, 179, 93)',
            ],
            borderWidth: 4,
            fill: true
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: false,
                min: 30,
            }
        }
    }
    });
</script>