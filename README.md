# 🎵 Album Manager

Sistema web de gerenciamento de álbuns desenvolvido em PHP com MySQL.

O projeto implementa as operações CRUD permitindo cadastrar, visualizar, editar e excluir álbuns.

---

## 🚀 Tecnologias utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- XAMPP
- Git/GitHub

---

## 📌 Funcionalidades

- [x] Cadastro de álbuns
- [x] Listagem de álbuns
- [x] Edição de informações
- [x] Exclusão de álbuns
- [x] Validação de campos obrigatórios
- [x] Mensagens de feedback ao usuário

---

## 📂 Estrutura do projeto
```

album-manager/

├── capas/

├── assets/

├── css/

├── database/

│   └── banco.sql

├── includes/

│   └── conexao.php

├── index.php

├── novo.php

├── salvar.php

├── editar.php

├── atualizar.php

└── excluir.php

```


## ⚙️ Como executar o projeto

### 1. Instalar o XAMPP

Baixe e instale o XAMPP.

### 2. Clonar o repositório

```bash

git clone URL_DO_REPOSITORIO

```

### 3. Mover para o htdocs

Coloque a pasta do projeto dentro:

```

xampp/htdocs

```

### 4. Criar o banco de dados

Abra o phpMyAdmin e importe:

```

database/banco.sql

```

### 5. Configurar conexão

Edite:

```

includes/conexao.php

```

Configure usuário e senha do MySQL.

### 6. Executar

Acesse:

```

http://localhost/album-manager

```

## 📸 Preview

Sistema com cards de álbuns, capas e informações detalhadas.

![Tela inicial](assets/tela-inicial.png)

### Cadastro de álbum

![Cadastro](assets/cadastro.png)

### Edição de álbum

![Edição](assets/edicao.png)

## 👨‍💻 Autor

Desenvolvido por Emanuel.