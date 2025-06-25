## O que é o Wordpress?

WordPress é um sistema de gerenciamento de conteúdo de código aberto, utilizado para criar, gerenciar e manter sites e blogs. Ele permite que usuários criem websites dinâmicos sem precisar de habilidades avançadas de programação.

## Principais Características Técnicas:

- Código Aberto: O WordPress é gratuito e de código aberto, o que significa que qualquer pessoa pode usar, modificar e distribuir o software.

## Temas e Plugins:

Temas controlam o design e a aparência do site.

O WordPress fornece uma interface de administração fácil de usar, permitindo que os usuários gerenciem conteúdo sem precisar escrever código. Essa interface permite a criação de posts, páginas, upload de mídia, e ajustes de configurações do site.

Arquitetura Flexível: O WordPress permite que o usuário crie sites com diferentes tipos de conteúdo, desde blogs simples até sites complexos com múltiplas funcionalidades. Ele suporta a adição de Custom Post Types e Taxonomias para organizar conteúdos de forma personalizada.

Segurança e Atualizações: O WordPress é constantemente atualizado para melhorar a segurança e adicionar novas funcionalidades. Existem também plugins específicos para reforçar a segurança do site.

Resumindo, o WordPress é uma plataforma poderosa e flexível para criação de websites, oferecendo facilidade de uso para iniciantes e robustez para desenvolvedores. Ele é amplamente utilizado em todo o mundo, desde blogs pessoais até sites empresariais complexos.

## O que é o Tainacan? 

Tainacan é um plugin para WordPress que serve como plataforma de repositório digital de código aberto, poderosa e flexível para o WordPress. Gerencie e publique suas coleções digitais tão facilmente como você publica no seu blogue, tendo todas as ferramentas de uma plataforma de repositório profissional. Pode ser usado para a criação de uma coleção digital, uma biblioteca digital ou um repositório digital para sua coleção institucional ou pessoal.

## Como Funciona com o Banco de Dados?

O Tainacan armazena informações sobre as coleções e seus itens no banco de dados do WordPress, utilizando:

- Coleções: Agrupamentos de itens digitais, como fotos, documentos e vídeos.
- Itens: Cada item é tratado como um "post" no WordPress, com informações como nome, descrição e imagens.
- Metadados: São informações adicionais (como autor, data e tipo de material) armazenadas como campos personalizados no banco de dados.
- Taxonomia: Permite organizar e classificar itens por categorias (ex: tipo de material, tema).

## Funcionalidades de Busca e Filtros

O Tainacan permite pesquisar e filtrar itens com base em metadados e categorias, facilitando a navegação no repositório.

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



