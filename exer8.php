<?php
class Veiculo
{
    public $quilometragem = 0;

    public function rodar($km)
    {
        $this->quilometragem += $km;
    }

    public function exibirQuilometragem()
    {
        return "Quilometragem atual: " . $this->quilometragem . " km";
    }
}

$veiculo = new Veiculo();

$veiculo->rodar(100);
$veiculo->rodar(50);

echo $veiculo->exibirQuilometragem();
