<b>Organizar Temas e Planos de Fundo utilizando tags</b>
Para facilitar a organização e filtragem dos itens foi adicionada a opção de tags.
É possível criar, por exemplo, tags com os nomes: <b>partícula</b>, <b>água</b>, <b>azul</b>, <b>fogo</b>, etc... e dessa forma, na hora de selecionar um tema ou plano de fundo, poderá facilmente listar somente os itens da respectiva tag para encontrar o item desejado.
Também é útil nas novas funcionalidades do programa, como scripts e automatização.


<b>Definir plano de fundo dinamicamente</b>
É possível criar regras para definir plano de fundo para os slides da música de forma dinâmica.
Por exemplo, criar uma regra em que todo slide que tenha a palavra <b>'chuva'</b> ou <b>'chover'</b> seja definido com um tema/vídeo aleatório que tenha a tag <b>chuva</b>.
Todo slide que tenha a palavra <b>'oceano'</b>, <b>'oceanos'</b> ou <b>'mar'</b> seja definido com um tema/vídeo aleatório que tenha a tag <b>mar</b>.


<b>Definir atalhos MIDI exclusivos</b>
Controlar os slides da música via MIDI é uma funcionalidade que tem sido utilizada cada vez mais.
Porém para iniciar a apresentação da letra da música era necessário que ela estivesse na lista de reprodução para saber a posição do item na lista e iniciar a apresentação via MIDI.
Com a opção de atalhos MIDI, você pode definir um código e velocidade MIDI específico para uma letra de música.
E dessa forma você não precisa se preocupar em adicioná-la na lista de reprodução do programa, nem em qual posição da lista ela está.
Basta enviar o comando MIDI (código/velocidade) definido para a letra da música que o programa vai iniciar a apresentação.
Assim fica mais fácil, pois você só precisa definir uma vez o atalho da música no seu programa de tracks, em vez de ficar mudando sempre de acordo com a posição do item na lista de reprodução.


<b>[Descrição do Slide] Parágrafos em sequência sem necessidade de repetir</b>
Na janela de edição de letra, ao definir um slide com uma descrição, os slides seguintes também terão a mesma descrição.
Por exemplo:
<code>##(Verso 1)
    Slide A
    Slide A

    Slide B
    Slide B

    ##(Coro)
    Slide C
    Slide C

    Slide D
    Slide D</code>

No exemplo acima, o <b>Slide B</b> será considerado como <b>Verso 1</b>, e o <b>Slide D</b> como <b>Coro</b>


<b>Ordenar slides pela descrição do slide</b>
Na janela de ordenar slides será possível ordenar utilizando apenas as descrições.
Por exemplo: Verso 1, Coro, Verso 2, Coro, Coro


<b>[Descrição do Slide] Agrupar descrições iguais</b>
Em alguns casos os slides podem ter recebido descrições diferentes mas que significam a mesma coisa.
Por exemplo: coro e refrão
Para fazer com que a descrição <b>refrão</b> seja sempre identificada pelo programa como descrição <b>coro</b>:
- Acesse as configurações da descrição do slide (configurações de exibição);
- Clique nos 3 pontinhos da descrição <b>coro</b>;
- Selecione a opção <b>aliases > adicionar</b> e adicione o nome <b>refrão</b>.