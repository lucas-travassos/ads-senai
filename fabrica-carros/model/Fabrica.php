<?php

require_once '../model/Carro.php';
require_once '../model/CarroModel.php';

class Fabrica
{
    private array $carros = [];

    public function getCarros(): array
    {
        return $this->carros;
    }

    public function setCarros(array $carros): void
    {
        $this->carros = $carros;
    }

    public function fabricarCarro($quantidade, $dados)
    {
        $carroModel = new CarroModel();

        for ($i = 0; $i < $quantidade; $i++) {

            $modelo = $dados["modelo_$i"];
            $cor = $dados["cor_$i"];

            $carro = new Carro($modelo, $cor);

            $this->carros[] = $carro;

            $carroModel->salvar($carro);
        }
    }

    public function excluirCarro(int $id): bool
    {
        $carroModel = new CarroModel();
        return $carroModel->excluir($id);
    }

    // public function venderCarro(string $modelo, string $cor): bool
    // {
    //     foreach ($this->carros as $index => $carro) {
    //         if ($carro->getModelo() === $modelo && $carro->getCor() === $cor) {
    //             unset($this->carros[$index]);
    //             $this->carros = array_values($this->carros); // Reindexa o array
    //             return true;
    //         }
    //     }
    //     return false;
    // }

    public function listarCarros(): string
    {
        $carroModel = new CarroModel();
        $carros = $carroModel->listar();

        if (empty($carros)) {
            return "<h2>Lista de Carros</h2><p>Nenhum carro fabricado ainda.</p>";
        }

        $info = "<h2>Lista de Carros Fabricados</h2>";
        $info .= "<p><strong>Total de carros:</strong> " . count($carros) . "</p>";
        $info .= "<hr style='margin: 20px 0; border: none; border-top: 2px solid #e0e0e0;'>";

        foreach ($carros as $carro) {
            $info .= "<div class='carro-card'>";
            $info .= "<h3>Carro #" . ($carro['id']) . "</h3>";
            $info .= "<p><strong>Modelo:</strong> " . htmlspecialchars($carro['modelo']) . "</p>";
            $info .= "<p><strong>Cor:</strong> " . htmlspecialchars($carro['cor']) . "</p>";

            // BOTÃO EDITAR
            $info .= "<form method='POST' action='../controllers/processa.php' style='margin-top:10px;'>";
            $info .= "<input type='hidden' name='acao' value='editar'>";
            $info .= "<input type='hidden' name='id' value='" . $carro['id'] . "'>";
            $info .= "<button type='submit'>Editar</button>";
            $info .= "</form>";

            // BOTÃO EXCLUIR
            $info .= "<form method='POST' action='../controllers/processa.php' style='margin-top:10px;'>";
            $info .= "<input type='hidden' name='acao' value='excluir'>";
            $info .= "<input type='hidden' name='id' value='" . $carro['id'] . "'>";
            $info .= "<button type='submit'>Excluir</button>";
            $info .= "</form>";

            $info .= "</div>";
        }
        return $info;
    }


    public function getModelosDisponiveis(): array
    {
        $modelos = [];
        foreach ($this->carros as $carro) {
            $modelo = $carro->getModelo();
            if (!in_array($modelo, $modelos)) {
                $modelos[] = $modelo;
            }
        }
        sort($modelos);
        return $modelos;
    }

    public function getCoresPorModelo(string $modelo): array
    {
        $cores = [];
        foreach ($this->carros as $carro) {
            if ($carro->getModelo() === $modelo) {
                $cor = $carro->getCor();
                if (!in_array($cor, $cores)) {
                    $cores[] = $cor;
                }
            }
        }
        sort($cores);
        return $cores;
    }
}
