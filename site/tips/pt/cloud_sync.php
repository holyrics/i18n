<p>
    Para sincronizar todos os arquivos e dados do programa entre diferentes computadores utilize a sincronização em nuvem pelo Google Drive™, pelo menu compartilhar, opção "sincronização em nuvem".
</p>
<p>
    Ao ativar a sincronização não existe opção para mesclar arquivos.<br>
    O primeiro computador adicionado na sincronização terá seus dados e arquivos enviados para a nuvem e todos os computadores conectados DEPOIS terão os dados apagados para baixar os dados atuais na nuvem (geralmente é o computador da igreja que precisa ser conectado na sincronização primeiro, pois é o computador que geralmente contém todos os dados e arquivos que você precisa).<br>
    Depois de conectar o primeiro computador e o upload ser concluído, você pode conectar todos os outros computadores que desejar, e tudo que fizer em um computador será sincronizado nos outros computadores.
</p>
<p>
    <b>Observações:</b><br>
    <br>
    • As CONFIGURAÇÕES do programa não são sincronizadas entre os computadores.<br>
    <br>
    • O primeiro computador conectado não significa que ele é o computador principal da sincronização, não existe "computador principal", as alterações feitas em qualquer computador serão refletidas em todos os outros computadores.<br>
    O detalhe acima de se atentar ao primeiro computador conectado é apenas para saber qual será o computador que vai preencher a nuvem com o primeiro upload dos dados.<br>
    Isso significa que os dados estão na nuvem, não em um computador específico, e consequentemente mesmo que todos os computadores sejam desconectados e o programa reinstalado, você pode fazer login e "recuperar" todos os dados que estão sincronizados na nuvem (desde que não apague manualmente ou remova o vínculo de autorização nas configurações da sua conta Google).<br>
    <br>
    • Não há controle ou gerenciamento de permissão, todos os computadores conectados podem alterar qualquer arquivo no programa e essa alteração será sincronizada com os outros computadores.<br>
    <br>
    • Por questões de segurança, você pode gerar um código de login e disponibilizá-lo a outra pessoa para adicionar o computador pessoal na sincronização em vez de compartilhar usuário e senha da conta Google.<br>
    Para gerar o código, na janela de login da sincronização em nuvem tem um botão <b>"gerar código para acesso em outro dispositivo"</b>.<br>
    <br>
    • Você pode visualizar e desconectar outros usuários remotamente pelo botão <b>"Dispositivos conectados"</b>.<br> 
    <br>
    • Se necessário, ao conectar um novo computador (utilizando email e senha) você pode substituir os dados na nuvem selecionando a opção <b>"Apagar os arquivos online e fazer upload dos arquivos deste computador"</b>.<br>
    Neste caso, por questão de segurança, todos os computadores já conectados serão desconectados da sincronização e precisarão fazer login novamente e aceitar baixar os novos dados sincronizados.<br>
    <br>
    • A permissão solicitada para uso da API Google Drive cria uma pasta oculta e exclusiva para o Holyrics.<br>
    O programa Holyrics não tem acesso aos seus arquivos pessoais no Google Drive e consequentemente os arquivos sincronizados pelo Holyrics não aparecem no seu Google Drive.<br>
    Para excluir os dados do Holyrics da sua conta Google Drive, acesse: <a href='https://drive.google.com/drive/settings' target='_blank' rel='noopener noreferrer'>https://drive.google.com/drive/settings</a><br>
    <br>
    A lógica de sincronização implementada no programa remove um arquivo apagado no Google Drive somente depois que esse arquivo tiver sido apagado em todos os computadores, ou seja, ao apagar um arquivo e no status de sincronização Google Drive aparecer que o arquivo foi apagado, ele ainda estará ocupando espaço no seu Google Drive até que todos os outros computadores adicionados na sincronização abram o Holyrics e o programa identifique que deve apagar o arquivo.<br>
    Isso significa que, temporariamente, o espaço ocupado no Google Drive pelo Holyrics pode ser maior do que o espaço total ocupado pelos arquivos atuais existentes.<br>
    Você pode conferir quais são os computadores que estão há muito tempo sem sincronizar os dados no botão "Dispositivos conectados" e, se necessário, desconectá-los.<br>
    <br>
    O arquivo de LOG da sincronização fica na subpasta do programa <code>.../logs/google_drive_sync_holyrics_files.txt</code> (geralmente <code>C:/Holyrics/logs/google_drive_sync_holyrics_files.txt</code> no Windows)<br>
    <br>
    • Atualmente apenas a sincronização pelo Google Drive está disponível e não há previsão para compatibilidade com outros serviços.
</p>
