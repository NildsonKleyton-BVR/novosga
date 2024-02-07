<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207115247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE agendamentos (id INT AUTO_INCREMENT NOT NULL, cliente_id INT DEFAULT NULL, unidade_id INT DEFAULT NULL, servico_id INT DEFAULT NULL, data DATE NOT NULL, hora TIME NOT NULL, data_confirmacao DATETIME DEFAULT NULL, oid VARCHAR(36) DEFAULT NULL, situacao VARCHAR(20) NOT NULL, INDEX IDX_2D12EA4ADE734E51 (cliente_id), INDEX IDX_2D12EA4AEDF4B99B (unidade_id), INDEX IDX_2D12EA4A82E14982 (servico_id), INDEX agendamento_oid_index (oid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE atendimentos (id INT AUTO_INCREMENT NOT NULL, cliente_id INT DEFAULT NULL, unidade_id INT DEFAULT NULL, servico_id INT DEFAULT NULL, prioridade_id INT DEFAULT NULL, usuario_id INT DEFAULT NULL, usuario_tri_id INT DEFAULT NULL, atendimento_id INT DEFAULT NULL, local_id INT DEFAULT NULL, num_local SMALLINT DEFAULT NULL, dt_age DATETIME DEFAULT NULL, dt_cheg DATETIME NOT NULL, dt_cha DATETIME DEFAULT NULL, dt_ini DATETIME DEFAULT NULL, dt_fim DATETIME DEFAULT NULL, tempo_espera INT DEFAULT NULL, tempo_permanencia INT DEFAULT NULL, tempo_atendimento INT DEFAULT NULL, tempo_deslocamento INT DEFAULT NULL, status VARCHAR(25) NOT NULL, resolucao VARCHAR(25) DEFAULT NULL, observacao LONGTEXT DEFAULT NULL, senha_sigla VARCHAR(3) NOT NULL, senha_numero INT NOT NULL, INDEX IDX_29E906E7DE734E51 (cliente_id), INDEX IDX_29E906E7EDF4B99B (unidade_id), INDEX IDX_29E906E782E14982 (servico_id), INDEX IDX_29E906E7226EFC79 (prioridade_id), INDEX IDX_29E906E7DB38439E (usuario_id), INDEX IDX_29E906E7875F1A79 (usuario_tri_id), INDEX IDX_29E906E776323123 (atendimento_id), INDEX IDX_29E906E75D5A2101 (local_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE atendimentos_codificados (servico_id INT NOT NULL, atendimento_id INT NOT NULL, valor_peso SMALLINT NOT NULL, INDEX IDX_DDF47B2D82E14982 (servico_id), INDEX IDX_DDF47B2D76323123 (atendimento_id), PRIMARY KEY(servico_id, atendimento_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE atendimentos_metadata (namespace VARCHAR(30) NOT NULL, name VARCHAR(30) NOT NULL, atendimento_id INT NOT NULL, value JSON NOT NULL COMMENT \'(DC2Type:json_array)\', INDEX IDX_4F7723EB76323123 (atendimento_id), PRIMARY KEY(namespace, name, atendimento_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clientes (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(60) NOT NULL, documento VARCHAR(30) NOT NULL, email VARCHAR(80) DEFAULT NULL, telefone VARCHAR(25) DEFAULT NULL, dt_nascimento DATE DEFAULT NULL, genero VARCHAR(1) DEFAULT NULL, observacao LONGTEXT DEFAULT NULL, end_pais VARCHAR(2) DEFAULT NULL, end_cep VARCHAR(25) DEFAULT NULL, end_estado VARCHAR(3) DEFAULT NULL, end_cidade VARCHAR(30) DEFAULT NULL, end_logradouro VARCHAR(60) DEFAULT NULL, end_numero VARCHAR(10) DEFAULT NULL, end_complemento VARCHAR(15) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clientes_metadata (namespace VARCHAR(30) NOT NULL, name VARCHAR(30) NOT NULL, cliente_id INT NOT NULL, value JSON NOT NULL COMMENT \'(DC2Type:json_array)\', INDEX IDX_23B81DEEDE734E51 (cliente_id), PRIMARY KEY(namespace, name, cliente_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contador (unidade_id INT NOT NULL, servico_id INT NOT NULL, numero INT DEFAULT NULL, INDEX IDX_E83EF8FAEDF4B99B (unidade_id), INDEX IDX_E83EF8FA82E14982 (servico_id), PRIMARY KEY(unidade_id, servico_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departamentos (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(64) NOT NULL, descricao VARCHAR(250) NOT NULL, ativo TINYINT(1) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historico_atendimentos (id INT AUTO_INCREMENT NOT NULL, cliente_id INT DEFAULT NULL, unidade_id INT DEFAULT NULL, servico_id INT DEFAULT NULL, prioridade_id INT DEFAULT NULL, usuario_id INT DEFAULT NULL, usuario_tri_id INT DEFAULT NULL, atendimento_id INT DEFAULT NULL, local_id INT DEFAULT NULL, num_local SMALLINT DEFAULT NULL, dt_age DATETIME DEFAULT NULL, dt_cheg DATETIME NOT NULL, dt_cha DATETIME DEFAULT NULL, dt_ini DATETIME DEFAULT NULL, dt_fim DATETIME DEFAULT NULL, tempo_espera INT DEFAULT NULL, tempo_permanencia INT DEFAULT NULL, tempo_atendimento INT DEFAULT NULL, tempo_deslocamento INT DEFAULT NULL, status VARCHAR(25) NOT NULL, resolucao VARCHAR(25) DEFAULT NULL, observacao LONGTEXT DEFAULT NULL, senha_sigla VARCHAR(3) NOT NULL, senha_numero INT NOT NULL, INDEX IDX_CBBDF95FDE734E51 (cliente_id), INDEX IDX_CBBDF95FEDF4B99B (unidade_id), INDEX IDX_CBBDF95F82E14982 (servico_id), INDEX IDX_CBBDF95F226EFC79 (prioridade_id), INDEX IDX_CBBDF95FDB38439E (usuario_id), INDEX IDX_CBBDF95F875F1A79 (usuario_tri_id), INDEX IDX_CBBDF95F76323123 (atendimento_id), INDEX IDX_CBBDF95F5D5A2101 (local_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historico_atendimentos_codificados (servico_id INT NOT NULL, atendimento_id INT NOT NULL, valor_peso SMALLINT NOT NULL, INDEX IDX_111248C282E14982 (servico_id), INDEX IDX_111248C276323123 (atendimento_id), PRIMARY KEY(servico_id, atendimento_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historico_atendimentos_metadata (namespace VARCHAR(30) NOT NULL, name VARCHAR(30) NOT NULL, atendimento_id INT NOT NULL, value JSON NOT NULL COMMENT \'(DC2Type:json_array)\', INDEX IDX_169630A576323123 (atendimento_id), PRIMARY KEY(namespace, name, atendimento_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE locais (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(20) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_C823878C54BD530C (nome), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lotacoes (id INT AUTO_INCREMENT NOT NULL, usuario_id INT DEFAULT NULL, unidade_id INT DEFAULT NULL, perfil_id INT DEFAULT NULL, INDEX IDX_10E72C2FDB38439E (usuario_id), INDEX IDX_10E72C2FEDF4B99B (unidade_id), INDEX IDX_10E72C2F57291544 (perfil_id), UNIQUE INDEX lotacao_usuario_unidade_idx (usuario_id, unidade_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE metadata (namespace VARCHAR(30) NOT NULL, name VARCHAR(30) NOT NULL, value JSON NOT NULL COMMENT \'(DC2Type:json_array)\', PRIMARY KEY(namespace, name)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oauth_access_tokens (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, user_id INT DEFAULT NULL, token VARCHAR(255) NOT NULL, expires_at INT DEFAULT NULL, scope VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_CA42527C5F37A13B (token), INDEX IDX_CA42527C19EB6921 (client_id), INDEX IDX_CA42527CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oauth_clients (id INT AUTO_INCREMENT NOT NULL, random_id VARCHAR(255) NOT NULL, redirect_uris LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', secret VARCHAR(255) NOT NULL, allowed_grant_types LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', description VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oauth_refresh_tokens (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, user_id INT DEFAULT NULL, token VARCHAR(255) NOT NULL, expires_at INT DEFAULT NULL, scope VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_5AB6875F37A13B (token), INDEX IDX_5AB68719EB6921 (client_id), INDEX IDX_5AB687A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paineis (host INT NOT NULL, unidade_id INT DEFAULT NULL, senha VARCHAR(128) DEFAULT NULL, INDEX IDX_CE58BF05EDF4B99B (unidade_id), PRIMARY KEY(host)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paineis_servicos (host INT NOT NULL, servico_id INT NOT NULL, unidade_id INT DEFAULT NULL, INDEX IDX_D98415D3CF2713FD (host), INDEX IDX_D98415D382E14982 (servico_id), INDEX IDX_D98415D3EDF4B99B (unidade_id), PRIMARY KEY(host, servico_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE painel_senha (id INT AUTO_INCREMENT NOT NULL, servico_id INT DEFAULT NULL, unidade_id INT DEFAULT NULL, num_senha INT NOT NULL, sig_senha VARCHAR(3) NOT NULL, msg_senha VARCHAR(255) NOT NULL, local VARCHAR(20) NOT NULL, num_local SMALLINT NOT NULL, peso SMALLINT NOT NULL, prioridade VARCHAR(100) DEFAULT NULL, nome_cliente VARCHAR(100) DEFAULT NULL, documento_cliente VARCHAR(30) DEFAULT NULL, INDEX IDX_390182E682E14982 (servico_id), INDEX IDX_390182E6EDF4B99B (unidade_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE perfis (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(50) NOT NULL, descricao VARCHAR(150) NOT NULL, modulos LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:simple_array)\', created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prioridades (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(64) NOT NULL, descricao VARCHAR(100) NOT NULL, peso SMALLINT NOT NULL, cor VARCHAR(255) DEFAULT NULL, ativo TINYINT(1) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicos (id INT AUTO_INCREMENT NOT NULL, macro_id INT DEFAULT NULL, nome VARCHAR(50) NOT NULL, descricao VARCHAR(250) NOT NULL, ativo TINYINT(1) NOT NULL, peso SMALLINT NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, INDEX IDX_89DD09E3F43A187E (macro_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicos_metadata (namespace VARCHAR(30) NOT NULL, name VARCHAR(30) NOT NULL, servico_id INT NOT NULL, value JSON NOT NULL COMMENT \'(DC2Type:json_array)\', INDEX IDX_8E8BF0E482E14982 (servico_id), PRIMARY KEY(namespace, name, servico_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicos_unidades (servico_id INT NOT NULL, unidade_id INT NOT NULL, departamento_id INT DEFAULT NULL, sigla VARCHAR(3) NOT NULL, ativo TINYINT(1) NOT NULL, peso SMALLINT NOT NULL, tipo SMALLINT DEFAULT 1 NOT NULL, numero_inicial INT NOT NULL, numero_final INT DEFAULT NULL, incremento INT NOT NULL, maximo INT DEFAULT NULL, mensagem VARCHAR(255) DEFAULT NULL, INDEX IDX_C50F703482E14982 (servico_id), INDEX IDX_C50F7034EDF4B99B (unidade_id), INDEX IDX_C50F70345A91C08D (departamento_id), PRIMARY KEY(servico_id, unidade_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicos_usuarios (servico_id INT NOT NULL, unidade_id INT NOT NULL, usuario_id INT NOT NULL, peso SMALLINT NOT NULL, INDEX IDX_CF69430282E14982 (servico_id), INDEX IDX_CF694302EDF4B99B (unidade_id), INDEX IDX_CF694302DB38439E (usuario_id), PRIMARY KEY(servico_id, unidade_id, usuario_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unidades (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(50) NOT NULL, descricao VARCHAR(250) NOT NULL, ativo TINYINT(1) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, impressao_cabecalho VARCHAR(150) NOT NULL, impressao_rodape VARCHAR(150) NOT NULL, impressao_exibir_data TINYINT(1) NOT NULL, impressao_exibir_prioridade TINYINT(1) NOT NULL, impressao_exibir_nome_unidade TINYINT(1) NOT NULL, impressao_exibir_nome_servico TINYINT(1) NOT NULL, impressao_exibir_mensagem_servico TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unidades_metadata (namespace VARCHAR(30) NOT NULL, name VARCHAR(30) NOT NULL, unidade_id INT NOT NULL, value JSON NOT NULL COMMENT \'(DC2Type:json_array)\', INDEX IDX_A21ACF47EDF4B99B (unidade_id), PRIMARY KEY(namespace, name, unidade_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(30) NOT NULL, nome VARCHAR(20) NOT NULL, sobrenome VARCHAR(100) NOT NULL, email VARCHAR(150) DEFAULT NULL, senha VARCHAR(128) NOT NULL, ativo TINYINT(1) NOT NULL, ultimo_acesso DATETIME DEFAULT NULL, ip VARCHAR(15) DEFAULT NULL, session_id VARCHAR(50) DEFAULT NULL, algorithm VARCHAR(10) NOT NULL, admin TINYINT(1) NOT NULL, salt VARCHAR(60) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, updated_at DATETIME DEFAULT NULL, deleted_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_EF687F2AA08CB10 (login), UNIQUE INDEX UNIQ_EF687F2E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios_metadata (namespace VARCHAR(30) NOT NULL, name VARCHAR(30) NOT NULL, usuario_id INT NOT NULL, value JSON NOT NULL COMMENT \'(DC2Type:json_array)\', INDEX IDX_BD8E7838DB38439E (usuario_id), PRIMARY KEY(namespace, name, usuario_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agendamentos ADD CONSTRAINT FK_2D12EA4ADE734E51 FOREIGN KEY (cliente_id) REFERENCES clientes (id)');
        $this->addSql('ALTER TABLE agendamentos ADD CONSTRAINT FK_2D12EA4AEDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE agendamentos ADD CONSTRAINT FK_2D12EA4A82E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE atendimentos ADD CONSTRAINT FK_29E906E7DE734E51 FOREIGN KEY (cliente_id) REFERENCES clientes (id)');
        $this->addSql('ALTER TABLE atendimentos ADD CONSTRAINT FK_29E906E7EDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE atendimentos ADD CONSTRAINT FK_29E906E782E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE atendimentos ADD CONSTRAINT FK_29E906E7226EFC79 FOREIGN KEY (prioridade_id) REFERENCES prioridades (id)');
        $this->addSql('ALTER TABLE atendimentos ADD CONSTRAINT FK_29E906E7DB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE atendimentos ADD CONSTRAINT FK_29E906E7875F1A79 FOREIGN KEY (usuario_tri_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE atendimentos ADD CONSTRAINT FK_29E906E776323123 FOREIGN KEY (atendimento_id) REFERENCES atendimentos (id)');
        $this->addSql('ALTER TABLE atendimentos ADD CONSTRAINT FK_29E906E75D5A2101 FOREIGN KEY (local_id) REFERENCES locais (id)');
        $this->addSql('ALTER TABLE atendimentos_codificados ADD CONSTRAINT FK_DDF47B2D82E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE atendimentos_codificados ADD CONSTRAINT FK_DDF47B2D76323123 FOREIGN KEY (atendimento_id) REFERENCES atendimentos (id)');
        $this->addSql('ALTER TABLE atendimentos_metadata ADD CONSTRAINT FK_4F7723EB76323123 FOREIGN KEY (atendimento_id) REFERENCES atendimentos (id)');
        $this->addSql('ALTER TABLE clientes_metadata ADD CONSTRAINT FK_23B81DEEDE734E51 FOREIGN KEY (cliente_id) REFERENCES clientes (id)');
        $this->addSql('ALTER TABLE contador ADD CONSTRAINT FK_E83EF8FAEDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE contador ADD CONSTRAINT FK_E83EF8FA82E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE historico_atendimentos ADD CONSTRAINT FK_CBBDF95FDE734E51 FOREIGN KEY (cliente_id) REFERENCES clientes (id)');
        $this->addSql('ALTER TABLE historico_atendimentos ADD CONSTRAINT FK_CBBDF95FEDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE historico_atendimentos ADD CONSTRAINT FK_CBBDF95F82E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE historico_atendimentos ADD CONSTRAINT FK_CBBDF95F226EFC79 FOREIGN KEY (prioridade_id) REFERENCES prioridades (id)');
        $this->addSql('ALTER TABLE historico_atendimentos ADD CONSTRAINT FK_CBBDF95FDB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE historico_atendimentos ADD CONSTRAINT FK_CBBDF95F875F1A79 FOREIGN KEY (usuario_tri_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE historico_atendimentos ADD CONSTRAINT FK_CBBDF95F76323123 FOREIGN KEY (atendimento_id) REFERENCES atendimentos (id)');
        $this->addSql('ALTER TABLE historico_atendimentos ADD CONSTRAINT FK_CBBDF95F5D5A2101 FOREIGN KEY (local_id) REFERENCES locais (id)');
        $this->addSql('ALTER TABLE historico_atendimentos_codificados ADD CONSTRAINT FK_111248C282E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE historico_atendimentos_codificados ADD CONSTRAINT FK_111248C276323123 FOREIGN KEY (atendimento_id) REFERENCES historico_atendimentos (id)');
        $this->addSql('ALTER TABLE historico_atendimentos_metadata ADD CONSTRAINT FK_169630A576323123 FOREIGN KEY (atendimento_id) REFERENCES historico_atendimentos (id)');
        $this->addSql('ALTER TABLE lotacoes ADD CONSTRAINT FK_10E72C2FDB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE lotacoes ADD CONSTRAINT FK_10E72C2FEDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE lotacoes ADD CONSTRAINT FK_10E72C2F57291544 FOREIGN KEY (perfil_id) REFERENCES perfis (id)');
        $this->addSql('ALTER TABLE oauth_access_tokens ADD CONSTRAINT FK_CA42527C19EB6921 FOREIGN KEY (client_id) REFERENCES oauth_clients (id)');
        $this->addSql('ALTER TABLE oauth_access_tokens ADD CONSTRAINT FK_CA42527CA76ED395 FOREIGN KEY (user_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE oauth_refresh_tokens ADD CONSTRAINT FK_5AB68719EB6921 FOREIGN KEY (client_id) REFERENCES oauth_clients (id)');
        $this->addSql('ALTER TABLE oauth_refresh_tokens ADD CONSTRAINT FK_5AB687A76ED395 FOREIGN KEY (user_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE paineis ADD CONSTRAINT FK_CE58BF05EDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE paineis_servicos ADD CONSTRAINT FK_D98415D3CF2713FD FOREIGN KEY (host) REFERENCES paineis (host)');
        $this->addSql('ALTER TABLE paineis_servicos ADD CONSTRAINT FK_D98415D382E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE paineis_servicos ADD CONSTRAINT FK_D98415D3EDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE painel_senha ADD CONSTRAINT FK_390182E682E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE painel_senha ADD CONSTRAINT FK_390182E6EDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE servicos ADD CONSTRAINT FK_89DD09E3F43A187E FOREIGN KEY (macro_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE servicos_metadata ADD CONSTRAINT FK_8E8BF0E482E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE servicos_unidades ADD CONSTRAINT FK_C50F703482E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE servicos_unidades ADD CONSTRAINT FK_C50F7034EDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE servicos_unidades ADD CONSTRAINT FK_C50F70345A91C08D FOREIGN KEY (departamento_id) REFERENCES departamentos (id)');
        $this->addSql('ALTER TABLE servicos_usuarios ADD CONSTRAINT FK_CF69430282E14982 FOREIGN KEY (servico_id) REFERENCES servicos (id)');
        $this->addSql('ALTER TABLE servicos_usuarios ADD CONSTRAINT FK_CF694302EDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE servicos_usuarios ADD CONSTRAINT FK_CF694302DB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE unidades_metadata ADD CONSTRAINT FK_A21ACF47EDF4B99B FOREIGN KEY (unidade_id) REFERENCES unidades (id)');
        $this->addSql('ALTER TABLE usuarios_metadata ADD CONSTRAINT FK_BD8E7838DB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atendimentos DROP FOREIGN KEY FK_29E906E776323123');
        $this->addSql('ALTER TABLE atendimentos_codificados DROP FOREIGN KEY FK_DDF47B2D76323123');
        $this->addSql('ALTER TABLE atendimentos_metadata DROP FOREIGN KEY FK_4F7723EB76323123');
        $this->addSql('ALTER TABLE historico_atendimentos DROP FOREIGN KEY FK_CBBDF95F76323123');
        $this->addSql('ALTER TABLE agendamentos DROP FOREIGN KEY FK_2D12EA4ADE734E51');
        $this->addSql('ALTER TABLE atendimentos DROP FOREIGN KEY FK_29E906E7DE734E51');
        $this->addSql('ALTER TABLE clientes_metadata DROP FOREIGN KEY FK_23B81DEEDE734E51');
        $this->addSql('ALTER TABLE historico_atendimentos DROP FOREIGN KEY FK_CBBDF95FDE734E51');
        $this->addSql('ALTER TABLE servicos_unidades DROP FOREIGN KEY FK_C50F70345A91C08D');
        $this->addSql('ALTER TABLE historico_atendimentos_codificados DROP FOREIGN KEY FK_111248C276323123');
        $this->addSql('ALTER TABLE historico_atendimentos_metadata DROP FOREIGN KEY FK_169630A576323123');
        $this->addSql('ALTER TABLE atendimentos DROP FOREIGN KEY FK_29E906E75D5A2101');
        $this->addSql('ALTER TABLE historico_atendimentos DROP FOREIGN KEY FK_CBBDF95F5D5A2101');
        $this->addSql('ALTER TABLE oauth_access_tokens DROP FOREIGN KEY FK_CA42527C19EB6921');
        $this->addSql('ALTER TABLE oauth_refresh_tokens DROP FOREIGN KEY FK_5AB68719EB6921');
        $this->addSql('ALTER TABLE paineis_servicos DROP FOREIGN KEY FK_D98415D3CF2713FD');
        $this->addSql('ALTER TABLE lotacoes DROP FOREIGN KEY FK_10E72C2F57291544');
        $this->addSql('ALTER TABLE atendimentos DROP FOREIGN KEY FK_29E906E7226EFC79');
        $this->addSql('ALTER TABLE historico_atendimentos DROP FOREIGN KEY FK_CBBDF95F226EFC79');
        $this->addSql('ALTER TABLE agendamentos DROP FOREIGN KEY FK_2D12EA4A82E14982');
        $this->addSql('ALTER TABLE atendimentos DROP FOREIGN KEY FK_29E906E782E14982');
        $this->addSql('ALTER TABLE atendimentos_codificados DROP FOREIGN KEY FK_DDF47B2D82E14982');
        $this->addSql('ALTER TABLE contador DROP FOREIGN KEY FK_E83EF8FA82E14982');
        $this->addSql('ALTER TABLE historico_atendimentos DROP FOREIGN KEY FK_CBBDF95F82E14982');
        $this->addSql('ALTER TABLE historico_atendimentos_codificados DROP FOREIGN KEY FK_111248C282E14982');
        $this->addSql('ALTER TABLE paineis_servicos DROP FOREIGN KEY FK_D98415D382E14982');
        $this->addSql('ALTER TABLE painel_senha DROP FOREIGN KEY FK_390182E682E14982');
        $this->addSql('ALTER TABLE servicos DROP FOREIGN KEY FK_89DD09E3F43A187E');
        $this->addSql('ALTER TABLE servicos_metadata DROP FOREIGN KEY FK_8E8BF0E482E14982');
        $this->addSql('ALTER TABLE servicos_unidades DROP FOREIGN KEY FK_C50F703482E14982');
        $this->addSql('ALTER TABLE servicos_usuarios DROP FOREIGN KEY FK_CF69430282E14982');
        $this->addSql('ALTER TABLE agendamentos DROP FOREIGN KEY FK_2D12EA4AEDF4B99B');
        $this->addSql('ALTER TABLE atendimentos DROP FOREIGN KEY FK_29E906E7EDF4B99B');
        $this->addSql('ALTER TABLE contador DROP FOREIGN KEY FK_E83EF8FAEDF4B99B');
        $this->addSql('ALTER TABLE historico_atendimentos DROP FOREIGN KEY FK_CBBDF95FEDF4B99B');
        $this->addSql('ALTER TABLE lotacoes DROP FOREIGN KEY FK_10E72C2FEDF4B99B');
        $this->addSql('ALTER TABLE paineis DROP FOREIGN KEY FK_CE58BF05EDF4B99B');
        $this->addSql('ALTER TABLE paineis_servicos DROP FOREIGN KEY FK_D98415D3EDF4B99B');
        $this->addSql('ALTER TABLE painel_senha DROP FOREIGN KEY FK_390182E6EDF4B99B');
        $this->addSql('ALTER TABLE servicos_unidades DROP FOREIGN KEY FK_C50F7034EDF4B99B');
        $this->addSql('ALTER TABLE servicos_usuarios DROP FOREIGN KEY FK_CF694302EDF4B99B');
        $this->addSql('ALTER TABLE unidades_metadata DROP FOREIGN KEY FK_A21ACF47EDF4B99B');
        $this->addSql('ALTER TABLE atendimentos DROP FOREIGN KEY FK_29E906E7DB38439E');
        $this->addSql('ALTER TABLE atendimentos DROP FOREIGN KEY FK_29E906E7875F1A79');
        $this->addSql('ALTER TABLE historico_atendimentos DROP FOREIGN KEY FK_CBBDF95FDB38439E');
        $this->addSql('ALTER TABLE historico_atendimentos DROP FOREIGN KEY FK_CBBDF95F875F1A79');
        $this->addSql('ALTER TABLE lotacoes DROP FOREIGN KEY FK_10E72C2FDB38439E');
        $this->addSql('ALTER TABLE oauth_access_tokens DROP FOREIGN KEY FK_CA42527CA76ED395');
        $this->addSql('ALTER TABLE oauth_refresh_tokens DROP FOREIGN KEY FK_5AB687A76ED395');
        $this->addSql('ALTER TABLE servicos_usuarios DROP FOREIGN KEY FK_CF694302DB38439E');
        $this->addSql('ALTER TABLE usuarios_metadata DROP FOREIGN KEY FK_BD8E7838DB38439E');
        $this->addSql('DROP TABLE agendamentos');
        $this->addSql('DROP TABLE atendimentos');
        $this->addSql('DROP TABLE atendimentos_codificados');
        $this->addSql('DROP TABLE atendimentos_metadata');
        $this->addSql('DROP TABLE clientes');
        $this->addSql('DROP TABLE clientes_metadata');
        $this->addSql('DROP TABLE contador');
        $this->addSql('DROP TABLE departamentos');
        $this->addSql('DROP TABLE historico_atendimentos');
        $this->addSql('DROP TABLE historico_atendimentos_codificados');
        $this->addSql('DROP TABLE historico_atendimentos_metadata');
        $this->addSql('DROP TABLE locais');
        $this->addSql('DROP TABLE lotacoes');
        $this->addSql('DROP TABLE metadata');
        $this->addSql('DROP TABLE oauth_access_tokens');
        $this->addSql('DROP TABLE oauth_clients');
        $this->addSql('DROP TABLE oauth_refresh_tokens');
        $this->addSql('DROP TABLE paineis');
        $this->addSql('DROP TABLE paineis_servicos');
        $this->addSql('DROP TABLE painel_senha');
        $this->addSql('DROP TABLE perfis');
        $this->addSql('DROP TABLE prioridades');
        $this->addSql('DROP TABLE servicos');
        $this->addSql('DROP TABLE servicos_metadata');
        $this->addSql('DROP TABLE servicos_unidades');
        $this->addSql('DROP TABLE servicos_usuarios');
        $this->addSql('DROP TABLE unidades');
        $this->addSql('DROP TABLE unidades_metadata');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('DROP TABLE usuarios_metadata');
    }
}
