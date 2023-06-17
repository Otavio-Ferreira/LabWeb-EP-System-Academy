# LabWeb-EP-System-Academy

Sistema Web desenvolvido em sala de aula, um sistema para entregar como forma de TCC. EEEP Dr Napoleão Neves da Luz.

## Para que serve?

Esse sistema serve para facilitar o trabalho de um personal ou administrador de uma academia de musculação, onde o personal(usuário) terá a função de administrar os dados dos seus alunos, fazer treinos personalizados, fazer avaliações físicas e ter um relatório, tudo isso de forma virtual.

Os alunos também terão acesso a uma página exclusiva para eles, onde poderão acessar seus dados, treinos e avaliações feitas pelo personal.

## Descrição de uso

Esse sistema é composto por duas apilacações, uma Web (LabWeb-EP-System-Academy) e uma Software (LabSoftware-EP-System-Academy) que se localiza nos reposiórios desse mesmo perfil. Essas duas aplicações utilizam o mesmo banco de dados para "conversarem" entre si, essa foi a forma que encontramos para desenvolver duas aplicações para a conclusão do curso e simular um servidor real, porém localmente.

**Portanto, para utilizar e observar esse sistema funcionando será necessário fazer o download e executar as duas aplicações, tanto a Web, quanto a Software.**

## Como utilizar

**_Preste bastante atenção nas etapas para poder utiliazr o sistema_**

### Etapaa:

* Faça o download dos arquivos dos repositórios com os nomes: LabWeb-EP-System-Academy e LabSoftware-EP-System-Academy.

* Crie um banco de dados na sua máquina local com as tabelas, seguindo as intruções do arquivo ".sql" deste repositório, para isso utilize o MySql Workbench 8.0 CE.

* Para executar a aplicação desktoop, que é feita em java, utilize o Java JDK 8.0 e uma IDE, no nosso caso utilizamos o NetBeans IDE 8.2.

* Será necessário utilizar um servidor local, para isso utilize o Xampp.

* ponha a pasta desse repositório na pasta "htdocs", que está localizado na pasta "xampp" no "Disco Local (C)."

* Inicialize o servidor. No Xampp Crontol Panel dê start no Apache e no MySQL.

* Abra o seu navegador e acesse a seguinte url: "http://localhost/systemacademy/index.php".
