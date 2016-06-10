<?php
class EducacensoFieldHelper
{
     public static $rows = array(
          "00" => "Escola",
          "10" => "Escola/Estrutura",
          "20" => "Turma",
          "30" => "Profissional",
          "40" => "Profissional/Documentos",
          "50" => "Profissional/Variaveis",
          "51" => "Profissional/Docentes",
          "60" => "Alunos",
          "70" => "Alunos/Documentos",
          "80" => "Alunos/Matricula" 
     );

    public static $fields = array(
          "00" => array( // Escola
               1 => "tipo_registro",
               2 => "codigo_inep",
               3 => "cpf_gestor",
               4 => "nome_gestor",
               5 => "cargo_gestor",
               6 => "email_gestor",
               7 => "situacao_funcionamento",
               8 => "inicio_ano_letivo",
               9 => "termino_ano_letivo",
               10 => "nome",
               11 => "latitude",
               12 => "longitude",
               13 => "cep",
               14 => "endereco",
               15 => "endereco_numero",
               16 => "complemento",
               17 => "bairro",
               18 => "_uf",
               19 => "_municipio",
               20 => "_distrito",
               21 => "_ddd",
               22 => "telefone",
               23 => "telefone_publico",
               24 => "telefone_outro",
               25 => "fax",
               26 => "email",
               27 => "_orgao_ensino",
               28 => "dependencia_administrativa",
               29 => "zona_localizacao",
               30 => "categoria_escola_privada",
               31 => "conveniada_poder_publico",
               32 => "mantenedora_setor_privado_pessoa_fisica",
               33 => "mantenedora_setor_privado_sindicato_cooperativa",
               34 => "mantenedora_setor_privado_ong_oscip",
               35 => "mantenedora_instituicoes_sem_fins_lucrativos",
               36 => "mantenedora_sistema_s",
               37 => "cnpj_mantenedora",
               38 => "cnpj_escola_privada",
               39 => "regulamentacao",
               40 => "unidade_vinculada",
               41 => "codigo_escola_sede",
               42 => "codigo_ies"
          ),
          "10" => array( // Escola/Estrutura
               1 => "tipo_registro",
               2 => "codigo_inep",
               3 => "local_funcionamento_predio",
               4 => "local_funcionamento_igreja",
               5 => "local_funcionamento_empresa",
               6 => "local_funcionamento_casa_professor",
               7 => "local_funcionamento_outra_escola",
               8 => "local_funcionamento_paiol",
               9 => "local_funcionamento_unidade_socioeducativa",
               10 => "local_funcionamento_unidade_prisional",
               11 => "local_funcionamento_outros",
               12 => "forma_ocupacao_predio",
               13 => "predio_compartilhado",
               14 => "codigo_inep_escola_compartilhada_1",
               15 => "codigo_inep_escola_compartilhada_2",
               16 => "codigo_inep_escola_compartilhada_3",
               17 => "codigo_inep_escola_compartilhada_4",
               18 => "codigo_inep_escola_compartilhada_5",
               19 => "codigo_inep_escola_compartilhada_6",
               20 => "agua_consumida",
               21 => "agua_abastecimento_rede_publica",
               22 => "agua_abastecimento_poco_artesiano",
               23 => "agua_abastecimento_cisterna",
               24 => "agua_abastecimento_corrego",
               25 => "agua_abastecimento_inexistente",
               26 => "energia_eletrica_rede_publica",
               27 => "energia_eletrica_gerador",
               28 => "energia_eletrica_outros",
               29 => "energia_eletrica_inexistente",
               30 => "esgoto_rede_publica",
               31 => "esgoto_fossa",
               32 => "esgoto_inexistente",
               33 => "destinacao_lixo_coleta",
               34 => "destinacao_lixo_queima",
               35 => "destinacao_lixo_descarte",
               36 => "destinacao_lixo_recicla",
               37 => "destinacao_lixo_enterra",
               38 => "destinacao_lixo_outros",
               39 => "dependencias_diretoria",
               40 => "dependencias_sala_professores",
               41 => "dependencias_secretaria",
               42 => "dependencias_laboratorio_informatica",
               43 => "dependencias_laboratorio_ciencias",
               44 => "dependencias_recursos_multifuncionais",
               45 => "dependencias_quadra_esportes_coberta",
               46 => "dependencias_quadra_esportes_descoberta",
               47 => "dependencias_cozinha",
               48 => "dependencias_biblioteca",
               49 => "dependencias_sala_leitura",
               50 => "dependencias_parque_infantil",
               51 => "dependencias_bercario",
               52 => "dependencias_banheiro_externo",
               53 => "dependencias_banheiro_interno",
               54 => "dependencias_banheiro_infantil",
               55 => "dependencias_banheiro_deficientes",
               56 => "dependencias_acessibilidade_fisica",
               57 => "dependencias_banheiro_chuveiro",
               58 => "dependencias_refeitorio",
               59 => "dependencias_despensa",
               60 => "dependencias_almoxarifado",
               61 => "dependencias_auditorio",
               62 => "dependencias_patio_coberto",
               63 => "dependencias_patio_descoberto",
               64 => "dependencias_alojamento_aluno",
               65 => "dependencias_alojamento_professor",
               66 => "dependencias_area_verde",
               67 => "dependencias_lavanderia",
               68 => "dependencias_outros",
               69 => "numero_salas_aula",
               70 => "numero_salas_aula_utilizadas",
               71 => "equipamentos_tv",
               72 => "equipamentos_vcr",
               73 => "equipamentos_dvd",
               74 => "equipamentos_parabolica",
               75 => "equipamentos_copiadora",
               76 => "equipamentos_retroprojetor",
               77 => "equipamentos_impressora",
               78 => "equipamentos_som",
               79 => "equipamentos_data_show",
               80 => "equipamentos_fax",
               81 => "equipamentos_camera",
               82 => "computadores",
               83 => "equipamntos_multifuncional",
               84 => "computadores_administrativo",
               85 => "computadores_alunos",
               86 => "acesso_internet",
               87 => "banda_larga",
               88 => "total_funcionarios",
               89 => "alimentacao_escolar",
               90 => "aee",
               91 => "atividade_complementar",
               92 => "modalidade_regular",
               93 => "modalidade_especial",
               94 => "modalidade_eja",
               95 => "modalidade_profissional",
               96 => "ensino_fundamental_ciclos",
               97 => "localizacao_diferenciada",
               98 => "material_didatico_diversidade_nao_utiliza",
               99 => "material_didatico_quilombola",
               100 => "material_didatico_indigena",
               101 => "educacao_indigena",
               102 => "lingua_indigena",
               103 => "lingua_portuguesa",
               104 => "codigo_lingua_indigena",
               105 => "cede_espaco_brasil_alfabetizado",
               106 => "abre_finais_de_semana",
               107 => "formacao_alternancia"
          ),
          "20" => array( // Turma
               1 => "tipo_registro",
               2 => "codigo_inep_escola",
               3 => "codigo_inep_turma",
               4 => "codigo_turma_escola",
               5 => "nome_turma",
               6 => "tipo_mediacao_didatico_pedagogica",
               7 => "horario_inicial_hora",
               8 => "horario_inicial_minuto",
               9 => "horario_final_hora",
               10 => "horario_final_minuto",
               11 => "dias_domingo",
               12 => "dias_segunda",
               13 => "dias_terca",
               14 => "dias_quarta",
               15 => "dias_qunita",
               16 => "dias_sexta",
               17 => "dias_sabado",
               18 => "tipo_atendimento",
               19 => "participa_mais_educacao",
               20 => "_codigo_atividade_1",
               21 => "_codigo_atividade_2",
               22 => "_codigo_atividade_3",
               23 => "_codigo_atividade_4",
               24 => "_codigo_atividade_5",
               25 => "_codigo_atividade_6",
               26 => "ensino_braille",
               27 => "ensino_recursos_opticos_nao_opticos",
               28 => "desenvolvimento_processos_mentais",
               29 => "tecnicas_orientacao_mobilidade",
               30 => "ensino_libras",
               31 => "ensino_caa",
               32 => "enriquecimento_curricular",
               33 => "soroban",
               34 => "informatica_acessivel",
               35 => "ensino_lingua_portuguesa_escrita",
               36 => "estrategias_autonomia",
               37 => "modalidade",
               38 => "_etapa_ensino",
               39 => "_curso_profissional",
               40 => "disciplinas_quimica",
               41 => "disciplinas_fisica",
               42 => "disciplinas_matematica",
               43 => "disciplinas_biologia",
               44 => "disciplinas_ciencias",
               45 => "disciplinas_linguas_portugues",
               46 => "disciplinas_linguas_ingles",
               47 => "disciplinas_linguas_espanhol",
               48 => "disciplinas_linguas_frances",
               49 => "disciplinas_linguas_outras",
               50 => "disciplinas_artes",
               51 => "disciplinas_educacao_fisica",
               52 => "disciplinas_historia",
               53 => "disciplinas_geografia",
               54 => "disciplinas_filosofia",
               55 => "disciplinas_estudos_sociais",
               56 => "disciplinas_sociologia",
               57 => "disciplinas_informatica",
               58 => "disciplinas_profissoinalizantes",
               59 => "disciplinas_especiais",
               60 => "disciplinas_socioculturais",
               61 => "disciplinas_libras",
               62 => "disciplinas_pedagogicas",
               63 => "disciplinas_ensino_religioso",
               64 => "disciplinas_lingua_indigena",
               65 => "disciplinas_outras",
               66 => "turma_sem_profissisonal"
          ),
          "30" => array( // Profissional sala de aula
               1 => "tipo_registro",
               2 => "codigo_inep_escola",
               3 => "codigo_inep_profissional",
               4 => "codigo_profissional_escola",
               5 => "nome_profissional",
               6 => "email",
               7 => "numero_nis",
               8 => "data_nascimento",
               9 => "sexo",
               10 => "raca",
               11 => "nome_mae",
               12 => "nacionalidade",
               13 => "_pais_origem",
               14 => "_uf_nascimento",
               15 => "_municipio_nascimento",
               16 => "deficiencia",
               17 => "deficiencia_cegueira",
               18 => "deficiencia_baixa_visao",
               19 => "deficiencia_surdez",
               20 => "deficiencia_auditiva",
               21 => "deficiencia_surdocegueira",
               22 => "deficiencia_fisica",
               23 => "deficiencia_intelectual",
               24 => "deficiencia_multipla"
          ),
          "40" => array( // Profissional: documentos e endere�o
               1 => "tipo_registro",
               2 => "codigo_inep_escola",
               3 => "codigo_inep_profissional",
               4 => "codigo_profissional_escole",
               5 => "cpf",
               6 => "zona_localizacao",
               7 => "cep",
               8 => "endereco",
               9 => "numero",
               10 => "complemento",
               11 => "bairro",
               12 => "_uf",
               13 => "_municipio"
          ),
          "50" => array( // Profissional/Dados variaveis
               1 => "tipo_registro",
               2 => "codigo_inep_escola",
               3 => "codigo_inep_profissional",
               4 => "codigo_profissional_escola",
               5 => "escolaridade",
               6 => "situacao_curso_superior_1",
               7 => "formacao_complementacao_1",
               8 => "_codigo_curso_1",
               9 => "ano_inicio_curso_1",
               10 => "ano_conclusao_curso_1",
               11 => "tipo_instituicao_curso_1",
               12 => "_instituicao_curso_1",
               13 => "situacao_curso_superior_2",
               14 => "formacao_complementacao_2",
               15 => "_codigo_curso_2",
               16 => "ano_inicio_curso_2",
               17 => "ano_conclusao_curso_2",
               18 => "tipo_instituicaocurso_2",
               19 => "_instituicao_curso_2",
               20 => "situacao_curso_superior_3",
               21 => "formacao_complementacao_3",
               22 => "_codigo_curso_3",
               23 => "ano_inicio_curso_3",
               24 => "ano_conclusao_curso_3",
               25 => "tipo_instituicao_curso_3",
               26 => "_instituicao_curso_3",
               27 => "pos_especializacao",
               28 => "pos_mestrado",
               29 => "pos_doutorado",
               30 => "pos_nenhum",
               31 => "curso_creche",
               32 => "curso_pre_escola",
               33 => "curso_anos_iniciais_fundamental",
               34 => "curso_anos_finais_fundamental",
               35 => "curso_ensino_medio",
               36 => "curso_eja",
               37 => "curso_educacao_especial",
               38 => "curso_educacao_indigena",
               39 => "curso_educacao_campo",
               40 => "curso_educacao_ambiental",
               41 => "curso_direitos_humanos",
               42 => "curso_genero",
               43 => "curso_direitos_crianca_adolescente",
               44 => "curso_relacoes_etinicorraciais",
               45 => "curso_outros",
               46 => "curso_nenhum"
          ),
          "51" => array( // Profissional/Dados docencia
               1 => "tipo_registro",
               2 => "codigo_inep_escola",
               3 => "codigo_inep_profissional",
               4 => "codigo_profissional_escola",
               5 => "codigo_inep_turma",
               6 => "codigo_turma_escola",
               7 => "funcao",
               8 => "situacao_funcional",
               9 => "codigo_disciplina_1",
               10 => "codigo_disciplina_2",
               11 => "codigo_disciplina_3",
               12 => "codigo_disciplina_4",
               13 => "codigo_disciplina_5",
               14 => "codigo_disciplina_6",
               15 => "codigo_disciplina_7",
               16 => "codigo_disciplina_8",
               17 => "codigo_disciplina_9",
               18 => "codigo_disciplina_10",
               19 => "codigo_disciplina_11",
               20 => "codigo_disciplina_12",
               21 => "codigo_disciplina_13"
          ),
          "60" => array( // Alunos
               1 => "tipo_registro",
               2 => "codigo_inep_escola",
               3 => "codigo_inep_aluno",
               4 => "codigo_aluno_escola",
               5 => "nome",
               6 => "data_nascimento",
               7 => "sexo",
               8 => "raca",
               9 => "filiacao",
               10 => "nome_mae",
               11 => "nome_pai",
               12 => "nacionalidade",
               13 => "_pais_origem",
               14 => "_uf_nascimento",
               15 => "_municipio_nascimento",
               16 => "deficiencia",
               17 => "deficiencia_cegueira",
               18 => "deficiencia_baixa_visao",
               19 => "deficiencia_surdez",
               20 => "deficiencia_auditiva",
               21 => "deficiencia_surdocegueira",
               22 => "deficiencia_fisica",
               23 => "deficiencia_intelectual",
               24 => "deficiencia_multipla",
               25 => "deficiencia_autismo",
               26 => "deficiencia_asperger",
               27 => "deficiencia_rett",
               28 => "deficiencia_transtorno_desintegrativo",
               29 => "deficiencia_superdotacao",
               30 => "necessidade_auxilio_ledor",
               31 => "necessidade_auxilio_transcricao",
               32 => "necessidade_guia_interprete",
               33 => "necessidade_interprete_libras",
               34 => "necessidade_leitura_labial",
               35 => "necessidade_ampliacao_16",
               36 => "necessidade_ampliacao_20",
               37 => "necessidade_ampliacao_24",
               38 => "necessidade_braille",
               39 => "necessidade_nenhum"
          ),
          "70" => array( // Alunos/documentos e endereco
               1 => "tipo_registro",
               2 => "codigo_inep_escola",
               3 => "codigo_inep_aluno",
               4 => "codigo_aluno_escola",
               5 => "numero_identidade",
               6 => "_orgao_emissor",
               7 => "_uf_emissor",
               8 => "data_expedicao",
               9 => "certidao_civil",
               10 => "tipo_certidao_civil",
               11 => "termo_certidao_civil",
               12 => "folha_certidao_civil",
               13 => "livro_certidao_civil",
               14 => "data_emissao_certidao_civil",
               15 => "_uf_cartorio",
               16 => "_municipio_cartorio",
               17 => "_codigo_cartorio",
               18 => "numero_matricula",
               19 => "numero_cpf",
               20 => "numero_documento_estrangeiro",
               21 => "justificativa_falta_documentacao",
               22 => "zona_localizacao_residencia",
               23 => "cep",
               24 => "endereco",
               25 => "numero",
               26 => "complemento",
               27 => "bairro",
               28 => "_uf",
               29 => "_municipio"
          ),
          "80" => array( // Alunos/vinculo
               1 => "tipo_registro",
               2 => "codigo_inep_escola",
               3 => "codigo_inep_aluno",
               4 => "codigo_aluno_escola",
               5 => "codigo_inep_turma",
               6 => "codigo_escola_turma",
               7 => "codigo_matricula",
               8 => "turma_unificada",
               9 => "_etapa",
               10 => "escolarizacao_outro_espaco",
               11 => "transporte_publico",
               12 => "poder_publico_responsavel_transporte",
               13 => "tipo_rodoviario_van",
               14 => "tipo_rodoviario_microonibus",
               15 => "tipo_rodoviario_onibus",
               16 => "tipo_rodoviario_bicicleta",
               17 => "tipo_rodoviario_tracao_animal",
               18 => "tipo_rodoviario_outro",
               19 => "tipo_aquaviario_5-",
               20 => "tipo_aquaviario_5_15",
               21 => "tipo_aquaviario_15_35",
               22 => "tipo_aquaviario_35+",
               23 => "tipo_ferroviario_trem_metro",
               24 => "forma_ingresso"
          ) 
     );
    
