# Estagio-Na-Web_FPIN
Projeto para a disciplina de FPIN

Como baixar o projeto para o computador?

Primeiro baixe o git para windows.

Onde baixar o git para windows: https://git-scm.com/downloads (Instale o git bash). Depois de instalado entre no git bash. 

O que é o git bash? Uma linha de comando igual a do linux. Alguns comandos: 

comando cd (aqui você coloca a pasta pra onde você quer ir). 

comando cd .. (pra voltar para a pasta anterior). 

comando ls mostrar todos os arquivos e pastas onde você se encontra.

Antes de tudo configure o git. Na linha de comando escreva 

$ git config --global user.name "Seu nome"
$ git config --global user.email seu email

Como pegar os arquivos desse repositório. Entre numa pasta pelo git bash onde você quer deixar o projeto guardado no seu pc. Digite: git clone https://github.com/FelipeGualberto/Estagio-Na-Web_FPIN.git 

Pronto o projeto já foi clonado da nuvem para o seu pc.

Depois de fazer todas as modificações no seu projeto e quiser subir para o repositório, faça isso:
git pull (NUNCA ESQUEÇA DE FAZER ISSO PRIMEIRO ANTES DE TUDO). O git pull serve para atualizar o seu repositório local caso alguém da equipe tenha atualizado antes de você. Muito importante fazer isso sempre ANTES DE MEXER NO PROJETO e DEPOIS DE MEXER NELE quando você quer mandar para a nuvem.
git add . (isso significa que você quer que tudo que tá na pasta seja adicionado no commit).
git commit -m "comentário.." (deixe um comentário do que vc fez nesse commit) façam comentários que expliquem de maneira sucinta o que você fez, por exemplo: "Adicionei o css na página principal"
git push (Subir os arquivos).


Sempre que você modificar algo no projeto avise aos outros. Dessa maneira quando o outro for mexer, já sabe que tem que dar um git pull(sempre dê um git pull mesmo que você não saiba se alguém já mexeu ou não).



Sobre o git merge. As vezes, quando duas pessoas mexem no mesmo arquivo é possível que isso gere um conflito e então é necessário que você tente fazer um merge (Juntar os dois arquivos). As vezes o merge é automático então você nem se preocupa, mas as vezes a pessoa tem que corrigir na mão mesmo.

O que eu fortemente aconselho pra vocês que tão começando a mexer no git é, se der um conflito de merge: salve o arquivo que você modificou em outro lugar. Apague o repositório local, baixe de novo (git push), e junte com o que você fez. (Eu, muitas vezes, ainda faço assim).

Caso queiram se aprofundar no git merge:
Básico de merge :https://git-scm.com/book/pt-br/v1/Ramifica%C3%A7%C3%A3o-Branching-no-Git-B%C3%A1sico-de-Branch-e-Merge


O git tem outro conceito bastante conhecido que é o git branch. Mas não vamos usar ele aqui pra ficar mais simples.

Basicamente é isso galera. Felipe Gualberto


