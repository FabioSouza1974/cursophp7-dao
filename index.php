<?php 
    require_once("config.php");

    // $sql = new Sql();    
    // $usuarios = $sql->select("SELECT * FROM tb_usuarios");
    // echo json_encode($usuarios);

    //carrega um usuario
    // $root = new Usuario();
    // $root->loadbyId(3);
    // echo $root;

    //carrega uma lista de usuarios
    //como o metodo é static, posso chamar direto sem precisar estanciar a classe Usuario
    // $lista = Usuario::getList();
    // echo json_encode($lista);

    //carrega uma lista de usuarios buscando pelo login
    // $search = Usuario::search("jo");
    // echo json_encode($search);

    //carrega um usuario usando o login e a senha
    // $usuario = new Usuario();
    // $usuario->login("root","a1b2c3");
    // echo $usuario;

    //criando um novo usuario
    // $aluno = new Usuario("aluno1","@lun01");
    // $aluno->insert();
    // echo $aluno;

    //atualizando dados de um usuario
    $usuario = new Usuario();
    $usuario->loadById(13);
    $usuario->update("professor","profe$$0r");
    echo $usuario;
?>