    private static $etapas = array(
          1 => array(
                    'curso' => "Educa��o Infantil",
                    'serie' => "Creche (0 a 3 anos)",
                    'etapa' => 1,
                    'etapas' => 3,
                    'nivel' => 'Infantil'
          ),
          2 => array(
                    'curso' => "Educa��o Infantil",
                    'serie' => "Pr�-escola (4 e 5 anos)",
                    'etapa' => 2,
                    'etapas' => 3,
                    'nivel' => 'Infantil'
          ),
          3 => array(
                    'curso' => "Educa��o Infantil",
                    'serie' => "Unificada (0 a 5 anos)",
                    'etapa' => 3,
                    'etapas' => 3,
                    'nivel' => 'Infantil'
          ),
          4 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "1� S�rie",
                    'etapa' => 1,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
          ),
          5 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "2� S�rie",
                    'etapa' => 2,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
          ),
          6 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "3� S�rie",
                    'etapa' => 3,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
          ),
          7 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "4� S�rie",
                    'etapa' => 4,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
          ),
          8 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "5� S�rie",
                    'etapa' => 5,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
          ),
          9 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "6� S�rie",
                    'etapa' => 6,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
          ),
          10 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "7� S�rie",
                    'etapa' => 7,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
          ),
          11 => array(
                    'curso' => "Ensino Fundamental de 8 anos",
                    'serie' => "8� S�rie",
                    'etapa' => 8,
                    'etapas' => 8,
                    'nivel' => 'Fundamental'
          ),
          12 => array(
                    'curso' => "Ensino Fundamental de 8 anos - Multi",
                    'serie' => "Multi",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
          ),
          13 => array(
                    'curso' => "Ensino Fundamental de 8 anos - Corre��o de Fluxo",
                    'serie' => "Corre��o de Fluxo",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
          ),
          14 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "1� Ano",
                    'etapa' => 1,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          15 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "2� Ano",
                    'etapa' => 2,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          16 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "3� Ano",
                    'etapa' => 3,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          17 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "4� Ano",
                    'etapa' => 4,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          18 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "5� Ano",
                    'etapa' => 5,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          19 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "6� Ano",
                    'etapa' => 6,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          20 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "7� Ano",
                    'etapa' => 7,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          21 => array(
                    'curso' => "Ensino Fundamental de 9 anos",
                    'serie' => "8� Ano",
                    'etapa' => 8,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          22 => array(
                    'curso' => "Ensino Fundamental de 9 anos - Multi",
                    'serie' => "Multi",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
          ),
          23 => array(
                    'curso' => "Ensino Fundamental de 9 anos - Corre��o de Fluxo",
                    'serie' => "Corre��o de Fluxo",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
          ),
          24 => array(
                    'curso' => "Ensino Fundamental de 8 e 9 anos",
                    'serie' => "Multi 8 e 9 anos",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'Fundamental'
          ),
          25 => array(
                    'curso' => "Ensino M�dio",
                    'serie' => "1� S�rie",
                    'etapa' => 1,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          26 => array(
                    'curso' => "Ensino M�dio",
                    'serie' => "2� S�rie",
                    'etapa' => 2,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          27 => array(
                    'curso' => "Ensino M�dio",
                    'serie' => "3� S�rie",
                    'etapa' => 3,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          28 => array(
                    'curso' => "Ensino M�dio",
                    'serie' => "4� S�rie",
                    'etapa' => 4,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          29 => array(
                    'curso' => "Ensino M�dio N�o-seriado",
                    'serie' => "N�o Seriada",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'M�dio'
          ),
          30 => array(
                    'curso' => "Ensino M�dio Integrado",
                    'serie' => "Integrado 1� S�rie",
                    'etapa' => 1,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          31 => array(
                    'curso' => "Ensino M�dio Integrado",
                    'serie' => "Integrado 2� S�rie",
                    'etapa' => 2,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          32 => array(
                    'curso' => "Ensino M�dio Integrado",
                    'serie' => "Integrado 3� S�rie",
                    'etapa' => 3,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          33 => array(
                    'curso' => "Ensino M�dio Integrado",
                    'serie' => "Integrado 4� S�rie",
                    'etapa' => 4,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          34 => array('curso' => "Ensino M�dio Integrado N�o-Seriado",
                    'serie' => "Integrado N�o Seriada",
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'M�dio'
          ),
          35 => array(
                    'curso' => "Ensino M�dio - Magist�rio", 
                    'serie' => "Normal/Magist�rio 1� S�rie", 
                    'etapa' => 1,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          36 => array(
                    'curso' => "Ensino M�dio - Magist�rio", 
                    'serie' => "Normal/Magist�rio 2� S�rie", 
                    'etapa' => 2,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          37 => array(
                    'curso' => "Ensino M�dio - Magist�rio", 
                    'serie' => "Normal/Magist�rio 3� S�rie", 
                    'etapa' => 3,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          38 => array(
                    'curso' => "Ensino M�dio - Magist�rio", 
                    'serie' => "Normal/Magist�rio 4� S�rie", 
                    'etapa' => 4,
                    'etapas' => 4,
                    'nivel' => 'M�dio'
          ),
          39 => array(
                    'curso' => "Educa��o Profissional (Concomitante)", 
                    'serie' => "N�o-seriado", 
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'M�dio'
          ),
          40 => array(
                    'curso' => "Educa��o Profissional (Subseq�ente)", 
                    'serie' => "N�o-seriado", 
                    'etapa' => 1,
                    'etapas' => 1,
                    'nivel' => 'M�dio'
          ),
          41 => array(
                    'curso' => "Ensino Fundamental de 9 anos", 
                    'serie' => "9� Ano", 
                    'etapa' => 9,
                    'etapas' => 9,
                    'nivel' => 'Fundamental'
          ),
          43 => array(
                    'curso' => "EJA Presencial", 
                    'serie' => "Anos iniciais", 
                    'etapa' => 1,
                    'etapas' => 2,
                    'nivel' => 'M�dio'
          ),
          44 => array(
                    'curso' => "EJA Presencial", 
                    'serie' => "Anos finais", 
                    'etapa' => 2,
                    'etapas' => 2,
                    'nivel' => 'M�dio'
          )
     );
    
     public static function row_type($row)
     {
          return self::$rows [$row ['tipo_registro']];
     }
    
     public static function parse_row($row) 
     {
          if (!array_key_exists($row[0], self::$fields)) {
               throw new CoreExt_Exception_InvalidArgumentException("N�o sei o que fazer com linhas de c�digo " . $row[0]);              
          }
    
          $result = array();
          
          foreach (self::$fields[$row[0]] as $pos => $name) {
               $result[$name] = $row[$pos - 1];
          }
          
          return $result;
     }
    
     public static function curso_serie_by_etapa_ensino($id_etapa_ensino)
     {
          return self::$etapas[$id_etapa_ensino];
     }
}
