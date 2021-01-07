<?php
        
try {
  $pdo = new PDO('mysql:host=localhost;dbname=name_database', 'username', 'password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $pdo->prepare('INSERT INTO name_table (nome, sobrenome, email, telefone, celular, convenio, exame, especialidade, n_carteirinha, nec_especial, anexo, data_hoje, observacoes) VALUES(:nome, :sobrenome, :email, :telefone, :celular, :convenio, :exame, :especialidade, :ncarteirinha, :nec_especial, :anexo, :data, :observacoes)');
  $stmt->execute(array(
            ':nome' => $dados['nome'],
            ':sobrenome' => $dados['sobrenome'],
            ':email' => $dados['email'],
            ':telefone' => $tel_completo,
            ':celular' => $cel_completo, 
            ':convenio' => $convenio,
            ':exame' => $dados['exame'],
            ':especialidade' => $dados['especialidade'],
            ':ncarteirinha' => $dados['ncarteirinha'],
            ':nec_especial' => $qual,
            ':anexo' => "<a href='https://meusite.com.br/envia/imagens/{$nome_final}' download>" . $nome_final . "</a>",
            ':data' => $data,
            ':observacoes' => $dados['observacoes']
  ));          
  } catch(PDOException $e) { 
    echo 'Error: ' . $e->getMessage();
  }

?>
