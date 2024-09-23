CREATE TABLE public.menu (
	mencodigo int4 NOT NULL,
	siscodigo int4 NOT NULL,
	mennome varchar(200) NULL,
	mentabela varchar(200) NULL,
	CONSTRAINT pk_menu PRIMARY KEY (mencodigo, siscodigo)
);

CREATE TABLE public.sistema (
	siscodigo int4 NOT NULL,
	sisnome varchar(200) NULL,
	sisativo int2 DEFAULT 0 NOT NULL,
	CONSTRAINT pk_sistema PRIMARY KEY (siscodigo)
);

CREATE TABLE public.usuario (
	usucodigo int2 NOT NULL,
	usulogin varchar(20) NOT NULL,
	usunome varchar(200) NOT NULL,
	ususenha varchar(20) NOT NULL,
	CONSTRAINT usuario_pk PRIMARY KEY (usucodigo)
);

INSERT INTO "public"."menu" ("mencodigo", "siscodigo", "mennome", "mentabela") VALUES ('1', '1', 'PRODUTO', 'PRODUTO'), ('1', '2', 'NOTA DE ENTRADA', 'NOTA DE ENTRADA'), ('1', '3', 'CADASTRO LANÇAMENTO(AVULSO)', 'CADASTRO LANÇAMENTO(AVULSO)'), ('1', '4', 'REMESSA DE BOLETO', 'REMESSA DE BOLETO'), ('1', '5', 'ORDEM DE COMPRA', 'ORDEM DE COMPRA'), ('1', '6', 'PRODUTO ENGENHARIA', 'PRODUTO ENGENHARIA'), ('1', '7', 'RELATÓRIO CLIENTES', 'RELATÓRIO CLIENTES'), ('1', '8', 'Sistema', 'sistemas'), ('2', '1', 'PESSOA', 'PESSOA'), ('2', '2', 'NOTA DE SERVIÇOS', 'NOTA DE SERVIÇOS'), ('2', '3', 'BAIXA CONTAS A RECEBER', 'BAIXA CONTAS A RECEBER'), ('2', '4', 'RETORNO DE BOLETO', 'RETORNO DE BOLETO'), ('2', '5', 'RELATÓRIO ORDEM DE COMPRA', 'RELATÓRIO ORDEM DE COMPRA'), ('2', '6', 'NOVA ENGENHARIA', 'NOVA ENGENHARIA'), ('2', '7', 'RELATÓRIO PRODUTOS', 'RELATÓRIO PRODUTOS'), ('2', '8', 'Menu', 'menu'), ('3', '1', 'VENDEDOR', 'VENDEDOR'), ('3', '2', 'GERENCIADOR NFE', 'GERENCIADOR NFE'), ('3', '3', 'BAIXA CONTAS A PAGAR', 'BAIXA CONTAS A PAGAR'), ('3', '4', 'CONSULTA RETORNO/REMESSA', 'CONSULTA RETORNO/REMESSA'), ('3', '7', 'RELATÓRIO ORDEM DE SERVIÇOS', 'RELATÓRIO ORDEM DE SERVIÇOS'), ('3', '8', 'Usuário', 'usuario'), ('4', '1', 'TRANSPORTADORA', 'TRANSPORTADORA'), ('4', '2', 'GERENCIADOR NFSE', 'GERENCIADOR NFSE'), ('4', '3', 'CADASTRO CONTA CRÉDITO', 'CADASTRO CONTA CRÉDITO'), ('4', '4', 'IMPRESSÃO BOLETOS', 'IMPRESSÃO BOLETOS'), ('4', '7', 'RELATÓRIO ORÇAMENTOS', 'RELATÓRIO ORÇAMENTOS'), ('5', '1', 'FORNECEDOR', 'FORNECEDOR'), ('5', '2', 'ORÇAMENTO', 'ORÇAMENTO'), ('5', '3', 'CADASTRO CONTA DÉBITO', 'CADASTRO CONTA DÉBITO'), ('5', '7', 'RELATÓRIO PEDIDOS', 'RELATÓRIO PEDIDOS'), ('6', '1', 'CIDADE', 'CIDADE'), ('6', '2', 'PEDIDO', 'PEDIDO'), ('6', '3', 'BALANCETE GERENCIAL', 'BALANCETE GERENCIAL'), ('6', '7', 'RELATÓRIO ORDEM DE SERVIÇOS', 'RELATÓRIO ORDEM DE SERVIÇOS'), ('7', '1', 'MUNICIPIO', 'MUNICIPIO'), ('7', '2', 'ORDEM DE SERVIÇOS', 'ORDEM DE SERVIÇOS'), ('7', '3', 'CONTA FINANCEIRA', 'CONTA FINANCEIRA'), ('7', '7', 'RELATÓRIO NOTA ENTRADA', 'RELATÓRIO NOTA ENTRADA'), ('8', '1', 'REGIÃO', 'REGIÃO'), ('8', '2', 'CONDIÇÃO DE PAGAMENTO', 'CONDIÇÃO DE PAGAMENTO'), ('8', '7', 'RELATÓRIO NOTA FISCAL DE PRODUTOS(NFE)', 'RELATÓRIO NOTA FISCAL DE PRODUTOS(NFE)'), ('9', '1', 'UNIDADE DE MEDIDA', 'UNIDADE DE MEDIDA'), ('9', '2', 'TIPO DE COBRANÇA', 'TIPO DE COBRANÇA'), ('9', '7', 'RELATÓRIO NOTA FISCAL DE SERVIÇOS(NFSE)', 'RELATÓRIO NOTA FISCAL DE SERVIÇOS(NFSE)'), ('10', '2', 'GRUPO FISCAL', 'GRUPO FISCAL'), ('10', '7', 'RELATÓRIO REMESSAS ENVIADAS', 'RELATÓRIO REMESSAS ENVIADAS'), ('11', '2', 'NCMSH', 'NCMSH'), ('11', '7', 'RELATÓRIO RETORNOS RECEBIDOS', 'RELATÓRIO RETORNOS RECEBIDOS'), ('12', '2', 'NATUREZA OPERAÇÃO(CFOP)', 'NATUREZA OPERAÇÃO(CFOP)'), ('12', '7', 'RELATÓRIO CONTAS A PAGAR', 'RELATÓRIO CONTAS A PAGAR'), ('13', '2', 'SITUAÇÃO TRIBUTÁRIA', 'SITUAÇÃO TRIBUTÁRIA'), ('13', '7', 'RELATÓRIO CONTAS A RECEBER', 'RELATÓRIO CONTAS A RECEBER'), ('14', '2', 'TIPO DE NOTA FISCAL', 'TIPO DE NOTA FISCAL'), ('15', '2', 'SÉRIE NOTAS', 'SÉRIE NOTAS');

INSERT INTO "public"."sistema" ("siscodigo", "sisnome", "sisativo") 
VALUES ('1', 'CADASTRO', '1'), ('2', 'FATURAMENTO', '1'),
 ('3', 'FINANCEIRO', '1'), ('4', 'BOLETO BANCÁRIO', '1'), ('5', 'SUPRIMENTOS', '1'), ('6', 'ENGENHARIA', '1'), ('7', 'RELATÓRIOS', '1'), ('8', 'ESTRUTURA', '1');


 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(1, 'admin', 'Admin', 'Admin');
 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(2, 'caue', 'Cauê', 'Admin');
 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(3, 'ryan', 'Ryan', 'Admin');
 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(4, 'vinicius', 'Vinicius', 'Admin');
 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(5, 'bruna', 'Bruna', 'Admin');
 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(6, 'phamela', 'Phamela', 'Admin');
 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(7, 'romulo', 'Romulo', 'Admin');
 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(8, 'helton', 'Helton', 'Admin');
 INSERT INTO public.usuario (usucodigo, usulogin, usunome, ususenha) VALUES(9, 'gelvazio', 'Gelvazio', 'Admin');




