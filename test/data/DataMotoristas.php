<?php

namespace Data;

final class DataMotoristas {
  static function getAll() {
    $motoristas = [
      [
        "nome" => "Bruno",
        "carro" => [
          "ano" => 2004,
          "modelo" => "Golf",
          "cor" => "Prata",
          "placa" => "AES32O6",
          "marca" => "WV"]
      ],
      [
        "nome" => "Leticia",
        "carro" => [
          "ano" => 2012,
          "modelo" => "Uno",
          "cor" => "Preto",
          "placa" => "XTP150U2",
          "marca" => "Fiat"
        ]
      ]
      ];

    return $motoristas;
  }
}