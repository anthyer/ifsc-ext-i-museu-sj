## 3.Implementação do Site do Museu de SJ com o Tainacan

##  Visão Geral
Este projeto consiste na criação do site oficial do **Museu de SJ**, utilizando o **Tainacan** como solução principal para a gestão e exibição do acervo digital. O Tainacan é um plugin para WordPress que permite a organização, catalogação e publicação de coleções digitais de forma flexível e personalizável.

##  Objetivos
- Disponibilizar um catálogo online acessível e intuitivo do acervo do museu.
- Utilizar o Tainacan para gerenciar metadados, coleções e itens culturais.
- Garantir uma experiência de usuário responsiva e acessível.
- Integrar o site com outras ferramentas do museu.

##  Tecnologias Utilizadas
- **WordPress** (CMS base)
- **Tainacan** (Plugin para coleções digitais)
- **HTML, CSS**(Front-end personalizado)
- **MySQL** (Banco de dados)

##  Funcionalidades Implementadas
### Catálogo Digital
- 📌 Busca avançada e filtros por metadados.
- 🖼️ Visualização detalhada de itens (imagens, descrição, histórico).

### Gestão de Coleções
- 🗂️ Organização por categorias, tags e taxonomias.
- 📤 Importação/exportação em CSV, JSON e outros formatos.

### Design e Acessibilidade
- 📱 Layout responsivo (desktop, tablet, mobile).
- ♿ Compatível com WCAG (contraste, leitores de tela).


##  Instalação e Configuração
### Pré-requisitos
- Servidor com **PHP 7.4+** e **MySQL 5.6+**.
- WordPress instalado.
- Acesso administrativo ao painel.

### Passos
1. **Instale o Tainacan**:
   ```bash
   # Via painel WordPress:
   Plugins > Adicionar Novo > Buscar "Tainacan" > Instalar e Ativar


## 4. Inclusão de Objetos 3D no Projeto

Dentro das informações específicas de cada obra cadastrada, há possibilidade de inserção de campo específico para links que direcionam até os objetos 3D das obras. 

Os objetos devem estar disponibilizados na diretório específico para tal, "/opt/lampp/htdocs/objetos3d/<pasta-contendo-objeto>".

As pastas dos objetos devem estar preparadas para sua visualização na internet, utilizando o endereço "<domínio>/objeto3d/<pasta-contendo-objeto>" é possível visualizá-los em tela cheia.

---

### 4.1. Inserindo os Links via Tainacan

Para inserção dos links como campo dentro das informações da obra, é necessário criar um metadado com esse intuito. Através da interface do Tainacan, basta seguir os passos:

1. Selecionar Tainacan na interface do Wordpress e selecionar Tainacan  
   ![Imagem 1](img/3d-tutorial-1.png)

2. Selecionar Metadados do repositório  
   ![Imagem 2](img/3d-tutorial-2.png)

3. Selecionar URL  
   ![Imagem 3](img/3d-tutorial-3.png)

4. Configurar os campos conforme desejado  
   ![Imagem 4](img/3d-tutorial-4.png)

---

Com o metadado configurado é possível inserir os links para os objetos 3D ao inserir/editar uma obra.

# 5. Passo a Passo para Implementação de Tour Virtual no Tainacan

## 📌 Pré-requisitos
- Instalação do Tainacan funcionando
- Acesso administrativo ao WordPress
- Arquivos do tour virtual prontos (imagens 360°, modelos 3D ou link de serviço externo)

---

## 🔧 Método 1: Usando Plugin WP VR (Recomendado)

### Passo 1: Instalar o Plugin
1. No painel WordPress, vá para `Plugins > Adicionar Novo`
2. Pesquise por "WP VR"
3. Instale e ative o plugin "WP VR - 360° Image Viewer"

### Passo 2: Criar o Tour Virtual
1. Vá para `WP VR > Add New Tour`
2. Faça upload das imagens 360°
3. Configure os hotspots e cenas conforme necessário
4. Publique o tour e copie o shortcode gerado (ex: `[wpvr id="123"]`)

### Passo 3: Integrar com Tainacan
1. Acesse a coleção desejada no Tainacan
2. Vá para `Metadados > Adicionar Novo`
   - Nome: "Tour Virtual"
   - Tipo: Texto HTML
   - Opções: Marcar "Exibir como conteúdo do item"
3. Salve o metadado

### Passo 4: Adicionar Tour a um Item
1. Edite um item existente ou crie um novo
2. No campo "Tour Virtual", cole o shortcode do WP VR
3. Salve o item

---

## 🌐 Método 2: Embed com Iframe (Para serviços externos)

### Passo 1: Obter Código de Embed
1. No serviço de tour virtual (Matterport/Kuula/etc.), localize a opção "Embed" ou "Incorporar"
2. Copie o código iframe fornecido

### Passo 2: Configurar Metadado no Tainacan
1. Na coleção, vá para `Metadados > Adicionar Novo`
   - Nome: "Tour Virtual Externo"
   - Tipo: Texto HTML
   - Opções: Habilitar "Permitir tags HTML"
2. Salve o metadado

### Passo 3: Adicionar ao Item
1. Edite o item desejado
2. No campo criado, cole o código iframe completo
3. Ajuste width/height se necessário (ex: `width="100%" height="500px"`)

---



