@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <h3>1. Empresa Desenvolvedora Requerente: </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-3">
                <label class="control-label">1.1 Razão Social</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
                <label class="control-label">1.2 Nome Fantasia</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-3">
                <label class="control-label">1.3 Endereço</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-3">
                <label class="control-label">1.4 Bairro</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-3">
                <label class="control-label">1.5 Cidade</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-3">
                <label class="control-label">1.6 UF</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-3">
                <label class="control-label">1.7 CEP</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-3">
                <label class="control-label">1.8 Telefone</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-3">
                <label class="control-label">1.9 Celular</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-3">
                <label class="control-label">1.10 CNPJ</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-3">
                <label class="control-label">1.11 Inscrição Estadual</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-3">
                <label class="control-label">1.11 Inscrição Municipal</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-3">
                <label class="control-label">1.12 Responsável pela Assinatura</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-3">
                <label class="control-label">1.13 CPF do Responsável</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-3">
                <label class="control-label">1.14 RG do Responsável</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-3">
                <label class="control-label">1.15 Email do responsável</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-3">
                <label>1.16 Responsável pela Acompanhamento dos Testes</label>
                <input class="form-control" type="text">
            </div>
        </form>
    </div>
    <br>
    <h3>2. Órgão Técnico Credenciado: </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-3">
                <label class="control-label">2.1 Identificação: </label>
            </div>
        </form>
    <h3>3. Identificação do Programa Aplicativo Fiscal (PAF-ECF): </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-3">
                <label class="control-label">3.1 Nome Comercial</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form-gorup col-md-3">
                <label class="control-label">3.2 Versão</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
                <label class="control-label">3.3 Data da Versão</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form-gorup col-md-3">
                <label class="control-label">3.3 Principal Arquivo Executável</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <br>
        <form class="row">
            <div class="form-gorup col-md-3">
                <label class="control-label">3.4 Perfis a serem homologados</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Perfil V</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Perfil W</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Perfil T</label>
                </div>
            </div>
        </form>
    </div>
    <br>
    <h3>4. Características do Programa Aplicativo FIscal: </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-3">
                <label class="control-label">4.1 Linguagem de Programação</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-gorup col-md-3">
                <label class="control-label">4.2 Sistem Operacional</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-gorup col-md-3">
                <label class="control-label">4.3 Banco de Dados</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <br>
        <form class="row">
            <div>
                <label class="control-label">4.4 Tipo de Desenvolvimento</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Comercializável</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Exclusivo Próprio</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Exclusivo Tercerizado</label>
                </div>
            </div>
        </form>
        <br>
        <form class="row">
            <div>
                <label class="control-label">4.5 Forma de impressão de um item em cupom fiscal (Concomitância com
                    dispositivos de visualização do registro do item): </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Concomitante.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Não Concomitante com Impressão de DAV.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Não concomtante com controle de Pré-Venda.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Não concomtante com controle de Conta
                        Cliente.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">DAV - emitido sem possibilidade de
                        impressão.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">DAV - impresso em impressora não fiscal.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">DAV - Impresso em ECF.</label>
                </div>
            </div>
        </form>
        <br>
        <form class="row">
            <div>
                <label class="control-label">4.6 Tipo de Funcionamento: </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Exclusivamente Stand Alone</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Em rede</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Parametrizável</label>
                </div>
            </div>
        </form>
        <br>
        <form class="row">
            <div>
                <label class="control-label">4.7 Geração do Arquivo SINTEGRA ou EFD(SPED): </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Pelo PAF</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Pelo Sistema de Retaguarda</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Pelo Sistema PED ou EFD</label>
                </div>
            </div>
        </form>
        <br>
        <form class="row">
            <div>
                <label class="control-label">4.8 Emite Nota Fiscal Eletrônica - NF-e: </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Sim</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Não</label>
                </div>
            </div>
            <div>
                <label class="control-label">4.9 Emite Nota Fiscal Consumidor Eletrônica - NFC-e: </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Sim</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Não</label>
                </div>
            </div>
        </form>
        <br>
        <form class="row">
            <div>
                <label class="control-label">4.10 Tratamento de Interrupção durante a emissão do cupom fiscal: </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Recuperação de Dados.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Cancelamento Automático.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Bloqueio de Funções.</label>
                </div>
            </div>
        </form>
        <br>
        <form class="row">
            <div>
                <label class="control-label">4.11 Integração do Programa Aplicativo Fiscal: </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Com Sistema de Gestão ou Retaguarda.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Com Sistema PED.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Com Ambos.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Não Integrado.</label>
                </div>
            </div>
        </form>
        <br>
        <form class="row">
            <div>
                <label class="control-label">4.12 Aplicações Especiais: </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Posto Revendedor de Combustível COM sistema de
                        Interligação de Bombas.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Posto Revendedor de Combustível SEM sistema de
                        Interligação de Bombas.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Oficina de Conserto COM DAV-OS.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Oficina de Conserto COM CONTA DE CLIENTE.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Bar, Restaurante e estabelecimento similar com
                        utilização de ECF-RESTAURANTE e balança interligada.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Bar, Restaurante e estabelecimento similar com
                        utilização de ECF-NORMAL e balança interligada.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Bar, Restaurante e estabelecimento similar com
                        utilização de ECF-RESTAURANTE SEM balança interligada.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Bar, Restaurante e estabelecimento similar com
                        utilização de ECF-NORMAL SEM balança interligada.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Farmácia de Manipulação.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Transporte de Passageiros.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Posto de Pedágio.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Estacionamento, Motéis e Similares, que pratiquem o
                        Controle de Tráfego de Veículos ou Pessoas.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Prestador de Serviço de Cinema, Espetáculos ou
                        Similares.</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Demais Atividades.</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Estabelecimento Enquadrado no SIMPLES NACIONAL (Art.
                        5º do Ato COPETE da ER-PEF-ECF).</label>
                </div>
            </div>
        </form>
        <br>
        <h3>5. Identificação do Sistema de Gestão ou Retaguarda que executa pelo menos um dos requisitos atribuídos ao PAF-ECF e que, obrigatória e exclusivamente, funciona integrado ao PAF-ECF: </h3>
        <div class="title-body">
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">5.1 Empresa Desenvolvedora: (Denominação e CNPJ):</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-gorup col-md-3">
                    <label class="control-label">5.2 Nome do Sistema: </label>
                    <input class="form-control" type="text">
                </div>
            </form>
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">5.3 Requisitos(s) Executado(s):</label>
                    <input class="form-control" type="text">
                </div>
            </form>
        </div>
        <br>
        <h3>6. Identificação dos Sistemas de PED (SPED/SINTEGRA/DOCUMENTOS/LIVROS) que Funcionam Integrados ao PAF-ECF: </h3>
        <div class="title-body">
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">6.1 Empresa Desenvolvedora: (Denominação e CNPJ):</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-gorup col-md-3">
                    <label class="control-label">6.2 Nome do Sistema: </label>
                    <input class="form-control" type="text">
                </div>
            </form>
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">6.3 Nome do arquivo Executável:</label>
                    <input class="form-control" type="text">
                </div>
            </form>
        </div>
        <br>
        <h3>7. Identificação dos Sistemas de PED que geram a NF-e e funcionam integrados ao PAF-ECF: </h3>
        <div class="title-body">
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">7.1 Empresa Desenvolvedora: (Denominação e CNPJ):</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-gorup col-md-3">
                    <label class="control-label">7.2 Nome do Sistema: </label>
                    <input class="form-control" type="text">
                </div>
            </form>
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">7.3 Nome do arquivo Executável:</label>
                    <input class="form-control" type="text">
                </div>
            </form>
        </div>
        <br>
        <h3>8. Identificação dos Equipamentos ECF Utilizados para a Análise Funcional: </h3>
        <div class="title-body">
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">8.1 Marca:</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-gorup col-md-3">
                    <label class="control-label">8.2 Modelo:</label>
                    <input class="form-control" type="text">
                </div>
            </form>
        </div>
        <h3>9. Relação de marcas e modelos de equipamentos ECF compatíveis com o PAF-ECF: </h3>
        <div class="title-body">
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">8.1 Marca:</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-gorup col-md-3">
                    <label class="control-label">8.2 Modelo:</label>
                    <input class="form-control" type="text">
                </div>
            </form>
        </div>
        <h3>10. Introdução: </h3>
        <div class="title-body">
            <form class="row">
                <div class="form-gorup col-md-3">
                    <label class="control-label">8.1 Marca:</label>
                    <input class="form-control" type="text">
                </div>
                <div class="form-gorup col-md-3">
                    <label class="control-label">8.2 Modelo:</label>
                    <input class="form-control" type="text">
                </div>
            </form>
            <br>
        </div>
        <div class="form-group col-md-4 align-self-end">
            <button class="btn btn-primary" type="button"> <i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar</button>
        </div>
    @endsection
