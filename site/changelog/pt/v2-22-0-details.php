<b>Sincronização Holyrics Plan</b>
A opção "compartilhar" nativa do programa (Holyrics Plan, e não Google Drive) agora é sincronizado em tempo real.
Diferente de antes que era necessário acessar a janela e fazer upload/download dos itens manualmente.
Continua compartilhando apenas dados básicos: letra de música, lista de reprodução, cultos, eventos, etc.
Essa mudança para sincronização automática vai permitir a implementação do app "Holyrics Plan" que será disponibilizado futuramente.
Permitindo acessar pelo celular os dados da conta Holyrics Plan em tempo real.
E também vai permitir edição pelo app (criar ou editar letra de música, escala, etc.) que, consequentemente, as edições do app também serão sincronizadas automaticamente no programa do computador

<b>Funcionalidade "Telegram Arquivos"</b>
Com uma assinatura Holyrics Plan, o usuário tem disponível uma opção para criar um bot personalizado do Telegram para uso no ecossistema Holyrics.
A funcionalidade <b>Telegram Arquivos</b> permite que usuários enviem arquivos ao seu bot personalizado, e você pode acessar esses arquivos diretamente pela janela do programa, com praticidade para organizar e receber arquivos de outras pessoas que serão exibidos no programa Holyrics.
Limite de 20MB para envio do arquivo diretamente no chat.
Mas é possível enviar um link do Google Drive no chat para arquivos maiores.

<b>Renomear arquivo</b>
Opção para renomear ou mover os arquivos (clicando com o botão direito do mouse) da biblioteca do programa atualizando as referências para o arquivo utilizadas no programa.
Por exemplo, caso o arquivo esteja adicionado na barra de favoritos, ao renomeá-lo ou movê-lo, a referência na barra de favoritos também será atualizada.
Isso evita problemas e erros ao adicionar um arquivo em alguma funcionalidade do programa (barra de favoritos, por exemplo) e, ao renomear o arquivo pelo sistema operacional, o item adicionado anteriormente continua apontando para o nome anterior, dando erro de arquivo não encontrado.
Referências atualizadas: lista de reprodução (cultos e eventos), barra de favoritos, gatilhos, Input Param (script/api), papel de parede de eventos

<b>Imagens na aba de vídeos</b>
É possível adicionar imagens na aba de vídeos do programa, para que a imagem se comporte como um vídeo, sendo exibido pelo VLC Player, por exemplo.
A duração padrão de uma imagem executada como vídeo é de 10 segundos, podendo ser alterado nas configurações do VLC Player (3 pontinhos).
E podendo alterar a duração de cada imagem individualmente clicando com o botão direito do mouse em cima da imagem.

<b>Importar um arquivo de vídeo ou imagem diretamente para um slide</b>
É possível arrastar um arquivo de vídeo ou imagem do computador diretamente para um slide na janela de edição de letra (ou texto), para que seja utilizado como plano de fundo do slide.
Isso é útil para casos em que o usuário tenha vídeos ou imagens já prontas para cada parágrafo da música.
Por exemplo, se alguém fizer um "video letra" com animações, e cortar o vídeo em parágrafos, pode adicionar o vídeo como plano de fundo específico para cada parágrafo correspondente.
Porém sem necessidade de adicionar os vídeos ou imagens na aba "meus vídeos" ou "minhas imagens" na janela de plano de fundo de tema, evitando que backgrounds específicos de um slide de uma música fique adicionado e misturado com os backgrounds reutilizáveis dos temas.

<b>Funcionalidade "Ação de Contexto"</b>
Possibilita a criação de scripts que recebem a informação de um item específico que foi executado.
Ao clicar com o botão direito do mouse em um vídeo, por exemplo, vai aparecer um submenu com os scripts disponíveis.
Ao selecionar um script para ação, o respectivo vídeo será enviado como <b>"obj"</b> para o script para ser executado.
Esse script pode, por exemplo, executar o próprio vídeo recebido como parâmetro, e iniciar uma contagem regressiva baseado na duração do vídeo.
Sem necessariamente criar um gatilho para isso.
Na prática, permite que o usuário crie ações personalizadas para itens no programa, que podem ser rapidamente executadas em qualquer item com o botão direito do mouse.

<b>Redirecionar Mensagem Personalizada para JavaScript</b>
A opção de <b>Mensagem Personalizada</b> no programa tem uma interface própria para "captura" de variáveis específicas, para exibição de textos pré-formatados.
E é compatível com o app celular.
Foi implementada uma opção que faz com que a ação de "exibir" uma "Mensagem Personalizada" seja redirecionada para um script, em vez de ser exibido na tela (ou no alerta).
Isso possibilita, por exemplo, que o usuário crie soluções internas próprias que podem receber informações do próprio app Holyrics para celular, salvar essas informações e utilizá-las conforme necessário.
Por exemplo, dá pra criar uma <b>Mensagem Personalizada</b> chamada "Visitantes", com o campo "Nome".
Outras pessoas durante o culto podem acessar o app Holyrics, na aba <b>Mensagem Personalizada</b>, digitar o nome e enviar ao Holyrics.
Ao redirecionar a mensagem recebida do app para um script, o script pode salvar esses nomes em uma lista interna pelo jslib, e então o operador do programa no computador pode exibir todos os nomes da lista via jslib com algum item Script criado e adicionado nos favoritos.

<b>JSLib</b>
- Novos tipos de "Input" para as interfaces em JavaScript.
<b>button</b>: permite criar um botão na interface, que executa uma ação ao ser clicado.
Permite, por exemplo, criar uma interface que recebe inputs do usuário para executar alguma ação específica e um input "button" que abre uma outra interface com configurações.
Para que não seja necessário colocar diversos inputs na mesma janela
<b>label</b>: exibe um conteúdo de texto (atualizável).
Permite gerar algum texto para visualização de resultado temporário, e também um ícone "copiar" para copiar conteúdo exibido.

- Adicionada opção de requisição via TCP

- Opção para salvar um conteúdo em TXT ou XLSX