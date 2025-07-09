# Documentação do Projeto: Site do Museu de SJ com WordPress e Tainacan

## 1. O que é o WordPress

WordPress é um sistema de gerenciamento de conteúdo (CMS) de código aberto, utilizado para criar, gerenciar e manter sites e blogs. Ele permite que usuários criem websites dinâmicos sem necessidade de conhecimentos avançados em programação.

### 1.1. Principais Características Técnicas

- **Código Aberto**: O WordPress é gratuito e de código aberto, permitindo que qualquer pessoa utilize, modifique e distribua o software.
- **Interface de Administração**: Fornece uma interface amigável para criação de posts, páginas, upload de mídia e ajustes de configurações, sem necessidade de escrever código.
- **Arquitetura Flexível**: Permite a criação de sites simples ou complexos, com suporte a tipos de conteúdo personalizados (Custom Post Types) e taxonomias.
- **Segurança e Atualizações**: O WordPress é atualizado regularmente para aprimorar a segurança e adicionar funcionalidades. Plugins de segurança também estão disponíveis.

### 1.2. Temas e Plugins

- **Temas**: Controlam o design e a aparência do site.
- **Plugins**: Adicionam funcionalidades extras ao WordPress, como galerias, formulários de contato, SEO, entre outros.

---

## 2. O que é o Tainacan

Tainacan é um plugin para WordPress que transforma o CMS em uma plataforma de repositório digital de código aberto. Ele permite que instituições e usuários criem, organizem e publiquem coleções digitais com facilidade e flexibilidade.

### 2.1. Principais Recursos

- **Coleções**: Agrupamentos de itens digitais como fotos, documentos e vídeos.
- **Itens**: Cada item é tratado como um post do WordPress, com campos personalizados (metadados).
- **Metadados**: Informações como autor, data e tipo de material são armazenadas como campos personalizados no banco de dados.
- **Taxonomias**: Classificação dos itens por categorias, temas e outros critérios.

---

## 3. Implementação do Site do Museu de SJ com o Tainacan

### 3.1. Visão Geral

Este projeto consiste na criação do site oficial do Museu de SJ, utilizando o Tainacan como solução para gestão e exibição do acervo digital.

### 3.2. Objetivos

- Disponibilizar um catálogo online acessível e intuitivo.
- Utilizar o Tainacan para gerenciar metadados, coleções e itens.
- Garantir uma experiência responsiva e acessível.
- Integrar com outras ferramentas e serviços do museu.

### 3.3. Tecnologias Utilizadas

- **WordPress** (CMS)
- **Tainacan** (plugin de repositório digital)
- **HTML e CSS** (front-end personalizado)
- **MySQL** (banco de dados)

### 3.4. Funcionalidades Implementadas

#### Catálogo Digital

- Busca avançada e filtros por metadados.
- Visualização detalhada dos itens (imagens, descrição, histórico).

#### Gestão de Coleções

- Organização por categorias, tags e taxonomias.
- Suporte a importação/exportação em CSV, JSON, entre outros formatos.

#### Design e Acessibilidade

- Layout responsivo (desktop, tablet e celular).
- Compatibilidade com as diretrizes de acessibilidade (WCAG).

---

## 4. Inclusão de Objetos 3D no Projeto

Dentro das informações específicas de cada obra cadastrada, há a possibilidade de inserção de um campo para links que direcionam até os objetos 3D.

Os objetos devem estar armazenados em um diretório específico:  
`/opt/lampp/htdocs/objetos3d/<pasta-do-objeto>`

Para visualização, o acesso deve ser feito via URL no seguinte formato:  
`<domínio>/objeto3d/<pasta-do-objeto>`

### 4.1. Inserindo os Links via Tainacan

1. Acesse o menu **Tainacan** no painel do WordPress.  
   ![Imagem 1](img/3d-tutorial-1.png)

2. Clique em **Metadados do Repositório**.  
   ![Imagem 2](img/3d-tutorial-2.png)

3. Adicione um metadado do tipo **URL**.  
   ![Imagem 3](img/3d-tutorial-3.png)

4. Configure os campos conforme necessário.  
   ![Imagem 4](img/3d-tutorial-4.png)

Após a criação do metadado, os links para os objetos 3D poderão ser inseridos durante a edição ou criação de uma nova obra.

---

## 5. Passo a Passo para Implementação de Tour Virtual no Tainacan

### 5.1. Pré-requisitos

- Tainacan instalado e funcionando.
- Acesso administrativo ao painel WordPress.
- Arquivos do tour virtual prontos (imagens 360°, modelos 3D ou links externos).

