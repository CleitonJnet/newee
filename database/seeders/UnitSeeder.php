<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*ID: 001 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Inscrições',           'tips'=>null]);
        /*ID: 002 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Abertura',             'tips'=>null]);
        /*ID: 003 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Louvor e oração',      'tips'=>null]);
        /*ID: 004 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Oração',               'tips'=>'- Formar grupos de oração com pessoas de outras igrejas. - Orem uns pelos outros - Orem pelo professor(es) da clínica - Orem pelas STP’s de hoje']);
        /*ID: 005 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Intervalo',            'tips'=>null]);
        /*ID: 006 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Intervalo - Almoço',   'tips'=>null]);
        /*ID: 007 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Intervalo - Lanche',   'tips'=>null]);
        /*ID: 008 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Intervalo - Jantar',   'tips'=>null]);
        /*ID: 009 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Intervalo - Café',     'tips'=>null]);
        /*ID: 010 */ Unit::create([ 'tool_id'=>null, 'order'=>0,   'time'=>'00:00', 'title'=>'Avisos',               'tips'=>null]);

        /*ID: 011 */ Unit::create([ 'tool_id'=>1,    'order'=>1,   'time'=>'00:40', 'title'=>'Manual W.ESM - Unidade 1: Parte 1 - Por que estamos Aqui? | Parte 2 - Por que é tão difícil compartilhar nossa fé com outros?','tips'=>null]);
        /*ID: 012 */ Unit::create([ 'tool_id'=>1,    'order'=>2,   'time'=>'00:20', 'title'=>'Manual W.ESM - Unidade 2: Aprendendo a explicação do Evangelho Em Sua Mão',                                                    'tips'=>null]);
        /*ID: 013 */ Unit::create([ 'tool_id'=>1,    'order'=>3,   'time'=>'00:40', 'title'=>'Manual W.ESM - Unidade 3: Vencendo o medo de testemunhar',                                                                     'tips'=>null]);
        /*ID: 014 */ Unit::create([ 'tool_id'=>1,    'order'=>4,   'time'=>'00:35', 'title'=>'Manual W.ESM - Unidade 4: Encontrando pessoas receptivas',                                                                     'tips'=>null]);
        /*ID: 015 */ Unit::create([ 'tool_id'=>1,    'order'=>5,   'time'=>'00:40', 'title'=>'Manual W.ESM - Unidade 5: Compartilhando o Evangelho através de ilustrações',                                                  'tips'=>null]);
        /*ID: 016 */ Unit::create([ 'tool_id'=>1,    'order'=>6,   'time'=>'00:30', 'title'=>'Manual W.ESM - Unidade 6: Levando a uma decisão',                                                                              'tips'=>null]);
        /*ID: 017 */ Unit::create([ 'tool_id'=>1,    'order'=>7,   'time'=>'00:35', 'title'=>'Manual W.ESM - Unidade 7: Desenvolvendo amor pelos perdidos',                                                                  'tips'=>null]);
        /*ID: 018 */ Unit::create([ 'tool_id'=>1,    'order'=>8,   'time'=>'00:45', 'title'=>'Manual W.ESM - Unidade 8: Desenvolvendo um ministério contínuo de Evangelismo e Discipulado',                                  'tips'=>null]);
        /*ID: 019 */ Unit::create([ 'tool_id'=>1,    'order'=>9,   'time'=>'00:25', 'title'=>'Manual W.ESM - Encerramento: Juntos na colheita do Senhor',                                                                    'tips'=>null]);
        /*ID: 021 */ Unit::create([ 'tool_id'=>1,    'order'=>10,  'time'=>'00:40', 'title'=>'Praticar em duplas o esboço da Explicação',                                                                                    'tips'=>null]);
        /*ID: 020 */ Unit::create([ 'tool_id'=>1,    'order'=>11,  'time'=>'00:25', 'title'=>'Manual do Facilitador - Orientações sobre a Clínica',                                                                          'tips'=>'/// Pontualidade nos Horários. /// Leitura das Orientações do Manual do Facilitador (páginas 1 a 3). /// Preencher o Compromisso da Clínica – pág.2.']);
        /*ID: 022 */ Unit::create([ 'tool_id'=>1,    'order'=>12,  'time'=>'00:20', 'title'=>'Manual do Facilitador - Aula - O Treinamento de e²',                                                                           'tips'=>'/// 13:30h – 13:35h O ESM e e² /// Explique a relação entre os dois treinamentos /// O ESM é a base para o e² /// Os alunos só deverão participar do treinamento de e² após ter participado de um de nossos workshops ESM. /// 13:35h – 13:40h A filosofia de ensino do e² /// Mudança do EE Clássico e e² /// Aprendizagem autêntica (Professor para Facilitador). 13:45h – 13:50h Seu estilo de ensino –Dividir em duplas para conversar.']);
        /*ID: 023 */ Unit::create([ 'tool_id'=>1,    'order'=>13,  'time'=>'00:40', 'title'=>'Manual do Facilitador - Aula - Elementos chaves',                                                                              'tips'=>'/// A – Facilitador como mentor- Dramatização da dinâmica do treinamento (1começo do ministério 1 treina 2). /// C- Companheiros de Oração – Dramatização (cada membro da equipe possui dois Comp. de oração).']);
        /*ID: 024 */ Unit::create([ 'tool_id'=>1,    'order'=>14,  'time'=>'00:40', 'title'=>'Manual do Facilitador - Aula - O Ensino Semanal',                                                                              'tips'=>null]);
        /*ID: 025 */ Unit::create([ 'tool_id'=>1,    'order'=>15,  'time'=>'00:30', 'title'=>'Manual do Facilitador - Aula - STPs',                                                                                          'tips'=>null]);
        /*ID: 026 */ Unit::create([ 'tool_id'=>1,    'order'=>16,  'time'=>'00:10', 'title'=>'Manual do Facilitador - Orientações para a STP',                                                                               'tips'=>'/// (Preferencialmente simulação na própria Igreja) -Mentores experientes fazem a explicação do Evangelho para membros da Igreja. /// Os membros da Igreja são orientados para não criarem dificuldades, objeções, respondendo “não” à primeira pergunta de diagnóstico e “obras” à segunda. /// Os alunos só observam. /// Caso seja feita uma visita – os membros da equipe oram antes de sair da igreja. |||| -Cada membro da equipe ora brevemente antes de sair da igreja. /// O mentor conduz a visitação. /// Os alunos que sentirem preparados podem participar da Explicação do Evangelho. /// A sessão de relatórios começa às 21:30h. /// Se os contatos não estiverem em suas casas, deve-se fazer o questionário. ||||||  /// Cada membro da equipe ora brevemente antes de sair da igreja. /// Os Alunos oram com os olhos abertos durante o questionário. /// Os Alunos olham para quem fala. /// O Treinador é o responsável pelos contatos, mas os alunos farão a abordagem e a Explicação do Evangelho.']);
        /*ID: 027 */ Unit::create([ 'tool_id'=>1,    'order'=>17,  'time'=>'01:20', 'title'=>'Manual do Facilitador - Saída de Treinamento Prático',                                                                         'tips'=>null]);
        /*ID: 028 */ Unit::create([ 'tool_id'=>1,    'order'=>18,  'time'=>'00:40', 'title'=>'Manual do Facilitador - Aula - Relatório Público',                                                                             'tips'=>'/// Explicar o propósito do relatório público: Inspiração, Instrução e Intercessão. /// Guia do relatório: /// Apresentação dos membros da equipe. /// O nome do visitado. /// A resposta que a pessoa deu a segunda pergunta. /// Resultado. /// Uma lição aprendida.']);
        /*ID: 029 */ Unit::create([ 'tool_id'=>1,    'order'=>19,  'time'=>'00:20', 'title'=>'Manual do Facilitador - Relatório Público',                                                                                    'tips'=>'/// O mentor da equipe dá o relatório /// Máximo de 3 minutos -Seguir o guia de R.P. /// Apresentação das estatísticas da STP /// Oração |||| O mentor da equipe escolhe um membro para dar o relatório. |||||   /// Guia do relatório: /// Apresentação dos membros da equipe. /// O nome do visitado. /// A resposta que a pessoa deu a segunda pergunta. /// Resultado. /// Uma lição aprendida.']);
        /*ID: 030 */ Unit::create([ 'tool_id'=>1,    'order'=>20,  'time'=>'00:20', 'title'=>'Manual do Facilitador - Aulas de e²',                                                                                          'tips'=>'/// Manual do Aluno- cada participante da clínica recebeu um kit para treinar dois alunos. Lembrete: Os materiais e orientações de preparação para a Unidade 1. /// Demonstre no Manual do Aluno, o formato e a O professor irá passar cada passo da unidade 1 e fará a exposição resumidas nas demais unidades.']);
        /*ID: 031 */ Unit::create([ 'tool_id'=>1,    'order'=>21,  'time'=>'00:35', 'title'=>'Manual do Facilitador - Como Usar o Questionário?',                                                                            'tips'=>null]);
        /*ID: 032 */ Unit::create([ 'tool_id'=>1,    'order'=>22,  'time'=>'00:10', 'title'=>'Manual do Facilitador - Implementação',                                                                                        'tips'=>'/// Os alunos de uma mesma igreja devem sentar juntos. /// Destacar os pontos principais da “Preparação para um novo período de e²”. /// Fale sobre o procedimento de pedidos de materiais.']);
        /*ID: 033 */ Unit::create([ 'tool_id'=>1,    'order'=>23,  'time'=>'01:05', 'title'=>'Manual do Aluno e² - Unidade 1: Conectando',                                                                                   'tips'=>'/// 08:30h – 08:40h Em duplas converse sobre como Jesus conectou-se à mulher samaritana /// João 4:1-42. /// 08:40h – 08:45h Resuma com a classe as ideias principais. /// 08:45h – 08:50h Recitar o Esboço e as frases de transição (CE-01) /// 08:50h – 09:00h Em duplas os alunos recitam o esboço e o versículo de João 10:10b. /// 09:00h – 09:05h Dramatização pelo professor (De Conversa casual até concluir com a transição: Posso fazer uma pergunta?) /// 09:05h – 09:10h Peça que dois alunos respondam a pergunta da sessão CONVERSE. /// 09:10h – 09:30h Comentários sobre Conectando /// 09:30h – 09:35h Leia as tarefas da Preparação para a Unidade 2.']);
        /*ID: 034 */ Unit::create([ 'tool_id'=>1,    'order'=>24,  'time'=>'00:35', 'title'=>'Manual do Aluno e² - Unidade 2: O Evangelho: Graça',                                                                           'tips'=>'/// 09:35h – 09:40h Citar as atividades da REVISÃO e DRAMATIZAÇÃO. /// 09:40h – 09:45h Peça que dois alunos respondam a pergunta da sessão CONVERSE. /// 09:45h – 10:05h Comentários sobre Graça /// 10:05h – 10:10h Leia as tarefas da Preparação para a Unidade 3.']);
        /*ID: 035 */ Unit::create([ 'tool_id'=>1,    'order'=>25,  'time'=>'00:35', 'title'=>'Manual do Aluno e² - Unidade 3: O Evangelho: O Homem',                                                                         'tips'=>'/// 10:20h – 10:25h Citar as atividades da REVISÃO e DRAMATIZAÇÃO. /// 10:25h – 10:30h Peça que dois alunos respondam a pergunta da sessão CONVERSE. /// 10:30h – 10:50h Comentários sobre Homem /// 10:50h – 10:55h Leia as tarefas da Preparação para a Unidade 4 /// Enfatize a folha de orientação do testemunho (anexos do MF e CD).']);
        /*ID: 036 */ Unit::create([ 'tool_id'=>1,    'order'=>26,  'time'=>'00:35', 'title'=>'Manual do Aluno e² - Unidade 4: Seu Testemunho',                                                                               'tips'=>'/// 10:55h – 11:00h Citar as atividades da REVISÃO e DRAMATIZAÇÃO. /// 11:00h – 11:05h Peça que dois alunos respondam a pergunta da sessão CONVERSE. /// 11:05h – 11:25h Comentários sobre Testemunho /// 11:25h – 11:30h Leia as tarefas da Preparação para a Unidade 5.']);
        /*ID: 037 */ Unit::create([ 'tool_id'=>1,    'order'=>27,  'time'=>'00:35', 'title'=>'Manual do Aluno e² - Unidade 5: O Evangelho: Deus e Cristo',                                                                   'tips'=>'/// 11:30h – 11:35h Citar as atividades da REVISÃO e DRAMATIZAÇÃO. /// 11:35h – 11:40h Peça que dois alunos respondam a pergunta da sessão CONVERSE. /// 11:40h – 12:00h Comentários sobre Deus & Cristo /// 12:00h – 12:05h Leia as tarefas da Preparação para a Unidade 6.']);
        /*ID: 038 */ Unit::create([ 'tool_id'=>1,    'order'=>28,  'time'=>'00:35', 'title'=>'Manual do Aluno e² - Unidade 6: O Evangelho: Fé',                                                                              'tips'=>'/// 13:20h – 13:25h Citar as atividades da REVISÃO e DRAMATIZAÇÃO. /// 11:25h – 13:30h Peça que dois alunos respondam a pergunta da sessão CONVERSE. /// 13:30h – 13:50h Comentários sobre Fé /// 13:50h – 13:55h Leia as tarefas da Preparação para a Unidade 7.']);
        /*ID: 039 */ Unit::create([ 'tool_id'=>1,    'order'=>29,  'time'=>'00:30', 'title'=>'Manual do Aluno e² - Unidade 7: Decisão e Acompanhamento',                                                                     'tips'=>'/// 13:55h – 14:00h Citar as atividades da REVISÃO e DRAMATIZAÇÃO. /// 14:00h – 14:05h Peça que dois alunos respondam a pergunta da sessão CONVERSE. /// 14:05h – 14:30h Comentários sobre Decisão & Acompanhamento']);
        /*ID: 040 */ Unit::create([ 'tool_id'=>1,    'order'=>30,  'time'=>'00:45', 'title'=>'Culto de Encerramento com a Igreja anfitriã',                                                                                  'tips'=>'/// Entrega de Certificados e Distintivos/ Encerramento.']);

        /*ID: 041 */ Unit::create([ 'tool_id'=>2,    'order'=>1,   'time'=>'00:45', 'title'=>'Parte 1 - Por que estamos Aqui? | Parte 2 - Por que é tão difícil compartilhar nossa fé com outros?' ]);
        /*ID: 042 */ Unit::create([ 'tool_id'=>2,    'order'=>2,   'time'=>'00:20', 'title'=>'Aprendendo a explicação do Evangelho Em Sua Mão'                                                     ]);
        /*ID: 043 */ Unit::create([ 'tool_id'=>2,    'order'=>3,   'time'=>'00:40', 'title'=>'Vencendo o medo de testemunhar'                                                                      ]);
        /*ID: 044 */ Unit::create([ 'tool_id'=>2,    'order'=>4,   'time'=>'00:50', 'title'=>'Encontrando pessoas receptivas'                                                                      ]);
        /*ID: 045 */ Unit::create([ 'tool_id'=>2,    'order'=>5,   'time'=>'00:35', 'title'=>'Compartilhando o Evangleho através de ilustrações'                                                   ]);
        /*ID: 046 */ Unit::create([ 'tool_id'=>2,    'order'=>6,   'time'=>'00:40', 'title'=>'Levando a uma decisão'                                                                               ]);
        /*ID: 047 */ Unit::create([ 'tool_id'=>2,    'order'=>7,   'time'=>'00:30', 'title'=>'Desenvolvendo amor pelos perdidos'                                                                   ]);
        /*ID: 048 */ Unit::create([ 'tool_id'=>2,    'order'=>8,   'time'=>'00:30', 'title'=>'Desenvolvendo um ministério contínuo de Evangelismo e Discipulado'                                   ]);
        /*ID: 049 */ Unit::create([ 'tool_id'=>2,    'order'=>9,   'time'=>'00:40', 'title'=>'Encerramento: Juntos na colheita do Senhor'                                                          ]);

        /*ID: 050 */ Unit::create([ 'tool_id'=>3,    'order'=>1,   'time'=>'01:00', 'title'=>'Conectando'                 ]);
        /*ID: 051 */ Unit::create([ 'tool_id'=>3,    'order'=>2,   'time'=>'01:00', 'title'=>'O Evangelho: Graça'         ]);
        /*ID: 052 */ Unit::create([ 'tool_id'=>3,    'order'=>3,   'time'=>'01:00', 'title'=>'O Evangelho: O Homem'       ]);
        /*ID: 053 */ Unit::create([ 'tool_id'=>3,    'order'=>4,   'time'=>'01:00', 'title'=>'Seu Testemunho'             ]);
        /*ID: 054 */ Unit::create([ 'tool_id'=>3,    'order'=>5,   'time'=>'01:00', 'title'=>'O Evangelho: Deus e Cristo' ]);
        /*ID: 055 */ Unit::create([ 'tool_id'=>3,    'order'=>6,   'time'=>'01:00', 'title'=>'O Evangelho: Fé'            ]);
        /*ID: 056 */ Unit::create([ 'tool_id'=>3,    'order'=>7,   'time'=>'01:00', 'title'=>'Decisão e Acompanhamento'   ]);

        /*ID: 057 */ Unit::create([ 'tool_id'=>4,    'order'=>1,   'time'=>'01:00', 'title'=>'A formação de um mentor' ]);
        /*ID: 058 */ Unit::create([ 'tool_id'=>4,    'order'=>2,   'time'=>'01:00', 'title'=>'O método de um mentor'   ]);
        /*ID: 059 */ Unit::create([ 'tool_id'=>4,    'order'=>3,   'time'=>'01:00', 'title'=>'O modelo de um mentor'   ]);
        /*ID: 060 */ Unit::create([ 'tool_id'=>4,    'order'=>4,   'time'=>'01:00', 'title'=>'A arte de um mentor'     ]);
        /*ID: 061 */ Unit::create([ 'tool_id'=>4,    'order'=>5,   'time'=>'01:00', 'title'=>'A atitude de um mentor'  ]);
        /*ID: 062 */ Unit::create([ 'tool_id'=>4,    'order'=>6,   'time'=>'01:00', 'title'=>'O foco de um mentor'     ]);
        /*ID: 063 */ Unit::create([ 'tool_id'=>4,    'order'=>7,   'time'=>'01:00', 'title'=>'A missão de um mentor'   ]);

        /*ID: 064 */ Unit::create([ 'tool_id'=>5,    'order'=>1,   'time'=>'01:00', 'title'=>'Você tem certeza?' ]);
        /*ID: 065 */ Unit::create([ 'tool_id'=>5,    'order'=>2,   'time'=>'01:00', 'title'=>'Bíblia'            ]);
        /*ID: 066 */ Unit::create([ 'tool_id'=>5,    'order'=>3,   'time'=>'01:00', 'title'=>'Oração'            ]);
        /*ID: 067 */ Unit::create([ 'tool_id'=>5,    'order'=>4,   'time'=>'01:00', 'title'=>'Adoração'          ]);
        /*ID: 068 */ Unit::create([ 'tool_id'=>5,    'order'=>5,   'time'=>'01:00', 'title'=>'Comunhão'          ]);
        /*ID: 069 */ Unit::create([ 'tool_id'=>5,    'order'=>6,   'time'=>'01:00', 'title'=>'Testemunhos'       ]);
        /*ID: 070 */ Unit::create([ 'tool_id'=>5,    'order'=>7,   'time'=>'01:00', 'title'=>'Direção'           ]);

        /*ID: 071 */ Unit::create([ 'tool_id'=>6,    'order'=>1,   'time'=>'01:00', 'title'=>'Manejando a Palavra da Verdade'                                                                                                    ]);
        /*ID: 072 */ Unit::create([ 'tool_id'=>6,    'order'=>2,   'time'=>'01:00', 'title'=>'Cinco Maneiras de Se Lidar com uma Objeção ao Evangelho'                                                                           ]);
        /*ID: 073 */ Unit::create([ 'tool_id'=>6,    'order'=>3,   'time'=>'01:00', 'title'=>'Objeção nº 1: “Eu não acredito na Bíblia.”'                                                                                        ]);
        /*ID: 074 */ Unit::create([ 'tool_id'=>6,    'order'=>4,   'time'=>'01:00', 'title'=>'Objeção nº 2: “Como que você sabe que Deus existe?”'                                                                               ]);
        /*ID: 075 */ Unit::create([ 'tool_id'=>6,    'order'=>5,   'time'=>'01:00', 'title'=>'Objeção nº 3: “Como Deus pode permitir a existência do mal?” | Objeção nº 4: “Deus seria capaz de mandar pessoas para o Inferno?”' ]);
        /*ID: 076 */ Unit::create([ 'tool_id'=>6,    'order'=>6,   'time'=>'01:00', 'title'=>'Objeção nº 5: “Como pode Jesus ser o único caminho?”'                                                                              ]);
        /*ID: 077 */ Unit::create([ 'tool_id'=>6,    'order'=>7,   'time'=>'01:00', 'title'=>'Objeção nº 6: “E quanto àqueles que nunca ouviram falar de Jesus?” | Objeção nº 7: “E quanto aos hipócritas na igreja?”'           ]);

        /*ID: 078 */ Unit::create([ 'tool_id'=>7,    'order'=>1,   'time'=>'00:30', 'title'=>'Introdução: Apresentação'                        ]);
        /*ID: 079 */ Unit::create([ 'tool_id'=>7,    'order'=>2,   'time'=>'01:00', 'title'=>'Olimpíadas Bíblicas'                             ]);
        /*ID: 080 */ Unit::create([ 'tool_id'=>7,    'order'=>3,   'time'=>'00:20', 'title'=>'A Entrevista'                                    ]);
        /*ID: 081 */ Unit::create([ 'tool_id'=>7,    'order'=>4,   'time'=>'00:20', 'title'=>'O Caminho do Evangelho'                          ]);
        /*ID: 082 */ Unit::create([ 'tool_id'=>7,    'order'=>5,   'time'=>'01:00', 'title'=>'Boas Novas'                                      ]);
        /*ID: 083 */ Unit::create([ 'tool_id'=>7,    'order'=>6,   'time'=>'01:00', 'title'=>'Vamos Conversar'                                 ]);
        /*ID: 084 */ Unit::create([ 'tool_id'=>7,    'order'=>7,   'time'=>'01:00', 'title'=>'Céu'                                             ]);
        /*ID: 085 */ Unit::create([ 'tool_id'=>7,    'order'=>8,   'time'=>'01:00', 'title'=>'Pecado'                                          ]);
        /*ID: 086 */ Unit::create([ 'tool_id'=>7,    'order'=>9,   'time'=>'01:00', 'title'=>'Deus'                                            ]);
        /*ID: 087 */ Unit::create([ 'tool_id'=>7,    'order'=>10,  'time'=>'01:00', 'title'=>'Cristo'                                          ]);
        /*ID: 088 */ Unit::create([ 'tool_id'=>7,    'order'=>11,  'time'=>'00:45', 'title'=>'Fé'                                              ]);
        /*ID: 089 */ Unit::create([ 'tool_id'=>7,    'order'=>12,  'time'=>'00:45', 'title'=>'Resposta'                                        ]);
        /*ID: 090 */ Unit::create([ 'tool_id'=>7,    'order'=>13,  'time'=>'00:30', 'title'=>'Aula - Saída de Treinamento Prático'             ]);
        /*ID: 091 */ Unit::create([ 'tool_id'=>7,    'order'=>14,  'time'=>'01:45', 'title'=>'Prática - Saída de Treinamento Prático'          ]);
        /*ID: 092 */ Unit::create([ 'tool_id'=>7,    'order'=>15,  'time'=>'00:35', 'title'=>'Relatório Público'                               ]);
        /*ID: 093 */ Unit::create([ 'tool_id'=>7,    'order'=>16,  'time'=>'01:00', 'title'=>'Ensino Semanal - Unidade 12: Crescendo em Jesus' ]);
        /*ID: 094 */ Unit::create([ 'tool_id'=>7,    'order'=>17,  'time'=>'01:00', 'title'=>'Planejamento: Implementação EPC'                 ]);
        /*ID: 095 */ Unit::create([ 'tool_id'=>7,    'order'=>18,  'time'=>'00:30', 'title'=>'Encerramento'                                    ]);

        /*ID: 096 */ Unit::create([ 'tool_id'=>8,    'order'=>1,   'time'=>'01:00', 'title'=>'Olimpíadas Bíblicas'    ]);
        /*ID: 097 */ Unit::create([ 'tool_id'=>8,    'order'=>2,   'time'=>'00:20', 'title'=>'A Entrevista'           ]);
        /*ID: 098 */ Unit::create([ 'tool_id'=>8,    'order'=>3,   'time'=>'00:20', 'title'=>'O Caminho do Evangelho' ]);
        /*ID: 099 */ Unit::create([ 'tool_id'=>8,    'order'=>4,   'time'=>'01:00', 'title'=>'Boas Novas'             ]);
        /*ID: 100 */ Unit::create([ 'tool_id'=>8,    'order'=>5,   'time'=>'01:00', 'title'=>'Vamos Conversar'        ]);
        /*ID: 101 */ Unit::create([ 'tool_id'=>8,    'order'=>6,   'time'=>'01:00', 'title'=>'Céu'                    ]);
        /*ID: 102 */ Unit::create([ 'tool_id'=>8,    'order'=>7,   'time'=>'01:00', 'title'=>'Pecado'                 ]);
        /*ID: 103 */ Unit::create([ 'tool_id'=>8,    'order'=>8,   'time'=>'01:00', 'title'=>'Deus'                   ]);
        /*ID: 104 */ Unit::create([ 'tool_id'=>8,    'order'=>9,   'time'=>'01:00', 'title'=>'Cristo'                 ]);
        /*ID: 105 */ Unit::create([ 'tool_id'=>8,    'order'=>10,  'time'=>'01:00', 'title'=>'Fé'                    ]);
        /*ID: 106 */ Unit::create([ 'tool_id'=>8,    'order'=>11,  'time'=>'01:00', 'title'=>'Resposta'              ]);
        /*ID: 107 */ Unit::create([ 'tool_id'=>8,    'order'=>12,  'time'=>'01:00', 'title'=>'Crescendo em Jesus'    ]);
    }
}
