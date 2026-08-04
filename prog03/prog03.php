<?php
  // Manipulação de arquivos no php(relativamente simples)
  $fileId = fopen("nota.txt", "a+");
  $fileIdBackup = $fileId;

  // Variável que contém o texto a ser inserido no arquivo quando rodar o script
  $texto = "teste";


  echo "CONTEÚDO DO ARQUIVO nota.txt: ". "\n";
  while (!feof($fileId)) {
    $conteudo = fgets($fileId);
    echo $conteudo;
  }

  $nBytesGravados = fwrite($fileId, "\n" . $texto);
  echo "\nNúmero de Bytes Gravados: " . $nBytesGravados . "\n";
  fclose($fileId);

  $fileId = fopen("nota.txt", "a+");

  echo "\nNOVO CONTEÚDO DO ARQUIVO nota.txt: ". "\n";
  while (!feof($fileId)) {
    $conteudo = fgets($fileId);
    echo $conteudo;
  }
  echo "\n";
  fclose($fileId);