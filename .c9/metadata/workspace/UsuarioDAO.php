{"filter":false,"title":"UsuarioDAO.php","tooltip":"/UsuarioDAO.php","undoManager":{"mark":66,"position":66,"stack":[[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":1},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"]},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"]}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["?"]},{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["r"],"id":3},{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["e"]},{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"insert","lines":["q"]},{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":["u"]},{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["i"]},{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"insert","lines":["r"]},{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"insert","lines":["e"]}],[{"start":{"row":1,"column":7},"end":{"row":1,"column":8},"action":"insert","lines":["_"],"id":4},{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"insert","lines":["o"]},{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":["n"]},{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["e"]}],[{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"remove","lines":["e"],"id":5}],[{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["c"],"id":6},{"start":{"row":1,"column":11},"end":{"row":1,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":1,"column":12},"end":{"row":1,"column":14},"action":"insert","lines":["()"],"id":7}],[{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"insert","lines":[";"],"id":8}],[{"start":{"row":1,"column":13},"end":{"row":1,"column":15},"action":"insert","lines":["\"\""],"id":9}],[{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"insert","lines":["c"],"id":10},{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"insert","lines":["o"]},{"start":{"row":1,"column":16},"end":{"row":1,"column":17},"action":"insert","lines":["n"]},{"start":{"row":1,"column":17},"end":{"row":1,"column":18},"action":"insert","lines":["e"]},{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"insert","lines":["x"]},{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"insert","lines":["a"]},{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"insert","lines":["o"]}],[{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"insert","lines":["D"],"id":11},{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"insert","lines":["B"]}],[{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"insert","lines":["."],"id":12},{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"insert","lines":["p"]},{"start":{"row":1,"column":25},"end":{"row":1,"column":26},"action":"insert","lines":["h"]},{"start":{"row":1,"column":26},"end":{"row":1,"column":27},"action":"insert","lines":["p"]}],[{"start":{"row":1,"column":30},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":3,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":["class ClienteDAO{","    public function login($usuario,$senha){","        $dbh = conectar();","        $sql = $dbh->query(\"select codigo_cliente, nome_cliente, nome_usuario, senha from clientes where nome_usuario = '\".$usuario.\"' AND senha = '\".$senha.\"';\");","        $linha = $sql->fetch(PDO::FETCH_ASSOC);","        if($sql->execute()) {","            $cliente = new Cliente();","            $cliente->codigo = $linha['codigo_cliente'];","            $cliente->nome = $linha['nome_cliente'];","            $cliente->usuario = $linha['nome_usuario'];","            $cliente->senha = $linha['senha'];","            return $cliente;","        }","    }","","    public function cadastrarSe($nome,$usuario,$senha){","        $dbh = conectar();","        $sql = \"insert into clientes (nome_cliente,nome_usuario,senha) \".","        \"values(:nome,:usuario,:senha);\";","        $stmt = $dbh->prepare($sql);","        $stmt->bindParam(\"nome\", $nome);","        $stmt->bindParam(\"usuario\", $usuario);","        $stmt->bindParam(\"senha\", $senha);","        $stmt->execute();","        $stmt=null;","    }","    ","","","}"],"id":14}],[{"start":{"row":3,"column":6},"end":{"row":3,"column":13},"action":"remove","lines":["Cliente"],"id":15},{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"insert","lines":["U"]},{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"insert","lines":["S"]}],[{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"remove","lines":["S"],"id":16}],[{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"insert","lines":["s"],"id":17},{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":["u"]},{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":["a"]},{"start":{"row":3,"column":10},"end":{"row":3,"column":11},"action":"insert","lines":["r"]},{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"insert","lines":["i"]},{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"insert","lines":["o"]}],[{"start":{"row":4,"column":27},"end":{"row":4,"column":34},"action":"remove","lines":["usuario"],"id":18},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["c"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"insert","lines":["p"]},{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"insert","lines":["f"]}],[{"start":{"row":5,"column":9},"end":{"row":5,"column":12},"action":"remove","lines":["dbh"],"id":19},{"start":{"row":5,"column":9},"end":{"row":5,"column":10},"action":"insert","lines":["b"]},{"start":{"row":5,"column":10},"end":{"row":5,"column":11},"action":"insert","lines":["a"]},{"start":{"row":5,"column":11},"end":{"row":5,"column":12},"action":"insert","lines":["n"]},{"start":{"row":5,"column":12},"end":{"row":5,"column":13},"action":"insert","lines":["c"]},{"start":{"row":5,"column":13},"end":{"row":5,"column":14},"action":"insert","lines":["o"]}],[{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"remove","lines":["h"],"id":20},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"remove","lines":["b"]},{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"remove","lines":["d"]}],[{"start":{"row":6,"column":16},"end":{"row":6,"column":17},"action":"insert","lines":["b"],"id":21},{"start":{"row":6,"column":17},"end":{"row":6,"column":18},"action":"insert","lines":["a"]},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["n"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["c"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["o"]}],[{"start":{"row":6,"column":30},"end":{"row":6,"column":163},"action":"remove","lines":["select codigo_cliente, nome_cliente, nome_usuario, senha from clientes where nome_usuario = '\".$usuario.\"' AND senha = '\".$senha.\"';\""],"id":22},{"start":{"row":6,"column":30},"end":{"row":6,"column":146},"action":"insert","lines":["SELECT * FROM USUARIO as U INNER JOIN SENHA as s ON u.cpf = s.USUARIO_cpf WHERE cpf = '$cpf' AND senha = '$senha';\";"]}],[{"start":{"row":6,"column":145},"end":{"row":6,"column":146},"action":"remove","lines":[";"],"id":23}],[{"start":{"row":10,"column":39},"end":{"row":10,"column":53},"action":"remove","lines":["codigo_cliente"],"id":24},{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":["n"]}],[{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"remove","lines":["n"],"id":25}],[{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":["c"],"id":26},{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"insert","lines":["p"]},{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"insert","lines":["f"]}],[{"start":{"row":10,"column":23},"end":{"row":10,"column":28},"action":"remove","lines":["odigo"],"id":27},{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"insert","lines":["c"]},{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"insert","lines":["p"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":26},"action":"insert","lines":["f"]}],[{"start":{"row":11,"column":41},"end":{"row":11,"column":49},"action":"remove","lines":["_cliente"],"id":28}],[{"start":{"row":12,"column":22},"end":{"row":12,"column":29},"action":"remove","lines":["usuario"],"id":29},{"start":{"row":12,"column":22},"end":{"row":12,"column":23},"action":"insert","lines":["e"]},{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["m"]},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"insert","lines":["a"]},{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"insert","lines":["i"]},{"start":{"row":12,"column":26},"end":{"row":12,"column":27},"action":"insert","lines":["l"]}],[{"start":{"row":12,"column":38},"end":{"row":12,"column":50},"action":"remove","lines":["nome_usuario"],"id":30},{"start":{"row":12,"column":38},"end":{"row":12,"column":39},"action":"insert","lines":["e"]},{"start":{"row":12,"column":39},"end":{"row":12,"column":40},"action":"insert","lines":["m"]},{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"insert","lines":["a"]},{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"insert","lines":["i"]},{"start":{"row":12,"column":42},"end":{"row":12,"column":43},"action":"insert","lines":["l"]}],[{"start":{"row":13,"column":46},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":31},{"start":{"row":14,"column":0},"end":{"row":14,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":46},"action":"insert","lines":["$cliente->senha = $linha['senha'];"],"id":32}],[{"start":{"row":14,"column":22},"end":{"row":14,"column":27},"action":"remove","lines":["senha"],"id":33},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["d"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["a"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["t"]},{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["a"]},{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":["S"]},{"start":{"row":14,"column":27},"end":{"row":14,"column":28},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":28},"end":{"row":14,"column":29},"action":"insert","lines":["n"],"id":34},{"start":{"row":14,"column":29},"end":{"row":14,"column":30},"action":"insert","lines":["h"]},{"start":{"row":14,"column":30},"end":{"row":14,"column":31},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":42},"end":{"row":14,"column":47},"action":"remove","lines":["senha"],"id":35},{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"insert","lines":["d"]},{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"insert","lines":["a"]},{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"insert","lines":["t"]},{"start":{"row":14,"column":45},"end":{"row":14,"column":46},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":46},"end":{"row":14,"column":47},"action":"insert","lines":["_"],"id":36},{"start":{"row":14,"column":47},"end":{"row":14,"column":48},"action":"insert","lines":["s"]},{"start":{"row":14,"column":48},"end":{"row":14,"column":49},"action":"insert","lines":["e"]},{"start":{"row":14,"column":49},"end":{"row":14,"column":50},"action":"insert","lines":["n"]},{"start":{"row":14,"column":50},"end":{"row":14,"column":51},"action":"insert","lines":["h"]},{"start":{"row":14,"column":51},"end":{"row":14,"column":52},"action":"insert","lines":["a"]}],[{"start":{"row":14,"column":55},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":46},"action":"insert","lines":["$cliente->senha = $linha['senha'];"],"id":38}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":27},"action":"remove","lines":["senha"],"id":39},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["c"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"insert","lines":["o"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"insert","lines":["d"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"insert","lines":["i"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"insert","lines":["g"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["o"]},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["S"]},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":["e"]},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["n"]},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"insert","lines":["h"]}],[{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"insert","lines":["a"],"id":40}],[{"start":{"row":15,"column":44},"end":{"row":15,"column":45},"action":"insert","lines":["c"],"id":41},{"start":{"row":15,"column":45},"end":{"row":15,"column":46},"action":"insert","lines":["o"]},{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"insert","lines":["d"]},{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"insert","lines":["i"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"insert","lines":["g"]},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"insert","lines":["o"]},{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"insert","lines":[")"]}],[{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"remove","lines":[")"],"id":42}],[{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"insert","lines":["_"],"id":43}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":37},"action":"remove","lines":["nome"],"id":44},{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"insert","lines":["c"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["p"]},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["f"]}],[{"start":{"row":20,"column":38},"end":{"row":20,"column":45},"action":"remove","lines":["usuario"],"id":45},{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["n"]},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":["o"]},{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"insert","lines":["m"]},{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"insert","lines":["e"]}],[{"start":{"row":20,"column":44},"end":{"row":20,"column":49},"action":"remove","lines":["senha"],"id":46},{"start":{"row":20,"column":44},"end":{"row":20,"column":45},"action":"insert","lines":["e"]},{"start":{"row":20,"column":45},"end":{"row":20,"column":46},"action":"insert","lines":["m"]},{"start":{"row":20,"column":46},"end":{"row":20,"column":47},"action":"insert","lines":["a"]},{"start":{"row":20,"column":47},"end":{"row":20,"column":48},"action":"insert","lines":["i"]},{"start":{"row":20,"column":48},"end":{"row":20,"column":49},"action":"insert","lines":["l"]}],[{"start":{"row":20,"column":49},"end":{"row":20,"column":50},"action":"insert","lines":[","],"id":47}],[{"start":{"row":20,"column":50},"end":{"row":20,"column":51},"action":"insert","lines":[" "],"id":48}],[{"start":{"row":20,"column":51},"end":{"row":20,"column":52},"action":"insert","lines":["$"],"id":49},{"start":{"row":20,"column":52},"end":{"row":20,"column":53},"action":"insert","lines":["s"]},{"start":{"row":20,"column":53},"end":{"row":20,"column":54},"action":"insert","lines":["e"]},{"start":{"row":20,"column":54},"end":{"row":20,"column":55},"action":"insert","lines":["n"]},{"start":{"row":20,"column":55},"end":{"row":20,"column":56},"action":"insert","lines":["h"]},{"start":{"row":20,"column":56},"end":{"row":20,"column":57},"action":"insert","lines":["a"]}],[{"start":{"row":21,"column":9},"end":{"row":21,"column":12},"action":"remove","lines":["dbh"],"id":50},{"start":{"row":21,"column":9},"end":{"row":21,"column":10},"action":"insert","lines":["b"]},{"start":{"row":21,"column":10},"end":{"row":21,"column":11},"action":"insert","lines":["a"]},{"start":{"row":21,"column":11},"end":{"row":21,"column":12},"action":"insert","lines":["n"]},{"start":{"row":21,"column":12},"end":{"row":21,"column":13},"action":"insert","lines":["c"]},{"start":{"row":21,"column":13},"end":{"row":21,"column":14},"action":"insert","lines":["o"]}],[{"start":{"row":22,"column":16},"end":{"row":23,"column":39},"action":"remove","lines":["insert into clientes (nome_cliente,nome_usuario,senha) \".","        \"values(:nome,:usuario,:senha);"],"id":51},{"start":{"row":22,"column":16},"end":{"row":22,"column":92},"action":"insert","lines":["INSERT INTO USUARIO(cpf, nome, email, ativo) VALUES(:cpf, :nome, :email, 0);"]}],[{"start":{"row":22,"column":8},"end":{"row":26,"column":42},"action":"remove","lines":["$sql = \"INSERT INTO USUARIO(cpf, nome, email, ativo) VALUES(:cpf, :nome, :email, 0);\";","        $stmt = $dbh->prepare($sql);","        $stmt->bindParam(\"nome\", $nome);","        $stmt->bindParam(\"usuario\", $usuario);","        $stmt->bindParam(\"senha\", $senha);"],"id":52},{"start":{"row":22,"column":8},"end":{"row":26,"column":35},"action":"insert","lines":["$sql = \"INSERT INTO USUARIO(cpf, nome, email, ativo) VALUES(:cpf, :nome, :email, 0);\";","$stmt = $banco->prepare($sql);","$stmt->bindValue(\":cpf\", $cpf);","$stmt->bindValue(\":nome\", $nome);","$stmt->bindValue(\":email\", $email);"]}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "],"id":53},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "],"id":54},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":26,"column":43},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":55},{"start":{"row":27,"column":0},"end":{"row":27,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":27,"column":8},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":56},{"start":{"row":28,"column":0},"end":{"row":28,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":28,"column":8},"end":{"row":35,"column":32},"action":"insert","lines":["$senha = md5($senha);","$dataSenha = date('Y-m-d');","","$sql2 = \"INSERT INTO SENHA(data_senha, senha, USUARIO_cpf) VALUES(:data, :senha, :cpf);\";","$stmt2 = $banco->prepare($sql2);","$stmt2->bindValue(\":data\", $dataSenha);","$stmt2->bindValue(\":senha\", $senha);","$stmt2->bindValue(\":cpf\", $cpf);"],"id":57}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "],"id":58},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "],"id":59},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":36,"column":8},"end":{"row":37,"column":19},"action":"remove","lines":["$stmt->execute();","        $stmt=null;"],"id":60}],[{"start":{"row":27,"column":8},"end":{"row":28,"column":19},"action":"insert","lines":["$stmt->execute();","        $stmt=null;"],"id":61}],[{"start":{"row":28,"column":19},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":62},{"start":{"row":29,"column":0},"end":{"row":29,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":34,"column":13},"end":{"row":34,"column":14},"action":"remove","lines":["2"],"id":63}],[{"start":{"row":35,"column":13},"end":{"row":35,"column":14},"action":"remove","lines":["2"],"id":64}],[{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"remove","lines":["2"],"id":65}],[{"start":{"row":37,"column":13},"end":{"row":37,"column":14},"action":"remove","lines":["2"],"id":66}],[{"start":{"row":38,"column":8},"end":{"row":39,"column":19},"action":"insert","lines":["$stmt->execute();","        $stmt=null;"],"id":67}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":28},"end":{"row":16,"column":28},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527718362185,"hash":"4a9127141ae664b3d1f32a52b497ded56e2ecfdd"}