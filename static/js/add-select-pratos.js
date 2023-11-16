let numSelects3 = 0;
let maxSelects3 = 2;

const adicionarSelectBtn3 = document.getElementById("adicionarSelectBtn-Pratos");

document.getElementById("adicionarSelectBtn-Pratos").addEventListener("click", function(event) {
    event.preventDefault(); // Evita a recarga da página

    if (numSelects3 < maxSelects3) {
        // Cria um novo elemento select
        var novoSelect = document.createElement("select");

        novoSelect.setAttribute("name", "select_almoco[]");
        novoSelect.setAttribute("data-tabela", "pratos_almoco_e_janta");
        novoSelect.classList.add("select_almoco");
        novoSelect.classList.add("select_all_almocos");
        novoSelect.classList.add("select_refeicao");

        // Crie um novo botão de exclusão
        var btnExcluir = document.createElement("button");
        btnExcluir.textContent = "Excluir opção";
        btnExcluir.addEventListener("click", function() {
            // Remove o select e o botão de exclusão quando o botão de exclusão é clicado
            document.getElementById("montar-pratos_box").removeChild(novoSelect);
            document.getElementById("montar-pratos_box").removeChild(btnExcluir);
            numSelects3--;
            adicionarSelectBtn3.disabled = false;
            atualizarSelectsAlmoco();
            calcularMacronutrientesSelecionados();
            getCaloriasRefeicoes();
        });

        // Fazer uma solicitação AJAX para obter opções do PHP (Estudar sobre)
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../templates/php-logic/obter_opcoes_pratos.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                novoSelect.innerHTML = xhr.responseText;
                document.getElementById("montar-pratos_box").appendChild(novoSelect);
                document.getElementById("montar-pratos_box").appendChild(btnExcluir);
                numSelects3++;

                if (numSelects3 >= maxSelects3) {
                    adicionarSelectBtn3.disabled = true;
                }
                atualizarSelectsAlmoco();
            }
        };
        xhr.send();
    }
});