---

### 5.2. Método 1: Usando o Plugin WP VR (Recomendado)

#### Passo 1: Instalação do Plugin

1. Vá em `Plugins > Adicionar Novo` no painel WordPress.
2. Pesquise por **WP VR**.
3. Instale e ative o plugin **WP VR - 360° Image Viewer**.

#### Passo 2: Criação do Tour Virtual

1. Vá em `WP VR > Add New Tour`.
2. Faça o upload das imagens 360°.
3. Configure os hotspots e cenas.
4. Publique o tour e copie o shortcode gerado (ex: `[wpvr id="123"]`).

#### Passo 3: Integração com Tainacan

1. Acesse a coleção no Tainacan.
2. Vá em `Metadados > Adicionar Novo`:
   - Nome: **Tour Virtual**
   - Tipo: **Texto HTML**
   - Marque a opção **Exibir como conteúdo do item**
3. Salve o metadado.

#### Passo 4: Adicionar o Tour a um Item

1. Edite ou crie um item.
2. Cole o shortcode do tour virtual no campo correspondente.
3. Salve o item.

---

### 5.3. Método 2: Embed com Iframe (Para Serviços Externos)

#### Passo 1: Obter o Código de Incorporação

1. Acesse o serviço de tour virtual (como Matterport, Kuula etc.).
2. Copie o código iframe na opção de incorporação.

#### Passo 2: Criar Metadado no Tainacan

1. Vá em `Metadados > Adicionar Novo`:
   - Nome: **Tour Virtual Externo**
   - Tipo: **Texto HTML**
   - Marque a opção **Permitir tags HTML**
2. Salve o metadado.

#### Passo 3: Inserir no Item

1. Edite o item desejado.
2. Cole o código iframe no campo criado.
3. Ajuste a largura e altura se necessário (ex: `width="100%" height="500px"`).

---

## 6. Instalação do Projeto com WordPress + Tainacan via XAMPP (Ubuntu Server sem Interface Gráfica)

Este guia descreve como configurar um ambiente completo com WordPress e o plugin Tainacan utilizando o XAMPP em um servidor Ubuntu Linux sem interface gráfica (modo terminal). A instalação inclui configuração do banco de dados, permissões de arquivos e ativação do plugin Tainacan.

---

### 6.1. Pré-requisitos

- Ubuntu 20.04 ou superior
- Acesso root ou `sudo`
- Conexão com a internet
- Utilitários: `wget`, `tar`, `unzip`, `nano`

---

### 6.2. Instalação do XAMPP

```bash
wget https://www.apachefriends.org/xampp-files/8.2.12/xampp-linux-x64-8.2.12-0-installer.run
chmod +x xampp-linux-x64-8.2.12-0-installer.run
sudo ./xampp-linux-x64-8.2.12-0-installer.run
sudo /opt/lampp/lampp start
```

---

### 6.3. Instalação do WordPress

```bash
cd /opt/lampp/htdocs
wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
mv wordpress museu-sj
sudo chown -R daemon:daemon museu-sj
sudo find museu-sj -type d -exec chmod 755 {} \;
sudo find museu-sj -type f -exec chmod 644 {} \;
```

---

### 6.4. Configuração do Banco de Dados via phpMyAdmin (Interface Web)

1. Localize o IP do servidor Ubuntu:

```bash
ip a | grep inet
```

2. Acesse o phpMyAdmin no navegador:

`http://<IP_DO_SERVIDOR>/phpmyadmin`

3. Clique em Bases de dados e crie a base museu_db com collation utf8mb4_unicode_ci.

---

### 6.5 Acesso à Instalação via Navegador

1. No navegador de outro computador na rede, acesse:

`http://<IP_DO_SERVIDOR>/museu-sj`

2. Siga o assistente de instalação do WordPress:

- Escolha o idioma
- Insira os dados do banco de dados
- Informe título do site, usuário, senha e e-mail administrador

---

### 6.6. Instalação do Plugin Tainacan via Interface Web

1. Acesse o painel do WordPress:

`http://<IP_DO_SERVIDOR>/museu-sj/wp-admin`

2. Faça login com o usuário administrador.

3. Vá para `Plugins > Adicionar Novo`

4. Pesquise por "Tainacan".

5. Clique em Instalar agora e depois em Ativar.

---

### 6.7. Uso do Plugin Tainacan

Após a ativação, o Tainacan aparecerá no menu lateral do painel WordPress. A partir daí, configure suas coleções, metadados e comece a gerenciar seu acervo digital.

---
